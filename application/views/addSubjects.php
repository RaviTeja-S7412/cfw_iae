<? 
	$this->load->view("front_common/header"); 
	$branch_id = $this->input->get("bid");

	$branch_data = $this->db->get_where("tbl_institute_curriculum_design",["branch_id"=>$branch_id])->row();
	$program = $this->db->get_where("tbl_programs",["id"=>$branch_data->program])->row();
	$course = $this->db->get_where("tbl_courses",["id"=>$branch_data->course])->row();
	
	$branch = $this->db->get_where("tbl_institute_branches",["id"=>$branch_data->branch_id, "institute_id"=> $this->session->userdata("institute_id")]);
	if($branch->num_rows() > 0){
		$bData = $this->db->get_where("tbl_branches",["id"=>$branch->row()->branch_name])->row();
	}else{
		$bData = $this->db->get_where("tbl_branches",["id"=>$branch_data->branch_id])->row();
	}

?>

<style>

	.col-form-label {
		text-align: right;
	}
	.bootstrap-duallistbox-container select{
		height: 180px !important;
	}

</style>

	<div class="content1">
      <div class="container">
        <h4 align="center"><? echo $program->program_name." - ".$course->course_name." - ".$bData->branch_name ?></h4>
        <h5>Select Course</h5>
       <!-- <form method="post" id="addSubjects" action="#<? //echo base_url("dashboard/insertSubjects") ?>"> -->
        <form method="post" id="addSubjects">
			<div class="col-lg-12 card-col">
				<div style="margin-bottom: 30px"><a href="<? echo base_url('create-design') ?><? echo $branch_id ? "?bid=$branch_id" : '' ?>"><i class="fa fa-arrow-left backFields pull-left" style="cursor: pointer; font-size:22px;"></i></a></div>

				<? if(count($sub_categories) > 0){ 
					foreach($sub_categories as $key => $sc){
						
						$scdata = $this->db->get_where("tbl_subject_category",["id"=>$sc])->row();
						$exSubdata = json_decode($ubranch_data->subjects)->$sc;
						$exElectivedata = json_decode($ubranch_data->electives)->$sc;
						$exOpenelectivedata = json_decode($ubranch_data->open_electives)->$sc;
						
				?>
					<hr style="border: 1px solid #000" />	
					<h5 style="text-align: center; margin-top: 20px"><? echo ($key+1).". ".$scdata->category_name ?></h5>
					<hr style="border: 1px solid #000" />
						<select multiple="multiple" name="subjects-<? echo $sc ?>[]" id="subjects-<? echo $sc ?>" title="duallistbox_demo1[]">
						<?
							$this->db->select("tbl_subjects.id,tbl_subjects.subject_name");
							$this->db->join("tbl_subjects","tbl_sub_subcat_links.subject=tbl_subjects.id");
							$subjects = $this->db->order_by("tbl_subjects.subject_name","asc")->get_where("tbl_sub_subcat_links",["tbl_sub_subcat_links.subject_category"=>$sc,"tbl_subjects.elective_status"=>"all"])->result();
									
							foreach($subjects as $sub){		
						
								$ssel = "";
								if(in_array($sub->id,$exSubdata)){
									$ssel = "selected";
								}
								
								echo '<option value="'.$sub->id.'" '.$ssel.'>'.$sub->subject_name.'</option>';
								
							}
						?>			
						</select>
					<div class="row" style="margin-top:10px; margin-bottom:10px">
						<div class="col-md-12">
							<!-- <input type="button" class="btn btn-info pull-left new_subjects" course_category="<? //echo $sc ?>" value="Add New Subjects"> -->
							<small style="color: red;">Didn’t find the Course Name what you are looking for? <a href="javascript:void(0)" class="new_subjects" course_category="<? echo $sc ?>">Click here</a> to add New Course Name</small>
						</div>
					</div>
					<div class="row">
						<div class="form-group col-md-6">
							<label>Electives</label>
							<select class="form-control electives electives-<? echo $sc ?>" ref="<? echo $sc ?> " name="electives-<? echo $sc ?>[]">
								<option value="">Select Elective</option>
								<?
									$esubjects = $this->db->get_where("tbl_subjects",["elective_status"=>"common"])->result();
									foreach($esubjects as $esub){		

										$ssel = "";
										if(in_array($esub->id,$exElectivedata)){
											$ssel = "selected";
										}

										echo '<option value="'.$esub->id.'" '.$ssel.' eStatus="'.$esub->elective_status.'"  eType="'.$esub->elective_type.'">'.$esub->subject_name.'</option>';

									}
								?>
							</select>
						</div>
						<div class="form-group col-md-6">
							<label>Open Electives</label>
							<select class="form-control open_electives open_electives-<? echo $sc ?>" ref="<? echo $sc ?>" name="open_electives-<? echo $sc ?>[]">
								<option value="">Select Open Elective</option>
								<?
									$oesubjects = $this->db->get_where("tbl_subjects",["elective_status"=>"open"])->result();

									foreach($oesubjects as $osub){		

										$ssel = "";
										if(in_array($osub->id,$exOpenelectivedata)){
											$ssel = "selected";
										}

										echo '<option value="'.$osub->id.'" '.$ssel.' eStatus="'.$osub->elective_status.'"  eType="'.$osub->elective_type.'">'.$osub->subject_name.'</option>';

									}
								?>
							</select>
						</div>
					</div>	
<!--					<input type="hidden" name="subjects-<? //echo $sc->id ?>" id="sub_cat_subjects-<? //echo $sc ?>">-->

				<? } ?>	
					<input type="hidden" name="bid" value="<? echo $this->input->get("bid") ?>">
					<input type="submit" class="btn btn-primary pull-right" value="Save & Next">
				<? } ?>		
			  <br><br>
			</div>
     	</form>
      </div>
    </div>
<? $this->load->view( "front_common/footer" ) ?>

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="display:block">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add New Subject</h4>
      </div>
      <div class="modal-body">
		<form method="post" action="<? echo base_url('ajax/addNewsubject') ?>">
			<div class="form-group">
				<input type="text" class="form-control" name="new_subject" placeholder="Add New Subject" required>
				<input type="hidden" class="form-control" name="course_category" id="course_category" required>
				<input type="hidden" class="form-control" name="bid" value="<? echo $this->input->get('bid') ?>"  required>
			</div>
			<div class="form-group">
				<input type="text" class="form-control" name="ideal_credits" placeholder="Ideal Credits" required>
			</div>
			<div class="form-group">
				<input type="submit" class="btn btn-primary pull-left" value="Submit">
			</div>
		</form>	
      </div>
    </div>

  </div>
</div>

<div id="instModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="display:block">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="font-size:18px">Instructions</h4>
      </div>
      <div class="modal-body p-0 pt-2">
		<div class="container instructions p-0">

		</div>
      </div>
    </div>

  </div>
</div>

<script type="text/javascript">

	$(".new_subjects").click(function(){

		var course_category = $(this).attr("course_category");
		$("#myModal").modal("show");
		$("#course_category").val(course_category);

	})
	
	$(".electives").change(function(){
		
		var sub_id = $(this).attr("ref");
		var eStatus = $('option:selected', this).attr('eStatus');
		var eType = $('option:selected', this).attr('eType');
		
		if(eType == "mini_project"){
			$(".instructions").html('<ul><li>Mini Project should be added between 3rd semester and 6th semester</li></ul>')
			$("#instModal").modal("show");
		}else if(eType == "economics_for_engineer" || eType == "hvpe" || eType == "environmental_studies"){
			$(".instructions").html('<ul><li>Please check work load balance for the available faculty.</li></ul>')
			$("#instModal").modal("show");
		}else if(eStatus == "open"){
			$(".instructions").html('<ul><li>Open electives can be added in 3rd Semester to 6th Semester</li><li></li>Colleges can plan for Track Base / General Pool Open Electives.</ul>')
			$("#instModal").modal("show");
		}

		var elecs = [];
		
		<? foreach($sub_categories as $key => $ssc){ ?>
			var celecs = []; 
				$(".electives-<? echo $ssc ?>").each(function(index,data) {
					if($(this).find(':selected').val()){
						celecs.push($(this).find(':selected').val());
					}else{
						celecs.push("");
					}  
				});
			elecs.push({"<? echo $ssc ?>":celecs});
		<? } ?>
		
		$.ajax({
			
			type : "post",
			data : {electives:elecs},
			url : "<? echo base_url('dashboard/getElectives') ?>",
			dataType : "json",
			success : function(data){
				if(data.status){
					
					for(var key in data.subjects) {
						
						var subjects = '<option value="">Select Elective</option>';
					   	for(var key1 in data.subjects[key]) {

							var sdata = data.subjects[key][key1];
							if(sdata.selected == "true"){
								subjects += '<option value="'+sdata.id+'" eStatus="'+sdata.eStatus+'" eType="'+sdata.eType+'" selected>'+sdata.subject_name+'</option>';		
							}else{
								subjects += '<option value="'+sdata.id+'" eStatus="'+sdata.eStatus+'" eType="'+sdata.eType+'">'+sdata.subject_name+'</option>';
							}

					   	}
						
						$(".electives-"+key).html(subjects);
					}
				}
			},
			error : function(data){
//				console.log(data);
			}
			
		});
		
	});
	
	$(".open_electives").change(function(){
		
		var sub_id = $(this).attr("ref");
		var eStatus = $('option:selected', this).attr('eStatus');
		var eType = $('option:selected', this).attr('eType');

		if(eType == "mini_project"){
			$(".instructions").html('<ul><li>Mini Project should be added between 3rd semester and 6th semester</li></ul>')
			$("#instModal").modal("show");
		}else if(eType == "economics_for_engineer" || eType == "hvpe" || eType == "environmental_studies"){
			$(".instructions").html('<ul><li>Please check work load balance for the available faculty.</li></ul>')
			$("#instModal").modal("show");
		}else if(eStatus == "open"){
			$(".instructions").html('<ul><li>Open electives can be added in 3rd Semester to 6th Semester</li><li>Colleges can plan for Track Base / General Pool Open Electives.</li></ul>')
			$("#instModal").modal("show");
		}

		var elecs = [];
		
		<? foreach($sub_categories as $key => $ssc1){ ?>
			var celecs = []; 
				$(".open_electives-<? echo $ssc1 ?>").each(function(index,data) {
					if($(this).find(':selected').val()){
						celecs.push($(this).find(':selected').val());
					}else{
						celecs.push("");
					}  
				});
			elecs.push({"<? echo $ssc1 ?>":celecs});
		<? } ?>
		
		$.ajax({
			
			type : "post",
			data : {openelectives:elecs},
			url : "<? echo base_url('dashboard/getOpenelectives') ?>",
			dataType : "json",
			success : function(data){
				if(data.status){
					
					for(var key in data.subjects) {
						
						var subjects = '<option value="">Select Open Elective</option>';
					   	for(var key1 in data.subjects[key]) {

							var sdata = data.subjects[key][key1];
							if(sdata.selected == "true"){
								subjects += '<option value="'+sdata.id+'" eStatus="'+sdata.eStatus+'" eType="'+sdata.eType+'" selected>'+sdata.subject_name+'</option>';		
							}else{
								subjects += '<option value="'+sdata.id+'" eStatus="'+sdata.eStatus+'" eType="'+sdata.eType+'">'+sdata.subject_name+'</option>';
							}

					   	}
						
						$(".open_electives-"+key).html(subjects);
					}
				}
			},
			error : function(data){
//				console.log(data);
			}
			
		});
		
	});

	<? if(count($sub_categories) > 0){ 
			foreach($sub_categories as $key => $sc1){ 
	?>			
		$('#subjects-<? echo $sc1 ?>').bootstrapDualListbox();			
	<?			
			}
	   }
	?>
	
	$("#addSubjects").submit(function(e){
		
		e.preventDefault();
		var fdata = $(this).serialize();
		$.ajax({
			type : "post",
			url : "<? echo base_url("dashboard/insertSubjects") ?>",
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
						window.location.href = "<? echo base_url('create-design/add-credits?bid=') ?><? echo $this->input->get("bid") ?>";
					},3000)
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
				$("#rmsg").html(data.msg);
			}
		})
		
	})
	
</script>