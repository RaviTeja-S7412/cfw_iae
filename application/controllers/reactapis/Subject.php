<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';

class Subject extends REST_Controller {

	public function get_subjects_get(){
		
		$data = $this->db->get_where("tbl_subjects",["deleted"=>0])->result();
		$this->response(["status"=>200,"all_subjects"=>$data], REST_Controller::HTTP_OK);
		
	}
	
	public function create_post()
	{
		
		$id = $this->input->post("id");	
		$subject_name = $this->input->post("subject_name");
		$ideal_credits = $this->input->post("ideal_credits");
		
		if($subject_name == ""){
			$this->response(["status"=>400,"msg"=>"Subject Name is Required"], REST_Controller::HTTP_OK);
			exit();
		}
		
		if($id){
			$this->db->where(["id !="=>$id]);
		}
		$pChk = $this->db->get_where("tbl_subjects",["subject_name"=>$subject_name])->num_rows();
		if($pChk > 0){
			$this->response(["status"=>400,"msg"=>"Subject Name Already Exists"], REST_Controller::HTTP_OK);
			exit();
		}
		
		
		if($id){
			$status = "Updated";
			$d = $this->db->where("id",$id)->update("tbl_subjects",["subject_name"=>$subject_name,"ideal_credits"=>$ideal_credits]);
		}else{
			$status = "Added";
			$d = $this->db->insert("tbl_subjects",["subject_name"=>$subject_name,"ideal_credits"=>$ideal_credits]);
		}
		
		if($d){
			$this->response(["status"=>200,"msg"=>"Subject Successfully $status"], REST_Controller::HTTP_OK);
		}else{
			$this->response(["status"=>400,"msg"=>"Error Occured Please Try Again"], REST_Controller::HTTP_OK);
		}
		
	}
	
	public function delete_post()
	{
		
		$id = $this->input->post("id");
		
		if(!$id){
			$this->response(["status"=>400,"msg"=>"ID is Required"], REST_Controller::HTTP_OK);
			exit();
		}
		
		$d = $this->db->where("id",$id)->delete("tbl_subjects");
		
		if($d){
			$this->response(["status"=>200,"msg"=>"Subject Successfully Deleted"], REST_Controller::HTTP_OK);
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
		
		$d = $this->db->where("id",$id)->update("tbl_subjects",["status"=>$status]);
		
		if($d){
			if($status == 1){
				echo json_encode(["status"=>true,"msg"=>"Subject Successfully Enabled"]);
			}else{
				echo json_encode(["status"=>true,"msg"=>"Subject Successfully Disabled"]);
			}
		}else{
			echo json_encode(["status"=>false,"msg"=>"Error Occured Please Try Again"]);
		}
		
	}
	
	
}
