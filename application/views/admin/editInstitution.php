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
            <h1 class="m-0">Update Institution Profile</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<? echo base_url("admin/dashboard") ?>">Home</a></li>
              <li class="breadcrumb-item"><a href="<? echo base_url("admin/institutions") ?>">Institutions</a></li>
              <li class="breadcrumb-item active"><? echo ($id != "") ? 'Update' : 'Create'; ?> Institution</li>
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
						<h3 class="card-title"><? echo ($id != "") ? 'Update' : 'Create'; ?> Institution</h3>
					</div>
					<div class="card-body">
						<form method="post" id="editInstitution">
							<div class="row">
							
								<div class="col-md-4">
									<div class="form-group">
									  <label>Institution Name</label>
									  <input type="text" name="institute_name" class="form-control" value="<? echo $idata->institute_name ?>" required>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
									  <label>Email ID</label>
									  <input type="email" name="email" class="form-control" value="<? echo $idata->email ?>" required>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
									  <label>Contact Person Name</label>
									  <input type="text" name="contact_person_name" class="form-control" value="<? echo $idata->contact_person_name ?>" required>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
									  <label>Contact Person Email</label>
									  <input type="email" name="contact_person_email" class="form-control" value="<? echo $idata->contact_person_email ?>" required>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
									  <label>Contact Person Mobile Number</label>
									  <input type="number" name="contact_person_mobile" class="form-control" value="<? echo $idata->contact_person_mobile ?>" required>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
									  <label>Address</label>
									  <textarea rows="3" name="address" class="form-control" required><? echo $idata->address ?></textarea>
									</div>
								</div>
																
								<div class="col-md-2">
									<div class="form-group" style="margin-top: 30px;">
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

	$("#editInstitution").submit(function(e){
		
		e.preventDefault();
		var fdata = $(this).serialize();
		
		$.ajax({
			type : "post",
			data : fdata,
			dataType: "json",
			url : "<? echo base_url('admin/Institutions/updateInstitute') ?>",
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
