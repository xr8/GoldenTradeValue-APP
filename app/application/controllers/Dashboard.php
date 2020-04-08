<?php
class Dashboard extends CI_Controller {
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
        echo "ssx";
        session_check();    
        echo "all";
        print_r($_SESSION);
        }
    //--->

    //--->
    public function admin(){     
        echo "ssx";
        session_check();              
        echo "admin";
        print_r($_SESSION);
        }
    //--->

    //--->
    public function vendedor(){    
        echo "ssx";
        session_check();               
        echo "vendedor";
        print_r($_SESSION);
        }
    //--->

//----->
}
