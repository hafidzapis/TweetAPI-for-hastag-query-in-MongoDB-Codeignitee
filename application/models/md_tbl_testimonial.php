<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Md_tbl_testimonial extends CI_Model {

    function getTestimonialAll() {
        $hasil = $this->db->query("SELECT * FROM tbl_testimonial where status=1 order by testimonial_id asc");
        if ($hasil->num_rows() > 0) {
            foreach ($hasil->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
    }

    function getTestimonialById($id) {
        $hasil = $this->db->get_where('tbl_testimonial', array('testimonial_id' => $id,'status' => 1))->result();
        $data = $hasil;
        return $data;
    }
    
    
    function addTestimonial($data){
         $this->db->insert('tbl_testimonial', $data);        
    }
    
    function updateTestimonial($param,$data){
        $this->db->where('testimonial_id', $param);
        $this->db->update('tbl_testimonial', $data);         
    }
   

}