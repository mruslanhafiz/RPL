<?php

class HomeController extends CI_Controller{

	public function __construct() 
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('index');
	}

	public function main()
	{
             if($this->session->userdata('is_logged_in')){
                 $this->load->view('main');
             }else{
                 redirect('HomeController/restricted');
             }
		
	}
        
      
        public function restricted(){
            $this->load->view('restricted');
        }
        
      

	public function bookings()
	{
		//$this->load->view('bookings');
            redirect('BookingController/booking/'.$result);
	}

	public function login()
	{
		$this->load->view('login');
	}

	public function cekLogin()
	{
		
	}

	public function tambahPC()
	{
		$this->load->view('tambah_PC');
	}

	public function updatePC()
	{
		$this->load->view('update_PC');
	}

    public function method($a = 'jkl', $z = 'nnnn')
    {
        echo $a . $z;
    }

    public function testing()
    {
    	//$this->load->helper('User');
    	echo "hola";
    }

    
}
?>
