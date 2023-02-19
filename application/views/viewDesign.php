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
					<? if($ref == "view"){ ?>
					 <a href="<? echo base_url('view-curriculum-designs') ?>">
						<i class="fa fa-arrow-left backFields pull-left" data-toggle="tooltip" title="Back To Designs" style="cursor: pointer;font-size: 25px;"></i>
					 </a>
					<? } ?>
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
					<a target="_blank" href="<? echo base_url('dashboard/downloadPdf/'.$this->input->get('bid')) ?>"><i class="fa fa-download downloadPdf pull-right mt-1 ml-3" data-toggle="tooltip" title="Download PDF" style="cursor: pointer;font-size: 22px;"></i></a>
				</div>
       		</div>
        <? foreach($sub_categories as $key => $sc){
			
				$weigh = json_decode($branch_data->weightage)->$sc;
				$scat = $this->db->select("category_name")->get_where("tbl_subject_category",["id"=>$sc,"status"=>1])->row();
				$uWeightage = round($weigh/array_sum(json_decode($branch_data->weightage, true))*100);
				$w = $weigtages[$sc];
		?>
          
			  <h6><strong><? echo $scat->category_name ?> (Weightage: <? echo $uWeightage." %" ?>) (Credits: <? echo $weigh ?>, Added: <b class="weightage_added-<? echo $sc ?>"><? echo $scatcredits[$sc] ?></b>)</strong></h6>
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
//		newWin.document.write('<s tyle type="text/css">#example th{background: #0c355d;color: #fff;}</style>');

		newWin.document.write('</head><body onload="window.print()">');
		newWin.document.write(divToPrint.innerHTML);
		newWin.document.write('</body></html>');

//	  newWin.document.write('<html><body onload="window.print()">'+divToPrint.innerHTML+'</body></html>');

	  newWin.document.close();

	  setTimeout(function(){newWin.close();},10);

	}
	
</script>

