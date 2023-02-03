
<?php include 'include/header.php'?>

<div class="content-header">
      
      </div><!-- content-header -->
     
      <div class="container">
       
       <div class="row">
        <div class="col-md-4 shadow px-5 " style="border-radius: 13px;background-color: rgb(254, 155, 146);margin-right:60px;">
          <img src="../assets/img/man.png" class="mt-4" style="width:90px; margin-left:6rem;">
          <h4 class="text-center tx-white mt-4">Personal Information</h4>
          <p class="text-center tx-white mt-4">A Wonderful........</p>
          <h5 class="text-center tx-white mt-5">011272233</h5>
          <h5 class="text-center tx-white mt-1">info@gmail.com</h5>
        </div>

        <div class="col-7 shadow" style="border-radius: 13px;">
          <!-- <h5 id="section2" class="tx-semibold">With Validation</h5>
          <p class="mg-b-25">A basic form wizard with form validation using Parsley js form validation plugin.</p> -->

          <div class="stepwizard col-md-offset-3 ">
            <div class="stepwizard-row setup-panel ">
              <div class="stepwizard-step">
                <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
                <p>General Information</p>
              </div>
             
            </div>
          </div>
          <hr>

          <form role="form" action="<?php echo base_url();?>index.php/Admin/save" method="POST">
            
            <div class="row setup-content" id="step-1">
             
                <div class="col-md-12 px-4">
                  <!-- <h3> Step 3</h3> -->
                  <section>
                    <div class="row row-sm">
											<div class="form-group">
												<label class="form-control-label">Email: <span class="tx-danger">*</span></label>
												<input id="email" class="form-control" name="email" placeholder="Enter email address" type="email" required>
											</div>
                      <div class="col-md-6">
                        <label class="form-control-label">username : <span class="tx-danger">*</span></label>
                        <input id="firstname" class="form-control" name="username" placeholder="Enter username" type="text" required>
                      </div><!-- col -->
                      <div class="col-md-6 mg-t-20 mg-md-t-0">
                        <label class="form-control-label">Password : <span class="tx-danger">*</span></label>
                        <input id="lastname" class="form-control" name="password" placeholder="Enter Password" type="password" required>
                      </div><!-- col -->
                    </div><!-- row -->
                   
                  </section>
                  <button class="btn btn-primary prevBtn btn-lg pull-left mb-3 mt-4" type="button">Previous</button>
                  <button class="btn btn-success btn-lg pull-right mb-3 mt-4" type="submit">Submit</button>
                </div>
              
            </div>
          </form>
          
        </div>
        </div><!-- component-section -->

      </div>

      </div><!-- content-body -->

      
    </div>

	<?php include 'include/footer.php'?>
