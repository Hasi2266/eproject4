<style>
	.media-container {

position: relative;

display: inline-block;

margin: auto;

border-radius: 50%;

overflow: hidden;

width: 200px;

height: 200px;

vertical-align: middle

}



.media-overlay {

position: absolute;

left: 0;

top: 0;

width: 100%;

height: 100%;

background-color: rgba(180, 180, 180, 0.6);

}

#media-input {

display: block;

width: 200px;

height: 200px;

line-height: 200px;

opacity: 0;

position: relative;

z-index: 9;

}

.media-icon {

display: block;

color: #ffffff;

font-size: 2em;

height: 27px;

width: 27px;

line-height: 200px;

position: absolute;

z-index: 0;

//   width: 100%;

text-align: center;

top: 0;

margin: 80px 0px 0 90px;

}
.media-object {}

.img-object {

  border-radius: 50%;

  width: 200px;

  height: 200px;

  display: block;      

  border: 1px solid silver;

}

.media-control {

    margin-left: 10px;

    margin-top: -20px;

}

    .edit-profile {}

    .save-profile {}

/* button */

.btn {

    z-index: 1000;

    margin:10px 3px;

    display: inline-block;

    height: 38px;

    padding: 0 30px;

    color: #555;

    text-align: center;

    font-size: 11px;

    font-weight: 600;

    line-height: 38px;

    letter-spacing: 0.1rem;

    text-transform: uppercase;

    text-decoration: none;

    white-space: nowrap;

    background-color: transparent;

    border-radius: 4px;

    // border: 1px solid #bbb;

    cursor: pointer;

    box-sizing: border-box;

}

.btn > i{

  color: #555;

  font-size:12px !important;

  margin-right:10px;

 

}
</style>

<div class="content-header content-card-body">
            <div>
                <nav aria-label="breadcrumb">
                    <!-- <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item"><a href="#">User Pages</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Profile Settings</li>
                    </ol> -->
                </nav>
                <h4 class="content-title content-title-sm">Profile Settings</h4>
            </div>
        </div>
        <!-- content-header -->

		
        <div class="content-body content-card-body">
		<?php foreach($items as $item){ ?>
            <div class="dashCardHover border mb-5 mt-3" style="border-radius: 13px;">
                <div class="row">
                    <div class="col-md-2 ">
					<!-- src="<?php echo base_url();?>/assets/img/man.png" -->
						<?php

							if(empty(($item->image))){

								$img = "/assets/img/man.png";

							}
							else{

								$img = "/uploads/$item->image";
							}

						?>
                        <!-- <img src="<?php echo base_url();?><?php echo $img;?>" class="mt-4 mb-4" id="profileImg" style="width:15rem;height:15rem; margin-left:2rem;border-radius:100%">
						<div class="middle">
							<form action="<?php echo base_url();?>index.php/ClientInfo/updateImage" method="post" enctype="multipart/form-data" >

								<input type="file" id="upload" name="img" hidden>
								<label class="label" for="upload"><i class="fas fa-edit"></i></label>
								<button type="submit" class="btn btn-dark">Upload</button>

							</form> 
							
									
						</div>-->
						<!-- mage -->

						<div class="media-container mt-3 mx-3">
						<form action="<?php echo base_url();?>index.php/ClientInfo/updateImage" method="post" enctype="multipart/form-data">
              <span class="media-overlay"  style="padding:10px;">

                <input type="file" name="img" id="media-input" accept="image/*">

               
				
                <img src="<?php echo base_url();?>/assets/img/edit.png " width="1" alt="" class="media-icon text-white" >

              </span>

              <figure class="media-object" >

                <img class="img-object" src="<?php echo base_url();?><?php echo $img;?>" >

              </figure>

            </div>

            <div class="media-control">

              <p class="btn edit-profile">

                <img src="<?php echo base_url();?>/assets/img/edit1.png" width="15" alt="" class="mx-1">Edit Profile</p>

              <button type="submit" class="btn save-profile">

                <img src="<?php echo base_url();?>/assets/img/floppy-disk.png" width="15" alt="" class="mx-1">Save Profile</button>
			</form>
            </div>
							<!-- <div class="profilePhoto">

            <form action="<?php echo base_url();?>index.php/ClientInfo/updateImage" method="post" enctype="multipart/form-data">

              <label for="fileToUpload">

                <div class="edit">Edit</div>

                <div class="avatar-img"> <img src="<?php echo base_url();?><?php echo $img;?>" alt=""></div>

               

           

              </label>

            <input type="File" name="img" id="fileToUpload">

            </form>

            </div> -->
				<!-- mage -->	
                    </div>
                    <div class="col-md-5 px-5">
                        <h2 class=" mt-5 fw-normal"><?php echo $item->firstname.'   '. $item->lastname;?></h2>
                        <p class=" tx-black mt-3"><?php echo $item->role;?></p>
                        <p class=" text-secondary"><i class="fa fa-map-marker " aria-hidden="true"></i> <?php echo $item->country;?></p>
                    </div>
                    <div class="col-md-4">
                        <h5 class="font-weight-normal"><i class="fa fa-phone  p-1 text-white " style="background:blue;margin-right:5px;margin-top:3rem;border-radius: 4px;" aria-hidden="true"></i> <?php echo $item->contact;?></h5>

                        <h5 class="font-weight-normal"><i class="fa fa-envelope p-1 text-white  " style="background:blue;margin-right:5px;border-radius: 4px;" aria-hidden="true"></i> <?php echo $item->email;?></h5>
                    </div>
                </div>
            </div>
            <div class="row row-xs">
                <div class="col-md-4">
                    <ul class="list-group list-group-settings dashCardHover" style="border-radius:13px;">
                        <li class="list-group-item list-group-item-action">
                            <a href="#paneProfile" data-toggle="tab" class="media active">
                                <i data-feather="user"></i>
                                <div class="media-body">
                                    <h6>Profile Information</h6>
                                    <span>About your personal information</span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item list-group-item-action">
                            <a href="#paneCompany" data-toggle="tab" class="media">
                                <i class="fa fa-building fa-lg text-dark" aria-hidden="true"></i>
                                <div class="media-body">
                                    <h6>Company Information</h6>
                                    <span>About your Company information</span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item list-group-item-action">
                            <a href="#paneAccount" data-toggle="tab" class="media">
                                <i data-feather="settings"></i>
                                <div class="media-body">
                                    <h6>Account Settings</h6>
                                    <span>Manage your account setting options</span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item list-group-item-action">
                            <a href="#paneSecurity" data-toggle="tab" class="media">
                                <i data-feather="shield"></i>
                                <div class="media-body">
                                    <h6>Security</h6>
                                    <span>Manage your security information</span>
                                </div>
                            </a>
                        </li>
                        <!-- <li class="list-group-item list-group-item-action">
                            <a href="#paneNotification" data-toggle="tab" class="media">
                                <i data-feather="bell"></i>
                                <div class="media-body">
                                    <h6>Notification</h6>
                                    <span>Choose how you receive notifications</span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item list-group-item-action">
                            <a href="#paneBilling" data-toggle="tab" class="media">
                                <i data-feather="credit-card"></i>
                                <div class="media-body">
                                    <h6>Billing</h6>
                                    <span>Your billing and payment information</span>
                                </div>
                            </a>
                        </li> -->
                    </ul>
                </div>
                <!-- col -->
                <div class="col-md-8">
                    <div class="card card-body dashCardHover pd-sm-40 pd-md-30 pd-xl-y-35 pd-xl-x-40" style="border-radius:13px;">
                        <div class="tab-content">
                            <div id="paneProfile" class="tab-pane active show">
                                <h6 class="tx-uppercase tx-semibold tx-color-01 mg-b-0">Your Profile Information</h6>
                                <hr>
                                <div class="form-settings">
									<form action="<?php echo base_url();?>index.php/ClientInfo/updateProfile" method="post">

										<input type="hidden" name="client_id" value="<?php echo $item->client_id;?>">
									<div class="form-group">
                                        <label class="form-label">First Name</label>
                                        <input type="text" name ="firstname" class="form-control" placeholder="Enter your fullname" value=" <?php echo $item->firstname;?>">
                                        <div class="tx-11 tx-sans tx-color-04 mg-t-5">Your name may appear around here where you are mentioned. You can change or remove it at any time.</div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Last Name</label>
                                        <input type="text" name ="lastname" class="form-control" placeholder="Enter your fullname" value="<?php echo $item->lastname;?>">
                                        <div class="tx-11 tx-sans tx-color-04 mg-t-5">Your name may appear around here where you are mentioned. You can change or remove it at any time.</div>
                                    </div>
									<div class="form-group">
                                        <label class="form-label">Email</label>
                                        <input type="text" name ="email" class="form-control" placeholder="Enter your fullname" value="<?php echo $item->email;?>">
                                        <div class="tx-11 tx-sans tx-color-04 mg-t-5">Your name may appear around here where you are mentioned. You can change or remove it at any time.</div>
                                    </div>
									<div class="form-group">
                                        <label class="form-label">Role</label>
                                        <input type="text" name ="role" class="form-control" placeholder="Enter your Role" value="<?php echo $item->role;?>">
                                        <div class="tx-11 tx-sans tx-color-04 mg-t-5">Your name may appear around here where you are mentioned. You can change or remove it at any time.</div>
                                    </div>
                                    <!-- form-group -->
<!-- 
                                    <div class="form-group">
                                        <label class="form-label">Your Bio</label>
                                        <textarea class="form-control" rows="3" placeholder="Write something about you">A front-end developer that focus more on user interface design, a web interface wizard, a connector of awesomeness and a long lost twin of Vin Diesel.</textarea>
                                    </div>
                                    form-group -->

                                    <!-- <div class="form-group">
                                        <label class="form-label">URL</label>
                                        <input type="text" class="form-control" placeholder="Enter your website address" value="http://themepixels.me">
                                    </div>
                                    form-group

                                    <div class="form-group">
                                        <label class="form-label">Location</label>
                                        <input type="text" class="form-control" placeholder="Enter your location" value="San Francisco, CA">
                                    </div>
                                    form-group -->

                                    <div class="form-group tx-13 tx-color-04">
                                        All of the fields on this page are optional and can be deleted at any time, and by filling them out, you're giving us consent to share this data wherever your user profile appears.
                                    </div>

                                    <hr class="op-0">

                                    <button class="btn btn-brand-02">Update Profile</button>
                                    <!-- <button class="btn btn-white mg-l-2">Reset Changes</button> -->
								</form>
                                </div>
                            </div>
                            <!-- tab-pane -->
                            <div id="paneCompany" class="tab-pane  ">
                                <h6 class="tx-uppercase tx-semibold tx-color-01 mg-b-0">Your Company Information</h6>
                                <hr>
                                <div class="form-settings">
								<form action="<?php echo base_url();?>index.php/ClientInfo/updateCompany" method="post">
									<input type="hidden" name="client_id" value="<?php echo $item->client_id;?>">
                                    <div class="form-group">
                                        <label class="form-label">Company name</label>
                                        <input type="text" name ="company_name" class="form-control" placeholder="Enter your fullname" value="<?php echo $item->company_name;?>">
                                        <div class="tx-11 tx-sans tx-color-04 mg-t-5">Your name may appear around here where you are mentioned. You can change or remove it at any time.</div>
                                    </div>
                                    <!-- form-group -->

                                    <div class="form-group">
                                        <label class="form-label">Industry</label>
										<input type="text" name ="industry" class="form-control" placeholder="Enter your fullname" value="<?php echo $item->industry;?>">
										<div class="tx-11 tx-sans tx-color-04 mg-t-5">Your name may appear around here where you are mentioned. You can change or remove it at any time.</div>
                                    </div>

									<div class="form-group">
                                        <label class="form-label">Number of employees</label>
                                        <input type="text" name ="no_of_emp" class="form-control" placeholder="Enter your fullname" value="<?php echo $item->no_of_emp;?>">
										<div class="tx-11 tx-sans tx-color-04 mg-t-5">Your name may appear around here where you are mentioned. You can change or remove it at any time.</div>
                                    </div>

									<div class="form-group">
                                        <label class="form-label">Country</label>
                                        <input type="text" name ="country" class="form-control" placeholder="Enter your fullname" value="<?php echo $item->country;?>">
										<div class="tx-11 tx-sans tx-color-04 mg-t-5">Your name may appear around here where you are mentioned. You can change or remove it at any time.</div>
                                    </div>

									<div class="form-group">
                                        <label class="form-label">Phone number</label>
                                        <input type="text" name ="contact" class="form-control" placeholder="Enter your fullname" value="<?php echo $item->contact;?>">
										<div class="tx-11 tx-sans tx-color-04 mg-t-5">Your name may appear around here where you are mentioned. You can change or remove it at any time.</div>
                                    </div>
                                    <!-- form-group -->

                                    <!-- <div class="form-group">
                                        <label class="form-label">URL</label>
                                        <input type="text" class="form-control" placeholder="Enter your website address" value="http://themepixels.me">
                                    </div>
                                    form-group

                                    <div class="form-group">
                                        <label class="form-label">Location</label>
                                        <input type="text" class="form-control" placeholder="Enter your location" value="San Francisco, CA">
                                    </div>
                                    form-group -->

                                    <div class="form-group tx-13 tx-color-04">
                                        All of the fields on this page are optional and can be deleted at any time, and by filling them out, you're giving us consent to share this data wherever your user profile appears.
                                    </div>

                                    <hr class="op-0">

                                    <button class="btn btn-brand-02">Update Profile</button>
                                    <!-- <button class="btn btn-white mg-l-2">Reset Changes</button> -->
								<form>
                                </div>
                            </div>
                            <!-- tab-pane -->
                            <div id="paneAccount" class="tab-pane">
                                <h6 class="tx-uppercase tx-semibold tx-color-01 mg-b-0">Account Settings</h6>

                                <hr>
                                <div class="form-settings">
									<form action="<?php echo base_url();?>index.php/ClientInfo/delAccount" method="post">
										<input type="hidden" name="client_id" value="<?php echo $item->client_id;?>">
										<div class="form-group">
											<label class="form-label">Username</label>
											<input type="text" class="form-control" placeholder="Enter your username" value="<?php echo $item->username;?>">
											<div class="tx-11 tx-sans tx-color-04 mg-t-5">After changing your username, your old username becomes available for anyone else to claim.</div>
										</div>
										<!-- form-group -->

										<hr>

										<div class="form-group">
											<label class="form-label text-danger">Delete Account</label>
											<p class="tx-sm tx-color-04">Once you delete your account, there is no going back. Please be certain.</p>
											<button class="btn btn-sm btn-danger">Delete Account</button>
										</div>
									</form>
                                    <!-- form-group -->
                                </div>
                                <!-- form-settings -->
                            </div>
                            <!-- tab-pane -->
                            <div id="paneSecurity" class="tab-pane">
                                <h6 class="tx-uppercase tx-semibold tx-color-01 mg-b-0">Security Settings</h6>
                                <hr>
                                <div class="form-settings">

                                    <div class="form-group">

									<form action="<?php echo base_url();?>index.php/ClientInfo/changePwd" method="post">
									
										<input type="hidden" name="client_id" value="<?php echo $item->client_id;?>">

                                        <label class="form-label">Change Old Password</label>

                                        <input type="text" class="form-control" placeholder="Enter your old password">
										<!-- pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" -->
                                        <input id="password1" type="text" id="pwd2" name="password" class="form-control mg-t-5" placeholder="New password"  required >

										<span id="new_password" style="color:red;"></span>

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



                                        <input id="confirm_password1" type="text" class="form-control mg-t-5" placeholder="Confirm new password" >
										<span id="confirm_password_msg1"></span>
										<hr class="op-0">

                                    	<button class="btn btn-brand-02" id="btnChange" disabled onclick="checkValidPwd()">Update Password</button>

									</form>
                                    </div>
                                    <!-- form-group -->

                                    <hr>

									

                                    <div class="form-group">
                                        <label class="form-label">Two Factor Authentication</label>
                                        <button class="btn btn-brand-02 tx-sm">Enable two-factor authentication</button>
                                        <div class="tx-11 tx-sans tx-color-04 mg-t-7">Two-factor authentication adds an additional layer of security to your account by requiring more than just a password to log in.</div>
                                    </div>
                                    <!-- form-group -->

                                    <hr>

                                    <div class="form-group">
                                        <label class="form-label">Sessions</label>
                                        <p class="tx-sm tx-color-03">This is a list of devices that have logged into your account. Revoke any sessions that you do not recognize.</p>

                                        <ul class="list-group list-group-session">
                                            <li class="list-group-item">
                                                <div>
                                                    <h6>San Francisco City 190.24.335.55</h6>
                                                    <span>Your current session seen in United States</span>
                                                </div>
                                                <a href="" class="btn btn-xs btn-white">More Info</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- form-group -->
                                </div>
                                <!-- form-settings -->
                            </div>
                            <!-- tab-pane -->
                            <div id="paneNotification" class="tab-pane">
                                <h6 class="tx-uppercase tx-semibold tx-color-01 mg-b-0">Notification Settings</h6>
                                <hr>
                                <div class="form-settings mx-wd-100p">
                                    <div class="form-group">
                                        <label class="form-label mg-b-2">Security Alerts</label>
                                        <p class="tx-sm tx-color-04">Receive security alert notifications via email</p>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1">Email each time a vulnerability is found</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck2">
                                            <label class="custom-control-label" for="customCheck2">Email a digest summary of vulnerabilities</label>
                                        </div>
                                    </div>
                                    <!-- form-group -->

                                    <div class="form-group">
                                        <label class="form-label">SMS Notifications</label>
                                        <ul class="list-group list-group-notification">
                                            <li class="list-group-item">
                                                <p class="mg-b-0">Comments</p>
                                                <div class="custom-control custom-switch">
                                                    <input type="checkbox" class="custom-control-input" id="customSwitch1">
                                                    <label class="custom-control-label" for="customSwitch1">&nbsp;</label>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <p class="mg-b-0">Updates From People</p>
                                                <div class="custom-control custom-switch">
                                                    <input type="checkbox" class="custom-control-input" id="customSwitch2">
                                                    <label class="custom-control-label" for="customSwitch2">&nbsp;</label>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <p class="mg-b-0">Reminders</p>
                                                <div class="custom-control custom-switch">
                                                    <input type="checkbox" class="custom-control-input" id="customSwitch3">
                                                    <label class="custom-control-label" for="customSwitch3">&nbsp;</label>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <p class="mg-b-0">Events</p>
                                                <div class="custom-control custom-switch">
                                                    <input type="checkbox" class="custom-control-input" id="customSwitch4">
                                                    <label class="custom-control-label" for="customSwitch4">&nbsp;</label>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <p class="mg-b-0">Pages You Follow</p>
                                                <div class="custom-control custom-switch">
                                                    <input type="checkbox" class="custom-control-input" id="customSwitch5">
                                                    <label class="custom-control-label" for="customSwitch5">&nbsp;</label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- form-group -->
                                </div>
                                <!-- form-setting -->
                            </div>
                            <!-- tab-pane -->
                            <div id="paneBilling" class="tab-pane">
                                <h6 class="tx-uppercase tx-semibold tx-color-01 mg-b-0">Billing Settings</h6>
                                <hr>
                                <div class="form-settings mx-wd-100p">
                                    <div class="form-group">
                                        <label class="form-label mg-b-2">Payment Method</label>
                                        <p class="tx-color-04 tx-13">You have not added a payment method</p>
                                        <button class="btn btn-brand-02 btn-sm">Add Payment Method</button>
                                    </div>
                                    <!-- form-group -->

                                    <div class="form-group">
                                        <label class="form-label">Payment History</label>
                                        <div class="bd bg-gray-100 pd-20 tx-center">
                                            <p class="tx-13 mg-b-0">You have not made any payment.</p>
                                        </div>
                                    </div>
                                    <!-- form-group -->
                                </div>
                                <!-- form-settings -->
                            </div>
                            <!-- tab-pane -->
                        </div>
                        <!-- tab-content -->
                    </div>
                    <!-- card -->
                </div>
                <!-- col -->
            </div>
		<?php } ?>
            <!-- row -->
        </div>

