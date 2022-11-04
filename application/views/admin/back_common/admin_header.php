<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Curriculum Design Admin</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<? echo base_url('assets/') ?>plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<? echo base_url('assets/') ?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<? echo base_url('assets/') ?>dist/css/adminlte.min.css">
  
    <!-- DataTables -->
  <link rel="stylesheet" href="<? echo base_url('assets/') ?>plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<? echo base_url('assets/') ?>plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<? echo base_url('assets/') ?>plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <link rel="stylesheet" href="<? echo base_url('assets/') ?>css/bootstrap-switch.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
   
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-user"></i> Account
<!--          <span class="badge badge-warning navbar-badge">15</span>-->
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
<!--          <span class="dropdown-item dropdown-header">15 Notifications</span>-->
<!--          <div class="dropdown-divider"></div>-->
          <a href="<? echo base_url('admin/dashboard/profile') ?>" class="dropdown-item">Profile</a>
          <div class="dropdown-divider"></div>
          <a href="<? echo base_url('admin/dashboard/logout') ?>" class="dropdown-item">Logout</a>
<!--
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
-->
        </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->
  
<style>
	
	.swal-title {
		font-size: 18px !important;
	}
	
</style>  

  <!-- Main Sidebar Container -->
<? $this->load->view("admin/back_common/admin_sidebar") ?>
 

