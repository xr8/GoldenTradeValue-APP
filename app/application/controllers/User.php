<?php
    class User extends CI_Controller {
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

            $sha1  = random_string('sha1', 16);
            $since = "user";

            $data['sha1']           = $sha1;
            $data['page_title']     = "";
            $data['sub_page_title'] = 'Reg&iacute;strate';
            $data['css']            = 'login';
            $data['js']             = 'login';

            session_check($since,$sha1);
            $data['user'] = $_SESSION;

            $this->load->view('login/user',$data);
            
            $logout = base_url() . "user/logout?error=102&since=".$since."&sha1=".$sha1;
            echo "login ok";
            echo "<a href=".$logout.">logout</a>";
            
            }
        //--->

        ### LOGIN ###
            //--->
            public function login(){       

                $sha1  = random_string('sha1', 16);
                $data['sha1']           = $sha1;
                $data['page_title']     = "";
                $data['sub_page_title'] = 'Reg&iacute;strate';
                $data['css']            = 'login';
                $data['js']             = 'login';

                $this->load->view('login/login',$data);

                }
            //--->
            //--->
            public function logout(){       

                $sha1  = random_string('sha1', 16);
                $data['sha1']           = $sha1;
                $data['page_title']     = "";
                $data['sub_page_title'] = 'Reg&iacute;strate';
                $data['css']            = 'login';
                $data['js']             = 'login';

                $this->load->view('login/logout',$data);

                session_start();
                session_destroy();

                $url = site_url() . "/user/login?error=102&since=".$since."&sha1=".$sha1;
                header("Location: $url");


                }
            //--->
            //--->
            public function check(){       

                $sha1  = random_string('sha1', 16);
                $data['sha1']           = $sha1;
                $data['page_title']     = "";
                $data['sub_page_title'] = 'Reg&iacute;strate';
                $data['css']            = 'login';
                $data['js']             = 'login';

                //$this->load->view('login/check',$data);
                
                //email
                $LSf47vWou0wNVEsEuT1i = $_POST['LSf47vWou0wNVEsEuT1i'];
                //passwword
                $PHt0gjv8TbmLTQCWVB81 = $_POST['PHt0gjv8TbmLTQCWVB81'];
                //remember
                $Mbv2GRxrFw8vMe1P5Pgo = $_POST['Mbv2GRxrFw8vMe1P5Pgo'];

                empty($_POST);
                empty($_GET);

                    if (!empty($Mbv2GRxrFw8vMe1P5Pgo)) { // <= false
                        // No está vacía (true)
                        $rememberme = True;
                        } else {
                            // Está vacía (false)
                            $rememberme = False;
                            }
                
                        $data = $this->Querys->checkDatauser($LSf47vWou0wNVEsEuT1i,$password,$rememberme);
                        //$this->output->set_content_type('application/json')->set_output(json_encode($data));  
                        
                        //----->
                        if ($data[0]->email == $LSf47vWou0wNVEsEuT1i and password_verify($PHt0gjv8TbmLTQCWVB81,$data[0]->password)) {
                            /*
                            [
                                {
                                    id: "1",
                                    id_advance: "3w3rwerwersf3ewrqesr",
                                    time: "2019-08-26 17:37:55",
                                    user: "admin",
                                    permissions: "admin",
                                    email: "biohizard@gmail.com",
                                    password: "$2y$10$e6oj50rXVZG3kzDAihTRLuJub4emcw4akJtHrkPShmBmCJbsDPmDm",
                                    firstname: "jorge",
                                    secondname: "garibaldo",
                                    Message: "Datasuccessful"
                                }
                            ]
                            */

                            $this->output->set_content_type('application/json')->set_output(json_encode($data));  

                            //SESSION
                            session_start();
                                $_SESSION['ID']            = $data[0]->id;
                                $_SESSION['IDadvance']     = $data[0]->id_advance;
                                $_SESSION['User']          = $data[0]->user;
                                $_SESSION['Permissions']   = $data[0]->permissions;
                                $_SESSION['Email']         = $data[0]->email;
                                $_SESSION['Firstname']     = $data[0]->firstname;
                                $_SESSION['Secondname']    = $data[0]->secondname;
                                $_SESSION['Message']       = $data[0]->Message;
                                $_SESSION['Time']          = date("Y-m-d H:m:s");
                                
                                $url = site_url() . "/redirect";
                                header("Location: $url");
                                        
                            }else{
                                
                                $url = site_url() . "/user/login?error=102&since=".$since."&sha1=".$sha1;
                                header("Location: $url");

                                }

                        //----->

                }
            //--->
        ### LOGIN ###            

    //----->
    }
