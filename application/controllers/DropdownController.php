<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class DropdownController extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
        

    }
    public function index()
    {
    	$this->load->model('DropdownModel');

    	//$data['title'] = 'Dropdown';
        $data['groups'] = $this->DropdownModel->getAllGroups();
        $this->load->view('HomeController/main', $data);
        /*if($this->DropdownModel->getAllGroups())
        {
        	$this->load->view('HomeController/login')
        }
        else
        {
        	$this->load->view('HomeController/index')
        }*/
    }
}

?>