<?php

class HomeController extends CI_Controller{

	public function __construct() {
		parent::__construct();
	}

	public function index(){
		$this->load->view('main');

	}
    public function method($a = 'jkl', $z = 'nnnn'){
        echo $a . $z;
    }
}
?>
