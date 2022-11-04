<? $this->load->view("admin/back_common/admin_header"); 
	$id = $this->uri->segment(4);
?>   
 <link rel="stylesheet" href="<? echo base_url('assets/') ?>plugins/select2/css/select2.min.css">
 <link rel="stylesheet" href="<? echo base_url('assets/') ?>plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
 <link rel="stylesheet" href="<? echo base_url('assets/') ?>plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">CURRICULUM DESIGN</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<? echo base_url("admin/dashboard") ?>">Home</a></li>
              <li class="breadcrumb-item"><a href="<? echo base_url("admin/institutions") ?>">Institutions</a></li>
              <li class="breadcrumb-item"><a href="<? echo base_url("admin/institutions/viewBranches/") ?>">Branches</a></li>
              <li class="breadcrumb-item active">Curriculum Design</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
   
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid" id="content1">
        <!-- Info boxes -->
        <div class="row">
        	<div class="col-md-12">
				<div class="card card-primary card-outline">
					<div class="card-header">
						<h3 class="card-title">CURRICULUM DESIGN - <? echo $branch_data->branch_name." (".$program->program_name." - ".$course->course_name.")" ?></h3>
					</div>
					<div class="card-body">
						<div class="col-lg-12 card-col">
							<div class="row mb-3">
								<div class="col-lg-6">
									<? if($ref == "view"){ ?>
									 <a href="<? echo base_url('view-curriculum-designs') ?>">
										<i class="fa fa-arrow-left backFields pull-left" data-toggle="tooltip" title="Back To Designs" style="cursor: pointer;font-size: 25px;"></i>
									 </a>
									<? } ?>
								</div>
								<div class="col-lg-6 ml-auto d-flex">
									<p class="mb-0 text-dark p-1 text-left">
									  <b style="font-weight: 700">Min Credits:</b> <b><? echo $branch_data->min_credits ?></b>
									</p>
									<p class="mb-0 text-dark p-1 ml-auto">
									  <b style="font-weight: 700">Max Credits:</b> <b><? echo $branch_data->max_credits ?></b>
									</p>
									<p class="mb-0 text-dark p-1 ml-auto">
									  <b style="font-weight: 700">Credits Assigned:</b> <b class="totalCredits"><? echo $totalCredits ?></b>
									</p>
									<i class="fa fa-download downloadPdf pull-right mt-1 ml-3" onClick="printDiv()" data-toggle="tooltip" title="Download PDF" style="cursor: pointer;font-size: 22px;"></i>
								</div>
							</div>
						<? foreach($sub_categories as $key => $sc){

								$weigh = json_decode($branch_data->weightage)->$sc;
								$scat = $this->db->select("category_name")->get_where("tbl_subject_category",["id"=>$sc,"status"=>1])->row();
								$w = $weigtages[$sc];
						?>

							  <h6><strong><? echo $scat->category_name ?> (Weightage: <? echo $weigh." %" ?>) (Credits: <? echo $w["max_weightage"]." - ".$w["min_weightage"] ?>, Added: <b class="weightage_added-<? echo $sc ?>"><? echo $scatcredits[$sc] ?></b>)</strong></h6>
							  <table id="example" class="table table-striped table-bordered" style="font-size: 14px">
								<thead>
								  <tr>
									<th scope="col">Subject</th>
									<th scope="col">Ideal Credits</th>
									<th scope="col">Lecture Hours Per Week</th>
									<th scope="col">Tutorial Hours Per Week</th>
									<th scope="col">Practicals/ Lab Hours Per Week</th>
									<th scope="col">Credits</th>
									<th scope="col">Semester</th>
								  </tr>
								</thead>
								<tbody>

								<? 
									$subjects = json_decode($branch_data->subjects)->$sc;

									foreach($subjects as $sk => $sub){

										$randomkey = random_string("alnum",10);
										$sdata = $this->db->get_where("tbl_subjects",["id"=>$sub])->row();

										$creditsData = json_decode($branch_data->credits)->$sc;
								?>
									  <tr>
										<td scope="row" style="text-align: left"><? echo $sdata->subject_name; ?></td>
										<td><? echo $sdata->ideal_credits ?></td>
										<td><? echo $creditsData->lecture_hours_per_week[$sk] ?></td>
										<td><? echo $creditsData->tutorial_hours_per_week[$sk] ?></td>
										<td><? echo $creditsData->lab_hours_per_week[$sk] ?></td>
										<td><? echo $creditsData->total_credits[$sk] ?></td>
										<td><? echo $this->db->get_where("tbl_semesters",["id"=>$creditsData->semesters[$sk]])->row()->semester_name; ?></td>
									  </tr>
								<? } ?>

								</tbody>
							  </table>
							  <br>
						<? } ?>  
						</div>
					</div>
				</div>
			</div>
        </div>
        <!-- /.row -->
        
      </div><!--/. container-fluid -->
    </section>
    
   <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->    
 
<? $this->load->view("admin/back_common/admin_footer") ?> 
<script src="<? echo base_url('assets/') ?>plugins/select2/js/select2.full.min.js"></script>
<script src="<? echo base_url('assets/') ?>plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>

<script>

	function printDiv() {

	  var divToPrint=document.getElementById('content1');

	  var newWin=window.open('','Print-Window');

	  newWin.document.open();

	  newWin.document.write('<html><body onload="window.print()">'+divToPrint.innerHTML+'</body></html>');

	  newWin.document.close();

	  setTimeout(function(){newWin.close();},10);

	}
	
</script>
