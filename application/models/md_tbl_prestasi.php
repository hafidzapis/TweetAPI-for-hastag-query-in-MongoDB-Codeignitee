<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Md_tbl_prestasi extends CI_Model {

    function getPrestasiAll() {
        $hasil = $this->db->query("SELECT * FROM tbl_prestasi where status=1 order by prestasi_id asc");
        if ($hasil->num_rows() > 0) {
            foreach ($hasil->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
    }

    function getPrestasiById($id) {
        $hasil = $this->db->get_where('tbl_prestasi', array('prestasi_id' => $id,'status' => 1))->result();
        $data = $hasil;
        return $data;
    }
    
    
    function addPrestasi($data){
         $this->db->insert('tbl_prestasi', $data);        
    }
    
    function updatePrestasi($param,$data){
        $this->db->where('prestasi_id', $param);
        $this->db->update('tbl_prestasi', $data);         
    }
   

}