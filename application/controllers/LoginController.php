<?php 

class LoginController extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
	}

	public function login(){
            $this->load->view('login');
	}
        
        public function loginValidation(){
            $this->form_validation->set_rules('username','Username','required|valid_username');
            $this->form_validation->set_rules('password','Password','required|callback_verifyUser');
            
            if($this->form_validation->run()==false){
                $this->load->view('login');
            }else{
                $data = array(
                  'username' => $this->input->post('username'),
                  'is_logged_in' => 1
                );
                $this->session->set_userdata($data);
                redirect('HomeController/index');
            }
            
        }
        
        public function verifyUser(){
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            
            $this->load->model('LoginModel');
            if($this->LoginModel->login($username,$password)){
                return true;
            }else{
                $this->form_validation->set_message('verifyUser','incorrect Username or Password, please try again');
                return false;
            }
        }
	
	
}

?>