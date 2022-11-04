	<footer class="footer text-center">
        <div class="container">
            &copy; 2022 - IAE - <a asp-area="" asp-controller="Home" asp-action="Privacy">Privacy</a>
        </div>
    </footer>

    <script src="<? echo base_url() ?>assets/js/jquery-3.3.1.min.js"></script>
    <script src="<? echo base_url() ?>assets/js/popper.min.js"></script>
    <script src="<? echo base_url() ?>assets/js/bootstrap.min.js"></script>
    <script src="<? echo base_url() ?>assets/js/main.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  	
	<link rel="stylesheet" type="text/css" href="<? echo base_url() ?>assets/bootstrap-duallistbox.css">
	<script src="<? echo base_url() ?>assets/jquery.bootstrap-duallistbox.js"></script>
    
<script>

	$(document).ready(function(){
		
		setTimeout(function(){
			$(".alert").hide();
		},5000)
		
	})
	$(function () {
	  $('[data-toggle="tooltip"]').tooltip()
	})
	
</script>
    
  </body>
</html>
