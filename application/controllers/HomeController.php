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
             if($this->session->userdata('is_logged_in'))
             {
             	$this->load->model('DropdownModel');
             	$data['title']= 'Dropdown';
             	$data['groups'] = $this->DropdownModel->getAllGroups();
                $this->load->view('main', $data);
             }else{
                 redirect('HomeController/restricted');
             }
		
	}
       
    public function berhasil()
    {
    	$this->load->view('berhasil');
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
		$selected_value = $this->input->post('dropdown');
		$view_data['search'] = $selected_value;
		//echo "a : " . $selected_value;
		$this->load->view('update_PC', $view_data);
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
