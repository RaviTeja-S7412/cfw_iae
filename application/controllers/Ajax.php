<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends CI_Controller {
	
	public function __construct(){
		
		parent::__construct();
		if(!$this->session->userdata('institute_id')){
        	redirect('/institute-login');
        }
		
	}

	public function getBranches(){
		
		$id = $this->input->post("id");
		$cid = $this->input->post("cid");
		
		$this->db->select("tbl_branches.*");
		$this->db->join("tbl_branches","tbl_course_branch_links.branch=tbl_branches.id");
		$data = $this->db->get_where("tbl_course_branch_links",["tbl_course_branch_links.course"=>$id])->result();
		
		$html = '<option value="">Select Branch</option>';
		foreach($data as $d){
			$sel = ($cid == $d->id) ? 'selected' : '';	
			$html .= '<option value="'.$d->id.'" '.$sel.'>'.$d->branch_name.'</option>';
			
		}
		$html .= '<option value="new">Add New Branch</option>';
		
		echo $html;
		
	}

	public function getCourses(){
		
		$id = $this->input->post("id");
		$cid = $this->input->post("cid");
		
		$this->db->select("tbl_courses.*");
		$this->db->join("tbl_courses","tbl_program_course_links.course=tbl_courses.id");
		$data = $this->db->get_where("tbl_program_course_links",["tbl_program_course_links.program"=>$id])->result();
		
		$html = '<option value="">Select Course</option>';
		foreach($data as $d){
			$sel = ($cid == $d->id) ? 'selected' : '';	
			$html .= '<option value="'.$d->id.'" coname="'.$d->course_short_code.'" '.$sel.'>'.$d->course_name.'</option>';
			
		}
		
		echo $html;
		
	}
	
	public function getsubCategories(){
		
		$cid = $this->input->post("cid");
		$id = $this->input->post("id");
		$sub_ids = $this->input->post("sub_ids");
		
		$cdata = $this->db->get_where("tbl_courses",["id"=>$cid])->row();
		
		$this->db->select("tbl_subject_category.category_name,tbl_subject_category.id");
		$this->db->join("tbl_subject_category","tbl_subcat_course_links.subject_category=tbl_subject_category.id");
		$data = $this->db->get_where("tbl_subcat_course_links",["tbl_subcat_course_links.course"=>$id])->result();
		
		$subcategories = "";
		foreach($data as $d){
			
			$sel = "";
			
			if(in_array($d->id,$sub_ids)){
				$sel = "selected";
			}
			
			$subcategories .= '<option value="'.$d->id.'" cname="'.$d->category_name.'" '.$sel.'>'.$d->category_name.'</option>';
			
		}
		
		echo json_encode(["subcategories"=>$subcategories,"credits"=>"($cdata->min_credits - $cdata->max_credits)"]);
		
	}
	
	public function getCreditweightage(){
		
		$weightage = $this->input->post("weightage");
		$cid = $this->input->post("cid");
			
		$cw = $this->admin->getCreditweightage($weightage,$cid);
		$max = $cw['max_weightage'];
		$min = $cw['min_weightage'];
		
		echo "<b>Credits:</b> ($max - $min)";
		
	}
	
	public function getWeightages(){

		$sub_cats = $this->input->post("sub_cats");
		$weightages = $this->input->post("weightages");
		$cid = $this->input->post("cid");
		
		$html = '';
		
		$tmax = [];
		$tmin = [];
		$totalWeigh = 0;
		
		$html .= '<div class="form-group row"><label class="col-sm-5" style="text-align:center;"><strong>Subject/Course Category</strong></label> <div class="col-sm-3"><label><strong>Weightage in %</strong></label></div><div class="col-sm-4"><strong>Credits as per given Weightage</strong></div></div>';
		
		foreach($sub_cats as $key => $sc){
		
			$wt = $weightages[$sc["id"]];
			
			$cw = $this->admin->getCreditweightage($wt,$cid);
			$max = $cw['max_weightage'];
			$min = $cw['min_weightage'];
				
			if($max)
				$credits = "<b>Credits:</b> ($max - $min)";
			
			$html .= '<div class="form-group row"><label for="staticEmail" class="col-sm-5 col-form-label">'.$sc['cname'].'</label> <div class="col-sm-3"> <input type="text" class="form-control getWeightages" subid="'.$sc['id'].'" name="weightage[]"  placeholder="Weightage in %" value="'.$wt.'" required/><input type="hidden" class="form-control" name="sub_cats[]" value="'.$sc['id'].'"/> </div><div class="col-sm-4 assignCredits-'.$sc['id'].'">'.$credits.'</div></div>';
			
			$tmax[] = $max;
			$tmin[] = $min;
			
			$totalWeigh += $wt;
		
		}
		
		$totalMax = array_sum($tmax);
		$totalMin = array_sum($tmin);
		
		$tcredits = "<b>Credits:</b> ($totalMax - $totalMin)";
		
		$html .= '<div class="form-group row"><label for="staticEmail" class="col-sm-5 col-form-label"><strong>Total</strong></label> <div class="col-sm-3 selWeightage col-form-label" style="text-align:left;"><b>'.$totalWeigh.' %</b></div></div>';

		$branch_data = $this->db->get_where("tbl_branches",["id"=>$this->input->post("branch")])->row();
		
		echo json_encode(["html"=>$html,"branch"=>$branch_data->branch_name]);
		
	}
	
	public function logout(){
		
		$this->session->sess_destroy();
		redirect("institute-login");
		
	}

	public function addNewbranch(){

		$course = $this->input->post("course");
		$branch = $this->input->post("branch");

		$cb = $this->db->insert("tbl_branches",["branch_name"=>$branch,"status"=>1,"deleted"=>0]);
		$lid = $this->db->insert_id();
		if($cb){

			$cbl = $this->db->insert("tbl_course_branch_links",["branch"=>$lid,"course"=>$course]);
			if($cbl){
				echo json_encode(["status"=>"success"]);
			}else{
				echo json_encode(["status"=>"error"]);
			}

		}else{
			echo json_encode(["status"=>"error"]);
		}

	}
	
}
