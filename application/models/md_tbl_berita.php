<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Md_tbl_berita extends CI_Model {

    function getBeritaAll() {
        $hasil = $this->db->query("SELECT * FROM tbl_berita where status=1 order by tanggal_posting asc");
        if ($hasil->num_rows() > 0) {
            foreach ($hasil->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
    }
    

    function getBeritaById($id) {
        $hasil = $this->db->get_where('tbl_berita', array('berita_id' => $id,'status' => 1))->result();
        $data = $hasil;
        return $data;
    }
    
    
    function addBerita($data){
         $this->db->insert('tbl_berita', $data);        
    }
    
    function updateBerita($param,$data){
        $this->db->where('berita_id', $param);
        $this->db->update('tbl_berita', $data);         
    }
   

}