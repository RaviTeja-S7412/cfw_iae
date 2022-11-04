<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';

class Program extends REST_Controller {

	public function get_programs_get(){
		
		$data = $this->db->get_where("tbl_programs",["deleted"=>0])->result();
		$this->response(["status"=>200,"all_programs"=>$data], REST_Controller::HTTP_OK);
		
	}
	
	public function create_post()
	{
		
		$id = $this->input->post("id");	
		$program_name = $this->input->post("program_name");
		
		if($program_name == ""){
			$this->response(["status"=>400,"msg"=>"Program Name is Required"], REST_Controller::HTTP_OK);
			exit();
		}
		
		if($id){
			$this->db->where(["id !="=>$id]);
		}
		$pChk = $this->db->get_where("tbl_programs",["program_name"=>$program_name])->num_rows();
		if($pChk > 0){
			$this->response(["status"=>400,"msg"=>"Program Name Already Exists"], REST_Controller::HTTP_OK);
			exit();
		}
		
		
		if($id){
			$status = "Updated";
			$d = $this->db->where("id",$id)->update("tbl_programs",["program_name"=>$program_name]);
		}else{
			$status = "Added";
			$d = $this->db->insert("tbl_programs",["program_name"=>$program_name]);
		}
		
		if($d){
			$this->response(["status"=>200,"msg"=>"Program Successfully $status"], REST_Controller::HTTP_OK);
		}else{
			$this->response(["status"=>400,"msg"=>"Error Occured Please Try Again"], REST_Controller::HTTP_OK);
		}
		
	}
	
	public function delete_post()
	{
		
		$id = $this->input->post("id");
		
		if(!$id){
			$this->response(["status"=>400,"msg"=>"ID is Required"], REST_Controller::HTTP_OK);
		}
		
		$d = $this->db->where("id",$id)->delete("tbl_programs");
		
		if($d){
			$this->response(["status"=>200,"msg"=>"Program Successfully Deleted"], REST_Controller::HTTP_OK);
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
		
		$d = $this->db->where("id",$id)->update("tbl_programs",["status"=>$status]);
		
		if($d){
			if($status == 1){
				echo json_encode(["status"=>true,"msg"=>"Program Successfully Enabled"]);
			}else{
				echo json_encode(["status"=>true,"msg"=>"Program Successfully Disabled"]);
			}
		}else{
			echo json_encode(["status"=>false,"msg"=>"Error Occured Please Try Again"]);
		}
		
	}
	
	
}
