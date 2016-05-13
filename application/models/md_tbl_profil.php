<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Md_tbl_profil extends CI_Model {

    function getProfilAll() {
        $hasil = $this->db->query("SELECT * FROM tbl_profil where status=1 order by profil_id asc");
        if ($hasil->num_rows() > 0) {
            foreach ($hasil->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
    }

    function getProfilById($id) {
        $hasil = $this->db->get_where('tbl_profil', array('profil_id' => $id,'status' => 1))->result();
        $data = $hasil;
        return $data;
    }
    
    
    function addProfil($data){
         $this->db->insert('tbl_profil', $data);        
    }
    
    function updateProfil($param,$data){
        $this->db->where('profil_id', $param);
        $this->db->update('tbl_profil', $data);         
    }
   

}