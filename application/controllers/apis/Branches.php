<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';

class Branches extends REST_Controller {

	public function get_courses_get(){
		
		$data = $this->db->get_where("tbl_courses",["deleted"=>0])->result();
		$this->response(["status"=>200,"all_courses"=>$data], REST_Controller::HTTP_OK);
		
	}
	
	public function create_post()
	{
		
		$id = $this->input->post("id");	
		$branch_name = $this->input->post("branch_name");
		
		if($branch_name == ""){
			$this->response(["status"=>400,"msg"=>"Branch Name is Required"], REST_Controller::HTTP_OK);
			exit();
		}
		
		if($id){
			$this->db->where(["id !="=>$id]);
		}
		$cChk = $this->db->get_where("tbl_branches",["branch_name"=>$branch_name])->num_rows();
		if($cChk > 0){
			$this->response(["status"=>400,"msg"=>"Branch Name Already Exists"], REST_Controller::HTTP_OK);
			exit();
		}
		
		$data = [
			"branch_name" => $branch_name
		];
		
		if($id){
			$status = "Updated";
			$d = $this->db->where("id",$id)->update("tbl_branches",$data);
		}else{
			$status = "Added";
			$d = $this->db->insert("tbl_branches",$data);
		}
		
		if($d){
			$this->response(["status"=>200,"msg"=>"Branch Successfully $status"], REST_Controller::HTTP_OK);
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
		
		$d = $this->db->where("id",$id)->delete("tbl_branches");
		
		if($d){
			$this->response(["status"=>200,"msg"=>"Branch Successfully Deleted"], REST_Controller::HTTP_OK);
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
		
		$d = $this->db->where("id",$id)->update("tbl_branches",["status"=>$status]);
		
		if($d){
			if($status == 1){
				echo json_encode(["status"=>true,"msg"=>"Branch Successfully Enabled"]);
			}else{
				echo json_encode(["status"=>true,"msg"=>"Branch Successfully Disabled"]);
			}
		}else{
			echo json_encode(["status"=>false,"msg"=>"Error Occured Please Try Again"]);
		}
		
	}
}
