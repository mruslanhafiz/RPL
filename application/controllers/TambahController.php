<?php
class TambahController extends CI_Controller{

	public function __construct() {
		parent::__construct();
	}

	public function tambah_validation(){
		$this->load->library('form_validation');
                
                $this->form_validation->set_rules('nama','Nama','required');
                $this->form_validation->set_rules('spek','Spek','required');
                $this->form_validation->set_rules('pemilik','owner','required');
                
                if($this->form_validation->run() ){
                    $data = array(
                        'nama_pc' => $this->input->post('nama'),
                        'spek' => $this->input->post('spek'),
                        'owner' => $this->input->post('pemilik'),
                        'booked' => 'false',
                    );
                    $this->load->model('TambahModel');
                    $this->TambahModel->addPC($data);
                    redirect('HomeController/berhasil');
                }else{
                    echo"tidak lengkap bro";
                    
                    $this->load->view('tambahPC');
                }
        }
        
     
        

 }
?>
