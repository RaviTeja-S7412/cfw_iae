<? $this->load->view("front_common/header") ?>
<link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
<link href="https://cdn.datatables.net/fixedheader/3.2.2/css/fixedHeader.bootstrap4.min.css" rel="stylesheet" />

<style>
	.content {
		padding: 7rem 0;
	}
	
	#example th {
		background: #0c355d;
		color: #fff;
	}
</style>

<div class="content1">
	<div class="container">
		<h4>CURRICULUM DESIGNS</h4>
		<div class="col-lg-12 card-col">
			<? echo $this->session->flashdata("emsg"); ?>
			<table id="example" class="table table-striped table-bordered" style="width:100%">
				<thead>
					<tr>
						<th>Program Name</th>
						<th>Course name</th>
						<th>Branch</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<? foreach($cdata as $c){ 
						$ddata = $this->db->get_where("tbl_institute_curriculum_design",["branch_id"=>$c->id])->row();
						$course = $this->db->get_where("tbl_courses",["id"=>$ddata->course])->row()->course_name;
						$program = $this->db->get_where("tbl_programs",["id"=>$ddata->program])->row()->program_name;
					?>
						<tr>
							<td><? echo $program ?></td>
							<td><? echo $course ?></td>
							<td><? echo $this->db->get_where("tbl_branches",["id"=>$c->branch_name])->row()->branch_name; ?></td>
							<td>
								<a href="<? echo base_url('curriculum-design/view?bid=').$c->id."&ref=view" ?>"><i class="fa fa-eye"></i></a>&nbsp;&nbsp;
								<a href="<? echo base_url('dashboard/viewsemester?bid=').$c->id ?>"><i class="fa fa-download" data-toggle="tooltip" title="Semester Wise PDF"></i></a>&nbsp;&nbsp;
								<a href="<? echo base_url('create-design?bid=').$c->id ?>"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;
								<a href="<? echo base_url('dashboard/delBranch/').$c->id ?>" onClick="return confirm('Are you sure want to delete this branch.')"><i class="fa fa-trash" style="color: red"></i></a>
							</td>
						</tr>
					<? } ?>	
				</tbody>

			</table>
			<div class="clearfix"></div>
		</div>
	</div>
</div>


<? $this->load->view( "front_common/footer" ) ?>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/fixedheader/3.2.2/js/dataTables.fixedHeader.min.js"></script>

<script>$(document).ready(function() {
    var table = $('#example').DataTable( {
        fixedHeader: true
    } );
} );</script>
