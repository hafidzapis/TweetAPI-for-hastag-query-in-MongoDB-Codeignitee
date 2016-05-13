<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Md_tbl_sarana extends CI_Model {

    function getSaranaAll() {
        $hasil = $this->db->query("SELECT * FROM tbl_sarana where status=1 order by sarana_id asc");
        if ($hasil->num_rows() > 0) {
            foreach ($hasil->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
    }

    function getSaranaById($id) {
        $hasil = $this->db->get_where('tbl_sarana', array('sarana_id' => $id,'status' => 1))->result();
        $data = $hasil;
        return $data;
    }
    
    
    function addSarana($data){
         $this->db->insert('tbl_sarana', $data);        
    }
    
    function updateSarana($param,$data){
        $this->db->where('sarana_id', $param);
        $this->db->update('tbl_sarana', $data);         
    }
   

}