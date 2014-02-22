<?php

class BookingModel extends CI_Model{
    
	public function addBookings($data){
            $this->db->insert('user',$data);
        }
        
        public function updateBookings($data,$id){
            $this->db->data('id',$id);
            $this->db->update('user',$data);
        }
}

?>
