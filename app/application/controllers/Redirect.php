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

        header("Location:  https://www.ticketopolis.com/lomejordelrockenespanol/");

        }
    //--->

//----->
}
