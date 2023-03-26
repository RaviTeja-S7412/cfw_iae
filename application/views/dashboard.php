<? $this->load->view("front_common/header") ?>

<? 
	$iData = $this->db->get_where("tbl_institutes",["id"=>$this->session->userdata("institute_id")])->row();
?>

	<div class="content1">
	  <div class="container">
		<h4 align="center"><? echo $iData->institute_name ?></h4>
	  	<h4>Curriculum Design</h4>
		<div class="col-lg-12 card-col">
		  
		  <div class="row">
			<div class="col-lg-4"> <a href="<? echo base_url('create-design') ?>">
			  <div class="boxs bg-info"> <i class="fa fa-plus fa-2x" aria-hidden="true"></i>
				<h4>Create</h4>
			  </div>
			  </a> </div>
			<div class="col-lg-4"> <a href="<? echo base_url("view-curriculum-designs") ?>">
			  <div class="boxs bg-secondary"> <i class="fa fa-eye fa-2x" aria-hidden="true"></i>
				<h4>View</h4>
			  </div>
			  </a> </div>

			   <div class="col-lg-4"> <a href="<? echo base_url("dashboard/reference") ?>">
			  <div class="boxs bg-success"> <i class="fa fa-plus fa-2x" aria-hidden="true"></i>
				<h4>Reference</h4>
			  </div>
			  </a> </div>

		  </div>
		</div>
	  </div>
	</div>

<? $this->load->view("front_common/footer") ?>