<? $this->load->view("front_common/header") ?>

    <div class="content" style="padding-top: 20px !important;">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mt-5">
            <img
              src="<? echo base_url() ?>assets/images/undraw_remotely_2j6y.svg"
              alt="Image"
              class="img-fluid"
            />
          </div>
          <div class="col-md-6 contents">
            <div class="row justify-content-center">
              <div class="col-md-12">
                <div class="mb-4">
                  <h3>Institution Registration</h3>
                  <div id="rmsg"></div>
                </div>
                <form method="post" id="register">
                  <div class="form-group">
                    <label for="inputEmail4">Name of the Institution</label>
                    <input type="text" class="form-control" name="institute_name" id="inputEmail4" required />
                  </div>
                  <div class="form-group">
                    <label for="inputPassword4">Institution Email Id</label>
                    <input
                      type="email"
                      class="form-control"
                      id="inputPassword4"
                      name="email"
                      required
                    />
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputAddress">Create Password</label>
                      <input type="password" class="form-control" name="password" required />
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputAddress2">Confirm Password</label>
                      <input type="password" class="form-control" name="cpassword" required />
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Address for Correspondence</label>
                    <textarea class="form-control" name="address" required></textarea>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputCity">Name of the Contact Person</label>
                      <input type="text" name="contact_person_name" required class="form-control" />
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputZip"
                        >Contact Person's Mobile Number</label
                      >
                      <input type="text" name="contact_person_mobile" id="contact_person_mobile" maxlength="10" onkeypress="return event.charCode >= 48 &amp;&amp; event.charCode <= 57" required class="form-control" />
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Contact Person's Email Id</label>
                    <input
                      type="email"
                      class="form-control"
                      id="inputPassword4"
                      name="contact_person_email"
                      required
                    />
                  </div>
                  <div class="form-group">
                    <div class="form-check">
                      <input
                        class="form-check-input"
                        type="checkbox"
                        id="gridCheck"
                        required
                      />
                      <label class="form-check-label" for="gridCheck">
                        <a href="#">Terms & Conditions</a>
                      </label>
                    </div>
                  </div>
                  <input type="hidden" name="is_mobile_verified" id="is_mobile_verified">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


<? $this->load->view("front_common/footer") ?>

<div class="modal" id="otpModal">
  <div class="modal-dialog">
      <div class="modal-content">
		  <div class="modal-header" style="display: block">
			<button type="button" class="close" data-dismiss="modal">x</button>
			<h3>Verify OTP</h3>
			<div id="msg"></div>
		  </div>
		  <div class="modal-body">
			<form method="post" id="verify_otp">
			  <p><input type="number" class="form-control" name="otp" id="otp" placeholder="Enter OTP"></p>
			  <div class="row">
		  		<div class="col-md-9">
		  			<div id="countdown"></div>
		  			<a href="javascript:void(0)" class="btn btn-info pull-left" id="resendOtp" style="display: none;">Resend</a>
		  		</div>
		  		<div class="col-md-3">
			  		<button type="submit" class="btn btn-primary pull-right">Submit</button>
			  	</div>
			  </div>
			</form>
		  </div>
	  </div>
	</div>
</div>

<script>
	
	$("#verify_otp").submit(function(e){
		
		e.preventDefault();
		var mobile = $("#contact_person_mobile").val();
		var otp = $("#otp").val();
		$.ajax({
			type: "post",
			url: "<? echo base_url('home/confirmOtp') ?>",
			data: {mobile:mobile,otp:otp},
			dataType: "json",
			success: function(data){
				if(data.status){
					$("#is_mobile_verified").val(1);
					$("#msg").html(data.msg);
					setTimeout(function(){
						$("#otpModal").modal("hide");
					},2000);
						
				}else{
					$("#msg").html(data.msg);
				}
			},
			error:function(data){
				
			}
		})
		
	});
	
	function sendOtp(){
		
		var mobile = $("#contact_person_mobile").val();
		
		if(mobile.length >= 10){
			
			var timeleft = 300;
			var downloadTimer = setInterval(function(){
			  if(timeleft <= 0){
				clearInterval(downloadTimer);
				$('#countdown').hide();
				$('#resendOtp').show();
			  }else{

				  var ltime = Math.floor((timeleft/60));
				  if(timeleft <= 60){
					  document.getElementById("countdown").innerHTML = timeleft + " seconds remaining";		  
				  }else{

					  var seconds = '';
					  if(ltime == 4){
						  seconds = (timeleft-(60*4));
					  }else if(ltime == 3){
						  seconds = (timeleft-(60*3));
					  }else if(ltime == 2){
						  seconds = (timeleft-(60*2));
					  }else if(ltime == 1){
						  seconds = (timeleft-(60));
					  } 
					  document.getElementById("countdown").innerHTML = ltime + " minute "+seconds+" seconds remaining";
				  }

			  }
			  timeleft -= 1;
			}, 1000);
			
			$.ajax({
				type: "post",
				url: "<? echo base_url('home/sendOtp') ?>",
				data: {mobile:mobile},
				dataType: "json",
				success: function(data){
					console.log(data);
					if(data.status){
						$('#countdown').show();
						$("#msg").html('<div class="alert alert-success">OTP Successfully sent to your mobile number.</div>');
						$("#otpModal").modal("show");
					}
				},
				error:function(data){
					console.log(data);
				}
			});
			
		}
		
	}
	
	$("#contact_person_mobile").change(function(){
		
		sendOtp();
			
	});
	
	$("#resendOtp").click(function(){
		
		$('#resendOtp').hide();
		sendOtp();
			
	});
	
	$("#register").submit(function(e){
		
		e.preventDefault();
		var fdata = $(this).serialize();
		$.ajax({
			type : "post",
			url : "<? echo base_url("home/insertInstitute") ?>",
			data : fdata,
			dataType: "json",
			success : function(data){
				window.scrollTo({ top: 0, behavior: 'smooth' });
				if(data.status){
					
					$("#rmsg").html(data.msg);
					setTimeout(function(){
						window.location.href = "<? echo base_url('register-success') ?>";
					},3000)
				}else{
					$("#rmsg").html(data.msg);
				}
			},
			error : function(data){
				window.scrollTo({ top: 0, behavior: 'smooth' });
				$("#rmsg").html(data.msg);
			}
		})
		
	});
	
</script>


