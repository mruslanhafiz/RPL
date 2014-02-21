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
		$this->load->view('main');
	}

	public function bookings()
	{
		$this->load->view('bookings');
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
