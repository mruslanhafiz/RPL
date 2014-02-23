<?php

class TambahModel extends CI_Model{
    
	public function addPC($data){
            $this->db->insert('data_pc',$data);
        }
        
}

?>
