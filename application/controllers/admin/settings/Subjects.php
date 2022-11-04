<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subjects extends CI_Controller {
	
	public function __construct(){
		
		parent::__construct();
		if(!$this->session->userdata('adminid')){
        	redirect('admin/login');
        }
		
	}

	public function index($id=""){
		
		$data["pdata"] = $this->db->get_where("tbl_subjects",["id"=>$id])->row();
		$this->load->view("admin/subjects",$data);
		
	}
	
}
