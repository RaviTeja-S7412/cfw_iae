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
		
		$data["programs"] = $this->db->order_by("program_name","asc")->get_where("tbl_programs",["status"=>1,"deleted"=>0])->result();
		$this->load->view('create',$data);
		
	}
	
	public function view(){
		
		$data["cdata"] = $this->db->order_by("id","desc")->get_where("tbl_institute_branches",["institute_id"=>$this->session->userdata("institute_id")])->result();
		$this->load->view('view',$data);
		
	}

	public function viewsemester(){
		
		
		$institution_id = $this->session->userdata('institute_id');
		
		$this->db->select("*");
		$this->db->join("tbl_institute_branches","tbl_institute_branches.id=tbl_institute_curriculum_design.branch_id");
		$this->db->join("tbl_courses","tbl_courses.id=tbl_institute_curriculum_design.course");
		$data["branch_data"] = $this->db->get_where("tbl_institute_curriculum_design",["branch_id"=>$this->input->get("bid")])->row();

		$semesters = [];

		foreach(json_decode($data["branch_data"]->credits) as $k => $s){

			$subjects = json_decode($data["branch_data"]->subjects, true)[$k];

			foreach($s->semesters as $sk => $sem){

				$sem_name = $this->db->get_where("tbl_semesters",["id"=>$sem])->row()->semester_name; 
				$subject_category_name = $this->db->get_where("tbl_subject_category",["id"=>$k])->row()->category_name; 
				$sub_data = $this->db->get_where("tbl_subjects",["id"=>$subjects[$sk]])->row(); 
				
				$semesters[] = ["subject_id"=>$subjects[$sk],"subject_category"=>$subject_category_name,"subject_name"=>$sub_data->subject_name,
				"ideal_credits"=>$sub_data->ideal_credits,"lecture_hours_per_week"=>$s->lecture_hours_per_week[$sk], "tutorial_hours_per_week"=>$s->tutorial_hours_per_week[$sk], "lab_hours_per_week"=>$s->lab_hours_per_week[$sk], "total_credits"=>$s->total_credits[$sk], "semester_name"=>$sem_name];
			}

		}

		$sids = array();
		foreach ($semesters as $sm) {
			$sids[] = (string) $sm['semester_name'];
		}
		$uniqueSids = array_unique($sids);

		$totalCredits = 0;
		
		foreach(json_decode($data["branch_data"]->credits) as $sc => $tc){
			
			$totalCredits += array_sum($tc->total_credits);
			
		}
		
		$data["totalCredits"] = $totalCredits;
		$data["unique_sems"] = $uniqueSids;
		$data["semesters"] = $semesters;
		$data["program"] = $this->db->get_where("tbl_programs",["id"=>$data["branch_data"]->program])->row();
		$data["course"] = $this->db->get_where("tbl_courses",["id"=>$data["branch_data"]->course])->row();
		
		$this->load->view('viewSemester',$data);
		
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

		$institution_id = $this->session->userdata('institute_id');
		
		$this->db->select("*");
		$this->db->join("tbl_institute_branches","tbl_institute_branches.id=tbl_institute_curriculum_design.branch_id");
		$this->db->join("tbl_courses","tbl_courses.id=tbl_institute_curriculum_design.course");
		$data["branch_data"] = $this->db->get_where("tbl_institute_curriculum_design",["branch_id"=>$this->input->get("bid")])->row();
		
		$data["sub_categories"] = json_decode($data["branch_data"]->subject_categories);
		$data["semesters"] = $this->db->get_where("tbl_semesters",["status"=>1])->result();
		
		$weightage = json_decode($data["branch_data"]->weightage);

		$icChk = $this->db->get_where("tbl_institution_course_credits",["course_id"=>$data["branch_data"]->course, "institution_id"=>$institution_id]);

		$min_credits = $data["branch_data"]->min_credits;
		$max_credits = $data["branch_data"]->max_credits;
		if($icChk->num_rows() > 0){
			$icdata = $icChk->row();
			$min_credits = $icdata->min_credits;
			$max_credits = $icdata->max_credits;
		}
		
		$weigtages = [];
		foreach($weightage as $k => $w){
			
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

	public function downloadPdf($bid){

		require_once(APPPATH.'libraries/mpdf/mpdf.php');
		$mpdf = new \mPDF('UTF-8', [300,215]);

		$institution_id = $this->session->userdata('institute_id');
		
		$this->db->select("*");
		$this->db->join("tbl_institute_branches","tbl_institute_branches.id=tbl_institute_curriculum_design.branch_id");
		$this->db->join("tbl_courses","tbl_courses.id=tbl_institute_curriculum_design.course");
		$data["branch_data"] = $this->db->get_where("tbl_institute_curriculum_design",["branch_id"=>$bid])->row();
		
		$sub_categories = json_decode($data["branch_data"]->subject_categories);
		$data["semesters"] = $this->db->get_where("tbl_semesters",["status"=>1])->result();
		$inst = $this->db->get_where("tbl_institutes",["id"=>$institution_id])->row();
		
		$weightage = json_decode($data["branch_data"]->weightage);

		$icChk = $this->db->get_where("tbl_institution_course_credits",["course_id"=>$data["branch_data"]->course, "institution_id"=>$institution_id]);

		$min_credits = $data["branch_data"]->min_credits;
		$max_credits = $data["branch_data"]->max_credits;
		if($icChk->num_rows() > 0){
			$icdata = $icChk->row();
			$min_credits = $icdata->min_credits;
			$max_credits = $icdata->max_credits;
		}
		
		$weigtages = [];
		foreach($weightage as $k => $w){
			
			$wdata = [];
			$wdata["max_weightage"] = round(($min_credits/100)*$w);
			$wdata["min_weightage"] = round(($max_credits/100)*$w);
			$weigtages[$k] = $wdata;
			
		}
		
		$totalCredits = 0;
		$scatcredits = [];
		foreach(json_decode($data["branch_data"]->credits) as $sc => $tc){
			
			$totalCredits += array_sum($tc->total_credits);
			$scatcredits[$sc] = array_sum($tc->total_credits);
			
		}
		
		$weigtages = $weigtages;
		$totalCredits = $totalCredits;
		$scatcredits = $scatcredits;
		$program = $this->db->get_where("tbl_programs",["id"=>$data["branch_data"]->program])->row();
		$course = $this->db->get_where("tbl_courses",["id"=>$data["branch_data"]->course])->row();

		$html = '
		<div style="font-family:helvetica; width:70%; margin:auto; padding:10px;">
		<div class="container">
			<h4 style="text-align:center; font-size: 22px;">'.$inst->institute_name.'</h4>
			 <h4 style="text-align:center; font-size: 22px;">'.$program->program_name."<br>".$course->course_name."<br>".$this->db->get_where("tbl_branches",["id"=>$data["branch_data"]->branch_name])->row()->branch_name.'</h4>
		  <div class="col-lg-12 card-col">
		  			<div>
					  <ul style="font-size:14px; width:28%; list-style:none; display:inline-block;margin-left:auto;">
					  	<span><b style="font-weight: 700">Credits Assigned: '.$totalCredits.'</b></span>
					  </ul>
				 	</div>';
		  		foreach($sub_categories as $key => $sc){
			  
				  $weigh = json_decode($data["branch_data"]->weightage)->$sc;
				  $scat = $this->db->select("category_name")->get_where("tbl_subject_category",["id"=>$sc,"status"=>1])->row();
				  $uWeightage = round($weigh/array_sum(json_decode($data["branch_data"]->weightage, true))*100);
				  $w = $weigtages[$sc];
			
				  $html .= '<h4 style="font-size: 15px;"><strong>'.$scat->category_name.' <br>(Weightage: '.$uWeightage." %".') (Credits: '.$weigh.', Added: <b class="weightage_added-'.$sc.'">'.$scatcredits[$sc].'</b>)</strong></h4>
				<table style="font-size: 14px; border-collapse: collapse;">
				  <thead>
					<tr style="border:1px solid gray;">
					  <th scope="col" style="border:1px solid gray;">Sl. No.</th>
					  <th scope="col" style="border:1px solid gray;">Course</th>
					  <th scope="col" style="border:1px solid gray;">Course Code</th>
					  <th scope="col" style="border:1px solid gray;">Lecture Hours Per Week</th>
					  <th scope="col" style="border:1px solid gray;">Tutorial Hours Per Week</th>
					  <th scope="col" style="border:1px solid gray;">Practicals/ Lab Hours Per Week</th>
					  <th scope="col" style="border:1px solid gray;">Credits</th>
					  <th scope="col" style="border:1px solid gray;">Semester</th>
					</tr>
				  </thead>
				  <tbody>';
					
					$subjects = json_decode($data["branch_data"]->subjects)->$sc;

					$lecture_hours_per_week = [];
					$tutorial_hours_per_week = [];
					$lab_hours_per_week = [];
					$total_credits = [];
						
					foreach($subjects as $sk => $sub){
						  
						$randomkey = random_string("alnum",10);
						$sdata = $this->db->get_where("tbl_subjects",["id"=>$sub])->row();
						$cdata = $this->db->get_where("tbl_course_codes",["course_id"=>$sub,"institute_id"=>$this->session->userdata("institute_id")])->row();

						$creditsData = json_decode($data["branch_data"]->credits)->$sc;
						array_push($lecture_hours_per_week, $creditsData->lecture_hours_per_week[$sk]);
						array_push($tutorial_hours_per_week, $creditsData->tutorial_hours_per_week[$sk]);
						array_push($lab_hours_per_week, $creditsData->lab_hours_per_week[$sk]);
						array_push($total_credits, $creditsData->total_credits[$sk]);
				  
						$html .= '<tr  style="border:1px solid gray;">
						  <td scope="row" style="text-align: left; border:1px solid gray;">'.($sk+1).'</td>
						  <td scope="row" style="text-align: left; border:1px solid gray;">'.$sdata->subject_name.'</td>
						  <td scope="row" style="text-align: left; border:1px solid gray;">'.$cdata->course_code.'</td>
						  <td style="border:1px solid gray;text-align: center;">'.$creditsData->lecture_hours_per_week[$sk].'</td>
						  <td style="border:1px solid gray;text-align: center;">'.$creditsData->tutorial_hours_per_week[$sk].'</td>
						  <td style="border:1px solid gray;text-align: center;">'.$creditsData->lab_hours_per_week[$sk].'</td>
						  <td style="border:1px solid gray;text-align: center;">'.$creditsData->total_credits[$sk].'</td>
						  <td style="border:1px solid gray;text-align: center;">'.$this->db->get_where("tbl_semesters",["id"=>$creditsData->semesters[$sk]])->row()->semester_name.'</td>
						</tr>';
				   	}
					$html .= '<tr>
						<td style="border:1px solid gray;text-align: center;" class="pull-right"></td>
						<td style="border:1px solid gray;text-align: center;" class="pull-right"></td>
						<td style="border:1px solid gray;text-align: center;" class="pull-right"><strong>Total</strong></td>
						<td style="border:1px solid gray;text-align: center;">'.array_sum($lecture_hours_per_week).'</td>
						<td style="border:1px solid gray;text-align: center;">'.array_sum($tutorial_hours_per_week).'</td>
						<td style="border:1px solid gray;text-align: center;">'.array_sum($lab_hours_per_week).'</td>
						<td style="border:1px solid gray;text-align: center;">'.array_sum($total_credits).'</td>
						<td style="border:1px solid gray;text-align: center;"></td>
					</tr>';
						
				$html .= '</tbody>
				</table>
				<br>';
		    }  
			$html .= '</div>
		</div>
	  </div>';

	
	  $mpdf->WriteHTML($html);
	  $mpdf->Output($inst->institute_name.".pdf","D");

	}

	public function downloadsemesterPdf($bid){

		require_once(APPPATH.'libraries/mpdf/mpdf.php');
		$mpdf = new \mPDF('UTF-8', [300,215]);

		$institution_id = $this->session->userdata('institute_id');
		$inst = $this->db->get_where("tbl_institutes",["id"=>$institution_id])->row();
		
		$this->db->select("*");
		$this->db->join("tbl_institute_branches","tbl_institute_branches.id=tbl_institute_curriculum_design.branch_id");
		$this->db->join("tbl_courses","tbl_courses.id=tbl_institute_curriculum_design.course");
		$data["branch_data"] = $this->db->get_where("tbl_institute_curriculum_design",["branch_id"=>$bid])->row();

		$semesters = [];

		foreach(json_decode($data["branch_data"]->credits) as $k => $s){

			$subjects = json_decode($data["branch_data"]->subjects, true)[$k];

			foreach($s->semesters as $sk => $sem){

				$sem_name = $this->db->get_where("tbl_semesters",["id"=>$sem])->row()->semester_name; 
				$subject_category_name = $this->db->get_where("tbl_subject_category",["id"=>$k])->row()->category_name; 
				$sub_data = $this->db->get_where("tbl_subjects",["id"=>$subjects[$sk]])->row(); 
				
				$semesters[] = ["subject_category"=>$subject_category_name,"subject_name"=>$sub_data->subject_name,
				"ideal_credits"=>$sub_data->ideal_credits,"lecture_hours_per_week"=>$s->lecture_hours_per_week[$sk], "tutorial_hours_per_week"=>$s->tutorial_hours_per_week[$sk], "lab_hours_per_week"=>$s->lab_hours_per_week[$sk], "total_credits"=>$s->total_credits[$sk], "semester_name"=>$sem_name, "subject_id"=>$sub_data->id];
			}

		}

		$sids = array();
		foreach ($semesters as $sm) {
			$sids[] = (string) $sm['semester_name'];
		}
		$uniqueSids = array_unique($sids);

		$totalCredits = 0;
		
		foreach(json_decode($data["branch_data"]->credits) as $sc => $tc){
			
			$totalCredits += array_sum($tc->total_credits);
			
		}
		
		$data["totalCredits"] = $totalCredits;
		$unique_sems = $uniqueSids;
		$semesters = $semesters;
		$program = $this->db->get_where("tbl_programs",["id"=>$data["branch_data"]->program])->row();
		$course = $this->db->get_where("tbl_courses",["id"=>$data["branch_data"]->course])->row();

		$icChk = $this->db->get_where("tbl_institution_course_credits",["course_id"=>$data["branch_data"]->course, "institution_id"=>$institution_id]);

		$min_credits = $data["branch_data"]->min_credits;
		$max_credits = $data["branch_data"]->max_credits;
		if($icChk->num_rows() > 0){
			$icdata = $icChk->row();
			$min_credits = $icdata->min_credits;
			$max_credits = $icdata->max_credits;
		}

		$html = '<div style="font-family:helvetica; width:70%; margin:auto; padding:10px;">
		<div class="container">
			<h4 style="text-align:center; font-size: 22px;">'.$inst->institute_name.'</h4>
			 <h4 style="text-align:center; font-size: 22px;">'.$program->program_name."<br>".$course->course_name."<br>".$this->db->get_where("tbl_branches",["id"=>$data["branch_data"]->branch_name])->row()->branch_name.'</h4>
		  <div class="col-lg-12 card-col">
		  			<div>
					  <ul style="font-size:14px; width:28%; list-style:none; display:inline-block;margin-left:auto;">
					  	<span><b style="font-weight: 700">Credits Assigned: '.$totalCredits.'</b></span>
					  </ul>
				 	</div>';
				foreach($unique_sems as $key => $sc){
	
					$weigh = json_decode($data["branch_data"]->weightage)->$sc;
					$scat = $this->db->select("category_name")->get_where("tbl_subject_category",["id"=>$sc,"status"=>1])->row();
					$w = $weigtages[$sc];
			
				  $html .= '<h4 style="font-size: 15px;"><strong>Semester - '.$sc.'</strong></h4>
				<table style="font-size: 14px; border-collapse: collapse;">
				  <thead>
					<tr style="border:1px solid gray;">
					  <th scope="col" style="border:1px solid gray;">Subject Category</th>
					  <th scope="col" style="border:1px solid gray;">Subject</th>
					  <th scope="col" style="border:1px solid gray;">Subject Code</th>
					  <th scope="col" style="border:1px solid gray;">Lecture Hours Per Week</th>
					  <th scope="col" style="border:1px solid gray;">Tutorial Hours Per Week</th>
					  <th scope="col" style="border:1px solid gray;">Practicals/ Lab Hours Per Week</th>
					  <th scope="col" style="border:1px solid gray;">Credits</th>
					</tr>
				  </thead>
				  <tbody>';
					
				  	$lecture_hours_per_week = [];
					$tutorial_hours_per_week = [];
					$lab_hours_per_week = [];
					$total_credits = [];
				  foreach($semesters as $sk => $sub){

					if($sub['semester_name'] == $sc){

						array_push($lecture_hours_per_week, $sub['lecture_hours_per_week']);
						array_push($tutorial_hours_per_week, $sub['tutorial_hours_per_week']);
						array_push($lab_hours_per_week, $sub['lab_hours_per_week']);
						array_push($total_credits, $sub['total_credits']);

						$cdata = $this->db->get_where("tbl_course_codes",["course_id"=>$sub['subject_id'],"institute_id"=>$this->session->userdata("institute_id")])->row();
				  
						$html .= '<tr  style="border:1px solid gray;">
						  <td scope="row" style="text-align: left; border:1px solid gray;">'.$sub['subject_category'].'</td>
						  <td scope="row" style="text-align: left; border:1px solid gray;">'.$sub['subject_name'].'</td>
						  <td scope="row" style="text-align: left; border:1px solid gray;">'.$cdata->course_code.'</td>
						  <td style="border:1px solid gray;text-align: center;">'.$sub['lecture_hours_per_week'].'</td>
						  <td style="border:1px solid gray;text-align: center;">'.$sub['tutorial_hours_per_week'].'</td>
						  <td style="border:1px solid gray;text-align: center;">'.$sub['lab_hours_per_week'].'</td>
						  <td style="border:1px solid gray;text-align: center;">'.$sub['total_credits'].'</td>
						</tr>';
				   	}
				}

				$html .= '<tr>
							<td style="border:1px solid gray;text-align: center;"></td>
							<td style="border:1px solid gray;text-align: center;"></td>
							<td style="border:1px solid gray;text-align: center;">Total</td>
							<td style="border:1px solid gray;text-align: center;text-align: center;">'.array_sum($lecture_hours_per_week).'</td>
							<td style="border:1px solid gray;text-align: center;text-align: center;">'.array_sum($tutorial_hours_per_week).'</td>
							<td style="border:1px solid gray;text-align: center;text-align: center;">'.array_sum($lab_hours_per_week).'</td>
							<td style="border:1px solid gray;text-align: center;text-align: center;">'.array_sum($total_credits).'</td>
						</tr>';
						
				$html .= '</tbody>
				</table>
				<br>';
		    }  
			$html .= '</div>
		</div>
	  </div>';

	  $mpdf->WriteHTML($html);
	  $mpdf->Output($inst->institute_name.".pdf","D");

	}
	
	public function addCredits(){

		$institution_id = $this->session->userdata('institute_id');
		
		$this->db->select("*");
		$this->db->join("tbl_institute_branches","tbl_institute_branches.id=tbl_institute_curriculum_design.branch_id");
		$this->db->join("tbl_courses","tbl_courses.id=tbl_institute_curriculum_design.course");
		$data["branch_data"] = $this->db->get_where("tbl_institute_curriculum_design",["branch_id"=>$this->input->get("bid")])->row();
		
		$data["sub_categories"] = json_decode($data["branch_data"]->subject_categories);
		$data["semesters"] = $this->db->get_where("tbl_semesters",["status"=>1])->result();

		$icChk = $this->db->get_where("tbl_institution_course_credits",["course_id"=>$data["branch_data"]->course, "institution_id"=>$institution_id]);

		$min_credits = $data["branch_data"]->min_credits;
		$max_credits = $data["branch_data"]->max_credits;
		if($icChk->num_rows() > 0){
			$icdata = $icChk->row();
			$min_credits = $icdata->min_credits;
			$max_credits = $icdata->max_credits;
		}
		
		$weightage = json_decode($data["branch_data"]->weightage);
		
		$weigtages = [];
		foreach($weightage as $k => $w){
			
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
		$iccdata = $this->db->get_where("tbl_institution_course_credits",["institution_id"=>$this->session->userdata("institute_id"),"course_id"=>$bdata->course])->row();
		
		$subCats = json_decode($bdata->subject_categories);
		
		$credits = [];
		
		if($sub_id){
			
			$sub_categories = $this->input->post("subjectCategories");
			$exCredits = json_decode($bdata->credits,true);
			
			if($exCredits){
				unset($exCredits[$sub_id]);
			}
			
			$subject_id = $this->input->post("subject_id");
			$course_code = $this->input->post("course_code");
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
			
			$course_codes = [];
			foreach($subCats as $ssc){
				if($exCredits[$ssc]){
					$credits[$ssc] = $exCredits[$ssc];
				}else{
					if($ssc == $sub_id){
						$credits[$ssc] = ["lecture_hours_per_week"=>$lectures,"tutorial_hours_per_week"=>$tutorial,"lab_hours_per_week"=>$lab,"total_credits"=>$total,"semesters"=>$semesters];
					}
				}
			}
			
			foreach($subject_id as $ski => $si){
				$course_codes[] = ["course_id"=>$si, "institute_id"=>$this->session->userdata("institute_id"), "course_code"=>$course_code[$ski]];
			}
			
		}else{
		
			$totalCredits = 0;
			$course_codes = [];
			foreach($subCats as $sc){

				$course_code = $this->input->post("course_code-$sc");
				$subject_id = $this->input->post("subject_id-$sc");
				$lectures = $this->input->post("lecture_hours_per_week-$sc");
				$tutorial = $this->input->post("tutorial_hours_per_week-$sc");
				$lab = $this->input->post("lab_hours_per_week-$sc");
				$total = $this->input->post("total_credits-$sc");
				$semesters = $this->input->post("semester-$sc");

				$totalCredits += array_sum($total);

				$credits[$sc] = ["lecture_hours_per_week"=>$lectures,"tutorial_hours_per_week"=>$tutorial,"lab_hours_per_week"=>$lab,"total_credits"=>$total,"semesters"=>$semesters];

				foreach($subject_id as $ski => $si){
					$course_codes[] = ["course_id"=>$si, "institute_id"=>$this->session->userdata("institute_id"), "course_code"=>$course_code[$ski]];
				}

			}

			$mCredits = $cdata->min_credits;
			if($iccdata->min_credits){
				$mCredits = $iccdata->min_credits;
			}

			if($totalCredits < $mCredits){

				echo json_encode(["status"=>false,"msg"=>"Total Credits Should Not be Less than Minimum Credits."]);
				exit();

			}
			
		}
		
		$d = $this->db->where("branch_id",$bid)->update("tbl_institute_curriculum_design",["credits"=>json_encode($credits),"status"=>1]);
		
		if($d){
			
			$branch_name = $this->db->get_where("tbl_branches",["id"=>$bd->branch_name])->row()->branch_name;
			$this->db->where("id",$bid)->update("tbl_institute_branches",["status"=>1]);

			foreach($course_codes as $cc){
				$ccData = ["course_id"=>$cc["course_id"], "institute_id"=>$this->session->userdata("institute_id"), "course_code"=>$cc['course_code']];

				$ccCodeChk = $this->db->get_where("tbl_course_codes", ["course_id"=>$cc["course_id"], "institute_id"=>$this->session->userdata("institute_id")])->num_rows();

				if($ccCodeChk > 0){
					$this->db->where(["course_id"=>$cc["course_id"], "institute_id"=>$this->session->userdata("institute_id")])->update("tbl_course_codes", ["course_code"=>$cc['course_code']]);
				}else{
					$this->db->insert("tbl_course_codes",$ccData);
				}

			}

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

		$cdata = $this->db->get_where("tbl_courses",["id"=>$course])->row();

		$icChk = $this->db->get_where("tbl_institution_course_credits",["course_id"=>$course, "institution_id"=>$inst_id]);

		$min_credits = $cdata->min_credits;
		$max_credits = $cdata->max_credits;
		if($icChk->num_rows() > 0){
			$icdata = $icChk->row();
			$min_credits = $icdata->min_credits;
			$max_credits = $icdata->max_credits;
		}

		if((round(array_sum($weightage),1) < $min_credits) && (round(array_sum($weightage),1) < $min_credits)){

			echo json_encode(["status"=>false,"msg"=>"Credits Should be in between $min_credits & $max_credits."]);
			exit();

		}
		/* if(round(array_sum($weightage),1) != round(100,1)){
			
			echo json_encode(["status"=>false,"msg"=>"weightage should be equal to 100%."]);
			exit();
			
		} */
		
		$d = $this->session->set_userdata("branch_data",json_encode($_POST));
		
		if($this->session->userdata("branch_data")){
			
			$branch_data = json_decode($this->session->userdata("branch_data"));
			
			$weightages = [];
			$course_category_codes = [];

			foreach($branch_data->sub_cats as $k => $sc){

				$weightages[$sc] = $branch_data->weightage[$k];
				$course_category_codes[] = ["course_category_id"=> $sc, "institute_id"=> $inst_id, "course_category_code"=>$branch_data->course_category_code[$k]];

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

					foreach($course_category_codes as $ccc){
						$this->db->where(["course_category_id"=> $ccc["course_category_id"], "institute_id"=> $ccc["institute_id"]])->update("tbl_course_category_codes",["course_category_code"=>$ccc["course_category_code"]]);
					}
				}else{
					$pd = $this->db->insert("tbl_institute_curriculum_design",$pdata);
					$lid = $this->db->insert_id();

					foreach($course_category_codes as $ccc){
						$this->db->insert("tbl_course_category_codes", $ccc);
					}
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
