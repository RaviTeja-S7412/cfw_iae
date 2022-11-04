<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';

class Links extends REST_Controller {

	public function get_subcategoryLinks_get(){
		
		$this->db->select("sc.category_name,ssl.subject_category");
		$this->db->from("tbl_sub_subcat_links ssl");
		$this->db->join("tbl_subject_category sc","ssl.subject_category = sc.id");
		$data = $this->db->group_by("subject_category")->get()->result();
		
		$subcatlinks = [];
		foreach($data as $d){
			$this->db->select("s.id,s.subject_name");
			$this->db->from("tbl_sub_subcat_links ssl");
			$this->db->join("tbl_subjects s","ssl.subject = s.id");
			$this->db->where("ssl.subject_category",$d->subject_category);
			$allsubjects = $this->db->get()->result();
			
			$subjects = [];
			$dsubjects = [];
			foreach($allsubjects as $sub){
				$dsubjects[] = $sub->subject_name;
				$subjects[] = $sub->subject_name."-".$sub->id;
			}
			
			$subcatlinks[] = ["id"=>$d->subject_category,"subject_category"=>$d->category_name,"subjects"=>implode(", ",$dsubjects),"subject_ids"=>$subjects];
		}
		
		$this->response(["status"=>200,"all_subcategoryLinks"=>$subcatlinks], REST_Controller::HTTP_OK);
		
	}
	
	public function get_courseLinks_get(){
		
		$this->db->select("sc.course_name,ssl.course");
		$this->db->from("tbl_subcat_course_links ssl");
		$this->db->join("tbl_courses sc","ssl.course = sc.id");
		$data = $this->db->group_by("course")->get()->result();
		
		$courselinks = [];
		foreach($data as $d){
			$this->db->select("s.id,s.category_name");
			$this->db->from("tbl_subcat_course_links ssl");
			$this->db->join("tbl_subject_category s","ssl.subject_category = s.id");
			$this->db->where("ssl.course",$d->course);
			$allsubCategories = $this->db->get()->result();
			
			$subCategories = [];
			$dsubCategories = [];
			foreach($allsubCategories as $sub){
				$dsubCategories[] = $sub->category_name;
				$subCategories[] = $sub->category_name."-".$sub->id;
			}
			
			$courselinks[] = ["id"=>$d->course,"course_name"=>$d->course_name,"subject_categories"=>implode(", ",$dsubCategories),"subject_category_ids"=>$subCategories];
		}
		$this->response(["status"=>200,"all_courseLinks"=>$courselinks], REST_Controller::HTTP_OK);
		
	}
	
	public function get_programLinks_get(){
		
		$this->db->select("sc.program_name,ssl.program");
		$this->db->from("tbl_program_course_links ssl");
		$this->db->join("tbl_programs sc","ssl.program = sc.id");
		$data = $this->db->group_by("program")->get()->result();
		
		$courselinks = [];
		foreach($data as $d){
			$this->db->select("s.id,s.course_name");
			$this->db->from("tbl_program_course_links ssl");
			$this->db->join("tbl_courses s","ssl.course = s.id");
			$this->db->where("ssl.program",$d->program);
			$allCourses = $this->db->get()->result();
			
			$courses = [];
			$dcourses = [];
			foreach($allCourses as $sub){
				$dcourses[] = $sub->course_name;
				$courses[] = $sub->course_name."-".$sub->id;
			}
			
			$programlinks[] = ["id"=>$d->program,"program_name"=>$d->program_name,"courses"=>implode(", ",$dcourses),"course_ids"=>$courses];
		}
		$this->response(["status"=>200,"all_programLinks"=>$programlinks], REST_Controller::HTTP_OK);
		
	}
	
	public function sub_subcategory_link_post(){
		
		$ref = $this->input->post("ref");
		$subject_category = $this->input->post("subject_category");
		$subjects = json_decode($this->input->post("subjects"));
		
		if($subject_category == ""){
			$this->response(["status"=>400,"msg"=>"Please Select Subject Category."], REST_Controller::HTTP_OK);
			exit();
		}
		
		$subids = [];
		foreach($subjects as $s){
			$subids[] = explode("-",$s)[1];
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
			$this->db->where_not_in("subject",$subids)->delete("tbl_sub_subcat_links",["subject_category"=>$subject_category]);
		}
		if(count($subids) > 0){
			
			foreach($subids as $subject){
				
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
		$subject_category = json_decode($this->input->post("subject_category"));
		
		if($course == ""){
			echo json_encode(["status"=>false,"msg"=>"Please Select Course."]);
			exit();
		}
		
		$subids = [];
		foreach($subject_category as $s){
			$subids[] = explode("-",$s)[1];
		}
		
		if($ref == "delete"){
			$delete = $this->db->delete("tbl_subcat_course_links",["course"=>$course]);
			if($delete){
				$this->response(["status"=>200,"msg"=>"Course Deleted Successfully."], REST_Controller::HTTP_OK);
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
			$this->db->where_not_in("subject_category",$subids)->delete("tbl_subcat_course_links",["course"=>$course]);
		}
		
	// delete unselected subject categories
		
		
		if(count($subids) > 0){
			
			foreach($subids as $subCat){
				
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
		$courses = json_decode($this->input->post("course"));
		$ref = $this->input->post("ref");
		
		if($program == ""){
			echo json_encode(["status"=>false,"msg"=>"Please Select Program."]);
			exit();
		}
		
		$subids = [];
		foreach($courses as $s){
			$subids[] = explode("-",$s)[1];
		}
		
		if($ref == "delete"){
			$delete = $this->db->delete("tbl_program_course_links",["program"=>$program]);
			if($delete){
				$this->response(["status"=>200,"msg"=>"Program Deleted Successfully."], REST_Controller::HTTP_OK);
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
		
		
		if(count($subids) > 0){
			
			foreach($subids as $course){
				
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
	
}
