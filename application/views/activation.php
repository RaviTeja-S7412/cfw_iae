<? $this->load->view("front_common/header") ?>

	<? 
		$user = $this->input->get("user"); 
		if($user){
	?>
		
		<div class="content">
		  <div class="container">
			<div class="col-lg-8 card-col verification">
		 	  <? if($data["status"]){ ?>	
			 	<img src="<? echo base_url('assets/images/verified.jpg') ?>" alt="">
			  <? } ?>	
			  <h4><? echo ($data["status"]) ? "Successfully Verified" : "Invalid Link"; ?></h4>
			  <p><? echo $data["msg"] ?></p>
          	  <? if($data["status"]){ ?>
	          	<p><a href="<? echo base_url('institute-login') ?>">Click here</a> to login</p>
	          <? } ?>	
			</div>
		  </div>
		</div>
		
	<? }else{ ?>	

		<div class="content">
		  <div class="container">
			<div class="col-lg-8 card-col verification">
			 <img src="<? echo base_url('assets/images/pending.png') ?>" alt="">
			  <h4>Verfication Pending !</h4>
			  <p>we have sent an email to your emailid to verify your email address and activate your account</p>
	<!--          <p><a href="<? //echo base_url('home/') ?>">Click here</a> if you did not receive an email</p>-->
			</div>
		  </div>
		</div>
   
   <? } ?>
    
<? $this->load->view("front_common/footer") ?>
