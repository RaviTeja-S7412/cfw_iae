<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Institutions extends MY_Controller {

	public function register()
	{
		$this->load->helper(array('form'));
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[tbl_institutions.email]');
		$this->form_validation->set_rules('institution_name', 'Institution Name', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|matches[password]');

		if ($this->form_validation->run() == FALSE){
			
			echo json_encode(["status"=>false,"msg"=>validation_errors()]);
			exit();				 
			
		}else{
			
			$data = [
				"institution_name" => $this->input->post("institution_name"),
				"email" => $this->input->post("email"),
				"password" => $this->secure->encrypt($this->input->post("password")),
				"address" => $this->input->post("address"),
				"contact_person_name" => $this->input->post("contact_person_name"),
				"contact_person_mobile_number" => $this->input->post("contact_person_mobile_number"),
				"contact_person_email" => $this->input->post("contact_person_email"),
			];
			
			$d = $this->db->insert("tbl_institutions",$data);
			
			if($d){
				
				
				
			}
			
		}
		
	}
	
}
