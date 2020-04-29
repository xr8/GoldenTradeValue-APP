<?php
class Usuarios extends CI_Controller {
//----->

    //--->
    public function __construct(){
        parent::__construct();
        // Your own constructor code
        $this->load->database();
        $this->default= $this->load->database('default', TRUE);

        }
    //--->

    //--->
    public function index(){  
        $sha1  = random_string('sha1', 16);
        $data['sha1']           = $sha1;
        
        $data['page_title']     = "";
        $data['sub_page_title'] = 'Reg&iacute;strate';
        $data['css']            = 'usuarios';
        $data['js']             = 'usuarios';

        $data['singout']        = INDEX_PAGE . "user/logout?error=102&since=".$_GET['since']."&sha1=".$sha1; 

        session_check();              

        $this->load->view('loop/header',$data);
            
            $this->load->view('loop/top',$data);
            
                $this->load->view('loop/admin-top',$data);
                    
                $this->load->view('usuarios/top',$data);    
                $this->load->view('usuarios/admin',$data);   

                $this->load->view('loop/admin-foot',$data);

        $this->load->view('loop/footer',$data);

        }
    //--->


//----->
}
