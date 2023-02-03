
<?php include 'include/header.php'?>

<div class="content-header">
      
      </div><!-- content-header -->
     
      <div class="container">
       
       <div class="row">
        <div class="col-md-4 shadow px-5 " style="border-radius: 13px;background-color: rgb(254, 155, 146);margin-right:60px;">
          <img src="<?php echo base_url();?>/assets/img/man.png" class="mt-4" style="width:90px; margin-left:6rem;">
          <h4 class="text-left tx-white mt-4">Personal Information</h4>
          <p class="text-left tx-white mt-4">A Wonderful........</p>
          <h5 class="text-left tx-white mt-5">011272233</h5>
          <h5 class="text-left tx-white mt-1">info@gmail.com</h5>
        </div>
			
        <div class="col-7 shadow" style="border-radius: 13px;">
          <!-- <h5 id="section2" class="tx-semibold">With Validation</h5>
          <p class="mg-b-25">A basic form wizard with form validation using Parsley js form validation plugin.</p> -->

          <div class="stepwizard col-md-offset-3 " style="margin-top :30px; !important">
            <div class="stepwizard-row setup-panel " >
              <div class="stepwizard-step" >
                <a href="#step-1" type="button" class="btn btn-primary btn-circle" >1</a>
                <p>General Information</p>
              </div>
              <div class="stepwizard-step">
                <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                <p>Company Information</p>
              </div>
              <div class="stepwizard-step">
                <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                <p>User Information</p>
              </div>
            </div>
          </div>
          <hr>

          <form role="form" action="<?php echo base_url();?>index.php/Client/save" method="POST">
            <div class="row setup-content" id="step-1">
             
                <div class="col-md-12 px-4">
                  <!-- <h3> Step 1</h3> -->
                  <section>
              
                    <div class="row row-sm">
                      <div class="col-md-6">
                        <label class="form-control-label">First Name: <span class="tx-danger">*</span></label>
                        <input id="firstname" class="form-control text-border" name="firstname" placeholder="Enter firstname" type="text" required>
												<span id = "fmsg" style="color:red"> </span>

											</div><!-- col -->
                      <div class="col-md-6 mg-t-20 mg-md-t-0">
                        <label class="form-control-label">Last Name: <span class="tx-danger">*</span></label>
                        <input id="lastname" class="form-control text-border" name="lastname" placeholder="Enter lastname" type="text" required>
												<span id = "lmsg" style="color:red"> </span>
											</div><!-- col -->
                    </div><!-- row -->
                    <div class="form-group mt-3">
                      <label class="form-control-label">Email: <span class="tx-danger">*</span></label>
											
                      <input id="email1" class="form-control text-border" name="email" placeholder="Enter email address" type="text" required autofocus="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2, 4}$" >
											<span id = "message1" style="color:red"> </span>
											<span id = "msg" style="color:red"> </span>
                    </div><!-- form-group -->
                  </section>
                 
                  <button class="btn btn-primary nextBtn btn-lg pull-right mb-3" type="button" id="next1">Next</button>
                </div>
            </div>
            <div class="row setup-content " id="step-2">
              
                <div class="col-md-12 px-4">
                  <!-- <h3> Step 2</h3> -->
                  <section>
             
                    <div class="row row-sm ">
                      <div class="col-md-6">
                        <label class="form-control-label">Company name : <span class="tx-danger">*</span></label>
                        <input id="company" class="form-control text-border" name="company_name" placeholder="Enter Company name" type="text" required>
												<span id="Cmsg" style="color:red"> </span>
											</div><!-- col -->
                      <div class="col-md-6 mg-t-20 mg-md-t-0">
                        <label class="form-control-label">industry : <span class="tx-danger">*</span></label>
                        <input id="industry" class="form-control text-border" name="industry" placeholder="Enter industry" type="text" required>
												<span id = "Imsg" style="color:red"> </span>
											</div><!-- col -->
                    </div><!-- row -->
                    <div class="row row-sm mt-3">
                      <div class="col-md-6">
                        <label class="form-control-label">number of employees : <span class="tx-danger">*</span></label>
                        <input id="noEmp" class="form-control text-border" name="no_of_emp" placeholder="Enter number of employees " type="text" required>
												<span id = "Emsg" style="color:red"> </span>
											</div><!-- col -->
                      <div class="col-md-6 mg-t-20 mg-md-t-0">
                        <label class="form-control-label">country : <span class="tx-danger">*</span></label>
                        

												<select class="form-control m-input text-border" style="border-radius:10px;" name="country" id="country">
																				<option value = "0">-- Select Project --</option>

														<?php  foreach($countires as $country){?>

															<option value="<?php echo $country->id?>"><?php echo $country->country_name?></option>
															
														<?php } ?>
														</select>
												<span id = "Comsg" style="color:red"> </span>

											</div><!-- col -->
                    </div><!-- row -->
                    <div class="row row-sm mt-3">
                      <div class="col-md-6">
                        <label class="form-control-label text-border">phone number : <span class="tx-danger">*</span></label>
                        <input id="mobile-client" class="form-control" name="contact" placeholder="Enter phone number " type="number" required>
												<span id = "message3" style="color:red"> </span>
											</div><!-- col -->
                      
                    </div><!-- row -->
                  </section>
                  <button class="btn btn-primary prevBtn btn-lg pull-left mb-3 mt-4" type="button" >Previous</button>
                  <button class="btn btn-primary nextBtn btn-lg pull-right mb-3 mt-4" type="button" id="next5">Next</button>
                </div>
              
            </div>
            <div class="row setup-content " id="step-3">
             
                <div class="col-md-12 px-4">
                  <!-- <h3> Step 3</h3> -->
                  <section>
                    <div class="row row-sm">
                      <div class="col-md-6">
											<!-- onblur="checkValid()" -->
                        <label class="form-control-label">username : <span class="tx-danger" >*</span></label>
                        <input id="username_client" class="form-control" name="username" placeholder="Enter username" type="text" required>
												<span id = "message2" style="color:red"> </span>
                      </div><!-- col -->
                      <div class="col-md-6 mg-t-20 mg-md-t-0">
											<!-- <input type="password" id="password" class="form-control" placeholder="password"  autofocus=""> <label for="password"> -->
                        <label class="form-control-label">Password : <span class="tx-danger" >*</span></label>
                        <input id="password" class="form-control" name="password" placeholder="Enter Password" type="password"  required autofocus="">
												<div id="pwd_strength_wrap">
											<div id="passwordDescription">Password not entered</div>
											<div id="passwordStrength" class="strength0"></div>
											<div id="pswd_info">
													<strong>Strong Password Tips:</strong>
													<ul>
															<li class="invalid" id="length">At least 8 characters</li>
															<li class="invalid" id="pnum">At least one number</li>
															<li class="invalid" id="capital">At least one lowercase &amp; one uppercase letter</li>
															<li class="invalid" id="spchar">At least one special character</li>
													</ul>
											</div><!-- END pswd_info -->
											</div>
											
											</div><!-- col -->
                    </div><!-- row -->
                    <div class="row row-sm mt-3">
                      <div class="col-md-6">
											<!-- <input type="password" id="confirm_password" class="form-control" placeholder="confirm_password" > -->
                        <label class="form-control-label">Confirm Password : <span class="tx-danger" >*</span></label>
                        <input id="confirm_password" class="form-control" name="confirm_password" placeholder="Enter Confirm Password" type="password" onChange="validPwd()" required>
												<!-- <span id = "message"> </span> -->
												<span id="confirm_password_msg"></span>
                      </div><!-- col -->
                     
                    </div><!-- row -->
                  </section>
                  <button class="btn btn-primary prevBtn btn-lg pull-left mb-3 mt-4" type="button">Previous</button>
                  <button class="btn btn-success btn-lg pull-right mb-3 mt-4" type="submit" id="btnSignup">Submit</button>
                </div>
              
            </div>
          </form>
          
        </div>
				</div>
        </div><!-- component-section -->

      </div>

      </div><!-- content-body -->

      
    </div>

	<?php include 'include/footer.php'?>
