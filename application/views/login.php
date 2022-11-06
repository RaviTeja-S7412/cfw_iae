<? $this->load->view("front_common/header") ?>

	<div class="content">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <img
              src="<? echo base_url() ?>assets/images/undraw_remotely_2j6y.svg"
              alt="Image"
              class="img-fluid"
            />
          </div>
          <div class="col-md-5 contents offset-1">
            <div class="row justify-content-center">
              <div class="col-md-12">
                <div class="mb-4">
                  <h3 class="clabel">Institution Login</h3>
                  <div id="rmsg"></div>
                </div>
                <form id="login" method="post">
                  <div class="form-group first">
                    <label for="username">Username</label>
                    <input type="email" class="form-control" name="email" required id="username" />
                  </div>
                  <div class="form-group last mb-4">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" required id="password" />
                  </div>

                  <div class="d-flex mb-5 align-items-center">
                    <span class="mr-auto">
                       <a href="<? echo base_url("register") ?>" class="forgot-pass"
                        >Create an Account</a>
                    </span>
                    <span class="ml-auto">
                    	<a href="javascript:void(0)" class="forgot-pass fpass">Forgot Password</a>
                    </span>
                  </div>

                  <input
                    type="submit"
                    value="Log In"
                    class="btn btn-block btn-primary"
                  />
                </form>
                 
                <div id="forgotPass" style="display: none"> 
					<form id="forgotPassword" method="post">
					  <div class="form-group first">
						<label for="username">Mobile Number</label>
						<input type="text" class="form-control" name="mobile" required id="fmobile" />
					  </div>

					  <div class="d-flex mb-5 align-items-center">
						<span class="mr-auto">
						   <a href="<? echo base_url("institute-login") ?>" class="forgot-pass">Login</a>
						</span>
					  </div>

					  <input
						type="submit"
						value="Submit"
						class="btn btn-block btn-primary"
					  />
					</form>
             	</div>
                <div id="updatePass" style="display: none"> 
					<form id="updatePassword" method="post">
					  <div class="form-group first">
						<label for="username">Password</label>
						<input type="password" class="form-control" name="password" required id="ppassword" />
					  </div>
					  <div class="form-group last mb-4">
						<label for="password">Confirm Password</label>
						<input type="password" class="form-control" name="cpassword" required id="cpassword" />
						<input type="hidden" class="form-control" name="mobile" required id="cmobile" />
					  </div>
					  
					  <input type="submit" value="Submit" class="btn btn-block btn-primary" />
					</form>
             	</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<? $this->load->view("front_common/footer") ?>
<script>
	
	$(".fpass").click(function(){
		$("#login").hide();
		$("#updatePass").hide();
		$("#forgotPass").show();
		$(".clabel").html("Forgot Password")
	})

	$("#login").submit(function(e){
		
		e.preventDefault();
		var fdata = $(this).serialize();
		$.ajax({
			type : "post",
			url : "<? echo base_url("home/do_login") ?>",
			data : fdata,
			dataType: "json",
			success : function(data){
				if(data.status){
					window.location.href = "<? echo base_url('dashboard') ?>";
				}else{
					window.scrollTo({ top: 0, behavior: 'smooth' });
					$("#rmsg").html(data.msg);
				}
			},
			error : function(data){
				console.log(data)
				window.scrollTo({ top: 0, behavior: 'smooth' });
				$("#rmsg").html(data.msg);
			}
		})
		
	})
	
	$("#forgotPassword").submit(function(e){
		
		$("#rmsg").html("");
		e.preventDefault();
		var fdata = $(this).serialize();
		$.ajax({
			type : "post",
			url : "<? echo base_url("home/forgotPassword") ?>",
			data : fdata,
			dataType: "json",
			success : function(data){
				if(data.status){
					$("#forgotPass").hide();
					$("#updatePass").show();
					$("#cmobile").val($("#fmobile").val());
					$(".clabel").html("Update Password")
				}else{
					$("#rmsg").show();
					window.scrollTo({ top: 0, behavior: 'smooth' });
					$("#rmsg").html(data.msg);
					setTimeout(function(){
						$("#rmsg").hide();
					},5000)
				}
			},
			error : function(data){
				window.scrollTo({ top: 0, behavior: 'smooth' });
				$("#rmsg").html(data.msg);
			}
		})
		
	})
	
	$("#updatePassword").submit(function(e){
		
		$("#rmsg").html("");
		e.preventDefault();
		var fdata = $(this).serialize();
		$.ajax({
			type : "post",
			url : "<? echo base_url("home/changePassword") ?>",
			data : fdata,
			dataType: "json",
			success : function(data){
				if(data.status){
					$("#forgotPass").hide();
					$("#updatePass").hide();
					$("#login").show();
					$(".clabel").html("Institution Login")
				}else{
					$("#rmsg").show();
					window.scrollTo({ top: 0, behavior: 'smooth' });
					$("#rmsg").html(data.msg);
					setTimeout(function(){
						$("#rmsg").hide();
					},5000)
				}
			},
			error : function(data){
				window.scrollTo({ top: 0, behavior: 'smooth' });
				$("#rmsg").html(data.msg);
			}
		})
		
	})

	
</script>

