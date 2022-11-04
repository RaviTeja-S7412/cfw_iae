
<? $this->load->view("admin/back_common/admin_header") ?>
 
<style>
	.content a{
		color: #000 !important;
	}
</style>       
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<? echo base_url('admin/dashboard') ?>">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
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
          <div class="col-12 col-sm-6 col-md-3">
          	<a href="<? echo base_url('admin/settings/programs') ?>">
				<div class="info-box">
				  <span class="info-box-icon bg-info elevation-1"><i class="fa fa-university"></i></span>

				  <div class="info-box-content">
					<span class="info-box-text">Programs</span>
					<span class="info-box-number"><? echo $this->admin->getMoney($this->db->get_where("tbl_programs",["deleted"=>0])->num_rows()); ?></span>
				  </div>
				  <!-- /.info-box-content -->
				</div>
           	</a>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
          	<a href="<? echo base_url('admin/settings/courses') ?>">
				<div class="info-box mb-3">
				  <span class="info-box-icon bg-danger elevation-1"><i class="fa fa-university"></i></span>

				  <div class="info-box-content">
					<span class="info-box-text">Courses</span>
					<span class="info-box-number"><? echo $this->admin->getMoney($this->db->get_where("tbl_courses",["deleted"=>0])->num_rows()); ?></span>
				  </div>
				  <!-- /.info-box-content -->
				</div>
			</a>
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
          	<a href="<? echo base_url('admin/settings/Subcategories') ?>">
				<div class="info-box mb-3">
				  <span class="info-box-icon bg-success elevation-1"><i class="fa fa-university"></i></span>

				  <div class="info-box-content">
					<span class="info-box-text">Subject Categories</span>
					<span class="info-box-number"><? echo $this->admin->getMoney($this->db->get_where("tbl_subject_category",["deleted"=>0])->num_rows()); ?></span>
				  </div>
				  <!-- /.info-box-content -->
				</div>
			</a>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
          	<a href="<? echo base_url('admin/settings/subjects') ?>">
				<div class="info-box mb-3">
				  <span class="info-box-icon bg-warning elevation-1"><i class="fa fa-university"></i></span>

				  <div class="info-box-content">
					<span class="info-box-text">Subjects</span>
					<span class="info-box-number"><? echo $this->admin->getMoney($this->db->get_where("tbl_subjects",["deleted"=>0])->num_rows()); ?></span>
				  </div>
				  <!-- /.info-box-content -->
				</div>
			</a>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
          	<a href="<? echo base_url('admin/settings/semesters') ?>">
				<div class="info-box mb-3">
				  <span class="info-box-icon bg-success elevation-1"><i class="fa fa-university"></i></span>

				  <div class="info-box-content">
					<span class="info-box-text">Semesters</span>
					<span class="info-box-number"><? echo $this->admin->getMoney($this->db->get_where("tbl_semesters",["deleted"=>0])->num_rows()); ?></span>
				  </div>
				  <!-- /.info-box-content -->
				</div>
           	</a>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
          	<a href="<? echo base_url('admin/institutions') ?>">
				<div class="info-box mb-3">
				  <span class="info-box-icon bg-info elevation-1"><i class="fa fa-university"></i></span>

				  <div class="info-box-content">
					<span class="info-box-text">Institutions</span>
					<span class="info-box-number"><? echo $this->admin->getMoney($this->db->get_where("tbl_institutes",["deleted"=>0])->num_rows()); ?></span>
				  </div>
				  <!-- /.info-box-content -->
				</div>
			</a>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    
   <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->    
 
<? $this->load->view("admin/back_common/admin_footer") ?> 

