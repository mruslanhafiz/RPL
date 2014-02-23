<?php

class BookingModel extends CI_Model{
    
	public function addBookings($data,$id){
            $this->db->insert('user',$data);
        }
            /*
            $this->db->where('id',$id);
            $data2 = array(
                        'booked' => $this->input->post(1),
                        'booked_by'=> $this->inpu->post('')
                    );
            $this->db->update('user',$data2);
        }*/
}

?>
