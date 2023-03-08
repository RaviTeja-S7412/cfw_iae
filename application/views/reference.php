<? 
	$this->load->view("front_common/header"); 
	$bid = $this->input->get("bid");
?>

<style>

	.col-form-label {
		text-align: right;
	}
	
</style>

<div class="content1">
	<div class="container">
		<h4>Curriculum Design References</h4>
		<h6 class="courseweightageLabel"></h6>
		<div class="col-lg-12 card-col">
				<div class="row mt-4" id="create_fields">
					<div class="col-lg-6 rspnsv-mb">
						<select class="custom-select" name="program" id="program" required>
							<option value="">Program</option>
							<? foreach($programs as $p){
								$sel = ($branch_data->program == $p->id) ? 'selected' : '';
								echo '<option value="'.$p->id.'" '.$sel.'>'.$p->program_name.'</option>';
							} ?>
						</select>
					</div>
					<div class="col-lg-6">
						<select class="custom-select" name="course" id="courses" required>
							<option value="">Course</option>
						</select>
					</div>
					<div class="col-lg-6">
						<br>
						<div class="form-group">
							<select class="custom-select" name="branch_name" id="branches" required>
								<option value="">Branch</option>
							</select>	
						</div>
					</div>
					
					<div class="col-lg-6">
					<form method="get" action="<? echo base_url('dashboard/viewsemester') ?>">
						<br>
						<div class="form-group">
							<select class="custom-select js-example-basic-single" name="bid" id="institutes" style="width:100% !important;" required>
								<option value="">Select Institute</option>
							</select>	
						</div>
					</div>
					
					<div class="col-md-12">
						<input type="hidden" name="ref" value="reference">	
						<input type="submit" class="btn btn-primary pull-right" id="gotoWeightage" value="Submit">
					</div>
					
				</div>
			</form>	
		</div>
	</div>
</div>

<? $this->load->view( "front_common/footer" ) ?>

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script type="text/javascript">

	$(document).ready(function() {
		$('.js-example-basic-single').select2();
	});

	function getCourses(){
		
		var id = $("#program").val();
		$.ajax({
			type: "post",
			data: {id:id,cid:<? echo ($branch_data->course != "") ? $branch_data->course : 0 ?>},
			url: "<? echo base_url('ajax/getCourses') ?>",
			success: function(data){
				$("#courses").html(data);
			}
		})
		
	}

	function getBranches(branch_id=""){
		
		var id = 0;
		<? if($branch_data->course != ""){ ?>
			id = <? echo ($branch_data->course != "") ? $branch_data->course : 0 ?>
		<? }else{ ?>	
			id = $("#courses").val();
		<? } ?>	

		var bid = "";
		if(branch_id){
			bid = branch_id;
		}else{
			bid = <? echo ($branch_data->branch_name != "") ? $branch_data->branch_name : 0 ?>;
		}

		$.ajax({
			type: "post",
			data: {id:id,cid:bid},
			url: "<? echo base_url('ajax/getBranches') ?>",
			success: function(data){
				$("#branches").html(data);
			}
		})
		
	}		   
	
	$("#program").change(function(){
		
		getCourses();
		
	})

	$("#courses").change(function(){
		
		getBranches();
		
	})
	
	$("#branches").change(function(){
		
		var program = $("#program").val();
		var courses = $("#courses").val();
		var branches = $("#branches").val();
		$.ajax({
			type: "post",
			data: {program:program,course:courses,branch:branches},
			url: "<? echo base_url('ajax/getRefinstitutes') ?>",
			success: function(data){
				$("#institutes").html(data);
			}
		})
		
	}) 
	
</script>