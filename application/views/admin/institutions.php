<? $this->load->view("admin/back_common/admin_header"); 
	$id = $this->uri->segment(5);
?>   
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Institutions</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<? echo base_url("admin/dashboard") ?>">Home</a></li>
              <li class="breadcrumb-item active">Institutions</li>
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
         	<div class="col-12">
        
        		<div class="card card-primary card-outline">
				  <div class="card-header">
					<h3 class="card-title">All Institutions</h3>
				  </div>
				  <!-- /.card-header -->
				  <div class="card-body">
				  	<div class="table-responsive">
						<table id="example1" class="table table-bordered table-hover">
						  <thead>
							  <tr>
							  
								<th>Sl.No</th>
								<th>Action</th>
								<th>Activate/De-Activate Account</th>
								<th>Branch</th>
								<th>Date of Registration</th>
								<th>Name of the Institution</th>
								<th>Username (Email ID)</th>
								<th>Address</th>
								<th>Name of the Contact Person</th>
								<th>Contact Person’s Mobile Number</th>
								<th>Contact Person’s Email ID</th>
								
							  </tr>
						  </thead>
						  <tbody>
							  <? $data = $this->db->order_by("id","desc")->get_where("tbl_institutes",["deleted"=>0])->result(); 
									$i = 1;
									foreach($data as $d){
							  ?>
								  <tr>
									<td><? echo $i ?></td>
									<td>
										<a href="javascript:void(0)" onClick="resendEmail(<? echo $d->id ?>)" data-toggle="tooltip" title="Resend Verification E-mail"><i class="fa fa-paper-plane"></i></a>&nbsp;&nbsp;
										<a href="<? echo base_url('admin/institutions/edit/').$d->id ?>" data-toggle="tooltip" title="Edit Profile"><i class="fa fa-marker"></i></a>&nbsp;&nbsp;
										<a href="javascript:void(0)" cid="<? echo $d->id ?>" class="resetPasswordmodal" data-toggle="tooltip" title="Change / Reset Password"><i class="fa fa-eye"></i></a>
									</td>
									<td>
                                       <input type="checkbox" data-on-text="Activate" data-off-text="Deactivate" data-on-color="info" cid="<? echo $d->id ?>" data-off-color="success" class="is_activated" <? echo ($d->is_activated == 1) ? 'checked' : '' ?>>
									</td>   
									<td><a href="<? echo base_url('admin/institutions/viewBranches/').$d->id ?>" class="btn btn-info btn-sm" data-toggle="tooltip" title="View Branches">View</a></td>
									<td><? echo date("d-m-Y",strtotime($d->registered_date)) ?></td>
									<td><? echo $d->institute_name ?></td>
									<td><? echo $d->email ?></td>
									<td><? echo nl2br($d->address) ?></td>
									<td><? echo $d->contact_person_name ?></td>
									<td><? echo $d->contact_person_mobile ?></td>
									<td><? echo $d->contact_person_email ?></td>
									
								  </tr>
							  <? $i++;
									} ?>		  
						  </tbody>
						</table>
					</div>	
				  </div>
				  <!-- /.card-body -->
				</div>
        	
			</div>
		</div>
        
      </div><!--/. container-fluid -->
    </section>
    
   <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
	  <!-- The Modal -->
	<div class="modal" id="resetPassword">
	  <div class="modal-dialog">
		<div class="modal-content">

		  <!-- Modal Header -->
		  <div class="modal-header">
			<h4 class="modal-title">Change / Reset Password</h4>
			<button type="button" class="close" data-dismiss="modal">&times;</button>
		  </div>
		  <!-- Modal body -->
		  <div class="modal-body">
			<form method="post" id="updatePassword">
				<div class="form-group">
					<input type="password" name="password" class="form-control" placeholder="Password" required>
				</div>
				<div class="form-group">
					<input type="password" name="cpassword" class="form-control" placeholder="Confirm Password" required>
				</div>
				<div class="form-group">
					<input type="hidden" name="cid" id="cid">
					<button type="submit" class="btn btn-block bg-gradient-primary">Update</button>
				</div>	
			</form>	
		  </div>

		</div>
	  </div>
	</div>        
 
<? $this->load->view("admin/back_common/admin_footer") ?> 

<script>
	$("input[type='checkbox']").bootstrapSwitch({size : 'mini'});
	$("#example1").DataTable({
      "lengthChange": true, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
	
	
	$('#example1').on('switchChange.bootstrapSwitch','.is_activated', function (e, state) {
        var id = $(this).attr("cid"); 
		var status;

		if ($(this).is(":checked")){
			status = 1;
		}else{
			status = 0;
		}
		$.ajax({
			type:"POST",
			url:"<? echo base_url('admin/Institutions/updateStatus') ?>",
			data:{id:id,status:status},
			dataType: "json",
			success:function (data){
				swal(
				  data.msg,
				  '',
				  'success'
				);
			}

		});  
	});

	function resendEmail(id){
		swal({
		  title: "Are you sure?",
		  text: "Want To Send Verification Email.",
		  icon: "warning",
		  buttons: true,
		  dangerMode: true,
		})
		.then((willDelete) => {
		  if (willDelete) {
			  
			  	$.ajax({
					type : "post",
					data : {id:id},
					dataType: "json",
					url : "<? echo base_url('admin/Institutions/resendVerificationemail') ?>",
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
			  
		  } else {
			swal("Email Not Sent");
		  }
		});
	}
	
	$(".resetPasswordmodal").click(function(){
		$("#resetPassword").modal("show");
		$("#cid").val($(this).attr("cid"));
	});
	
	$("#updatePassword").submit(function(e){
		
		e.preventDefault();
		var fdata = $(this).serialize();
		
		$.ajax({
			type : "post",
			data : fdata,
			dataType: "json",
			url : "<? echo base_url('admin/Institutions/updatePassword') ?>",
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
