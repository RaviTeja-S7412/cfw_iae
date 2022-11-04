<? $this->load->view("admin/back_common/admin_header"); 
?>   
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Profile</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<? echo base_url("admin/dashboard") ?>">Home</a></li>
              <li class="breadcrumb-item active">Profile</li>
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
						<h3 class="card-title">Update Profile / Change Password</h3>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-lg-6">
								<div class="user-pic" align="center">
									<?php

									if ( file_exists( $adata->profile_image ) ) {
										?>
									<img src="<?php echo base_url().$adata->profile_image; ?>" alt="users" class="rounded-circle img-fluid" style="height: 150px; width: 150px;">

									<?php }else{  ?>
									<img src="<?php echo base_url() ?>assets/images/1.jpg" alt="users" class="rounded-circle img-fluid" style="height: 150px; width: 150px;">
									<?php } ?>
									<p style="font-size: 20px">
										<strong>
											<?php 
												
												echo $adata->Name; 
												    
											?>
										</strong>
									</p>
								</div>
								<div class="" align="center">
									<button class="btn waves-effect waves-light btn-rounded btn-primary" id="updatePro">Update Profile</button>
									<button class="btn waves-effect waves-light btn-rounded btn-info" id="updatePass">Update Password</button>
								</div>

							</div>


							<div class="col-lg-6">

								<div class="card-body">
									<div id="uppro" style="display: none;">
										<form class="form p-t-20" id="uProfile" method="post" enctype="multipart/form-data">
											<div class="form-group">
												<label>Name</label>
												<div class="input-group">
													<input type="text" class="form-control" placeholder="Username" aria-label="Username" name="admin_name" value="<?php echo $adata->Name ?>" aria-describedby="basic-addon11">
													
												</div>
											</div>
											<div class="form-group">
												<label for="exampleInputEmail1">Email address</label>
												<div class="input-group">
													<input type="email" class="form-control" placeholder="Email" aria-label="Email" name="admin_email" value="<?php echo $adata->Email ?>" aria-describedby="basic-addon22">
												</div>
											</div>
											<div class="form-group">
												<label for="exampleInputEmail1">Profile Image</label>
												<div class="input-group">
													<input type="file" class="form-control" aria-label="profile" name="profile_pic" aria-describedby="basic-addon22">
												</div>
											</div>

											<button type="submit" class="btn btn-success m-r-10">Update</button>
											<button type="reset" class="btn btn-dark">Cancel</button>
										</form>
										<!-- <hr> -->
									</div>
									<div id="uppass" style="display: none;">
										<form class="form p-t-20" method="post" id="uPassword">

											<div class="form-group">
												<label>Old Password</label>
												<div class="input-group">
													<input type="password" class="form-control" placeholder="Password" aria-label="Password" name="opass" aria-describedby="basic-addon33" required="">
												</div>
											</div>

											<div class="form-group">
												<label>New Password</label>
												<div class="input-group">
													<input type="password" class="form-control" placeholder="Password" aria-label="Password" name="npass" aria-describedby="basic-addon33" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required="">
												</div>
											</div>
											<div class="form-group">
												<label>Confirm Password</label>
												<div class="input-group">
													<input type="password" class="form-control" name="cpass" placeholder="Confirm Password" aria-label="Password" aria-describedby="basic-addon4" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required="">
												</div>
											</div>
											<button type="submit" class="btn btn-success m-r-10">Update</button>
											<button type="reset" class="btn btn-dark">Cancel</button>

										</form>
									</div>
								</div>



							</div>
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

<script>
	
	$("#updatePro").click(function(){
        
        $("#uppro").toggle();
        $("#uppass").hide();
        
    });
	
    $("#updatePass").click(function(){
        
        $("#uppass").toggle();
        $("#uppro").hide();
        
    });

	$("#uProfile").submit(function(e){
		
		e.preventDefault();
		var fdata = new FormData(this);
		
		$.ajax({
			type : "post",
			data : fdata,
			dataType: "json",
			cache:false,
            contentType: false,
            processData: false,
			url : "<? echo base_url('admin/dashboard/editProfile') ?>",
			success : function(data){
				
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
				console.log(data);
			},
			error : function(data){
				console.log(data);
			}
		})
		
	})
	
	$("#uPassword").submit(function(e){
		
		e.preventDefault();
		var fdata = $(this).serialize();
		
		$.ajax({
			type : "post",
			data : fdata,
			dataType: "json",
			url : "<? echo base_url('admin/dashboard/changePassword') ?>",
			success : function(data){
				
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
				console.log(data);
			},
			error : function(data){
				console.log(data);
			}
		})
		
	})
	
</script>
