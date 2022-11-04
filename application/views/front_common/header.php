<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet"/>

	<link rel="stylesheet" href="<? echo base_url() ?>assets/fonts/icomoon/style.css"/>
	<link rel="stylesheet" href="<? echo base_url() ?>assets/css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="<? echo base_url() ?>assets/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="<? echo base_url() ?>assets/css/style.css"/>
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="<? echo base_url() ?>assets/css/icon_font.css"/>

	<title>Curriculum Design </title>
	<style>
		.content {
			padding: 7rem 0;
		}
	</style>
</head>

<body>
	<header>
		<nav class="navbar navbar-expand-sm navbar-toggleable-sm navbar-light bg-white border-bottom box-shadow mb-3">
			<div class="container">
				<a class="navbar-brand" asp-area="" asp-controller="Home" asp-action="Index">
            <img src="<? echo base_url() ?>assets/images/logo.jpg" alt="" style="width: 50%" />
          </a>
			
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
			
				<div class="navbar-collapse collapse d-sm-inline-flex flex-sm-row-reverse">
					<ul class="navbar-nav flex-grow-1 justify-content-end">
						<li class="nav-item">
							<a href="#" class="nav-link">ABOUT US</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">CONTACT US</a>
						</li>
						
						<? if($this->session->userdata('institute_id')){ ?>
						
							<li class="nav-item dropdown">
							  <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="navbardrop" data-toggle="dropdown">
								ACCOUNT
							  </a>
							  <div class="dropdown-menu">
								<a class="dropdown-item" href="<? echo base_url('dashboard') ?>">DASHBOARD</a>
								<a class="dropdown-item" href="<? echo base_url('dashboard/logout') ?>">LOGOUT</a>
							  </div>
							</li>
							
						<? }else{ ?>
							
							<li class="nav-item">	
								<a href="<? echo base_url('institute-login') ?>" class="nav-link">LOGIN</a>
							</li>
							
						<? } ?>	
					</ul>
				</div>
			</div>
		</nav>
	</header>