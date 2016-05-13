<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Md_tbl_acara extends CI_Model {

    function getAcaraAll() {
        $hasil = $this->db->query("SELECT * FROM tbl_acara where status=1 order by acara_id asc");
        if ($hasil->num_rows() > 0) {
            foreach ($hasil->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
    }

    function getAcaraById($id) {
        $hasil = $this->db->get_where('tbl_acara', array('acara_id' => $id,'status' => 1))->result();
        $data = $hasil;
        return $data;
    }
    
    
    function addAcara($data){
         $this->db->insert('tbl_acara', $data);        
    }
    
    function updateAcara($param,$data){
        $this->db->where('acara_id', $param);
        $this->db->update('tbl_acara', $data);         
    }
   

}