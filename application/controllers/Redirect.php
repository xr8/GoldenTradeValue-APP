<?php
class Redirect extends CI_Controller {
//----->

    //--->
    public function __construct(){
        parent::__construct();
        // Your own constructor code
        $this->load->database();
        $this->default= $this->load->database('default', TRUE);
        $this->load->model('log/Querys');
        }
    //--->

    //--->
    public function index(){       
        session_start();      
        
        if ($_SESSION['Permissions'] == "admin") {
            $url = INDEX_PAGE . "dashboard/admin/?sucess=101&since=".$since."&sha1=".$sha1;
            header("Location: $url");
            }else {
                $url = INDEX_PAGE . "dashboard/vendedor/?sucess=101&since=".$since."&sha1=".$sha1;
                header("Location: $url");
                }                
        

        }
    //--->

//----->
}
