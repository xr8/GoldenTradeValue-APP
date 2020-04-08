<?php 

	//----->
	function session_check($since,$sha1){
    
        session_start();
        
        if (empty($_SESSION)) {
            
            $url = base_url() . "user/login?error=102&since=".$since."&sha1=".$sha1;
            header("Location: $url");

            }else{}
                
                
        /*
        if(empty($_COOKIE['LTA_cookie_IDadvance'])){
            //echo "1c";
            }else{
                //echo "2c";
                }
        */
            	
		} 
	//----->


/*

            $url = site_url() . "?error=102";
            header("Location: $url");

            if(empty($_COOKIE['LTA_cookie_IDadvance'])){

                }else{

                    $url = site_url('inicio');
                    header("Location: $url");
                    exit();
                    
                    }
*/