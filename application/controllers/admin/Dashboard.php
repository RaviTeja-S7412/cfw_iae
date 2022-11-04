<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	
	public function __construct(){
		
		parent::__construct();
		if(!$this->session->userdata('adminid')){
        	redirect('admin/login');
        }
		
	}

	public function index(){
		
		$this->load->view("admin/dashboard");
		
	}
	
	public function profile(){
		
		$data["adata"] = $this->db->get_where("tbl_auths",["UserId"=>$this->session->userdata("adminid")])->row();
		$this->load->view("admin/profile",$data);
		
	}
	
	public function editProfile() {
		
		$id = $this->session->userdata( "adminid" );
		$aname = $this->input->post( "admin_name", true );
		$aemail = $this->input->post( "admin_email", true );
		$adata = $this->db->get_where( "tbl_auths", array( "UserId" => $id ) )->row();

		$destination = $adata->profile_image;
		if ( $_FILES[ 'profile_pic' ][ 'size' ] != '0' ) {

			$allowed_image_extension = array(
				"png",
				"jpg",
				"jpeg"
			);

			// Get image file extension
			$file_extension = pathinfo( $_FILES[ "profile_pic" ][ "name" ], PATHINFO_EXTENSION );

			if ( !in_array( $file_extension, $allowed_image_extension ) ) {

				echo json_encode(["status"=>400,"msg"=>"Please select valid image"]);
				exit();

			} else {
				$destination = 'assets/images/' . $_FILES[ "profile_pic" ][ "name" ]; //change this directory
				$location = $_FILES[ "profile_pic" ][ "tmp_name" ];
				move_uploaded_file( $location, $destination );
			}
		}

		$data = array( "Name" => $aname, "Email" => $aemail, "profile_image" => $destination );
		$this->db->set( $data );
		$this->db->where( "UserId", $id );
		$au = $this->db->update( "tbl_auths" );

		if ( $au ) {
			echo json_encode(["status"=>200,"msg"=>"Profile Successfully Updated."]);
			exit();
		} else {
			echo json_encode(["status"=>400,"msg"=>"Error Occured Please Try Again."]);
			exit();
		}

	}

	public function changePassword() {

		$opass = $this->input->post( "opass", true );
		$npass = $this->input->post( "npass", true );
		$cpass = $this->input->post( "cpass", true );

		$aid = $this->session->userdata( "adminid" );


		$a = $this->db->get_where( "tbl_auths", array( "UserId" => $aid ) )->row();
		$op = $this->secure->app_password_crypt( $a->User_Password, 'd' );

		if ( $opass == $op ) {

			if ( $npass != $cpass ) {
				echo json_encode(["status"=>400,"msg"=>"Password & Confirm Password Do Not Match."]);
				exit();
			}
			$data = array( "User_Password" => $this->secure->app_password_crypt( $npass, 'e' ) );
			$this->db->set( $data );
			$this->db->where( "UserId", $aid );
			$pp = $this->db->update( "tbl_auths" );
			if ( $pp ) {
				echo json_encode(["status"=>200,"msg"=>"Password Successfully Updated."]);
				exit();
			} else {
				echo json_encode(["status"=>400,"msg"=>"Error Occured While Updating Your Password Please Try Again."]);
				exit();
			}

		} else {
			echo json_encode(["status"=>400,"msg"=>"Please Enter Old Password Correctly."]);
			exit();
		}
	}
	
	public function logout(){
		
		$this->session->sess_destroy();
		redirect("admin/login");
		
	}
}
