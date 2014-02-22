<?php 

class UpdateController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function updatePC_validaton()
	{
		$this->load->library('form_validaton');

		$this->form_validaton->set_rules('nama','nama_pc','required');
		$this->form_validaton->set_rules('spek','spek','required');
		$this->form_validaton->set_rules('pemilik','owner','required');

		if ($this->form_validaton->run() == false)
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