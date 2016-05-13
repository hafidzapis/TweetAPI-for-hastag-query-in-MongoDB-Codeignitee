<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Md_tbl_galeri extends CI_Model {

    function getGaleriAll() {
        $hasil = $this->db->query("SELECT * FROM tbl_galeri where status=1 order by galeri_id asc");
        if ($hasil->num_rows() > 0) {
            foreach ($hasil->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
    }

    function getGaleriById($id) {
        $hasil = $this->db->get_where('tbl_galeri', array('galeri_id' => $id,'status' => 1))->result();
        $data = $hasil;
        return $data;
    }
    
    
    function addGaleri($data){
         $this->db->insert('tbl_galeri', $data);        
    }
    
    function updateGaleri($param,$data){
        $this->db->where('galeri_id', $param);
        $this->db->update('tbl_galeri', $data);         
    }
   

}