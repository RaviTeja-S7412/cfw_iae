<? 
	$this->load->view("front_common/header"); 
	$ref = $this->input->get("ref");		
?>

<style>

	.col-form-label {
		text-align: right;
	}

</style>

    <div class="content1">
      <div class="container">
       	<h4>CURRICULUM DESIGN - <? echo $branch_data->branch_name." (".$program->program_name." - ".$course->course_name.")" ?></h4>
        <div class="col-lg-12 card-col">
        <? if($ref == "view"){ ?>
			 <a href="<? echo base_url('view-curriculum-designs') ?>">
				<i class="fa fa-arrow-left fa-2x backFields pull-right" data-toggle="tooltip" title="Back To Designs" style="cursor: pointer"></i>
			 </a>
         <? } ?>
         
          <div class="col-lg-6 ml-auto d-flex">
            <p class="mb-0 text-dark p-1 text-left">
              <b style="font-weight: 700">Min Credits:</b> <b><? echo $branch_data->min_credits ?></b>
            </p>
            <p class="mb-0 text-dark p-1 ml-auto">
              <b style="font-weight: 700">Max Credits:</b> <b><? echo $branch_data->max_credits ?></b>
            </p>
            <p class="mb-0 text-dark p-1 ml-auto">
              <b style="font-weight: 700">Total Credits:</b> <b class="totalCredits"><? echo $totalCredits ?></b>
            </p>
          </div>
          <form method="post" id="addCredits">
        <? foreach($sub_categories as $key => $sc){
			
				$weigh = json_decode($branch_data->weightage)->$sc;
				$scat = $this->db->select("category_name")->get_where("tbl_subject_category",["id"=>$sc,"status"=>1])->row();
				$w = $weigtages[$sc];
		?>
          
			  <h6><strong><? echo $scat->category_name ?> (Weightage: <? echo $weigh." %" ?>) (Credits: <? echo $w["max_weightage"]." - ".$w["min_weightage"] ?>, Added: <b class="weightage_added-<? echo $sc ?>"><? echo $scatcredits[$sc] ?></b>)</strong></h6>
			  <table class="table text-center table-bordered" style="font-size: 14px">
				<thead class="thead-dark">
				  <tr>
					<th scope="col">Subject</th>
					<th scope="col">Ideal Credits</th>
					<th scope="col">Lecture Hours Per Week</th>
					<th scope="col">Tutorial Hours Per Week</th>
					<th scope="col">Practicals/ Lab Hours Per Week</th>
					<th scope="col">Credits</th>
					<th scope="col">Select Semister</th>
				  </tr>
				</thead>
				<tbody>
			  
			  	<input type="hidden" name="max_weightage-<? echo $sc ?>" id="max_weightage-<? echo $sc ?>" value="<? echo $w["max_weightage"] ?>">
			  	<input type="hidden" name="min_weightage-<? echo $sc ?>" id="min_weightage-<? echo $sc ?>" value="<? echo $w["min_weightage"] ?>">
			  	<input type="hidden" name="category_name-<? echo $sc ?>" id="category_name-<? echo $sc ?>" value="<? echo $scat->category_name ?>">
				  
				<? 
					$subjects = json_decode($branch_data->subjects)->$sc;
						
					foreach($subjects as $sk => $sub){
						
						$randomkey = random_string("alnum",10);
						$sdata = $this->db->get_where("tbl_subjects",["id"=>$sub])->row();

						$creditsData = json_decode($branch_data->credits)->$sc;
				?>
					  <tr>
						<th scope="row" style="text-align: left"><? echo $sdata->subject_name; ?></th>
						<td><input type="number" class="form-control" value="<? echo $sdata->ideal_credits ?>" readonly></td>
						<td><input type="number" class="form-control getCreditvalue getCreditlecture-<? echo $randomkey ?> ugetCreditlecture-<? echo $sc ?>" ref="<? echo $randomkey ?>" name="lecture_hours_per_week-<? echo $sc ?>[]" subcat="<? echo $sc ?>" min="0" step="0.01" value="<? echo $creditsData->lecture_hours_per_week[$sk] ?>" <? echo ($ref == "view") ? 'readonly' : '' ?> required></td>
						<td><input type="number" class="form-control getCreditvalue getCredittutorial-<? echo $randomkey ?> ugetCredittutorial-<? echo $sc ?>" ref="<? echo $randomkey ?>" name="tutorial_hours_per_week-<? echo $sc ?>[]" subcat="<? echo $sc ?>" min="0" step="0.01" value="<? echo $creditsData->tutorial_hours_per_week[$sk] ?>" <? echo ($ref == "view") ? 'readonly' : '' ?> required></td>
						<td><input type="number" class="form-control getCreditvalue getCreditlab-<? echo $randomkey ?> ugetCreditlab-<? echo $sc ?>" ref="<? echo $randomkey ?>" name="lab_hours_per_week-<? echo $sc ?>[]" subcat="<? echo $sc ?>" min="0" step="0.01" value="<? echo $creditsData->lab_hours_per_week[$sk] ?>" <? echo ($ref == "view") ? 'readonly' : '' ?> required></td>
						<td><input type="number" class="form-control getCredittotal-<? echo $randomkey ?> ugetCredittotal-<? echo $sc ?>" name="total_credits-<? echo $sc ?>[]" ref="<? echo $randomkey ?>" subcat="<? echo $sc ?>" value="<? echo $creditsData->total_credits[$sk] ?>" readonly></td>
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
    
<? $this->load->view( "front_common/footer" ) ?>

<script type="text/javascript">
	
	$(".updateCredits").click(function(){
		
		var uref = $(this).attr("uref");
		
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
		if(total_credits.length == 0){
			swal(
			  '',
			  'Total Credits Are Empty.',
			  'error'
			);
			return false;
		}
		
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
			data : {sub_id:uref,lecture_hours_per_week:lecture_hours_per_week,tutorial_hours_per_week:tutorial_hours_per_week,lab_hours_per_week:lab_hours_per_week,total_credits:total_credits,semester:semester,bid:<? echo $this->input->get("bid") ?>,subjectsCount:subjectsCount},
			dataType : "json",
			url : "<? echo base_url('dashboard/insertCredits') ?>",
			success : function(data){
				console.log(data);
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
				console.log(data);
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
		
		var lc = (lectureCredits != "") ? parseFloat(lectureCredits) : 0;
		var tc = (tutorialCredits != "") ? parseFloat(tutorialCredits) : 0;
		var lac = (labCredits != "") ? parseFloat(labCredits) : 0;
		
		var total = lc+tc+lac/2;
		
		$(".getCredittotal-"+ref).val(total);
		
		var subcatValues = $("input[name='total_credits-"+subid+"[]']")
              .map(function(){
				  console.log($(this).val()+" ");
				  return $(this).val();
			  }).get();

		var subcatTotal = 0;
		$.each(subcatValues,function(){subcatTotal+=parseFloat(this) || 0;});
		
		
		var max_weightage = $("#max_weightage-"+subid).val();
		var min_weightage = $("#min_weightage-"+subid).val();
		var category = $("#category_name-"+subid).val();
		
		
		console.log(subcatTotal+" "+lc+" "+tc+" "+lac+" "+max_weightage+" "+min_weightage);
		
		if(subcatTotal > max_weightage && min_weightage < subcatTotal){
			swal(
			  '',
			  'Total value of Credits are more than given weightage please modify credits for '+category,
			  'error'
			);
			
			$(this).val("");
			
			var lectureCredits1 = $(".getCreditlecture-"+ref).val();
			var tutorialCredits1 = $(".getCredittutorial-"+ref).val();
			var labCredits1 = $(".getCreditlab-"+ref).val();

			var lc1 = (lectureCredits1 != "") ? parseFloat(lectureCredits1) : 0;
			var tc1 = (tutorialCredits1 != "") ? parseFloat(tutorialCredits1) : 0;
			var lac1 = (labCredits1 != "") ? parseFloat(labCredits1) : 0;

			var total1 = lc1+tc1+lac1/2;
			
			$(".getCredittotal-"+ref).val(total1);
			
			
			var subcatValues1 = $("input[name='total_credits-"+subid+"[]']")
              .map(function(){return $(this).val();}).get();

			var subcatTotal1 = 0;
			$.each(subcatValues1,function(){subcatTotal1+=parseFloat(this) || 0;});
			
			$(".weightage_added-"+subid).html(subcatTotal1);
			
			return false;
		}
		
		$(".weightage_added-"+subid).html(subcatTotal);

		var  totalCreditvaluesarr = [];
		
		<? foreach($sub_categories as $key => $sc1){ ?>
		
			var subcatValues1 = $("input[name='total_credits-<? echo $sc1 ?>[]']")
              .map(function(){return $(this).val();}).get();
		
			totalCreditvaluesarr.push(...subcatValues1);
		
		<? } ?>
		
		var creditsTotal = 0;
		$.each(totalCreditvaluesarr,function(){creditsTotal+=parseFloat(this) || 0;});
		
		if(subcatTotal > max_weightage && min_weightage < subcatTotal){
			swal(
			  '',
			  'Total value of Credits are more than given minimum & maximum credits',
			  'error'
			);
			return false;
		}
		
		$(".totalCredits").html(creditsTotal)
		
	})
	
</script>