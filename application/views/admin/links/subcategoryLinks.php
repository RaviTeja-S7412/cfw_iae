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
            <h1 class="m-0">Subject To Subject Category Links</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<? echo base_url("admin/dashboard") ?>">Home</a></li>
              <li class="breadcrumb-item active">Subject To Subject Category Links</li>
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
					<h3 class="card-title">All Subject To Subject Category Links</h3>
					<a href="<? echo base_url('admin/links/cusubcategoryLink') ?>" class="btn bg-gradient-primary pull-right btn-sm" style="float: right;">Create</a>
				  </div>
				  <!-- /.card-header -->
				  <div class="card-body">
					<table id="example1" class="table table-bordered table-hover">
					  <thead>
						  <tr>
						  	<th>Sl.No</th>
							<th>Category Name</th>
							<th>Subjects</th>
							<th>Action</th>
						  </tr>
					  </thead>
					  <tbody>
						  <? 
						  		$i = 1;
								foreach($subcatlinks as $d){
						  ?>
							  <tr>
							  	<td><? echo $i ?></td>
								<td><? echo $d["subject_category"] ?></td>
								<td><? echo $d["subjects"] ?></td>
								<td>
									<a href="<? echo base_url('admin/links/cusubcategoryLink/').$d["id"] ?>"><i class="fa fa-marker"></i></a>&nbsp;&nbsp;
									<a href="javascript:void(0)" onClick="deleteRecord(<? echo $d["id"] ?>)"><i class="fa fa-trash" style="color: red"></i></a>
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
					data : {subject_category:id,ref:'delete'},
					dataType: "json",
					url : "<? echo base_url('apis/Links/sub_subcategory_link') ?>",
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
			swal("Subject Category Link is safe!");
		  }
		});
	}
	
	$("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

</script>
