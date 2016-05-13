<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Md_tbl_user extends CI_Model {

    function getUserAll() {
        $hasil = $this->db->query("SELECT * FROM tbl_user where status=1 order by nama asc");
        if ($hasil->num_rows() > 0) {
            foreach ($hasil->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
    }
    
    function checkLogin($table,$uname,$pwd) {
        $hasil = $this->db->get_where($table, array('username' => $uname,'password' => $pwd,'status' => 1))->result();
        $data = $hasil;
        return $data;
    }

    function getUserById($id) {
        $hasil = $this->db->get_where('tbl_user', array('user_id' => $id,'status' => 1))->result();
        $data = $hasil;
        return $data;
    }
    
    function addUser($data){
         $this->db->insert('tbl_user', $data);        
    }
    
    function updateUser($param,$data){
        $this->db->where('user_id', $param);
        $this->db->update('tbl_user', $data);         
    }
   

}