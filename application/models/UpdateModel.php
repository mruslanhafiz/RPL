<?php

class UpdateModel extends CI_Model{
    
	public function updatePC($data, $where){
			$this->db->where('nama_pc', $where);
            $this->db->update('data_pc', $data);
        }
        
}

?>
