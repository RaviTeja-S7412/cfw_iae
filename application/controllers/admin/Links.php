<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Links extends CI_Controller {

	public function cusubcategoryLink($id=""){
		
		$data = $this->db->get_where("tbl_sub_subcat_links",["subject_category"=>$id])->result();
		
		$subjects = [];
		foreach($data as $d){
			$subjects[] = $d->subject;
		}
		
		$sdata["sel_subjects"] = $subjects;
		$this->load->view("admin/links/cusubcategoryLink",$sdata);
		
	}
	
	public function subcategoryLinks(){
		
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
			
			$dsubjects = [];
			foreach($allsubjects as $sub){
				$dsubjects[] = $sub->subject_name;
			}
			
			$subcatlinks[] = ["id"=>$d->subject_category,"subject_category"=>$d->category_name,"subjects"=>implode(", ",$dsubjects)];
		}
		$sdata["subcatlinks"] = array_reverse($subcatlinks);
		$this->load->view("admin/links/subcategoryLinks",$sdata);
		
	}
	
	public function cucourseLink($id=""){
		
		$data = $this->db->get_where("tbl_subcat_course_links",["course"=>$id])->result();
		
		$subjectcategories = [];
		foreach($data as $d){
			$subjectcategories[] = $d->subject_category;
		}
		
		$sdata["sel_subjectcategories"] = $subjectcategories;
		$this->load->view("admin/links/cucourselinks",$sdata);
		
	}
	
	public function courseLinks(){
		
		$this->db->select("sc.branch_name,ssl.course");
		$this->db->from("tbl_subcat_course_links ssl");
		$this->db->join("tbl_branches sc","ssl.course = sc.id");
		$data = $this->db->group_by("course")->get()->result();
		
		$courselinks = [];
		foreach($data as $d){
			$this->db->select("s.id,s.category_name");
			$this->db->from("tbl_subcat_course_links ssl");
			$this->db->join("tbl_subject_category s","ssl.subject_category = s.id");
			$this->db->where("ssl.course",$d->course);
			$allsubCategories = $this->db->get()->result();
			
			$dsubCategories = [];
			foreach($allsubCategories as $sub){
				$dsubCategories[] = $sub->category_name;
			}
			
			$courselinks[] = ["id"=>$d->course,"branch_name"=>$d->branch_name,"subject_categories"=>implode(", ",$dsubCategories)];
		}
		$sdata["courselinks"] = array_reverse($courselinks);
		$this->load->view("admin/links/courselinks",$sdata);
		
	}
	
	public function cuprogramLink($id=""){
		
		$data = $this->db->get_where("tbl_program_course_links",["program"=>$id])->result();
		
		$course = [];
		foreach($data as $d){
			$course[] = $d->course;
		}
		
		$sdata["sel_course"] = $course;
		$this->load->view("admin/links/cuprogramlinks",$sdata);
		
	}

	public function branchLinks(){
		
		$this->db->select("sc.course_name,ssl.course");
		$this->db->from("tbl_course_branch_links ssl");
		$this->db->join("tbl_courses sc","ssl.course = sc.id");
		$data = $this->db->group_by("course")->get()->result();
		
		$courselinks = [];
		foreach($data as $d){
			$this->db->select("s.id,s.branch_name");
			$this->db->from("tbl_course_branch_links ssl");
			$this->db->join("tbl_branches s","ssl.branch = s.id");
			$this->db->where("ssl.course",$d->course);
			$allsubCategories = $this->db->get()->result();
			
			$dsubCategories = [];
			foreach($allsubCategories as $sub){
				$dsubCategories[] = $sub->branch_name;
			}
			
			$courselinks[] = ["id"=>$d->course,"course_name"=>$d->course_name,"branches"=>implode(", ",$dsubCategories)];
		}
		$sdata["courselinks"] = array_reverse($courselinks);
		$this->load->view("admin/links/branchlinks",$sdata);
		
	}

	public function cubranchLink($id=""){
		
		$data = $this->db->get_where("tbl_course_branch_links",["course"=>$id])->result();
		
		$course = [];
		foreach($data as $d){
			$course[] = $d->branch;
		}
		
		$sdata["sel_course"] = $course;
		$this->load->view("admin/links/cubranchlinks",$sdata);
		
	}
	
	public function programLinks(){
		
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
			
			$dcourses = [];
			foreach($allCourses as $sub){
				$dcourses[] = $sub->course_name;
			}
			
			$programlinks[] = ["id"=>$d->program,"program_name"=>$d->program_name,"courses"=>implode(", ",$dcourses)];
		}
		$sdata["programlinks"] = array_reverse($programlinks);
		$this->load->view("admin/links/programlinks",$sdata);
		
	}
	
}
