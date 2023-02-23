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
		$data = $this->db->order_by("tbl_branches.branch_name","asc")->get_where("tbl_course_branch_links",["tbl_course_branch_links.course"=>$id])->result();
		
		$html = '<option value="">Select Branch</option>';
		foreach($data as $d){
			$sel = ($cid == $d->id) ? 'selected' : '';	
			$html .= '<option value="'.$d->id.'" '.$sel.'>'.$d->branch_name.'</option>';
			
		}
		// $html .= '<option value="new">Add New Branch</option>';
		
		echo $html;
		
	}

	public function getCourses(){
		
		$id = $this->input->post("id");
		$cid = $this->input->post("cid");
		$institution_id = $this->session->userdata('institute_id');
		
		$this->db->select("tbl_courses.*");
		$this->db->join("tbl_courses","tbl_program_course_links.course=tbl_courses.id");
		$data = $this->db->order_by("tbl_courses.course_name","asc")->get_where("tbl_program_course_links",["tbl_program_course_links.program"=>$id])->result();
		
		$html = '<option value="">Select Course</option>';
		foreach($data as $d){

			$icChk = $this->db->get_where("tbl_institution_course_credits",["course_id"=>$d->id, "institution_id"=>$institution_id]);

			$umin = "";	
			$umax = "";	
			$min = $d->min_credits;
			$max = $d->max_credits;
			if($icChk->num_rows() > 0){
				$icdata = $icChk->row();
				$umin = $icdata->min_credits;
				$umax = $icdata->max_credits;
			}

			$sel = ($cid == $d->id) ? 'selected' : '';	
			$html .= '<option value="'.$d->id.'" cmin="'.$min.'" cmax="'.$max.'" ucmin="'.$umin.'" ucmax="'.$umax.'" coname="'.$d->course_short_code.'" '.$sel.'>'.$d->course_name.'</option>';
			
		}
		
		echo $html;
		
	}
	
	public function getsubCategories(){
		
		$cid = $this->input->post("cid");
		$id = $this->input->post("id");
		$sub_ids = $this->input->post("sub_ids");
		$institution_id = $this->session->userdata('institute_id');

		$cdata = $this->db->get_where("tbl_courses",["id"=>$cid])->row();
		$icChk = $this->db->get_where("tbl_institution_course_credits",["course_id"=>$cid, "institution_id"=>$institution_id]);

		$min = $cdata->min_credits;
		$max = $cdata->max_credits;
		if($icChk->num_rows() > 0){
			$icdata = $icChk->row();
			$min = $icdata->min_credits;
			$max = $icdata->max_credits;
		}
		
		$this->db->select("tbl_subject_category.category_name,tbl_subject_category.id");
		$this->db->join("tbl_subject_category","tbl_subcat_course_links.subject_category=tbl_subject_category.id");
		$data = $this->db->order_by("tbl_subject_category.category_name","asc")->get_where("tbl_subcat_course_links",["tbl_subcat_course_links.course"=>$id])->result();
		
		$subcategories = "";
		foreach($data as $d){
			
			$sel = "";
			
			if(in_array($d->id,$sub_ids)){
				$sel = "selected";
			}
			
			$subcategories .= '<option value="'.$d->id.'" cname="'.$d->category_name.'" '.$sel.'>'.$d->category_name.'</option>';
			
		}
		
		echo json_encode(["subcategories"=>$subcategories,"credits"=>"($min - $max)"]);
		
	}
	
	public function getCreditweightage(){
		
		$weightage = $this->input->post("weightage");
		$totalWeightage = $this->input->post("totalWeightage");
		$sub_categories = $this->input->post("sub_categories");
		// $cid = $this->input->post("cid");
			
		// $cw = $this->admin->getCreditweightage($weightage,$cid);
		// $max = $cw['max_weightage'];
		// $min = $cw['min_weightage'];
		
		$tWeightages = [];
		foreach($totalWeightage as $k => $tw){
			$tWeightages[$sub_categories[0][$k]] = round($tw/array_sum($totalWeightage)*100)." %";
		}
		
		echo json_encode(["tWeightages"=> $tWeightages]);

	}
	
	public function getWeightages(){

		$sub_cats = $this->input->post("sub_cats");
		$weightages = $this->input->post("weightages");
		$cid = $this->input->post("cid");
		
		$html = '';
		
		$tmax = [];
		$tmin = [];
		$totalWeigh = 0;
		
		$html .= '<div class="form-group row">
					<label class="col-sm-5" style="text-align:center;">
						<strong>Subject/Course Category</strong>
					</label>
					<div class="col-sm-2">
						<label><strong>Category Code</strong></label>
					</div>
					<div class="col-sm-2">
						<label><strong>Credits</strong></label>
					</div>
					<div class="col-sm-3">
						<strong>Weightage in %</strong>
					</div>
				</div>';
		
		foreach($sub_cats as $key => $sc){
		
			$wt = $weightages[$sc["id"]];
			$code = $this->db->get_where("tbl_course_category_codes",["course_category_id"=>$sc['id'], "institute_id"=> $this->session->userdata('institute_id')])->row();
			
			// $cw = $this->admin->getCreditweightage($wt,$cid);
			// $max = $cw['max_weightage'];
			// $min = $cw['min_weightage'];
				
			// if($max)
				$credits = round($wt/array_sum($weightages)*100)." %";
			
			$html .= '<div class="form-group row">
						<label for="staticEmail" class="col-sm-5 col-form-label">'.$sc['cname'].'</label> 
					<div class="col-sm-2"> 
					  	<input type="text" class="form-control" name="course_category_code[]"  placeholder="Course Category Code" value="'.$code->course_category_code.'" required/>
					</div>
					<div class="col-sm-2"> 
					  	<input type="text" class="form-control getWeightages" subid="'.$sc['id'].'" name="weightage[]"  placeholder="Credits" value="'.$wt.'" required/>
						<input type="hidden" class="form-control" name="sub_cats[]" value="'.$sc['id'].'"/> 
					</div>
					<div class="col-sm-3 assignCredits-'.$sc['id'].'">'.$credits.'</div>
					</div>';
			
			$tmax[] = $max;
			$tmin[] = $min;
			
			$totalWeigh += $wt;
		
		}
		
		$totalMax = array_sum($tmax);
		$totalMin = array_sum($tmin);
		
		$tcredits = "<b>Credits:</b> ($totalMax - $totalMin)";
		
		$html .= '<div class="form-group row"><label for="staticEmail" class="col-sm-5 col-form-label"><strong>Total Credits</strong></label><div class="col-sm-2" style="text-align:left;"></div> <div class="col-sm-2 selWeightage col-form-label" style="text-align:left;"><b>'.$totalWeigh.'</b></div></div>';

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
				echo json_encode(["status"=>"success", "branch_id"=>$lid]);
			}else{
				echo json_encode(["status"=>"error"]);
			}

		}else{
			echo json_encode(["status"=>"error"]);
		}

	}

	public function addNewcoursecategory(){

		$course_category = $this->input->post("course_category");
		$branch = $this->input->post("branch");

		$cb = $this->db->insert("tbl_subject_category",["category_name"=>$course_category,"status"=>1,"deleted"=>0]);
		$lid = $this->db->insert_id();
		if($cb){

			$cbl = $this->db->insert("tbl_subcat_course_links",["course"=>$branch,"subject_category"=>$lid]);
			if($cbl){
				echo json_encode(["status"=>"success"]);
			}else{
				echo json_encode(["status"=>"error"]);
			}

		}else{
			echo json_encode(["status"=>"error"]);
		}

	}

	public function addNewsubject(){

		$course_category = $this->input->post("course_category");
		$subject = $this->input->post("new_subject");
		$ideal_credits = $this->input->post("ideal_credits");
		$bid = $this->input->post("bid");

		$cb = $this->db->insert("tbl_subjects",["subject_name"=>$subject,"ideal_credits"=>$ideal_credits,"elective_status"=>"all","status"=>1,"deleted"=>0]);
		$lid = $this->db->insert_id();
		if($cb){

			$cbl = $this->db->insert("tbl_sub_subcat_links",["subject_category"=>$course_category,"subject"=>$lid]);
			if($cbl){
				redirect('create-design/add-subjects?bid='.$bid);
			}

		}else{
			echo json_encode(["status"=>"error"]);
		}

	}

	public function updateinstCredits(){

		$course_id = $this->input->post("course_id");
		$institution_id = $this->session->userdata('institute_id');
		$min_credits = $this->input->post("min_credits");
		$max_credits = $this->input->post("max_credits");

		$data = [
			"course_id" => $course_id,
			"institution_id" => $institution_id,
			"min_credits" => $min_credits,
			"max_credits" => $max_credits
		];

		$cChk = $this->db->get_where("tbl_institution_course_credits",["course_id"=>$course_id,"institution_id"=>$institution_id])->num_rows();

		if($cChk > 0){
			$this->db->where(["course_id"=>$course_id,"institution_id"=>$institution_id])->update("tbl_institution_course_credits",$data);
		}else{
			$this->db->insert("tbl_institution_course_credits", $data);
		}

	}

	public function updatehourCredits(){

		$institution_id = $this->session->userdata('institute_id');
		$lecture_credits = $this->input->post("lecture_credits");
		$tutorial_credits = $this->input->post("tutorial_credits");
		$lab_credits = $this->input->post("lab_credits");

		$data = [
			"lecture_credits" => $lecture_credits,
			"tutorial_credits" => $tutorial_credits,
			"lab_credits" => $lab_credits
		];
			
		$this->db->where(["id"=>$institution_id])->update("tbl_institutes",$data);

	}
	
}
