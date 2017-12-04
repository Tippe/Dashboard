<?php
    class Auth extends ci_controller{

        public function __construct(){
            parent::__construct();
            $this->load->helper('url_helper');
            $this->load->helper('form');
            $this->load->library('form_validation');
        }

        public function login(){
            $data['title'] = 'Login';

            $this->form_validation->set_rules('username', 'username', 'required');
            $this->form_validation->set_rules('password', 'passsword', 'required');
            
            if ($this->form_validation->run() === TRUE) {
                $this->load->model('auth_model');
                $this->auth_model->login();
            } else {
                $this->load->view('templates/header');
                $this->load->view('auth/login');
                $this->load->view('templates/footer');
            }
        }

        public function register(){
            $data['title'] = 'register';

            $this->form_validation->set_rules('username', 'Username', 'required|is_unique[users.username]');
            $this->form_validation->set_message('is_unique', '%s is taken.');
            $this->form_validation->set_rules('password', 'password', 'required|min_length[8]');
            $this->form_validation->set_rules('password2', 'confirm password', 'required|min_length[8]|matches[password]');

            if ($this->form_validation->run() === FALSE) {
                $this->load->view('templates/header');
                $this->load->view('auth/register', $data);
                $this->load->view('templates/footer');
            } else {
                $this->load->model('auth_model');
                $this->auth_model->register();
                $this->session->set_flashdata('succeed', '<div class="alert alert-success text-center">User Account has been Created.</div>');
                redirect("auth/register", "refresh");
            }
        }

        public function logout(){
            session_destroy();
            redirect('auth/login');
        }
    }
?>