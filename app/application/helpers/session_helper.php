<?php 

	//----->
	function session_check(){
        session_start();
        
        if (empty($_SESSION)) {
            echo "vacio";
            
            $url = base_url() . "user/login?error=103&since=".$since."&sha1=".$sha1;
            header("Location: $url");

            }else{
               echo "lleno"; 
                }
                
                
        /*
        if(empty($_COOKIE['LTA_cookie_IDadvance'])){
            //echo "1c";
            }else{
                //echo "2c";
                }
        */
            	
		} 
	//----->
