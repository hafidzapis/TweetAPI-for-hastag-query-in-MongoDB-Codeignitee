<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class DefaultController extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        
        $this->load->library('mongo_db');
        $this->load->helper(array('form', 'url'));
       
        
        /* cache control */
        $this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
        $this->output->set_header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
        
    }
    
    public function index() {
        $page_data['page_name'] = 'home';
        $page_data['page_title'] = 'Home';
        $this->load->view('index', $page_data);

        
    }
    
    public function tes(){
        $collection = $this->mongo_db->db->selectCollection('testcollection');
       	
       	$page_data['result']=$collection->find();
        $page_data['page_name'] = 'tes';
        $page_data['page_title'] = 'tes';
              
        $this->load->view('index', $page_data);
    }
    
    public function details(){
        $_id = $_GET['id_st'];
        
        $collection = $this->mongo_db->db->selectCollection('testcollection');
       
       	$page_data['result']=$collection->find(array ('_id' => new MongoId($_id)));
        $page_data['page_name'] = 'details';
        $page_data['page_title'] = 'details';
        
       
        $this->load->view('index', $page_data);
    }
    
    function create()
    {
        $collection = $this->mongo_db->db->selectCollection('testcollection');
        $post_id = new MongoId();
        $hashtag = $this->input->post('hashtag');
        $category = $this->input->post('category');
        $data = array('_id'=>  $post_id , 'hashtag' => $hashtag,'category' => $category,'detail' => array());
        $insertQuery = $collection->insert($data);
        
        $count = $_POST['count'];
        for($i=1;$i<$count;$i++){
			$user_name = $_POST['user_name'.$i];
			$user_profile_image_url = $_POST['user_profile_image_url'.$i];
			$user_text = $_POST['user_text'.$i];
			$user_retweet_count = $_POST['user_retweet_count'.$i];
			$user_location = $_POST['user_location'.$i];
			$user_created_at = $_POST['user_created_at'.$i];
			
			$collection->update(array('_id' => $post_id),array('$push' => array('detail'=>
				array (
					  'user_name'=>$user_name,
					  'user_profile_image_url' =>$user_profile_image_url,
					  'user_text' => $user_text,
					  'user_retweet_count' => $user_retweet_count,
					  'user_location' => $user_location,
					  'user_created_at' => $user_created_at
					)
				)));
        }
        
        redirect(base_url() . 'defaultController/tes', 'refresh');
    }
    
    public function result() {
        $page_data['page_name'] = 'result';
        $page_data['page_title'] = 'result';
        $this->load->view('index', $page_data);

    
        
    }
    
   
    
}
?>
