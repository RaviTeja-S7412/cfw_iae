<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';

class SubCategory extends REST_Controller {

	public function get_subcategories_get(){
		
		$data = $this->db->get_where("tbl_subject_category",["deleted"=>0])->result();
		$this->response(["status"=>200,"all_subcategories"=>$data], REST_Controller::HTTP_OK);
		
	}
	
	public function create_post()
	{
		
		$id = $this->input->post("id");	
		$category_name = $this->input->post("category_name");
		
		if($category_name == ""){
			$this->response(["status"=>400,"msg"=>"Subject Category Name is Required"], REST_Controller::HTTP_OK);
			exit();
		}
		
		if($id){
			$this->db->where(["id !="=>$id]);
		}
		$pChk = $this->db->get_where("tbl_subject_category",["category_name"=>$category_name])->num_rows();
		if($pChk > 0){
			$this->response(["status"=>400,"msg"=>"Subject Category Name Already Exists"], REST_Controller::HTTP_OK);
			exit();
		}
		
		
		if($id){
			$status = "Updated";
			$d = $this->db->where("id",$id)->update("tbl_subject_category",["category_name"=>$category_name]);
		}else{
			$status = "Added";
			$d = $this->db->insert("tbl_subject_category",["category_name"=>$category_name]);
		}
		
		if($d){
			$this->response(["status"=>200,"msg"=>"Subject Category Successfully $status"], REST_Controller::HTTP_OK);
		}else{
			$this->response(["status"=>400,"msg"=>"Error Occured Please Try Again"], REST_Controller::HTTP_OK);
		}
		
	}
	
	public function delete_post()
	{
		
		$id = $this->input->post("id");
		
		if(!$id){
			echo json_encode(["status"=>false,"msg"=>"ID is Required"]);
			exit();
		}
		
		$d = $this->db->where("id",$id)->delete("tbl_subject_category");
		
		if($d){
			$this->response(["status"=>200,"msg"=>"Subject Category Successfully Deleted"], REST_Controller::HTTP_OK);
		}else{
			$this->response(["status"=>400,"msg"=>"Error Occured Please Try Again"], REST_Controller::HTTP_OK);
		}
		
	}
	
	public function updateStatus()
	{
		
		$id = $this->input->post("id");
		$status = $this->input->post("status");
		
		if(!$id){
			echo json_encode(["status"=>false,"msg"=>"ID is Required"]);
			exit();
		}
		if($status == ""){
			echo json_encode(["status"=>false,"msg"=>"Status is Required"]);
			exit();
		}
		
		$d = $this->db->where("id",$id)->update("tbl_subject_category",["status"=>$status]);
		
		if($d){
			if($status == 1){
				echo json_encode(["status"=>true,"msg"=>"Category Successfully Enabled"]);
			}else{
				echo json_encode(["status"=>true,"msg"=>"Category Successfully Disabled"]);
			}
		}else{
			echo json_encode(["status"=>false,"msg"=>"Error Occured Please Try Again"]);
		}
		
	}
	
	
}
