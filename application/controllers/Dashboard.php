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

        $sha1  = random_string('sha1', 16);
        $data['sha1']            = $sha1;
        $data['page_title']      = "";
        $data['sub_page_title']  = 'Dashboard';
        $data['sub_page_title2'] = 'admin';
        $data['css']             = 'dashboard';
        $data['js']              = 'dashboard';

        $data['singout']        = INDEX_PAGE . "user/logout?error=102&since=".$_GET['since']."&sha1=".$sha1; 

        session_check();              
        
        $this->load->view('loop/header',$data);
            
            $this->load->view('loop/top',$data);
            
                $this->load->view('loop/admin-top',$data);

                    $this->load->view('dashboard/top',$data);    
                    $this->load->view('dashboard/chart',$data);
                    $this->load->view('dashboard/section',$data);

                $this->load->view('loop/admin-foot',$data);

        $this->load->view('loop/footer',$data);

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
