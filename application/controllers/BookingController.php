<?php
class BookingController extends CI_Controller{

	public function __construct() {
		parent::__construct();
	}

	public function booking_validation(){
		$this->load->library('form_validation');
                
                $this->form_validation->set_rules('nama','Nama','required');
                $this->form_validation->set_rules('nrp','NRP','required');
                $this->form_validation->set_rules('hp','HP','required');
                $this->form_validation->set_rules('date','Date','required');
                $this->form_validation->set_rules('email','Email','required|trim|valid_email');
                
                if($this->form_validation->run() ){
                    $data = array(
                        'nama_user' => $this->input->post('nama'),
                        'hp_user' => $this->input->post('hp'),
                        'email_user' => $this->input->post('date'),
                        'tanggal_pinjam' => $this->input->post('email'),
                        'nrp' => $this->input->post('nrp'),
                    );
                    $this->load->model('BookingModel');
                    $this->BookingModel->addBookings($data);
                    redirect('HomeController/main');
                }else{
                    echo"you shall not pass";
                    
                    $this->load->view('bookings');
                }
        }
        
     
        

 }
?>
