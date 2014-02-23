<?php 

class UpdateController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function updatePC_validaton()
	{
		$masuk['lagi'] = $namaParse;
		$this->load->library('form_validation');

		$this->form_validation->set_rules('nama','nama_pc','required');
		$this->form_validation->set_rules('spek','spek','required');
		$this->form_validation->set_rules('pemilik','owner','required');

		if($this->form_validation->run() ){
                    $data = array(
                        'nama_pc' => $this->input->post('nama'),
                        'spek' => $this->input->post('spek'),
                        'owner' => $this->input->post('pemilik'),
                        'booked' => 'false',
                    );
                    $this->load->model('UpdateModel');
                    $this->UpdateModel->updatePC($data, $masuk);
                    redirect('HomeController/berhasil');
                }else{
                    echo"tidak lengkap bro";
                    
                    $this->load->view('updatePC');
                }
	}
}

?>