<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	
	public function __construct(){
		
		parent::__construct();
		if(!$this->session->userdata('institute_id')){
        	redirect('/institute-login');
        }
		
	}

	public function index(){
		$this->load->view('dashboard');
	}
	
	public function create(){
		
		$bid = $this->input->get("bid");
		if($bid){
			$this->db->select("*");
			$this->db->join("tbl_institute_branches","tbl_institute_branches.id=tbl_institute_curriculum_design.branch_id");
			$this->db->join("tbl_courses","tbl_courses.id=tbl_institute_curriculum_design.course");
			$data["branch_data"] = $this->db->get_where("tbl_institute_curriculum_design",["branch_id"=>$this->input->get("bid")])->row();
			$data["sub_categories"] = json_decode($data["branch_data"]->subject_categories);	
		}
		
		$data["programs"] = $this->db->get_where("tbl_programs",["status"=>1,"deleted"=>0])->result();
		$this->load->view('create',$data);
		
	}
	
	public function view(){
		
		$data["cdata"] = $this->db->order_by("id","desc")->get_where("tbl_institute_branches",["institute_id"=>$this->session->userdata("institute_id")])->result();
		$this->load->view('view',$data);
		
	}
	
	public function addSubjects(){
		
		$data["branch_data"] = json_decode($this->session->userdata("branch_data"));
		$data["sub_categories"] = $data["branch_data"]->sub_categories;
		
		$bid = $this->input->get("bid");
		if($bid){
			$this->db->select("*");
			$this->db->join("tbl_institute_branches","tbl_institute_branches.id=tbl_institute_curriculum_design.branch_id");
			$this->db->join("tbl_courses","tbl_courses.id=tbl_institute_curriculum_design.course");
			$data["ubranch_data"] = $this->db->get_where("tbl_institute_curriculum_design",["branch_id"=>$this->input->get("bid")])->row();
			$data["usub_categories"] = json_decode($data["branch_data"]->subject_categories);	
			
		}
		
		$this->load->view('addSubjects',$data);
		
	}
	
	public function viewDesign(){
		
		$this->db->select("*");
		$this->db->join("tbl_institute_branches","tbl_institute_branches.id=tbl_institute_curriculum_design.branch_id");
		$this->db->join("tbl_courses","tbl_courses.id=tbl_institute_curriculum_design.course");
		$data["branch_data"] = $this->db->get_where("tbl_institute_curriculum_design",["branch_id"=>$this->input->get("bid")])->row();
		
		$data["sub_categories"] = json_decode($data["branch_data"]->subject_categories);
		$data["semesters"] = $this->db->get_where("tbl_semesters",["status"=>1])->result();
		
		$weightage = json_decode($data["branch_data"]->weightage);
		
		$weigtages = [];
		foreach($weightage as $k => $w){
			
			$min_credits = $data["branch_data"]->min_credits; 
			$max_credits = $data["branch_data"]->max_credits;
			
			$wdata = [];
			$wdata["max_weightage"] = round(($min_credits/100)*$w);
			$wdata["min_weightage"] = round(($max_credits/100)*$w);
//			$wdata["sub_category"] = $data["sub_categories"][$k];
			
			$weigtages[$k] = $wdata;
			
		}
		
		
		$totalCredits = 0;
		$scatcredits = [];
		foreach(json_decode($data["branch_data"]->credits) as $sc => $tc){
			
			$totalCredits += array_sum($tc->total_credits);
			$scatcredits[$sc] = array_sum($tc->total_credits);
			
		}
		
		$data["weigtages"] = $weigtages;
		$data["totalCredits"] = $totalCredits;
		$data["scatcredits"] = $scatcredits;
		$data["program"] = $this->db->get_where("tbl_programs",["id"=>$data["branch_data"]->program])->row();
		$data["course"] = $this->db->get_where("tbl_courses",["id"=>$data["branch_data"]->course])->row();
		
		$this->load->view('viewDesign',$data);
		
	}
	
	public function addCredits(){
		
		$this->db->select("*");
		$this->db->join("tbl_institute_branches","tbl_institute_branches.id=tbl_institute_curriculum_design.branch_id");
		$this->db->join("tbl_courses","tbl_courses.id=tbl_institute_curriculum_design.course");
		$data["branch_data"] = $this->db->get_where("tbl_institute_curriculum_design",["branch_id"=>$this->input->get("bid")])->row();
		
		$data["sub_categories"] = json_decode($data["branch_data"]->subject_categories);
		$data["semesters"] = $this->db->get_where("tbl_semesters",["status"=>1])->result();
		
		$weightage = json_decode($data["branch_data"]->weightage);
		
		$weigtages = [];
		foreach($weightage as $k => $w){
			
			$min_credits = $data["branch_data"]->min_credits; 
			$max_credits = $data["branch_data"]->max_credits;
			
			$wdata = [];
			$wdata["max_weightage"] = round(($min_credits/100)*$w);
			$wdata["min_weightage"] = round(($max_credits/100)*$w);
//			$wdata["sub_category"] = $data["sub_categories"][$k];
			
			$weigtages[$k] = $wdata;
			
		}
		
		
		$totalCredits = 0;
		$scatcredits = [];
		foreach(json_decode($data["branch_data"]->credits) as $sc => $tc){
			
			$totalCredits += array_sum($tc->total_credits);
			$scatcredits[$sc] = array_sum($tc->total_credits);
			
		}
		
		$data["weigtages"] = $weigtages;
		$data["totalCredits"] = $totalCredits;
		$data["scatcredits"] = $scatcredits;
		$data["program"] = $this->db->get_where("tbl_programs",["id"=>$data["branch_data"]->program])->row();
		$data["course"] = $this->db->get_where("tbl_courses",["id"=>$data["branch_data"]->course])->row();
		
		$this->load->view('addCredits',$data);
		
	}
	
	public function insertCredits(){
		
		$bid = $this->input->post("bid");
		$sub_id = $this->input->post("sub_id");
		$bd = $this->db->get_where("tbl_institute_branches",["id"=>$bid])->row();
		$bdata = $this->db->get_where("tbl_institute_curriculum_design",["branch_id"=>$bid])->row();
		$cdata = $this->db->get_where("tbl_courses",["id"=>$bdata->course])->row();
		
		$subCats = json_decode($bdata->subject_categories);
		
		$credits = [];
		
		if($sub_id){
			
			$sub_categories = $this->input->post("subjectCategories");
			$exCredits = json_decode($bdata->credits,true);
			
			if($exCredits){
				unset($exCredits[$sub_id]);
			}
			
			$lectures = $this->input->post("lecture_hours_per_week");
			$tutorial = $this->input->post("tutorial_hours_per_week");
			$lab = $this->input->post("lab_hours_per_week");
			$total = $this->input->post("total_credits");
			$semesters = $this->input->post("semester");
			$subjectsCount = $this->input->post("subjectsCount");
			
			foreach($lectures as $l){
				
				if(($l == "") || ($subjectsCount != count($lectures))){
					echo json_encode(["status"=>false,"msg"=>"Please Enter Lecture Hours."]);
					exit(); 
				}
				
			}
			foreach($tutorial as $t){
				
				if(($t == "") || ($subjectsCount != count($tutorial))){
					echo json_encode(["status"=>false,"msg"=>"Please Enter Tutorial Hours."]);
					exit(); 
				}
				
			}
			foreach($lab as $lb){
				
				if(($lb == "") || ($subjectsCount != count($lab))){
					echo json_encode(["status"=>false,"msg"=>"Please Enter Lab Hours."]);
					exit(); 
				}
				
			}
			foreach($total as $to){
				
				if(($to == "") || ($subjectsCount != count($total))){
					echo json_encode(["status"=>false,"msg"=>"Total Hours Should Not Be Empty."]);
					exit(); 
				}
				
			}
			foreach($semesters as $sm){
				
				if(($sm == "") || ($subjectsCount != count($semesters))){
					echo json_encode(["status"=>false,"msg"=>"Please select semester."]);
					exit(); 
				}
				
			}
			
			foreach($subCats as $ssc){
				if($exCredits[$ssc]){
					$credits[$ssc] = $exCredits[$ssc];
				}else{
					if($ssc == $sub_id){
						$credits[$ssc] = ["lecture_hours_per_week"=>$lectures,"tutorial_hours_per_week"=>$tutorial,"lab_hours_per_week"=>$lab,"total_credits"=>$total,"semesters"=>$semesters];
					}
				}
			}
			
		}else{
		
			$totalCredits = 0;
			foreach($subCats as $sc){

				$lectures = $this->input->post("lecture_hours_per_week-$sc");
				$tutorial = $this->input->post("tutorial_hours_per_week-$sc");
				$lab = $this->input->post("lab_hours_per_week-$sc");
				$total = $this->input->post("total_credits-$sc");
				$semesters = $this->input->post("semester-$sc");

				$totalCredits += array_sum($total);

				$credits[$sc] = ["lecture_hours_per_week"=>$lectures,"tutorial_hours_per_week"=>$tutorial,"lab_hours_per_week"=>$lab,"total_credits"=>$total,"semesters"=>$semesters];

			}

			if($totalCredits < $cdata->min_credits){

				echo json_encode(["status"=>false,"msg"=>"Total Credits Should Not be Less than Minimum Credits."]);
				exit();

			}
			
		}
		
		$d = $this->db->where("branch_id",$bid)->update("tbl_institute_curriculum_design",["credits"=>json_encode($credits),"status"=>1]);
		
		if($d){
			
			$branch_name = $this->db->get_where("tbl_branches",["id"=>$bd->branch_name])->row()->branch_name;
			$this->db->where("id",$bid)->update("tbl_institute_branches",["status"=>1]);
			echo json_encode(["status"=>true,"msg"=>"Credits Added Successfully, Curriculum Design Successfully Created For $branch_name."]);
			
			$this->session->unset_userdata("branch_data");
			exit();
			
		}else{
			
			echo json_encode(["status"=>false,"msg"=>"Error Occured Please Try Again."]);
			exit();
		}
		
	}
	
	public function insertSubjects(){
		
		$inst_id = $this->session->userdata("institute_id");
		$branch_data = json_decode($this->session->userdata("branch_data"));
		
		$bid = $this->input->post("bid");
		
		$subjects = [];
		$selectives = [];
		$sopen_electives = [];
		
		foreach($branch_data->sub_cats as $k => $sc){
			
			$chkSubjects = $this->input->post("subjects-$sc");
			$electives = $this->input->post("electives-$sc");
			$open_electives = $this->input->post("open_electives-$sc");
			/*if(!$chkSubjects){
				echo json_encode(["status"=>false,"msg"=>"Please Select Subjects In All Subject Categories"]);
				exit();
			}*/
			
			$subjects[$sc] = $chkSubjects;
			$selectives[$sc] = $electives;
			$sopen_electives[$sc] = $open_electives;
			
		}

		$pdata = [
			"subjects" => json_encode($subjects),
			"electives" => json_encode($selectives),
			"open_electives" => json_encode($sopen_electives),
		];

		$pd = $this->db->where("branch_id",$bid)->update("tbl_institute_curriculum_design",$pdata);

		if($pd){
			if($bid){
				echo json_encode(["status"=>true,"msg"=>"Updated Successfully.","bid"=>$bid]);
			}else{
				echo json_encode(["status"=>true,"msg"=>"Subjects Added Successfully Please Add Credits to Subjects.","bid"=>$bid]);
			}
			exit();
		}else{
			echo json_encode(["status"=>false,"msg"=>"Error Occured Please Try Again."]);
			exit();
		}
			
		
	}
	
	public function insertBranch(){
		
		$inst_id = $this->session->userdata("institute_id");
		$branch_name = $this->input->post("branch_name");
		$program = $this->input->post("program");
		$course = $this->input->post("course");
		$sub_categories = $this->input->post("sub_categories");
		$weightage = $this->input->post("weightage");
		$sub_cats = $this->input->post("sub_cats");
		$bid = $this->input->post("bid");
		
		if(round(array_sum($weightage),1) != round(100,1)){
			
			echo json_encode(["status"=>false,"msg"=>"weightage should be equal to 100%."]);
			exit();
			
		}
		
		$d = $this->session->set_userdata("branch_data",json_encode($_POST));
		
		if($this->session->userdata("branch_data")){
			
			$branch_data = json_decode($this->session->userdata("branch_data"));
			
			$weightages = [];

			foreach($branch_data->sub_cats as $k => $sc){

				$weightages[$sc] = $branch_data->weightage[$k];;

			}

			$bdata = [
				"institute_id" => $inst_id,
				"branch_name" => $branch_data->branch_name
			];

			if($bid){
				$d = $this->db->where("id",$bid)->update("tbl_institute_branches",$bdata);
			}else{
				$d = $this->db->insert("tbl_institute_branches",$bdata);
				$lid = $this->db->insert_id();
			}
			
			if($d){
			
				$pdata = [
					"branch_id" => $lid,
					"program" => $branch_data->program,
					"course" => $branch_data->course,
					"subject_categories" => json_encode($branch_data->sub_cats),
					"weightage" => json_encode($weightages),
				];

				if($bid){
					unset($pdata["branch_id"]);
					$pd = $this->db->where("branch_id",$bid)->update("tbl_institute_curriculum_design",$pdata);
				}else{
					$pd = $this->db->insert("tbl_institute_curriculum_design",$pdata);
					$lid = $this->db->insert_id();
				}
			
				if($bid){
					echo json_encode(["status"=>true,"msg"=>"Updated Successfully.","bid"=>$bid]);
				}else{
					echo json_encode(["status"=>true,"msg"=>"Course Created Successfully Please Add Subjects.","bid"=>$lid]);
				}
			
			}else{

				echo json_encode(["status"=>false,"msg"=>"Error Occured Please Try Again."]);
				exit();

			}
		}else{
			
			echo json_encode(["status"=>false,"msg"=>"Error Occured Please Try Again."]);
			exit();
			
		}
		
	}
	
	public function delBranch($id){
		
		$this->db->delete("tbl_institute_branches",["id"=>$id]);
		$this->db->delete("tbl_institute_curriculum_design",["branch_id"=>$id]);
		redirect("view-curriculum-designs");
		
	}
		
	public function logout(){
		
		$this->session->sess_destroy();
		redirect("institute-login");
		
	}
	
	public function getElectives(){
		
		$branch_data = json_decode($this->session->userdata("branch_data"));
		$sub_id = $this->input->post("sub_id");
		$elective = $this->input->post("electives");
		
		$sub_cats = $branch_data->sub_cats;
		
		$selectives = [];
		
		foreach($sub_cats as $k => $sc){
			
			$sel = $elective[$k][$sc][0];
			if($sel){
				$selectives[$sc] = $sel;
			}
			
		}
		
		
		$subjects = [];
		$data = $this->db->get_where("tbl_subjects",["elective_status"=>"common"])->result();
		
		foreach($sub_cats as $k => $sc){
		
			$ssub = [];
			foreach($data as $d){
				
				if($d->id == $selectives[$sc]){
					$ssub[] = ["id"=>$d->id,"subject_name"=>$d->subject_name,"selected"=>"true"];
				}else{
					if(!in_array($d->id,$selectives))
						$ssub[] = ["id"=>$d->id,"subject_name"=>$d->subject_name,"selected"=>"false"];					
				}
				
			}
			$subjects[$sc] = $ssub;
			
		}
		
		if(count($subjects) > 0){
			echo json_encode(["status"=>true,"subjects"=>$subjects]);
		}else{
			echo json_encode(["status"=>false,"subjects"=>[]]);
		}
		
	}
	
	public function getOpenelectives(){
		
		$branch_data = json_decode($this->session->userdata("branch_data"));
		$sub_id = $this->input->post("sub_id");
		$elective = $this->input->post("openelectives");
		
		$sub_cats = $branch_data->sub_cats;
		
		$selectives = [];
		
		foreach($sub_cats as $k => $sc){
			
			$sel = $elective[$k][$sc][0];
			if($sel){
				$selectives[$sc] = $sel;
			}
			
		}
		
		
		$subjects = [];
		$data = $this->db->get_where("tbl_subjects",["elective_status"=>"open"])->result();
		
		foreach($sub_cats as $k => $sc){
		
			$ssub = [];
			foreach($data as $d){
				
				if($d->id == $selectives[$sc]){
					$ssub[] = ["id"=>$d->id,"subject_name"=>$d->subject_name,"selected"=>"true"];
				}else{
					if(!in_array($d->id,$selectives))
						$ssub[] = ["id"=>$d->id,"subject_name"=>$d->subject_name,"selected"=>"false"];					
				}
				
			}
			$subjects[$sc] = $ssub;
			
		}
		
		if(count($subjects) > 0){
			echo json_encode(["status"=>true,"subjects"=>$subjects]);
		}else{
			echo json_encode(["status"=>false,"subjects"=>[]]);
		}
		
	}

	
}
