<? 
	$this->load->view("front_common/header"); 
	$ref = $this->input->get("ref");
	$branch_id = $this->input->get("bid");
	$institution_id = $this->session->userdata('institute_id');
	$iData = $this->db->get_where("tbl_institutes",["id"=>$institution_id])->row();
	
	$icChk = $this->db->get_where("tbl_institution_course_credits",["course_id"=>$branch_data->course, "institution_id"=>$institution_id]);

	$min_credits = $branch_data->min_credits;
	$max_credits = $branch_data->max_credits;
	if($icChk->num_rows() > 0){
		$icdata = $icChk->row();
		$min_credits = $icdata->min_credits;
		$max_credits = $icdata->max_credits;
	}
?>

<style>

	.col-form-label {
		text-align: right;
	}

</style>

    <div class="content1">
      <div class="container">
       	<h4> <? echo $program->program_name." - ".$course->course_name." - ".$this->db->get_where("tbl_branches",["id"=>$branch_data->branch_name])->row()->branch_name ?> <span class="pull-right"><a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#creditsModal">Define Your Own Credits</a></span></h4>
        <div class="col-lg-12 card-col" style="margin-top: 35px;">
        <? if($ref == "view"){ ?>
			 <a href="<? echo base_url('view-curriculum-designs') ?>">
				<i class="fa fa-arrow-left fa-2x backFields pull-right" data-toggle="tooltip" title="Back To Designs" style="cursor: pointer"></i>
			 </a>
         <? }else{ ?>
			<a href="<? echo base_url('create-design/add-subjects') ?><? echo $branch_id ? "?bid=$branch_id" : '' ?>"><i class="fa fa-arrow-left backFields pull-left" style="cursor: pointer; font-size:22px"></i></a>
		 <? } ?>
         
          <div class="col-lg-6 ml-auto d-flex">
            <p class="mb-0 text-dark p-1 text-left">
              <b style="font-weight: 700">Min Credits:</b> <b><? echo $min_credits ?></b>
            </p>
            <p class="mb-0 text-dark p-1 ml-auto">
              <b style="font-weight: 700">Max Credits:</b> <b><? echo $max_credits ?></b>
            </p>
            <p class="mb-0 text-dark p-1 ml-auto">
              <b style="font-weight: 700; color: <? if($totalCredits < $min_credits){
				echo 'orange';
			  }elseif($totalCredits >= $min_credits && $totalCredits <= $max_credits){
				echo 'green';
			  }elseif($totalCredits > $max_credits){
				echo 'red';
			  } ?>" class="totalCredits">Total Credits: <? echo $totalCredits ?></b>
            </p>
          </div>
          <form method="post" id="addCredits">
        <? foreach($sub_categories as $key => $sc){
				$weigh = json_decode($branch_data->weightage)->$sc;
				$scat = $this->db->select("category_name")->get_where("tbl_subject_category",["id"=>$sc,"status"=>1])->row();
				$uWeightage = round($weigh/array_sum(json_decode($branch_data->weightage, true))*100);
				$w = $weigtages[$sc];
		?>
			  <h6><strong><? echo $scat->category_name ?> <br>(Weightage: <? echo $uWeightage." %" ?>) (Credits: <? echo $weigh ?>,<b class="weightage_added-<? echo $sc ?>" style="color: <? 
			  	if($scatcredits[$sc] < $weigh){
					echo 'orange';
				}else if($scatcredits[$sc] == $weigh){
					echo 'green';
				}else if($scatcredits[$sc] > $weigh){
					echo 'red';
				}
			  ?>"> Added: <? echo $scatcredits[$sc] ?></b>)</strong></h6>
			  <table class="table text-center table-bordered" style="font-size: 14px">
				<thead class="thead-dark">
				  <tr>
					<th scope="col">Course</th>
					<th scope="col">Course Code</th>
					<th scope="col">Ideal Credits</th>
					<th scope="col">Lecture Hours Per Week</th>
					<th scope="col">Tutorial Hours Per Week</th>
					<th scope="col">Practicals/ Lab Hours Per Week</th>
					<th scope="col">Credits</th>
					<th scope="col">Hours/Credits</th>
					<th scope="col">Select Semister</th>
				  </tr>
				</thead>
				<tbody>
			  
			  	<input type="hidden" name="credit_weightage-<? echo $sc ?>" id="credit_weightage-<? echo $sc ?>" value="<? echo $weigh ?>">
			  	<input type="hidden" name="max_weightage-<? echo $sc ?>" id="max_weightage-<? echo $sc ?>" value="<? echo $max_credits ?>">
			  	<input type="hidden" name="min_weightage-<? echo $sc ?>" id="min_weightage-<? echo $sc ?>" value="<? echo $min_credits ?>">
			  	<input type="hidden" name="category_name-<? echo $sc ?>" id="category_name-<? echo $sc ?>" value="<? echo $scat->category_name ?>">
				  
				<? 
					$subjects = json_decode($branch_data->subjects)->$sc;

					$ideal_credits = [];
					$lecture_hours_per_week = [];
					$tutorial_hours_per_week = [];
					$lab_hours_per_week = [];
					$total_credits = [];
						
					foreach($subjects as $sk => $sub){
						
						$randomkey = random_string("alnum",10);
						$sdata = $this->db->get_where("tbl_subjects",["id"=>$sub])->row();

						$creditsData = json_decode($branch_data->credits)->$sc;

						array_push($ideal_credits, $sdata->ideal_credits);
						array_push($lecture_hours_per_week, $creditsData->lecture_hours_per_week[$sk]);
						array_push($tutorial_hours_per_week, $creditsData->tutorial_hours_per_week[$sk]);
						array_push($lab_hours_per_week, $creditsData->lab_hours_per_week[$sk]);
						array_push($total_credits, $creditsData->total_credits[$sk]);
				?>
					  <tr>
						<th scope="row" style="text-align: left"><? echo $sdata->subject_name; ?></th>
						<td>
							<input type="text" class="form-control ucourse_code-<? echo $sc ?>" name="course_code-<? echo $sc ?>[]" value="<? echo $this->db->get_where("tbl_course_codes",["course_id"=>$sdata->id,"institute_id"=>$this->session->userdata("institute_id")])->row()->course_code; ?>" required>
							<input type="hidden" class="form-control usubject_id-<? echo $sc ?>" name="subject_id-<? echo $sc ?>[]" value="<? echo $sdata->id ?>" required>
						</td>
						<td><input type="number" class="form-control" value="<? echo $sdata->ideal_credits ?>" readonly></td>
						<td><input type="number" class="form-control getCreditvalue getCreditlecture-<? echo $randomkey ?> ugetCreditlecture-<? echo $sc ?>" ref="<? echo $randomkey ?>" name="lecture_hours_per_week-<? echo $sc ?>[]" subcat="<? echo $sc ?>" min="0" step="0.01" value="<? echo $creditsData->lecture_hours_per_week[$sk] ?>" <? echo ($ref == "view") ? 'readonly' : '' ?> required></td>
						<td><input type="number" class="form-control getCreditvalue getCredittutorial-<? echo $randomkey ?> ugetCredittutorial-<? echo $sc ?>" ref="<? echo $randomkey ?>" name="tutorial_hours_per_week-<? echo $sc ?>[]" subcat="<? echo $sc ?>" min="0" step="0.01" value="<? echo $creditsData->tutorial_hours_per_week[$sk] ?>" <? echo ($ref == "view") ? 'readonly' : '' ?> required></td>
						<td><input type="number" class="form-control getCreditvalue getCreditlab-<? echo $randomkey ?> ugetCreditlab-<? echo $sc ?>" ref="<? echo $randomkey ?>" name="lab_hours_per_week-<? echo $sc ?>[]" subcat="<? echo $sc ?>" min="0" step="0.01" value="<? echo $creditsData->lab_hours_per_week[$sk] ?>" <? echo ($ref == "view") ? 'readonly' : '' ?> required></td>
						<td><input type="number" class="form-control getCredittotal-<? echo $randomkey ?> ugetCredittotal-<? echo $sc ?>" name="total_credits-<? echo $sc ?>[]" ref="<? echo $randomkey ?>" subcat="<? echo $sc ?>" value="<? echo $creditsData->total_credits[$sk] ?>" readonly></td>
						<td>
						<div class="form-check-inline pull-left">
							<label class="form-check-label">
								<input type="radio" name="hours_credits-<? echo $sub ?>[]" class="form-check-input changeHourscredits gethoursCredits-<? echo $randomkey ?>" ref="<? echo $randomkey ?>" value="hours_credits" checked>Hours & Credits
							</label>
						</div>
						<div class="form-check-inline pull-left">
							<label class="form-check-label">
								<input type="radio" name="hours_credits-<? echo $sub ?>[]" class="form-check-input changeHourscredits gethoursCredits-<? echo $randomkey ?>" ref="<? echo $randomkey ?>" value="hours">Hours
							</label>
						</div>
						<div class="form-check-inline pull-left">
							<label class="form-check-label">
								<input type="radio" name="hours_credits-<? echo $sub ?>[]" class="form-check-input changeHourscredits gethoursCredits-<? echo $randomkey ?>" ref="<? echo $randomkey ?>" value="credits">Credits
							</label>
						</div>
						</td>
						<td>
							<select class="custom-select ugetSemester-<? echo $sc ?>" name="semester-<? echo $sc ?>[]" <? echo ($ref == "view") ? 'disabled' : '' ?> required>
							  <option value="">Semester</option>
							  <? foreach($semesters as $sem){
									$sel = ($sem->id == $creditsData->semesters[$sk]) ? 'selected' : '';
									echo '<option value="'.$sem->id.'" '.$sel.'>'.$sem->semester_name.'</option>';
								} ?>
							</select>
						</td>
					  </tr>
				<? } ?>
				<tr>
					<td class="pull-right"><strong>Total</strong></td>
					<td style="text-align: left"></td>
					<td style="text-align: left"><? echo array_sum($ideal_credits) ?></td>
					<td style="text-align: left"><? echo array_sum($lecture_hours_per_week) ?></td>
					<td style="text-align: left"><? echo array_sum($tutorial_hours_per_week) ?></td>
					<td style="text-align: left"><? echo array_sum($lab_hours_per_week) ?></td>
					<td style="text-align: left"><? echo array_sum($total_credits) ?></td>
					<td></td>
				</tr>
					  
				</tbody>
			  </table>
			  
			  <div class="row">
			  		<div class="col-md-12">
			  			<a href="javascript:void(0)" class="btn btn-primary pull-right updateCredits" uref="<? echo $sc; ?>">Update</a>
			  		</div>		
			  </div>
			  <br />
			  <br />
       		  <input type="hidden" name="subjectCount[]" class="subjectCount-<? echo $sc ?>" value="<? echo count($subjects) ?>">	
        <? } ?>  
          <input type="hidden" name="bid" value="<? echo $this->input->get("bid") ?>">
           <? if($ref != "view"){ ?>
          		<input type="submit" value="Submit" class="btn btn-primary" />
           <? } ?>		
        </form>  
          <br />
          <br />
        </div>
      </div>
    </div>

	<div id="creditsModal" class="modal fade" role="dialog">
		<div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content">
			<div class="modal-header" style="display:block">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Update Credits</h4>
				<small style="color: red; font-size: 75%">Note: Typical Credits are Lecture Hours - 1, Tutorial Hours - 1, Practicals/ Lab Hours - 2</small>
			</div>
			<div class="modal-body">
				<form method="post" id="updateHRCredits">
					<div class="form-group">
						<label>Lecture Hours Credits Per Hr</label>
						<input type="number" step="0.01" class="form-control" name="lecture_credits" id="lecture_credits" value="<? echo $iData->lecture_credits ?>" placeholder="Lecture Hours Credits Per Hr" required>
					</div>
					<div class="form-group">
						<label>Tutorial Hours Credits Per Hr</label>
						<input type="number" step="0.01" class="form-control" name="tutorial_credits" id="tutorial_credits" value="<? echo $iData->tutorial_credits ?>" placeholder="Tutorial Hours Credits Per Hr" required>
					</div>
					<div class="form-group">
						<label>Practicals/ Lab Hours Credits Per Hr</label>
						<input type="number" step="0.01" class="form-control" name="lab_credits" id="lab_credits" value="<? echo $iData->lab_credits ?>" placeholder="Practicals/ Lab Hours Credits Per Hr" required>
					</div>
					<div class="form-group">
						<input type="submit" class="btn btn-primary pull-left" value="Submit">
					</div>
				</form>	
			</div>
			</div>

		</div>
	</div>	
    
<? $this->load->view( "front_common/footer" ) ?>

<script type="text/javascript">

	$(".changeHourscredits").change(function(){
		var ref = $(this).attr("ref");
		var val = $(this).val();

		if(val == "hours_credits"){
			$(".getCredittotal-"+ref).attr("readonly", "readonly");
			$(".getCreditlecture-"+ref).removeAttr("readonly", "readonly");
			$(".getCredittutorial-"+ref).removeAttr("readonly", "readonly");
			$(".getCreditlab-"+ref).removeAttr("readonly", "readonly");
		}else if(val == "hours"){
			$(".getCredittotal-"+ref).attr("readonly", "readonly");
			$(".getCreditlecture-"+ref).removeAttr("readonly", "readonly");
			$(".getCredittutorial-"+ref).removeAttr("readonly", "readonly");
			$(".getCreditlab-"+ref).removeAttr("readonly", "readonly");
		}else if(val == "credits"){
			$(".getCredittotal-"+ref).removeAttr("readonly", "readonly");
			$(".getCreditlecture-"+ref).attr("readonly", "readonly");
			$(".getCredittutorial-"+ref).attr("readonly", "readonly");
			$(".getCreditlab-"+ref).attr("readonly", "readonly");
		}
		$(".getCredittotal-"+ref).val("");
		$(".getCreditlecture-"+ref).val("");
		$(".getCredittutorial-"+ref).val("");
		$(".getCreditlab-"+ref).val("");
	})
	
	$("#updateHRCredits").submit(function(e){
		
		e.preventDefault();
		var lecture_credits = $("#lecture_credits").val();
		var tutorial_credits = $("#tutorial_credits").val();
		var lab_credits = $("#lab_credits").val();

		$.ajax({
			type: "post",
			data: {lecture_credits: lecture_credits, tutorial_credits: tutorial_credits, lab_credits: lab_credits},
			url: "<? echo base_url('ajax/updatehourCredits') ?>",
			success: function(data){
				swal(
					'',
					'Credits Updated Successfully',
					'success'
				);
				setTimeout(() => {
					location.reload();
				}, 2000);
			},
			error: function(data){
				console.log(data)
			}
		})

	})

	$(".updateCredits").click(function(){
		
		var uref = $(this).attr("uref");
		var hoursLecture = $(".gethoursCredits-"+uref+':checked').val();

		var lecture_hours_per_week = []; 
		$(".ugetCreditlecture-"+uref).each(function(index,data) {
			if($(this).val()){
				lecture_hours_per_week.push($(this).val());   
			}
		});
		
		if(lecture_hours_per_week.length == 0){
			swal(
			  '',
			  'Please enter lecture hours.',
			  'error'
			);
			return false;
		}
		
		var tutorial_hours_per_week = []; 
		$(".ugetCredittutorial-"+uref).each(function(index,data) {
			if($(this).val()){
				tutorial_hours_per_week.push($(this).val());   
			}  
		});
		if(tutorial_hours_per_week.length == 0){
			swal(
			  '',
			  'Please enter tutorial hours.',
			  'error'
			);
			return false;
		}
		
		var lab_hours_per_week = []; 
		$(".ugetCreditlab-"+uref).each(function(index,data) {
			if($(this).val()){
				lab_hours_per_week.push($(this).val());   
			}  
		});
		if(lab_hours_per_week.length == 0){
			swal(
			  '',
			  'Please enter lab hours.',
			  'error'
			);
			return false;
		}
		
		var total_credits = []; 
		$(".ugetCredittotal-"+uref).each(function(index,data) {
			if($(this).val()){
				total_credits.push($(this).val());   
			}    
		});
		
		var subject_id = []; 
		$(".usubject_id-"+uref).each(function(index,data) {
			if($(this).val()){
				subject_id.push($(this).val());   
			}    
		});
		
		var course_code = []; 
		$(".ucourse_code-"+uref).each(function(index,data) {
			if($(this).val()){
				course_code.push($(this).val());   
			}    
		});

		var g20 = total_credits.filter(v => +v > 20).map(Number)

		/* if(g20.length > 0){
			swal(
				'',
				'Total value of Credits are not more than 20 for each semister.',
				'error'
			);
			return false;
		} */

		/* if(total_credits.length == 0){
			swal(
			  '',
			  'Total Credits Are Empty.',
			  'error'
			);
			return false;
		} */
		
		var semester = []; 
		$(".ugetSemester-"+uref).each(function(index,data) {
			if($(this).find(':selected').val()){
				semester.push($(this).find(':selected').val());
			}  
		});
		if(semester.length == 0){
			swal(
			  '',
			  'Please Select Semester.',
			  'error'
			);
			return false;
		}
		
		var subjectsCount = $(".subjectCount-"+uref).val();
		
		$.ajax({
			type : "post",
			data : {sub_id:uref,lecture_hours_per_week:lecture_hours_per_week,tutorial_hours_per_week:tutorial_hours_per_week,lab_hours_per_week:lab_hours_per_week,total_credits:total_credits,semester:semester,bid:<? echo $this->input->get("bid") ?>,subjectsCount:subjectsCount, subject_id: subject_id, course_code:course_code},
			dataType : "json",
			url : "<? echo base_url('dashboard/insertCredits') ?>",
			success : function(data){
				if(data.status){
					swal(
					  '',
					  data.msg,
					  'success'
					);
					setTimeout(function(){
						location.reload();
					}, 3000);
				}else{
					swal(
					  '',
					  data.msg,
					  'error'
					);
				}
				
			},
			error : function(data){
				
				console.log(data);
			}
		})
		
	})
	
	$("#addCredits").submit(function(e){
		
		e.preventDefault();
		var fdata = $(this).serialize();
		$.ajax({
			type : "post",
			url : "<? echo base_url('dashboard/insertCredits') ?>",
			data : fdata,
			dataType: "json",
			success : function(data){
				if(data.status){
					swal(
					  '',
					  data.msg,
					  'success'
					);
					setTimeout(function(){
						window.location.href = "<? echo base_url('view-curriculum-designs') ?>";
					},3000)
				}else{
					swal(
					  '',
					  data.msg,
					  'error'
					);
					return false;
				}
			},
			error : function(data){
				console.log(data);
				swal(
				  data.msg,
				  '',
				  'error'
				);
				return false;
			}
		})
		
	});
	
	$(".getCreditvalue").change(function(){
		
		var ref = $(this).attr("ref");
		var subid = $(this).attr("subcat");
		var lectureCredits = $(".getCreditlecture-"+ref).val();
		var tutorialCredits = $(".getCredittutorial-"+ref).val();
		var labCredits = $(".getCreditlab-"+ref).val();
		var hoursLecture = $(".gethoursCredits-"+ref+':checked').val();
		
		<? if($iData->lecture_credits == 0){ ?>
			var lc = (lectureCredits != "") ? parseFloat(lectureCredits) : 0;
		<? }else{ ?>
			var lc = (lectureCredits != "") ? parseFloat(lectureCredits*<? echo $iData->lecture_credits ?>) : 0;
		<? } ?>	

		<? if($iData->tutorial_credits == 0){ ?>
			var tc = (tutorialCredits != "") ? parseFloat(tutorialCredits) : 0;
		<? }else{ ?>
			var tc = (tutorialCredits != "") ? parseFloat(tutorialCredits*<? echo $iData->tutorial_credits ?>) : 0;
		<? } ?>	
		
		<? if($iData->lab_credits == 0){ ?>
			var lac = (labCredits != "") ? parseFloat(2/labCredits) : 0;
		<? }else{ ?>
			var lac = (labCredits != "") ? parseFloat(labCredits*<? echo $iData->lab_credits ?>) : 0;
		<? } ?>		
		
		var total = lc+tc+lac;
		if(hoursLecture == "hours_credits")	
			$(".getCredittotal-"+ref).val(total);
		
		var subcatValues = $("input[name='total_credits-"+subid+"[]']")
              .map(function(){
				  return $(this).val();
			  }).get();

		var subcatTotal = 0;
		$.each(subcatValues,function(){subcatTotal+=parseFloat(this) || 0;});
		
		
		var credit_weightage = $("#credit_weightage-"+subid).val();
		var max_weightage = $("#max_weightage-"+subid).val();
		var min_weightage = $("#min_weightage-"+subid).val();
		var category = $("#category_name-"+subid).val();

		if(parseFloat(total) > 20){
			swal(
			  '',
			  'Total value of Credits are not more than 20 for each semister for '+category,
			  'error'
			);
			// return false;
		}
		
		if(subcatTotal > credit_weightage){

			var  totalCreditvaluesarr1 = [];
			
			<? foreach($sub_categories as $key => $sc1){ ?>
			
				var subcatValues12 = $("input[name='total_credits-<? echo $sc1 ?>[]']")
				.map(function(){return $(this).val();}).get();
			
				totalCreditvaluesarr1.push(...subcatValues12);
			
			<? } ?>
			
			var creditsTotal1 = 0;
			$.each(totalCreditvaluesarr1,function(){creditsTotal1+=parseFloat(this) || 0;});
			$(".totalCredits").css('color','red');
			$(".totalCredits").html('Total Credits: '+creditsTotal1)

			var subcatValues1 = $("input[name='total_credits-"+subid+"[]']")
              .map(function(){return $(this).val();}).get();

			var subcatTotal1 = 0;
			$.each(subcatValues1,function(){subcatTotal1+=parseFloat(this) || 0;});
			$(".weightage_added-"+subid).css('color','red');
			$(".weightage_added-"+subid).html('Added: '+subcatTotal1);

			swal(
			  '',
			  'Total value of Credits are not equal to given credits please modify credits for '+category,
			  'error'
			);
			
			$(this).val("");
			
			var lectureCredits1 = $(".getCreditlecture-"+ref).val();
			var tutorialCredits1 = $(".getCredittutorial-"+ref).val();
			var labCredits1 = $(".getCreditlab-"+ref).val();

			<? if($iData->lecture_credits == 0){ ?>
				var lc1 = (lectureCredits1 != "") ? parseFloat(lectureCredits1) : 0;
			<? }else{ ?>
				var lc1 = (lectureCredits1 != "") ? parseFloat(lectureCredits1*<? echo $iData->lecture_credits ?>) : 0;
			<? } ?>	

			<? if($iData->tutorial_credits == 0){ ?>
				var tc1 = (tutorialCredits1 != "") ? parseFloat(tutorialCredits1) : 0;
			<? }else{ ?>
				var tc1 = (tutorialCredits1 != "") ? parseFloat(tutorialCredits1*<? echo $iData->tutorial_credits ?>) : 0;
			<? } ?>	
			
			<? if($iData->lab_credits == 0){ ?>
				var lac1 = (labCredits1 != "") ? parseFloat(labCredits1*2) : 0;
			<? }else{ ?>
				var lac1 = (labCredits1 != "") ? parseFloat(labCredits1*<? echo $iData->lab_credits ?>) : 0;
			<? } ?>

			var total1 = lc1+tc1+lac1;
			if(hoursLecture == "hours_credits")
				$(".getCredittotal-"+ref).val(total1);
			return false;
		}

		if(subcatTotal < credit_weightage){
			$(".weightage_added-"+subid).css('color','orange');
		}else if(parseFloat(subcatTotal) == parseFloat(credit_weightage)){
			$(".weightage_added-"+subid).css('color','green');
		}else if(subcatTotal > credit_weightage){
			$(".weightage_added-"+subid).css('color','red');
		}
		
		$(".weightage_added-"+subid).html('Added: '+subcatTotal);

		var  totalCreditvaluesarr = [];
		
		<? foreach($sub_categories as $key => $sc1){ ?>
		
			var subcatValues1 = $("input[name='total_credits-<? echo $sc1 ?>[]']")
              .map(function(){return $(this).val();}).get();
		
			totalCreditvaluesarr.push(...subcatValues1);
		
		<? } ?>
		
		var creditsTotal = 0;
		$.each(totalCreditvaluesarr,function(){creditsTotal+=parseFloat(this) || 0;});

		if(creditsTotal < min_weightage){
			$(".totalCredits").css('color','orange');
		}else if(parseFloat(creditsTotal) >= parseFloat(min_weightage) && parseFloat(creditsTotal) <= parseFloat(max_weightage)){
			$(".totalCredits").css('color','green');
		}else if(creditsTotal > max_weightage){
			$(".totalCredits").css('color','red');
		}

		$(".totalCredits").html('Total Credits: '+creditsTotal)
		
		if(subcatTotal > max_weightage && min_weightage < subcatTotal){
			swal(
			  '',
			  'Total value of Credits are more than given minimum & maximum credits',
			  'error'
			);
			return false;
		}
		
	})
	
</script>