<?php 

class UpdateController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function updatePC_validaton()
	{
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');

		$this->form_validation->set_rules('nama','nama_pc','required');
		$this->form_validation->set_rules('spek','spek','required');
		$this->form_validation->set_rules('pemilik','owner','required');

		if ($this->form_validation->run() == false)
		{
			echo "gagal bro";
		}
		else
		{
			echo "sukses!";
		}
	}
}

?>