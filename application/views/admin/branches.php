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
            <h1 class="m-0">Branches</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<? echo base_url("admin/dashboard") ?>">Home</a></li>
              <li class="breadcrumb-item active">Branches</li>
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
						<h3 class="card-title"><? echo ($id != "") ? 'Update' : 'Create'; ?> Branch</h3>
					</div>
					<div class="card-body">
						<form method="post" id="cprogram">
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label for="exampleInputEmail1">Branch Name</label>
										<input type="text" name="branch_name" required class="form-control" id="exampleInputEmail1" placeholder="Enter Branch Name" value="<? echo $pdata->branch_name ?>">
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
        
        <div class="row">
         	<div class="col-12">
        
        		<div class="card card-primary card-outline">
				  <div class="card-header">
					<h3 class="card-title">All Branches</h3>
				  </div>
				  <!-- /.card-header -->
				  <div class="card-body">
					<table id="example1" class="table table-bordered table-hover">
					  <thead>
						  <tr>
							<th>Sl.No</th>
							<th>Branch Name</th>
							<th>Action</th>
						  </tr>
					  </thead>
					  <tbody>
						  <? $data = $this->db->order_by("id","desc")->get_where("tbl_branches",["deleted"=>0])->result();
						  		$i = 1;
								foreach($data as $d){
						  ?>
							  <tr>
								<td><? echo $i ?></td>
								<td><? echo $d->branch_name ?></td>
								<td>
									<a href="<? echo base_url('admin/settings/branches/index/').$d->id ?>"><i class="fa fa-marker"></i></a>&nbsp;&nbsp;
									<a href="javascript:void(0)" onClick="deleteRecord(<? echo $d->id ?>)"><i class="fa fa-trash" style="color: red"></i></a>
								</td>
							  </tr>
						  <? $i++;
								} ?>		  
					  </tbody>
					</table>
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
 
<? $this->load->view("admin/back_common/admin_footer") ?> 

<script>
	
	function deleteRecord(id){
		swal({
		  title: "Are you sure?",
		  text: "Once deleted, you will not be able to recover this record!",
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
					url : "<? echo base_url('apis/Branches/delete') ?>",
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
			swal("Branch is safe!");
		  }
		});
	}
	
	$("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

	$("#cprogram").submit(function(e){
		
		e.preventDefault();
		var fdata = $(this).serialize();
		
		$.ajax({
			type : "post",
			data : fdata,
			dataType: "json",
			url : "<? echo base_url('apis/Branches/create') ?>",
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
