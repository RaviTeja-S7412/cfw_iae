<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';

class Semester extends REST_Controller {

	public function get_semesters_get(){
		
		$data = $this->db->get_where("tbl_semesters",["deleted"=>0])->result();
		$this->response(["status"=>200,"all_semesters"=>$data], REST_Controller::HTTP_OK);
		
	}	

	public function create_post()
	{
		
		$id = $this->input->post("id");	
		$semester_name = $this->input->post("semester_name");
		$semester_number = $this->input->post("semester_number");
		
		if($semester_name == ""){
			$this->response(["status"=>400,"msg"=>"Semester Name is Required"], REST_Controller::HTTP_OK);
			exit();
		}
		
		if($id){
			$this->db->where(["id !="=>$id]);
		}
		$pChk = $this->db->get_where("tbl_semesters",["semester_name"=>$semester_name])->num_rows();
		if($pChk > 0){
			$this->response(["status"=>400,"msg"=>"Semester Name Already Exists"], REST_Controller::HTTP_OK);
			exit();
		}
		
		
		if($id){
			$status = "Updated";
			$d = $this->db->where("id",$id)->update("tbl_semesters",["semester_name"=>$semester_name, "semester_number"=>$semester_number]);
		}else{
			$status = "Added";
			$d = $this->db->insert("tbl_semesters",["semester_name"=>$semester_name, "semester_number"=>$semester_number]);
		}
		
		if($d){
			$this->response(["status"=>200,"msg"=>"Semester Successfully $status"], REST_Controller::HTTP_OK);
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
		
		$d = $this->db->where("id",$id)->delete("tbl_semesters");
		
		if($d){
			$this->response(["status"=>200,"msg"=>"Semester Successfully Deleted"], REST_Controller::HTTP_OK);
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
		
		$d = $this->db->where("id",$id)->update("tbl_semesters",["status"=>$status]);
		
		if($d){
			if($status == 1){
				echo json_encode(["status"=>true,"msg"=>"Semester Successfully Enabled"]);
			}else{
				echo json_encode(["status"=>true,"msg"=>"Semester Successfully Disabled"]);
			}
		}else{
			echo json_encode(["status"=>false,"msg"=>"Error Occured Please Try Again"]);
		}
		
	}
	
	
}
