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
            <h1 class="m-0">Subject Category To Course Link</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<? echo base_url("admin/dashboard") ?>">Home</a></li>
              <li class="breadcrumb-item"><a href="<? echo base_url("admin/links/courseLinks") ?>">Subject Category To Course Links</a></li>
              <li class="breadcrumb-item active"><? echo ($id != "") ? 'Update' : 'Create'; ?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
   
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
        	<div class="col-md-12">
				<div class="card card-primary card-outline">
					<div class="card-header">
						<h3 class="card-title"><? echo ($id != "") ? 'Update' : 'Create'; ?> Subject Category To Course Link</h3>
					</div>
					<div class="card-body">
						<form method="post" id="slcategory">
							<div class="row">
							
								<div class="col-md-12">
									<div class="form-group">
									  <label>Subject Categories</label>
									  <select class="duallistbox" multiple="multiple" name="subject_category[]" style="height: 200px !important;">
										<? 
										  	$subjects = $this->db->order_by("id","desc")->get_where("tbl_subject_category",["deleted"=>0])->result(); 
										  	foreach($subjects as $subject){
												
												$sel = '';
												if(in_array($subject->id,$sel_subjectcategories)){
													$sel = 'selected';
												}
												
												echo '<option value="'.$subject->id.'" '.$sel.'>'.$subject->category_name.'</option>';
											}
										 ?>
									  </select>
									</div>
								</div>
								
								<div class="col-md-6">
									<div class="form-group">
									  <label>Branch</label>
									  <select class="form-control select2bs4" name="course" required style="width: 100%;">
										<option value="">Select Branch</option>
										<? 
										  	$scats = $this->db->order_by("id","desc")->get_where("tbl_branches",["deleted"=>0])->result(); 
										  	foreach($scats as $scat){
												$sel = ($id == $scat->id) ? 'selected' : '';
												echo '<option value="'.$scat->id.'" '.$sel.'>'.$scat->branch_name.'</option>';
											}
										 ?>
									  </select>
									</div>
								</div>
								
								<div class="col-md-2">
									<div class="form-group" style="margin-top: 30px;">
										<input type="hidden" name="ref" value="<? echo ($id == "") ? 'add' : '' ?>">
										<input type="hidden" name="id" value="<? echo $id ?>">
										<button type="submit" class="btn btn-block bg-gradient-primary"><? echo ($id != "") ? 'Update' : 'Submit'; ?></button>
									</div>
								</div>
							</div>
						</form>	
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

	$('.select2bs4').select2({
      theme: 'bootstrap4'
    });
	
	$('.duallistbox').bootstrapDualListbox();

	$("#slcategory").submit(function(e){
		
		e.preventDefault();
		var fdata = $(this).serialize();
		
		$.ajax({
			type : "post",
			data : fdata,
			dataType: "json",
			url : "<? echo base_url('apis/Links/subcategory_course_link') ?>",
			success : function(data){
//				console.log(data);
				if(data.status == 200){
					swal(
					  data.msg,
					  '',
					  'success'
					);
					setTimeout(function(){
						location.reload();
					},3000)
				}else{
					swal(
					  data.msg,
					  '',
					  'error'
					);
				}
				
			},
			error : function(data){
				console.log(data);
			}
		})
		
	})
	
</script>
