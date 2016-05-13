<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Md_tbl_kontak extends CI_Model {

    function getKontakAll() {
        $hasil = $this->db->query("SELECT * FROM tbl_kontak where status=1 order by kontak_id asc");
        if ($hasil->num_rows() > 0) {
            foreach ($hasil->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
    }

    function getKontakById($id) {
        $hasil = $this->db->get_where('tbl_kontak', array('kontak_id' => $id,'status' => 1))->result();
        $data = $hasil;
        return $data;
    }
    
    
    function addKontak($data){
         $this->db->insert('tbl_kontak', $data);        
    }
    
    function updateKontak($param,$data){
        $this->db->where('kontak_id', $param);
        $this->db->update('tbl_kontak', $data);         
    }
   

}