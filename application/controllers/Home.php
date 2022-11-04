<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index(){
		
		if($this->session->userdata('institute_id')){
        	redirect('dashboard');
        }
		
		$this->load->view('login');
	}
	
	public function do_login(){
		
		$email = $this->input->post("email");
		$password = $this->input->post("password");
		
		$check_email = $this->db->where('email',$email)->get('tbl_institutes');
		if($check_email->num_rows() > 0){
			$row = $check_email->row_array();
			if($this->secure->app_password_crypt($row["password"],'d') != $password){
				 echo json_encode(["Status"=>false,"msg"=>'<div class="alert alert-danger">Password is incorrect.</div>']);
				 exit();
			}
			
			if($row['is_activated'] == 0){
				
				echo json_encode(["Status"=>false,"msg"=>'<div class="alert alert-danger">Your Account Is Deactivated, Please Contact Administrator.</div>']);
				exit();
				
			}
			
			if($row["status"] == 1){
				$this->session->set_userdata(array("institute_id"=>$row['id'],"email"=>$row['email'],"mobile"=>$row['contact_person_mobile'],"institute_name"=>$row['institute_name'],"logged_in"=>true));
				$data=["status"=>true,"msg"=>"success"];
				echo json_encode($data);
				exit();
			}else{
				
				if($row["is_email_verified"] == 0){
					echo json_encode(["Status"=>false,"msg"=>'<div class="alert alert-danger">Email ID Not Verified.</div>']);
					exit();
				}
				if($row["is_mobile_verified"] == 0){
					echo json_encode(["Status"=>false,"msg"=>'<div class="alert alert-danger">Mobile Number Not Verified.</div>']);
					exit();
				}
				
			}
			
		}else{
			echo json_encode(["Status"=>false,"msg"=>'<div class="alert alert-danger">Please check login credentials.</div>']);
			exit();
		}
		
	}
	
	public function register(){
		$this->load->view('register');
	}
	
	public function insertInstitute(){
		
		$data = $this->input->post();
		$password = $this->input->post("password");
		$cpassword = $this->input->post("cpassword");
		$email = $this->input->post("email");
		
		if($password != $cpassword){
			echo json_encode(["status"=>false,"msg"=>'<div class="alert alert-danger">Password & Confirm Password Not Matched.</div>']);
			exit();
		}
		
		$eChk = $this->db->get_where("tbl_institutes",["email"=>$email])->num_rows();
		if($eChk > 0){
			echo json_encode(["status"=>false,"msg"=>'<div class="alert alert-danger">Email ID Already registered with another Institution.</div>']);
			exit();
		}
		
		$data["password"] = $this->secure->app_password_crypt($password,'e');
		unset($data["cpassword"]);
		
		$d = $this->db->insert("tbl_institutes",$data);
		
		if($d){
			
			$encrypt = $this->secure->app_password_crypt($data['email'],'e');
			$activation_link = base_url()."home/activateInstitute?user=$encrypt";
			$date = date("Y-m-d H:i:s");
			
			$html ='<!DOCTYPE html>
					<html>
					<head>
					 	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
					</head>

					<body>';


						$html .= '

						<p>Dear '.$data['contact_person_name'].',<br><br>		
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
			
			$this->secure->send_email($data["email"],"Your Account Activation Details",$html);
			
			echo json_encode(["status"=>true,"msg"=>'<div class="alert alert-success">Institution Registered Successfully Please Verify Your Email To Active Your Account.</div>']);
			exit();
				
		}else{
			
			echo json_encode(["status"=>false,"msg"=>'<div class="alert alert-danger">Error Occured Please Try Again.</div>']);
			exit();
			
		}
		
	}
	
	public function activateInstitute(){
		
		$user = $this->secure->app_password_crypt($this->input->get("user"),'d');
		$iChk = $this->db->get_where("tbl_institutes",["email"=>$user])->result();
		
		if($user){
		
			if($iChk >= 1){

				$d = $this->db->where("email",$user)->update("tbl_institutes",["is_email_verified"=>1,"status"=>1]);
				if($d){
					$data["data"] = ["status"=>true,"msg"=>"Your Email Has Successfully Verified"];				
				}else{
					$data["data"] = ["status"=>false,"msg"=>"Your Activation Link Has Expired"];
				}

			}else{
				$data["data"] = ["status"=>false,"msg"=>"Your Activation Link Has Expired"]; 
			}
		
		}else{
			
			$data["data"] = ["status"=>false,"msg"=>"Your Activation Link Has Expired"]; 
			
		}
			
		$this->load->view('activation',$data);
		
	}
	
	public function resendEmail(){
		
	}
	
	public function sendOtp(){
		
		$mobile = $this->input->post("mobile");
		$mchk = $this->db->get_where("tbl_mobile_otp",array("mobile"=>$mobile))->num_rows();

		if($mchk > 0){
			$mdata = $this->db->get_where("tbl_mobile_otp",array("mobile"=>$mobile))->row();
			$msg = "Welcome to curriculum design, Your OTP for registration is $mdata->otp, do not share this with anyone.";

			$this->secure->sms_otp($mobile,$msg);

		}else{

			$motp = random_string('numeric',4);
			$mo = $this->db->insert("tbl_mobile_otp",array("mobile"=>$mobile,"otp"=>$motp));

			if($mo){

				$msg = "Welcome to curriculum design, Your OTP for registration is $motp, do not share this with anyone.";
				$this->secure->sms_otp($mobile,$msg);

			}

		}
		
		echo json_encode(array("status"=>true,"msg"=>'<div class="alert alert-success">OTP Sent successfully.</div>'));
			
	}
	
	public function confirmOtp(){
		
		$motp = $this->input->post("otp");
		$mobile = $this->input->post("mobile");
		$mchk = $this->db->order_by("id","desc")->get_where("tbl_mobile_otp",array("mobile"=>$mobile,"otp"=>$motp))->num_rows();
		
		if($mchk == 1){
			$this->db->delete("tbl_mobile_otp",array("mobile"=>$mobile));
			echo json_encode(array("status"=>true,"msg"=>'<div class="alert alert-success">OTP Verified successfully.</div>'));
		}else{
			echo json_encode(array("status"=>false,"msg"=>'<div class="alert alert-danger">Mobile OTP is wrong</div>'));
			exit();
		}
		
	}
	
	public function activation(){
		
		$this->load->view('activation');
		
	}
	
	public function forgotPassword(){
		
		$mobile = $this->input->post("mobile");
		$mChk = $this->db->get_where("tbl_institutes",["contact_person_mobile"=>$mobile,"status"=>1,"deleted"=>0])->num_rows();
		
		if($mChk >= 1){
			
			echo json_encode(["status"=>true,"msg"=>"success"]);
			exit();
			
		}else{
			
			echo json_encode(["status"=>false,"msg"=>'<div class="alert alert-danger">Mobile Number Not Registered With Us.</div>']);
			exit();
			
		}
		
	}
	
	public function changePassword(){
		
		$mobile = $this->input->post("mobile");
		$password = $this->input->post("password");
		$cpassword = $this->input->post("cpassword");
		
		if($password != $cpassword){
			echo json_encode(["status"=>false,"msg"=>'<div class="alert alert-danger">Password & Confirm Password Not Matched.</div>']);
			exit();
		}
		
		$d = $this->db->where("contact_person_mobile",$mobile)->update("tbl_institutes",["password"=>$this->secure->app_password_crypt($password,'e')]);
		
		if($d){
			
			echo json_encode(["status"=>true,"msg"=>'<div class="alert alert-success">Password Updated Successfully.</div>']);
			exit();
			
		}else{
			
			echo json_encode(["status"=>false,"msg"=>'<div class="alert alert-danger">Mobile Number Not Registered With Us.</div>']);
			exit();
			
		}
		
	}

}
