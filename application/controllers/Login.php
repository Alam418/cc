<?php

    class Login extends CI_Controller{

        function __construct(){
            parent::__construct();
            $this->load->model('Login_model');
        }

        function index(){
            $this->load->view('login_view');
        }

        function auth(){
            $email    = $this->input->post('email',TRUE);
            $password = md5($this->input->post('password',TRUE));
            $validate = $this->Login_model->validate($email,$password);
            if($validate->num_rows() > 0){
                $data  = $validate->row_array();
                $image = $data['user_image'];
                $name  = $data['user_name'];
                $email = $data['user_email'];
                $level = $data['user_level'];
                $sesdata = array(
                    'img'       => $image,
                    'username'  => $name,
                    'email'     => $email,
                    'level'     => $level,
                    'logged_in' => TRUE
                );
                $this->session->set_userdata($sesdata);
                // access login for admin
                if($level === '1'){
                    redirect('page');
         
                // access login for staff
                }elseif($level === '2'){
                    redirect('page/user');
         
                // access login for author
                }else{
                    redirect('page/author');
                }
            }else{
                echo $this->session->set_flashdata('msg','Username or Password is Wrong');
                redirect('login');
            }
          }

        function logout(){
            $this->session->sess_destroy();
            redirect('login');
        }

    }