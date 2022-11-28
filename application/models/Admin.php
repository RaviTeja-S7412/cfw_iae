<?php

defined("BASEPATH") OR exit("No direct script access allow");


class Admin extends CI_Model{
	
	public function __construct(){
		
		parent::__construct();

	}
	
	public function getCreditweightage($weightage,$cid){
		
		$institution_id = $this->session->userdata('institute_id');
		$cdata = $this->db->get_where("tbl_courses",["id"=>$cid])->row();

		$icChk = $this->db->get_where("tbl_institution_course_credits",["course_id"=>$cid, "institution_id"=>$institution_id]);

		$min_credits = $cdata->min_credits;
		$max_credits = $cdata->max_credits;
		if($icChk->num_rows() > 0){
			$icdata = $icChk->row();
			$min_credits = $icdata->min_credits;
			$max_credits = $icdata->max_credits;
		}

		$max_weightage = round(($min_credits/100)*$weightage);
		$min_weightage = round(($max_credits/100)*$weightage);
		
		$wc = ["max_weightage"=>$max_weightage,"min_weightage"=>$min_weightage];
		$data = ($weightage != "") ? $wc : [];
		
		return $data;
	
	}

	public function insertoption($option_name,$option_value){
		
		$on=$this->db->get_where("tbl_options",array('option_name'=>$option_name));
		$os=$on->num_rows();
		
		if($os=='0'){
			
			$data=array("option_name"=>$option_name,
					   "option_value"=>$option_value);
			
			$oss=$this->db->insert("tbl_options",$data);
			
			if($oss){
				return true;
			}else{
				return false;
			}
			
		}
		
		if($os='1'){
			
			$data=array("option_name"=>$option_name,
					   "option_value"=>$option_value);
			
			$this->db->set($data);
			$this->db->where("option_name",$option_name);
			$oss=$this->db->update("tbl_options");
			
			if($oss){
				return true;
			}else{
				return false;
			}
		}		
		
	}
	
	public function get_option($option_name){
		
		$option=$this->db->get_where("tbl_options",array("option_name"=>$option_name));
		$o=$option->row();
		if($o){
		
		return $o->option_value;	
		}else{
			$oo='0';
		return $oo;
		}
	}
	
	public function getMoney($num){
		
		$explrestunits = "" ;
		if(strlen($num)>3) {
			$lastthree = substr($num, strlen($num)-3, strlen($num));
			$restunits = substr($num, 0, strlen($num)-3); // extracts the last three digits
			$restunits = (strlen($restunits)%2 == 1)?"0".$restunits:$restunits; // explodes the remaining digits in 2's formats, adds a zero in the beginning to maintain the 2's grouping.
			$expunit = str_split($restunits, 2);
			for($i=0; $i<sizeof($expunit); $i++) {
				// creates each of the 2's group and adds a comma to the end
				if($i==0) {
					$explrestunits .= (int)$expunit[$i].","; // if is first value , convert into integer
				} else {
					$explrestunits .= $expunit[$i].",";
				}
			}
			$thecash = $explrestunits.$lastthree;
		} else {
			$thecash = $num;
		}
		return $thecash;
		
	}
	
}