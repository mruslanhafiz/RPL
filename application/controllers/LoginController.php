<?php 

class LoginController extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
	}

	public function login(){
            $this->session->sess_destroy();
            $this->load->view('login');
	}
        
        public function main()
	{
             if($this->session->userdata('is_logged_in')){
                 $this->load->view('main');
             }else{
                 redirect('HomeController/restricted');
             }
		
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
                redirect('HomeController/main');
            }
            
        }
        
        public function verifyUser(){
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            
            $this->load->model('LoginModel');
            if($this->LoginModel->login($username,$password)){
                return true;
            }else{
                $this->form_validation->set_message('verifyUser', '<div class="alert alert-warning alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong>Warning!</strong> username atau password salah.</div>');
                return false;
            }
        }
	
          public function logout(){
            $this->session->sess_destroy();
            redirect('LoginController/login');
        }
	
}

?>