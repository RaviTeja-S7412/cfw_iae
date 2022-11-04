<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';

class Login extends REST_Controller {
	
	public function do_login_post(){
		
//		$rest_json = file_get_contents("php://input");
//		$_POST = json_decode($rest_json, true);
		$email = $this->input->post("email");
		$password = $this->input->post("password");

		if($email == ""){
			$data = ["status"=>400,"msg"=>"Email Is Required","post"=>$rest_json];
			$this->response($data, REST_Controller::HTTP_OK);
		}
		if($password == ""){
			$data = ["status"=>400,"msg"=>"Password Is Required"];
			$this->response($data, REST_Controller::HTTP_OK);
		}
		
		$pass = $this->secure->app_password_crypt($password,"e");
		
		$check_email = $this->db->where('Email',$email)->get('tbl_auths');
		if($check_email->num_rows() > 0){
			$row = $check_email->row_array();
			if($row["User_Password"] != $pass){
				 $data=["status"=>400,"msg"=>"Password is wrong."];
				 $this->response($data, REST_Controller::HTTP_OK);
			}
			if($row['Status']=='Active'){
				$this->session->set_userdata(array("adminid"=>$row['UserId'],"admin_email"=>$row['Email'],"role"=>$row['Role'],"status"=>$row['Status'],"admin_mobile"=>$row['Mobile'],"admin_name"=>$row['Name'],"logged_in"=>true));
				
				$token = random_string("alnum",20);
				$data=["status"=>200,"msg"=>"Success","token"=>$token,"user"=>$row];
				$this->response($data, REST_Controller::HTTP_OK);
				
			}else{
  				$data=["status"=>400,"msg"=>"Your accout has been deactivated, please contact Admin."];
				$this->response($data, REST_Controller::HTTP_OK);
			}
		}else{
			$data =["status"=>400,"msg"=>"Please check login credentials."];
			$this->response($data, REST_Controller::HTTP_OK);
		}
		
	}
	
	
	public function get_userdata_post(){
		
		$rest_json = file_get_contents("php://input");
		$_POST = json_decode($rest_json, true);
		
		$id = $this->input->post("user_id");
		
		$udata = $this->db->get_where("tbl_auths",["Sno"=>$id])->row();
		if($udata){
			
			$data=["status"=>200,"user"=>$udata];
			$this->response($data, REST_Controller::HTTP_OK);
				
		}else{
			
			$data =["status"=>400,"msg"=>"User details not found."];
			$this->response($data, REST_Controller::HTTP_OK);
			
		}
		
	}
	
	public function signout_post(){
		
		$data=["status"=>200,"msg"=>"Logout Successfully"];
		$this->response($data, REST_Controller::HTTP_OK);
		
	}
}
