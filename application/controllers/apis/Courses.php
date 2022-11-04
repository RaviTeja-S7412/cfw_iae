<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';

class Courses extends REST_Controller {

	public function get_courses_get(){
		
		$data = $this->db->get_where("tbl_courses",["deleted"=>0])->result();
		$this->response(["status"=>200,"all_courses"=>$data], REST_Controller::HTTP_OK);
		
	}
	
	public function create_post()
	{
		
		$id = $this->input->post("id");	
		$course_name = $this->input->post("course_name");
		$course_short_code = $this->input->post("course_short_code");
		$min_credits = $this->input->post("min_credits");
		$max_credits = $this->input->post("max_credits");
		
		if($course_name == ""){
			$this->response(["status"=>400,"msg"=>"Course Name is Required"], REST_Controller::HTTP_OK);
			exit();
		}
		if($min_credits == ""){
			$this->response(["status"=>400,"msg"=>"Minimum Credits is Required"], REST_Controller::HTTP_OK);
			exit();
		}
		if($max_credits == ""){
			$this->response(["status"=>400,"msg"=>"Maximum Credits is Required"], REST_Controller::HTTP_OK);
			exit();
		}
		
		if($id){
			$this->db->where(["id !="=>$id]);
		}
		$cChk = $this->db->get_where("tbl_courses",["course_name"=>$course_name])->num_rows();
		if($cChk > 0){
			$this->response(["status"=>400,"msg"=>"Course Name Already Exists"], REST_Controller::HTTP_OK);
			exit();
		}
		
		$data = [
			"course_name" => $course_name,
			"course_short_code" => $course_short_code,
			"min_credits" => $min_credits,
			"max_credits" => $max_credits
		];
		
		if($id){
			$status = "Updated";
			$d = $this->db->where("id",$id)->update("tbl_courses",$data);
		}else{
			$status = "Added";
			$d = $this->db->insert("tbl_courses",$data);
		}
		
		if($d){
			$this->response(["status"=>200,"msg"=>"Course Successfully $status"], REST_Controller::HTTP_OK);
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
		
		$d = $this->db->where("id",$id)->delete("tbl_courses");
		
		if($d){
			$this->response(["status"=>200,"msg"=>"Course Successfully Deleted"], REST_Controller::HTTP_OK);
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
		
		$d = $this->db->where("id",$id)->update("tbl_courses",["status"=>$status]);
		
		if($d){
			if($status == 1){
				echo json_encode(["status"=>true,"msg"=>"Course Successfully Enabled"]);
			}else{
				echo json_encode(["status"=>true,"msg"=>"Course Successfully Disabled"]);
			}
		}else{
			echo json_encode(["status"=>false,"msg"=>"Error Occured Please Try Again"]);
		}
		
	}
}
