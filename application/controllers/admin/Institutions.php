<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Institutions extends CI_Controller {
	
	public function __construct(){
		
		parent::__construct();
		if(!$this->session->userdata('adminid')){
        	redirect('admin/login');
        }
		
	}

	public function index(){
		
		$this->load->view("admin/institutions");
		
	}
	
	public function edit($id){
		
		$data["idata"] = $this->db->get_where("tbl_institutes",["id"=>$id])->row();
		$this->load->view("admin/editInstitution",$data);
		
	}
	
	public function viewBranches($id){
		
		$data["idata"] = $this->db->get_where("tbl_institutes",["id"=>$id])->row();
		
		$this->db->select("tbl_institute_branches.id,tbl_institute_branches.branch_name,tbl_courses.course_name,tbl_programs.program_name");
		$this->db->join("tbl_institute_curriculum_design","tbl_institute_curriculum_design.branch_id=tbl_institute_branches.id");
		$this->db->join("tbl_courses","tbl_courses.id=tbl_institute_curriculum_design.course");
		$this->db->join("tbl_programs","tbl_programs.id=tbl_institute_curriculum_design.program");
		$data["bdata"] = $this->db->order_by("tbl_institute_branches.id","desc")->get_where("tbl_institute_branches",["tbl_institute_branches.institute_id"=>$id,"tbl_institute_branches.status"=>1])->result();
		$this->load->view("admin/viewBranches",$data);
		
	}
	
	public function viewDesign($id){
		
		$this->db->select("*");
		$this->db->join("tbl_institute_branches","tbl_institute_branches.id=tbl_institute_curriculum_design.branch_id");
		$this->db->join("tbl_courses","tbl_courses.id=tbl_institute_curriculum_design.course");
		$data["branch_data"] = $this->db->get_where("tbl_institute_curriculum_design",["branch_id"=>$id])->row();
		
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
		
		$this->load->view('admin/viewcDesign',$data);
		
	}
	
	public function updateInstitute(){
		
		$data = $this->input->post();
		$email = $this->input->post("email");
		$id = $this->input->post("id");
		
		$eChk = $this->db->get_where("tbl_institutes",["email"=>$email,"id !="=>$id])->num_rows();
		if($eChk > 0){
			echo json_encode(["status"=>400,"msg"=>'Email ID Already registered with another Institution.']);
			exit();
		}
		
		unset($data["id"]);
		$d = $this->db->where("id",$id)->update("tbl_institutes",$data);
		
		if($d){
			
			echo json_encode(["status"=>200,"msg"=>'Institution Updated Successfully.']);
			exit();
				
		}else{
			
			echo json_encode(["status"=>400,"msg"=>'Error Occured Please Try Again.']);
			exit();
			
		}
		
	}
	
	public function resendVerificationemail(){
		
		$id = $this->input->post("id");
		$idata = $this->db->get_where("tbl_institutes",["id"=>$id])->row();
		
		$email = $idata->email;
		$encrypt = $this->secure->app_password_crypt($email,'e');
		$activation_link = base_url()."home/activateInstitute?user=$encrypt";
		$date = date("Y-m-d H:i:s");

		$html ='<!DOCTYPE html>
				<html>
				<head>
					<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
				</head>

				<body>';


					$html .= '

					<p>Dear '.$idata->contact_person_name.',<br><br>		
						You have initiated a "Registration" process with Curriculum Design Portal, dated '.$date.'.<br><br>
						Please click on the below mentioned activation link or access the same using your web browser to complete your registration process.<br><br>
						<a href="'.$activation_link.'">Click Here</a> to verify your account.
					</p>

					<p>

						Regards<br>
						Team IAE<br><br>

						<img src="'.base_url().'assets/images/emaillogo.jpg" style="width:18%"><br>
						<strong>Institute for Academic Excellence</strong><br><br>
						#3-6-692, Street No.12, Himayathnagar,<br>
						Hyderabad - 500029, Telangana.<br>
						Mobile No.: 9618739900<br>
						Email : <a href="mailto:info@iae.education">info@iae.education</a><br>
						Website: <a href="www.iae.education">www.iae.education</a>

					</p>

					</body>
				</html>';

		$this->secure->send_email($idata->email,"Your Account Activation Details",$html);

		echo json_encode(["status"=>200,"msg"=>'Email Sent Successfully Please Verify Your Email To Active Your Account.']);
		
	}
	
	public function updatePassword(){
		
		$password = $this->input->post("password");
		$cpassword = $this->input->post("cpassword");
		$id = $this->input->post("cid");
		
		if($password != $cpassword){
			echo json_encode(["status"=>400,"msg"=>'Password & Confirm Password Not Matched.']);
			exit();
		}
		
		$d = $this->db->where("id",$id)->update("tbl_institutes",["password"=>$this->secure->app_password_crypt($password,'e')]);
		
		if($d){
			
			echo json_encode(["status"=>200,"msg"=>'Password Updated Successfully.']);
			exit();
				
		}else{
			
			echo json_encode(["status"=>400,"msg"=>'Error Occured Please Try Again.']);
			exit();
			
		}
		
	}
	
	public function updateStatus(){
		
		$id = $this->input->post("id");
		$status = $this->input->post("status");
		$d = $this->db->where("id",$id)->update("tbl_institutes",["is_activated"=>$status]);
		
		if($d){
			if($status == 1){
				echo json_encode(["status"=>200,"msg"=>"Institution Activated Successfully."]);
			}else{
				echo json_encode(["status"=>200,"msg"=>"Institution Deactivated Successfully."]);
			}
		}
		
	}
	
}
