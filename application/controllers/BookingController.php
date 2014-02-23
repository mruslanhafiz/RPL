<?php
class BookingController extends CI_Controller{

	public function __construct() {
		parent::__construct();
	}
        
        public function booking(){
            $this->load->view('bookings');
           // echo $pcName;
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
                   // $id = array'id_pc' => $this->input->post('id_pc');
                    $this->load->model('BookingModel');
                    $this->BookingModel->addBookings($data);
                    redirect('HomeController/main');
                }else{
                    echo"<div class='alert alert-warning alert-dismissable'>
                    <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                    <strong>Warning!</strong> data belum lengkap.
                  </div>";
                    
                    $this->load->view('bookings');
                }
        }
        
     
        

 }
?>
