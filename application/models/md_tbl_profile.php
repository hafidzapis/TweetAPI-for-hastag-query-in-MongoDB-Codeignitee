<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Md_tbl_profile extends CI_Model {

    function getProfileAll() {
        $hasil = $this->db->query("SELECT * FROM tbl_profile where status=1 asc");
        if ($hasil->num_rows() > 0) {
            foreach ($hasil->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
    }

    function getProfileById($id) {
        $hasil = $this->db->get_where('tbl_profile', array('profile_id' => $id,'status' => 1))->result();
        $data = $hasil;
        return $data;
    }
    
    
    function addProfile($data){
         $this->db->insert('tbl_profile', $data);        
    }
    
    function updateBerita($param,$data){
        $this->db->where('profile_id', $param);
        $this->db->update('tbl_profile', $data);         
    }
   

}