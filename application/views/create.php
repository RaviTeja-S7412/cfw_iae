<? 
	$this->load->view("front_common/header"); 
	$bid = $this->input->get("bid");
?>

<style>

	.col-form-label {
		text-align: right;
	}

	.bootstrap-duallistbox-container select{
		height: 360px !important;
	}

</style>

<div class="content1">
	<div class="container">
		<h4>Curriculum Design</h4>
		<h6 class="courseweightageLabel"></h6>
		<div class="col-lg-12 card-col">
			<form method="post" id="createBranch">
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
					<div class="col-lg-9 cnote" style="margin-top: 20px; display: none">
						<p style="font-size: 12px; color: red; font-weight: 500">Note: Typical credits are: Minimum – <span id="cmin"></span>, Maximum – <span id="cmax"></span><br>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id="inst_credits">Institution credits are: Minimum – <span id="ucmin"></span>, Maximum – <span id="ucmax"></span></span>
						</p></div>
					<div class="col-lg-3 cnote" style="margin-top: 20px; display: none"><a class="btn btn-primary btn-sm pull-right" href="#" data-toggle="modal" data-target="#creditsModal">Define Your Own Credits</a></div>
					<div class="col-lg-12">
						<br>
						<div class="form-group">
							<select class="custom-select" name="branch_name" id="branches" required>
								<option value="">Branch</option>
							</select>
							<small style="color: red;">Didn’t find the Branch what you are looking for? <a href="javascript:void(0)" data-toggle="modal" data-target="#branchModal">Click here</a> to add New Branch</small>	
						</div>
					</div>
					
					<div class="col-lg-12">
						<div class="form-group" id="sub_categories" style="display: none;">
							<label for="usr">Course Categories </label>
<!--							<input type="hidden" name="sub_categories" id="sub_categories">-->
<!--							<div id="sub_cats" class="transfer-demo"></div>-->
							<select multiple="multiple" name="sub_categories[]" id="sub_cats" title="duallistbox_demo1[]">
							</select>
					
						</div>
					</div>
					<div class="col-md-12">
						<small style="color: red; display:none;" class="new_course_category">Didn’t find the Course Catergory what you are looking for? <a href="javascript:void(0)" data-toggle="modal" data-target="#myModal">Click here</a> to add Course Catergory</small>
						<input type="button" class="btn btn-primary pull-right" id="gotoWeightage" value="Save & Next">
					</div>
					
				</div>

				<div class="row" id="selectWeightage" style="display: <? echo $this->input->get("bid") == "" ? 'none': 'block' ?>">
					<div class="col-lg-12 ml-auto d-flex">
						<i class="fa fa-arrow-left fa-2x backFields pull-left" style="cursor: pointer"></i>
						<p class="mb-0 text-dark p-1 ml-auto"><b style="font-weight: 700;">Total Percentage:</b> <b>100 %</b>&nbsp;&nbsp;<b style="font-weight: 700;">Total Credits:</b> <b class="courseCredits"> <? echo ($branch_data->min_credits != "") ? "($branch_data->min_credits - $branch_data->max_credits)" : '' ?> </b></p>
					</div>
					<h4 style="text-align: center;margin-bottom: 40px;margin-top: 10px;">Enter Weightages</h4>
					<div class="col-lg-12" align="right">
						
					</div>
					<div class="col-md-12">
						<p style="margin-left: 48px;color: red;font-size: 14px;font-weight: 500;">Note: Minor variation is allowed as per the need of the respective discipline.</p>	
					</div>
					<div class="col-lg-8 subcategories_weightages">
						
					</div>
					<div class="col-lg-4">
						<!-- <div id="piechart" style="width: 200px; height: 200px;"></div> -->
					</div>
					<div class="col-lg-12" align="center">
						<input type="hidden" name="bid" value="<? echo $bid ?>">
						<input type="submit" value="Save & Next" class="btn btn-primary">
					</div>
				</div>
			</form>	
		</div>
	</div>
</div>

<input type="hidden" class="weightagelabel">

<div id="creditsModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="display:block">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Update Credits</h4>
      </div>
      <div class="modal-body">
		<form method="post" id="updateCredits">
			<div class="form-group">
				<input type="number" class="form-control" name="min_credits" id="min_credits" placeholder="Minimum Credits" required>
			</div>
			<div class="form-group">
				<input type="number" class="form-control" name="max_credits" id="max_credits" placeholder="Maximum Credits" required>
			</div>
			<div class="form-group">
				<input type="submit" class="btn btn-primary pull-left" value="Submit">
			</div>
		</form>	
      </div>
    </div>

  </div>
</div>

<div id="branchModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="display:block">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add New Branch</h4>
      </div>
      <div class="modal-body">
		<form method="post" id="addnew_branch">
			<div class="form-group">
				<input type="text" class="form-control" name="new_branch" id="new_branch_name" placeholder="Add New Branch" required>
			</div>
			<div class="form-group">
				<input type="submit" class="btn btn-primary pull-left" value="Submit">
			</div>
		</form>	
      </div>
    </div>

  </div>
</div>

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="display:block">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add New Course Catergories</h4>
      </div>
      <div class="modal-body">
		<form method="post" id="addnew_course_category">
			<div class="form-group">
				<input type="text" class="form-control" name="new_course_category" id="new_course_category" placeholder="Add New Course Category" required>
			</div>
			<div class="form-group">
				<input type="submit" class="btn btn-primary pull-left" value="Submit">
			</div>
		</form>	
      </div>
    </div>

  </div>
</div>

<div id="popupModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="display:block">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">AICTE Norms and Requirement</h4>
      </div>
      <div class="modal-body">
        <p style="font-align: justify; color: black"><strong>Note: </strong>
			Under Graduate Degree Courses in EMERGING / MULTIDISCIPLINARY AREAS shall be allowed as specialization from the same department. The minimum additional Credits for such Courses shall be in the range of 18-20 (including credit transferred from the SWAYAM platform) and the same shall be mentioned in the degree, as specialization in that particular area. For example, doing extra credits for Robotics in Mechanical Engineering shall earn B.E./B.Tech. (Hons.) Mechanical Engineering with specialization in Robotics.<br>
			Minor specialization in EMERGING/ MULTIDISCIPLINARY AREAS in Under Graduate Degree Courses may be allowed where a student of another Department shall take the minimum additional Credits in the range of 18-20 and get a degree with minor from another Department.
		</p>
		<p style="font-align: justify; color: black">
		<strong>Disclaimer: </strong>
		Areas in which Minor Degree/Hons. may be offered are numerous. It is up to the Universities with the help of their Academic Board/Council to decide whether Minor Degree/Hons. is to be offered or not in any particular area, which is not mentioned above. AICTE approval is not required for offering Minor Degree/Hons. in any such area, however the criteria that “Minor Degree or Hons. will cumulatively require additional 18 to 20 credits in the specified area in addition to the credits essential for obtaining the Under Graduate Degree in Major Discipline (i.e. 160 credits)”<br><br>
		To maintain the quality of Education, 60% of the eligible courses in any Technical Institution shall be accredited in the next TWO (2) years’ time, else EoA shall not be issued by the Council.

		</p>
      </div>
    </div>

  </div>
</div>

<? $this->load->view( "front_common/footer" ) ?>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
	
</script>

<script type="text/javascript">

	$(document).ready(function(){
		$("#popupModal").modal("show")
	})

	$("#updateCredits").submit(function(e){
		
		e.preventDefault();
		var course_id = $("#courses").val();
		var min_credits = $("#min_credits").val();
		var max_credits = $("#max_credits").val();

		$.ajax({
			type: "post",
			data: {course_id: course_id, min_credits: min_credits, max_credits: max_credits},
			url: "<? echo base_url('ajax/updateinstCredits') ?>",
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

			}
		})

	})

	$("#addnew_branch").submit(function(e){
		
		e.preventDefault();
		var course = $("#courses").val();
		var branch = $("#new_branch_name").val();
		if(course === ""){
			alert("Please Select Course.");
			return false;	
		}

		$.ajax({
			type: "post",
			data: {course: course, branch: branch},
			dataType: "json",
			url: "<? echo base_url('ajax/addNewbranch') ?>",
			success: function(data){
				$("#branchModal").modal('hide');
				if(data.status == "success"){
					getBranches(data.branch_id)
					getSubcategories(data.branch_id, course)
					$(".new_course_category").show();
				}
			},
			error: function(data){

			}
		})

	})

	$("#addnew_course_category").submit(function(e){
		
		e.preventDefault();
		var branch = $("#branches").val();
		var course = $("#courses").val();
		var course_category = $("#new_course_category").val();

		$.ajax({
			type: "post",
			data: {course_category: course_category, branch: branch},
			dataType: "json",
			url: "<? echo base_url('ajax/addNewcoursecategory') ?>",
			success: function(data){
				$("#myModal").modal('hide');
				if(data.status == "success"){
					getSubcategories(branch, course)
				}
			},
			error: function(data){

			}
		})

	})

	$(document).ready(function(){
		$('#sub_cats').bootstrapDualListbox();
	})
	
	<? if($this->input->get("bid")){ ?>
		
		$(document).ready(function(){
			
			<? if($branch_data->branch_name){ ?>
	
				var id = <? echo ($branch_data->branch_name != "") ? $branch_data->branch_name : 0 ?>;

			<? } ?>
			<? if($branch_data->course){ ?>
	
				var cid = <? echo ($branch_data->course != "") ? $branch_data->course : 0 ?>;

			<? } ?>
			getCourses();
			getSubcategories(id, cid);
			gotoWeightage();
			getBranches();
			$("#create_fields").show();
			$("#selectWeightage").hide();
			
		})
	
	<? } ?>
	
	$("#createBranch").submit(function(e){
		
		e.preventDefault();
		var fdata = $(this).serialize();
		$.ajax({
			type : "post",
			url : "<? echo base_url('dashboard/insertBranch') ?>",
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
						window.location.href = "<? echo base_url('create-design/add-subjects?bid=') ?>"+data.bid;
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
				// console.log(data);
				swal(
				  data.msg,
				  '',
				  'error'
				);
				return false;
			}
		})
		
	});

	$(".backFields").click(function(){
		
		$("#create_fields").show();
		$("#selectWeightage").hide();
		
	})
	
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
			   
	function getSubcategories(id="",cid=""){
	
		$('#sub_cats').html("");
		$("#sub_categories").show();	
			
		$.ajax({
			type: "post",
			data: {cid:cid,id:id,sub_ids:<? echo ($branch_data->subject_categories != "") ? $branch_data->subject_categories : "[]"; ?>},
			dataType: "json",
			url: "<? echo base_url('ajax/getsubCategories') ?>",
			success: function(data){
				
				$('#sub_cats').html(data.subcategories);
				$('.courseCredits').html(data.credits);
				$('#sub_cats').bootstrapDualListbox('refresh', true);
				
			},
			error: function(data){
				console.log(data)
			}
		})	
			
	}		   
	
	$("#program").change(function(){
		
		getCourses();
		$('#sub_cats').bootstrapDualListbox('refresh', true);
		
	})

	$("#courses").change(function(){
		
		getBranches();
		var min = $('option:selected', this).attr('cmin');
		var max = $('option:selected', this).attr('cmax');
		var umin = $('option:selected', this).attr('ucmin');
		var umax = $('option:selected', this).attr('ucmax');

		if($(this).val() == ""){
			$(".cnote").hide();
			$("#cmin").html("");
			$("#cmax").html("");
			$("#ucmin").html("");
			$("#ucmax").html("");
		}else{
			$(".cnote").show();
			$("#cmin").html(min);
			$("#cmax").html(max);
			$("#ucmin").html(umin);
			$("#ucmax").html(umax);
			$("#min_credits").val(umin);
			$("#max_credits").val(umax);
			if(umin === ""){
				$("#inst_credits").hide();
			}else{
				$("#inst_credits").show();
			}
		}
		
		$('#sub_cats').bootstrapDualListbox('refresh', true);
		
	})
	
	$("#branches").change(function(){
		
		var id = $("#branches").val();
		var cid = $("#courses").val();
		var coname = $('option:selected', this).attr('coname');
		$(".weightagelabel").val(coname);
		getSubcategories(id, cid);
		$(".new_course_category").show();

		if(id == "new"){
			$("#new_branch_name").val("");
			// $("#branchModal").modal('show');
		}else{
			// $("#branchModal").modal('hide');
		}
		
	}) 
	
	$("#gotoWeightage").click(function(){
		
		gotoWeightage();
		
	});
	
	function gotoWeightage(){
		
		var program = $("#program").val();
		var courses = $("#courses").val();
		var branch_name = $("#branches").val();
		
		if(program == ""){
			swal(
			  'Program Name Is Required',
			  '',
			  'error'
			);
			return false;
		}
		
		<? if($branch_data->course == ""){ ?>
		
			if(courses == ""){
				swal(
				  'Course Name Is Required',
				  '',
				  'error'
				);
				return false;
			}
		
		<? } ?>
		<? if($branch_data->branch_name == ""){ ?>
			if(branch_name == ""){
				swal(
				'Branch Name Is Required',
				'',
				'error'
				);
				return false;
			}
		<? } ?>	
		
		var sub_categories = [];
		
		$("select[name='sub_categories[]']").map(function(){
			sub_categories.push($(this).val());
		})
		
		if(sub_categories.length == 0){
			swal(
			  'Subject Categories Are Required',
			  '',
			  'error'
			);
			return false;
		}
		
		var scats = "";
		
		var options = [],
			option;
		
		var sub_cats = [];
		var tax = document.getElementById('sub_cats');
		var len = tax.options.length;

		for (var i = 0; i < len; i++) {
			option = tax.options[i];
			if (option.selected) {
					options.push(option);

				var cname = option.getAttribute('cname');
				var id = option.getAttribute('value');
				
				sub_cats.push({cname:cname,id:id});

			}
		}

		var courses = $("#courses").val();

		<? if($branch_data->branch_name != ""){ ?>
			var branch = "<? echo $branch_data->branch_name ?>";
		<? }else{ ?>	
			var branch = $("#branches").val();
		<? } ?>	

		$.ajax({
			type : "post",
			data : {sub_cats:sub_cats,weightages:<? echo ($branch_data->weightage != "") ? $branch_data->weightage : "[]" ?>,cid:courses,branch:branch},
			dataType: "json",
			url : "<? echo base_url('ajax/getWeightages') ?>",
			success : function(data){
				var course = $('#courses option:selected').attr('coname');
				var branch_name = $("#branches").val();
				
				$(".courseweightageLabel").html("("+course+' - '+data.branch+")");
				$(".subcategories_weightages").html(data.html);

				var onloadWeightages = [['Weightage', 'In %']];

				var options1 = [],
					option1;
				var tax1 = document.getElementById('sub_cats');
				var len1 = tax1.options.length;

				for (var i1 = 0; i1 < len1; i1++) {
					option1 = tax1.options[i1];
					if (option1.selected) {
							options1.push(option1);

						var cname1 = option1.getAttribute('cname');
						if(i1 > 0)
							var weightage = $('input[name="weightage[]"]:eq('+(i1-1)+')').val();	
						onloadWeightages.push([cname1, parseInt(weightage) > 0 ? parseInt(weightage) : 0]);

					}
				}

				google.charts.load('current', {'packages':['corechart']});
				google.charts.setOnLoadCallback(drawChart);

				function drawChart() {
					var data = google.visualization.arrayToDataTable(onloadWeightages);

					var options = {
						legend: 'none',
						title: 'Weightage Graph'
					};

					var chart = new google.visualization.PieChart(document.getElementById('piechart'));
					chart.draw(data, options);
				}
			},
			error : function(data){
				console.log(data);
			}
		})
		
		$(".subcategories_weightages").html(scats);
		
		$("#create_fields").hide();
		$("#selectWeightage").show();
		
	}
	
	$(document).on("change",".getWeightages",function(){
		
		var sid = $(this).attr("subid");
		var weightage = $(this).val();
		var courses = $("#courses").val();
		var sub_categories = [];
		
		$("select[name='sub_categories[]']").map(function(){
			sub_categories.push($(this).val());
		})

		var weightage1 = $("input[name='weightage[]']")
              .map(function(){return $(this).val();}).get();
		
		$.ajax({
			type: "post",
			data: {weightage: weightage,totalWeightage: weightage1,cid: courses, sub_categories: sub_categories},
			dataType : "json",
			url: "<? echo base_url('ajax/getCreditweightage') ?>",
			success: function(data){

				for (var key of Object.keys(data.tWeightages)) {
					console.log(key + " -> " + data.tWeightages[key])
					$(".assignCredits-"+key).html(data.tWeightages[key]);
				}

				var options = [],
					option;
				var sub_cats = [['Weightage', 'In %']];
				var tax = document.getElementById('sub_cats');
				var len = tax.options.length;

				// var id = 1;
				for (var i = 0; i < len; i++) {
					option = tax.options[i];
					if(i > 0)
						var weightage = $('input[name="weightage[]"]:eq('+(i-1)+')').val();	
					if (option.selected) {
							options.push(option);
						var cname = option.getAttribute('cname');
						sub_cats.push([cname, parseInt(weightage) > 0 ? parseInt(weightage) : 0]);
					}
				}

				/* google.charts.load('current', {'packages':['corechart']});
				google.charts.setOnLoadCallback(drawChart);

				function drawChart() {
					var data = google.visualization.arrayToDataTable(sub_cats);

					var options = {
						legend: 'none',
						title: 'Weightage Graph'
					};

					var chart = new google.visualization.PieChart(document.getElementById('piechart'));
					chart.draw(data, options);
				} */

			}
		})
		
		var weightage = $("input[name='weightage[]']")
              .map(function(){return $(this).val();}).get();

		var totalWeightage = 0;
		$.each(weightage,function(){totalWeightage+=parseFloat(this) || 0;});
		$(".selWeightage").html('<b>'+totalWeightage+"</b>");
		
	})
	
</script>