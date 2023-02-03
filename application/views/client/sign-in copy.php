<?php include 'include/header.php'?>
  <body>


    <div class="row signin-panel">
      <svg-to-inline path="http://themepixels.me/cassie/assets/svg/citywalk.svg" class-Name="svg-bg"></svg-to-inline>

      <div class="col-md-5 signin-sidebar">
        <div class="signin-sidebar-body">
          <a href="dashboard-one.html" class="sidebar-logo mg-b-40"><span>Sprout Seven</span></a>
          <h4 class="signin-title">Welcome back!</h4>
          <h5 class="signin-subtitle">Please signin to continue.</h5>

			<form action="<?php echo base_url();?>index.php/Client/userLogin" method="post">
          <div class="signin-form">
            <div class="form-group">
              <label>Email address</label>
              <input type="email" class="form-control" name = "email" placeholder="Enter your email address" >
            </div>

            <div class="form-group">
              <label class="d-flex justify-content-between">
                <span>Password</span>
                <a href="" class="tx-13">Forgot password?</a>
              </label>
              <input type="password" class="form-control" placeholder="Enter your password" name="password">
            </div>

            <div class="form-group d-flex mg-b-0">
              <button class="btn btn-brand-01 btn-uppercase flex-fill">Sign In</button>
              <a href="<?php echo base_url();?>index.php/Client/signUp" class="btn btn-white btn-uppercase flex-fill mg-l-10">Sign Up</a>
            </div>

            <!-- <div class="divider-text mg-y-30">Or</div> -->
						</form>
            <!-- <a href="dashboard-one.html" class="btn btn-facebook btn-uppercase btn-block">Login with Facebook</a> -->
          </div>
          <p class="mg-t-auto mg-b-0 tx-sm tx-color-03">By signing in, you agree to our <a href="">Terms of Use</a> and <a href="">Privacy Policy</a></p>
        </div><!-- signin-sidebar-body -->
      </div><!-- signin-sidebar -->

      <div class="col-md-7">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="margin-left:-15rem ;">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="<?php echo base_url();?>/assets/img/logBack.png" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="<?php echo base_url();?>/assets/img/logBack.png" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="<?php echo base_url();?>/assets/img/logBack.png" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
            </div>
    </div><!-- signin-panel -->

 

  


  
   

	<?php include 'include/footer.php'?>
