<? 
	$this->load->view("front_common/header"); 
	$ref = $this->input->get("ref");

	$institution_id = $this->session->userdata('institute_id');
	
	$icChk = $this->db->get_where("tbl_institution_course_credits",["course_id"=>$branch_data->course, "institution_id"=>$institution_id]);

	$min_credits = $branch_data->min_credits;
	$max_credits = $branch_data->max_credits;
	if($icChk->num_rows() > 0){
		$icdata = $icChk->row();
		$min_credits = $icdata->min_credits;
		$max_credits = $icdata->max_credits;
	}
?>
<link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
<link href="https://cdn.datatables.net/fixedheader/3.2.2/css/fixedHeader.bootstrap4.min.css" rel="stylesheet" />

<style>
	.content {
		padding: 7rem 0;
	}
	#example th{     
		background: #0c355d ;
		color: #fff;
	}
		
</style>

    <div class="content1" id="content1">
      <div class="container">
       	<h4>(<? echo $program->program_name." - ".$course->course_name." - ".$this->db->get_where("tbl_branches",["id"=>$branch_data->branch_name])->row()->branch_name ?>)</h4>
        <div class="col-lg-12 card-col">
        	<div class="row mb-3">
				<div class="col-lg-6">
					 <a href="<? echo base_url('view-curriculum-designs') ?>">
						<i class="fa fa-arrow-left backFields pull-left" data-toggle="tooltip" title="Back To Designs" style="cursor: pointer;font-size: 25px;"></i>
					 </a>
				</div>
				<div class="col-lg-6 ml-auto d-flex">
					<p class="mb-0 text-dark p-1 text-left">
					  <b style="font-weight: 700">Min Credits:</b> <b><? echo $min_credits ?></b>
					</p>
					<p class="mb-0 text-dark p-1 ml-auto">
					  <b style="font-weight: 700">Max Credits:</b> <b><? echo $max_credits ?></b>
					</p>
					<p class="mb-0 text-dark p-1 ml-auto">
					  <b style="font-weight: 700">Credits Assigned:</b> <b class="totalCredits"><? echo $totalCredits ?></b>
					</p>
					<i class="fa fa-download downloadPdf pull-right mt-1 ml-3" onClick="printDiv()" data-toggle="tooltip" title="Download PDF" style="cursor: pointer;font-size: 22px;"></i>
				</div>
       		</div>
        <? 
			foreach($unique_sems as $key => $sc){
			
				$weigh = json_decode($branch_data->weightage)->$sc;
				$scat = $this->db->select("category_name")->get_where("tbl_subject_category",["id"=>$sc,"status"=>1])->row();
				$w = $weigtages[$sc];
		?>
          
			  <h6><strong> Semester <? echo $sc ?> </strong></h6>
			  <table id="example" class="table table-striped table-bordered" style="font-size: 14px">
				<thead>
				  <tr>
					<th scope="col">Subject Category</th>
					<th scope="col">Subject</th>
					<th scope="col">Ideal Credits</th>
					<th scope="col">Lecture Hours Per Week</th>
					<th scope="col">Tutorial Hours Per Week</th>
					<th scope="col">Practicals/ Lab Hours Per Week</th>
					<th scope="col">Credits</th>
				  </tr>
				</thead>
				<tbody>
				  
				<? 

					$ideal_credits = [];
					$lecture_hours_per_week = [];
					$tutorial_hours_per_week = [];
					$lab_hours_per_week = [];
					$total_credits = [];
					foreach($semesters as $sk => $sub){

						if($sub['semester_name'] == $sc){

							array_push($ideal_credits, $sub['ideal_credits']);
							array_push($lecture_hours_per_week, $sub['lecture_hours_per_week']);
							array_push($tutorial_hours_per_week, $sub['tutorial_hours_per_week']);
							array_push($lab_hours_per_week, $sub['lab_hours_per_week']);
							array_push($total_credits, $sub['total_credits']);

						
				?>
					  <tr>
						<td scope="row" style="text-align: left"><? echo $sub['subject_category']; ?></td>
						<td scope="row" style="text-align: left"><? echo $sub['subject_name']; ?></td>
						<td><? echo $sub['ideal_credits'] ?></td>
						<td><? echo $sub['lecture_hours_per_week'] ?></td>
						<td><? echo $sub['tutorial_hours_per_week'] ?></td>
						<td><? echo $sub['lab_hours_per_week'] ?></td>
						<td><? echo $sub['total_credits'] ?></td>
					  </tr>
				<? }} ?>
					 <tr>
					 	<td></td>
						<td>Total</td>
						<td><? echo array_sum($ideal_credits) ?></td>
						<td><? echo array_sum($lecture_hours_per_week) ?></td>
						<td><? echo array_sum($tutorial_hours_per_week) ?></td>
						<td><? echo array_sum($lab_hours_per_week) ?></td>
						<td><? echo array_sum($total_credits) ?></td>
					</tr>  
				</tbody>
			  </table>
			  <br>
        <? } ?>  
        </div>
      </div>
    </div>


<? $this->load->view( "front_common/footer" ) ?>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/fixedheader/3.2.2/js/dataTables.fixedHeader.min.js"></script>

<script>

	function printDiv() {

	  var divToPrint=document.getElementById('content1');

	  var newWin=window.open('','Print-Window');

	  newWin.document.open();
		
		newWin.document.write('<link rel="stylesheet" href="<? echo base_url() ?>assets/css/bootstrap.min.css"/>');
		newWin.document.write('</head><body onload="window.print()">');
		newWin.document.write(divToPrint.innerHTML);
		newWin.document.write('</body></html>');
		newWin.document.close();

	  setTimeout(function(){newWin.close();},10);

	}
	
</script>

