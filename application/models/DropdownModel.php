<?php

class DropdownModel extends CI_Model{

    public function getAllGroups()
    {
        $data = array();
        //$query = $this->db->query('select nama_pc from data_pc where booked=0');
        //return $query->result();
        //echo 'Total Results: ' . $query->num_rows();
        $this->db->select('nama_pc');
        $this->db->from('data_pc');
        //$this->db->where('booked','0');
    
        //return $query->result_array();
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
        foreach ($query->result() as $crow) {
            $data[] = $crow;
        }
        }
        return $data;
        /*if($query->num_rows() == 1)
        {
            return true;
        }
        else
        {
            return false;
        }*/
    }      
}

?>
