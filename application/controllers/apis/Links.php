<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';

class Links extends REST_Controller {

	
	public function sub_subcategory_link_post(){
		
		$ref = $this->input->post("ref");
		$subject_category = $this->input->post("subject_category");
		$subjects = $this->input->post("subjects");
		
		if($subject_category == ""){
			$this->response(["status"=>400,"msg"=>"Please Select Subject Category."], REST_Controller::HTTP_OK);
			exit();
		}
		
		if($ref == "delete"){
			$delete = $this->db->delete("tbl_sub_subcat_links",["subject_category"=>$subject_category]);
			if($delete){
				$this->response(["status"=>200,"msg"=>"Subject Category Deleted Successfully."], REST_Controller::HTTP_OK);
			}else{
				$this->response(["status"=>400,"msg"=>"Error Occured Try Again."], REST_Controller::HTTP_OK);
			}
		}
		
		if($ref == "add"){
			$cChk = $this->db->get_where("tbl_sub_subcat_links",["subject_category"=>$subject_category])->num_rows();
			if($cChk > 0){
				$this->response(["status"=>400,"msg"=>"Subject Category already added please update subjects."], REST_Controller::HTTP_OK);
			}
		}else{
			$this->db->where_not_in("subject",$subjects)->delete("tbl_sub_subcat_links",["subject_category"=>$subject_category]);
		}
		if(count($subjects) > 0){
			
			foreach($subjects as $subject){
				
				$eChk = $this->db->get_where("tbl_sub_subcat_links",["subject_category"=>$subject_category,"subject"=>$subject])->num_rows();
				
				if($eChk == 0){
					$this->db->insert("tbl_sub_subcat_links",["subject_category"=>$subject_category,"subject"=>$subject]);
				}
					
			}
			
			$this->response(["status"=>200,"msg"=>"Successfully Updated."], REST_Controller::HTTP_OK);
			exit();
			
		}else{
			$this->response(["status"=>400,"msg"=>"Please Select Subjects."], REST_Controller::HTTP_OK);
			exit();
		}
		
	}
	
	public function subcategory_course_link_post(){
		
		$course = $this->input->post("course");
		$ref = $this->input->post("ref");
		$subject_category = $this->input->post("subject_category");
		
		if($course == ""){
			echo json_encode(["status"=>false,"msg"=>"Please Select Course."]);
			exit();
		}
		
		if($ref == "delete"){
			$delete = $this->db->delete("tbl_subcat_course_links",["course"=>$course]);
			if($delete){
				$this->response(["status"=>200,"msg"=>"Course Link Deleted Successfully."], REST_Controller::HTTP_OK);
			}else{
				$this->response(["status"=>400,"msg"=>"Error Occured Try Again."], REST_Controller::HTTP_OK);
			}
		}
		
		if($ref == "add"){
			$cChk = $this->db->get_where("tbl_subcat_course_links",["course"=>$course])->num_rows();
			if($cChk > 0){
				$this->response(["status"=>400,"msg"=>"Course already added please update Subject Categories."], REST_Controller::HTTP_OK);
			}
		}else{
			$this->db->where_not_in("subject_category",$subject_category)->delete("tbl_subcat_course_links",["course"=>$course]);
		}
		
	// delete unselected subject categories
		
		
		if(count($subject_category) > 0){
			
			foreach($subject_category as $subCat){
				
				$eChk = $this->db->get_where("tbl_subcat_course_links",["subject_category"=>$subCat,"course"=>$course])->num_rows();
				
				if($eChk == 0){
					$this->db->insert("tbl_subcat_course_links",["subject_category"=>$subCat,"course"=>$course]);
				}
					
			}
			
			$this->response(["status"=>200,"msg"=>"Successfully Updated."], REST_Controller::HTTP_OK);
			exit();
			
		}else{
			$this->response(["status"=>400,"msg"=>"Please Select Subject Category."], REST_Controller::HTTP_OK);
			exit();
		}
		
	}
	
	public function course_program_link_post(){
		
		$program = $this->input->post("program");
		$courses = $this->input->post("course");
		$ref = $this->input->post("ref");
		
		if($program == ""){
			echo json_encode(["status"=>false,"msg"=>"Please Select Program."]);
			exit();
		}
		
		if($ref == "delete"){
			$delete = $this->db->delete("tbl_program_course_links",["program"=>$program]);
			if($delete){
				$this->response(["status"=>200,"msg"=>"Program Link Deleted Successfully."], REST_Controller::HTTP_OK);
			}else{
				$this->response(["status"=>400,"msg"=>"Error Occured Try Again."], REST_Controller::HTTP_OK);
			}
		}
		
		if($ref == "add"){
			$cChk = $this->db->get_where("tbl_program_course_links",["program"=>$program])->num_rows();
			if($cChk > 0){
				$this->response(["status"=>400,"msg"=>"Program already added please update Courses."], REST_Controller::HTTP_OK);
			}
		}else{
			$this->db->where_not_in("course",$courses)->delete("tbl_program_course_links",["program"=>$program]);
		}
		
		
		if(count($courses) > 0){
			
			foreach($courses as $course){
				
				$eChk = $this->db->get_where("tbl_program_course_links",["program"=>$program,"course"=>$course])->num_rows();
				
				if($eChk == 0){
					$this->db->insert("tbl_program_course_links",["program"=>$program,"course"=>$course]);
				}
					
			}
			$this->response(["status"=>200,"msg"=>"Successfully Updated."], REST_Controller::HTTP_OK);
			exit();
			
		}else{
			$this->response(["status"=>400,"msg"=>"Please Select Courses."], REST_Controller::HTTP_OK);
			exit();
		}
		
	}

	
	public function course_branch_link_post(){
		
		$course = $this->input->post("course");
		$branches = $this->input->post("branch");
		$ref = $this->input->post("ref");
		
		if($course == ""){
			echo json_encode(["status"=>false,"msg"=>"Please Select Course."]);
			exit();
		}
		
		if($ref == "delete"){
			$delete = $this->db->delete("tbl_course_branch_links",["course"=>$course]);
			if($delete){
				$this->response(["status"=>200,"msg"=>"Branch Link Deleted Successfully."], REST_Controller::HTTP_OK);
			}else{
				$this->response(["status"=>400,"msg"=>"Error Occured Try Again."], REST_Controller::HTTP_OK);
			}
		}
		
		if($ref == "add"){
			$cChk = $this->db->get_where("tbl_course_branch_links",["course"=>$course])->num_rows();
			if($cChk > 0){
				$this->response(["status"=>400,"msg"=>"Course already added please update branches."], REST_Controller::HTTP_OK);
			}
		}else{
			$this->db->where_not_in("branch",$branches)->delete("tbl_course_branch_links",["course"=>$course]);
		}
		
		
		if(count($branches) > 0){
			
			foreach($branches as $branch){
				
				$eChk = $this->db->get_where("tbl_course_branch_links",["course"=>$course,"branch"=>$branch])->num_rows();
				
				if($eChk == 0){
					$this->db->insert("tbl_course_branch_links",["branch"=>$branch,"course"=>$course]);
				}
					
			}
			$this->response(["status"=>200,"msg"=>"Successfully Updated."], REST_Controller::HTTP_OK);
			exit();
			
		}else{
			$this->response(["status"=>400,"msg"=>"Please Select branches."], REST_Controller::HTTP_OK);
			exit();
		}
		
	}
	
}
