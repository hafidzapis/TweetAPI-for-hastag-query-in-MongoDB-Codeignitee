<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Md_tbl_ekstrakurikuler extends CI_Model {

    function getEkstrakurikulerAll() {
        $hasil = $this->db->query("SELECT * FROM tbl_ekstrakurikuler where status=1 order by ekstrakurikuler_id asc");
        if ($hasil->num_rows() > 0) {
            foreach ($hasil->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
    }

    function getEkstrakurikulerById($id) {
        $hasil = $this->db->get_where('tbl_ekstrakurikuler', array('ekstrakurikuler_id' => $id,'status' => 1))->result();
        $data = $hasil;
        return $data;
    }
    
    
    function addEkstrakurikuler($data){
         $this->db->insert('tbl_ekstrakurikuler', $data);        
    }
    
    function updateEkstrakurikuler($param,$data){
        $this->db->where('ekstrakurikuler_id', $param);
        $this->db->update('tbl_ekstrakurikuler', $data);         
    }
   

}