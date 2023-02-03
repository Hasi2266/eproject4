<style>
	.progress {
  width: 80px;
  height: 80px;
  background: white;
  position: relative;
}

.progress::after {
  content: "";
  width: 100%;
  height: 100%;
  border-radius: 50%;
  border: 6px solid #eee;
  position: absolute;
  top: 0;
  left: 0;
}

.progress>span {
  width: 50%;
  height: 100%;
  overflow: hidden;
  position: absolute;
  top: 0;
  z-index: 1;
}

.progress .progress-left {
  left: 0;
}

.progress .progress-bar {
  width: 100%;
  height: 100%;
  background: none;
  border-width: 6px;
  border-style: solid;
  position: absolute;
  top: 0;
}

.progress .progress-left .progress-bar {
  left: 100%;
  border-top-right-radius: 80px;
  border-bottom-right-radius: 80px;
  border-left: 0;
  -webkit-transform-origin: center left;
  transform-origin: center left;
}

.progress .progress-right {
  right: 0;
}

.progress .progress-right .progress-bar {
  left: -100%;
  border-top-left-radius: 80px;
  border-bottom-left-radius: 80px;
  border-right: 0;
  -webkit-transform-origin: center right;
  transform-origin: center right;
}

.progress .progress-value {
  position: absolute;
  margin-top: 8px !important;
  left: 0;
}


</style>

<div class="content-header justify-content-between">
	<div>
	  <nav aria-label="breadcrumb">
		<ol class="breadcrumb">
		  <li class="breadcrumb-item"><a href="#">Pages</a></li>
		  <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
		  <li class="breadcrumb-item active" aria-current="page">Projects &amp; Web Services</li>
		</ol>
	  </nav>
	  <div class="row">
		
	  <h4 class="content-title content-title-xs px-3">Welcome to Dashboard</h4>
	  <div class=" "  style="margin-left:71rem;" >
		<a href="<?php echo base_url();?>index.php/ClientProject/cerateProject"><button type="button" class="btn btn-primary text-right text-uppercase py-2"style="border-radius: 8px;">New Project</button></a>
	  </div>
	</div>
	</div>
  </div>
<div class="content-body">
        <div class="card card-hover card-task-one shadow mb-5" style="border-radius: 10px;">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-6 col-md-3">
                <h6 class="card-title">Projects</h6>
                <div class="d-flex align-items-center justify-content-between mg-b-10">
                  <h1 class="card-value"><?php echo $noProjects?><span class="tx-success"><i class="icon ion-android-arrow-up"></i></span></h1>
                  <div class="chart-wrapper">
                    <div id="flotChart1" class="flot-chart"></div>
                  </div>
                </div>
                <p class="card-desc">skills that require mastery of many details in an ever-changing environment. </p>
              </div><!-- col -->
              <div class="col-sm-6 col-md-3 mg-t-20 mg-sm-t-0">
                <h6 class="card-title">Total Spend</h6>
                <div class="d-flex align-items-center justify-content-between mg-b-10">
                  <h1 class="card-value">268 <span class="tx-success"><i class="icon ion-android-arrow-up"></i></span></h1>
                  <div class="chart-wrapper">
                    <div id="flotChart2" class="flot-chart"></div>
                  </div>
                </div>
                <p class="card-desc">are represented as fairly standardized skills in a relatively constant environment.</p>
              </div><!-- col -->
              <div class="col-sm-6 col-md-3 mg-t-20 mg-md-t-0">
                <h6 class="card-title">Invoices</h6>
                <div class="d-flex align-items-center justify-content-between mg-b-10">
                  <h1 class="card-value">746 <span class="tx-color-03">hours</span></h1>
                  <div class="chart-wrapper">
                    <div id="flotChart3" class="flot-chart"></div>
                  </div>
                </div>
                <p class="card-desc">represents the total amount of time users interact with a specific dimension item.</p>
              </div><!-- col -->
              <div class="col-sm-6 col-md-3 mg-t-20 mg-md-t-0">
                <h6 class="card-title">Proposals</h6>
                <div class="d-flex align-items-center justify-content-between mg-b-10">
                  <h1 class="card-value"><?php echo $noProposals?> <span class="tx-color-03"></span></h1>
                  <div class="chart-wrapper">
                    <div id="flotChart4" class="flot-chart"></div>
                  </div>
                </div>
                <p class="card-desc">the total amount of time users interact with a specific dimension item.</p>
              </div><!-- col -->
            </div><!-- row -->
          </div><!-- card-body -->
        </div><!-- card -->
        <div class="row row-sm mg-t-15 mg-sm-t-20">
          <div class="col-sm-6 col-xl-5">
            <div class="card card-hover card-todo shadow mb-5 " style="border-radius:10px ;margin-right: 15px;">
              <div class="card-header bg-transparent pd-y-15 pd-l-15 pd-r-10">
                <h6 class="card-title mg-b-0">Project Status</h6>
                <nav class="nav">
                  <a href="" class="link-gray-500"><i data-feather="help-circle" class="svg-16"></i></a>
                  <a href="" class="link-gray-500"><i data-feather="more-vertical" class="svg-16"></i></a>
                </nav>
              </div><!-- card-header -->
              <div id="scroll1">
              <ul  class="list-group list-group-flush"  style="height: 310px;">
							<?php foreach($items as $item){?>
							<li class="list-group-item bg-light mx-3 mt-2 mb-2 " style="border-radius:10px ;">
									<div class="list-group-header">	
											<a href="" class="link-03 mg-l-auto"><i data-feather="more-horizontal" class="svg-16"></i></a>
									</div>
									<div class="d-flex align-items-center justify-content-between">
												<div class="avatar-group">
													<h5 class="tx-13 mg-b-3"><a href="" class="link-01"><?php echo $item->name?></a></h5>
												</div>
											<div class="bg-light progress mx-auto" data-value=<?php echo $item->project_status?>>
											<span class="progress-left">
													<span class="progress-bar border-primary"></span>
											</span>
											<span class="progress-right">
																		<span class="progress-bar border-primary"></span>
											</span>
											<div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
												<div class="h2 font-weight-bold"><?php echo $item->project_status?><sup class="small">%</sup></div>
											</div>
										</div>
									</div>
                </li>
							<?php } ?>
                <!-- <li class="list-group-item bg-light mx-3 mt-2 mb-2 " style="border-radius:10px ;">
										<div class="list-group-header">
											
											<a href="" class="link-03 mg-l-auto"><i data-feather="more-horizontal" class="svg-16"></i></a>
										</div>
                  
										<div class="d-flex align-items-center justify-content-between" >
												<div class="avatar-group">
													<h6 class="tx-13 mg-b-3"><a href="" class="link-01">Theme Launch</a></h6>
												</div>
												<div class="bg-light progress mx-auto" data-value='95'>
											<span class="progress-left">
																		<span class="progress-bar border-primary"></span>
											</span>
											<span class="progress-right">
																		<span class="progress-bar border-primary"></span>
											</span>
											<div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
												<div class="h2 font-weight-bold">10<sup class="small">%</sup></div>
											</div>
										</div>
									
										</div>
                </li>
                <li class="list-group-item bg-light mx-3 mt-2 mb-2 " style="border-radius:10px ;">
                  <div class="list-group-header">
                    
                    <a href="" class="link-03 mg-l-auto"><i data-feather="more-horizontal" class="svg-16"></i></a>
                  </div>
                  
                  <div class="d-flex align-items-center justify-content-between" >
                    <div class="avatar-group">
                      <h6 class="tx-13 mg-b-3"><a href="" class="link-01">Theme Launch</a></h6>
                    </div>
                    <div class="progress1 blue " style="margin-right:-1px ;">
                      <span class="progress1-left">
                          <span class="progress1-bar"></span>
                      </span>
                      <span class="progress1-right">
                          <span class="progress1-bar"></span>
                      </span>
                     
                      <div class="progress1-value">80%</div>
                      
                    </div> 
                 
                  </div>
                </li> -->
              </ul>
            </div>
              
              
            </div><!-- card -->
          </div><!-- col -->
          

          <!-- Recent Projects -->
          <div class="col-xl-7 mg-t-15 mg-sm-t-20 mg-xl-t-0">
            <div class="card card-hover card-projects shadow" style="border-radius:10px ;">
              <div class="card-header bg-transparent pd-y-15 pd-l-15 pd-r-10">
                <h6 class="card-title mg-b-0">Recent Projects</h6>
                <nav class="nav">
                  <a href="" class="link-gray-500"><i data-feather="help-circle" class="svg-16"></i></a>
                  <a href="" class="link-gray-500"><i data-feather="more-vertical" class="svg-16"></i></a>
                </nav>
              </div><!-- card-header -->
              <ul class="list-group list-group-flush" style="height: 310px;">
								 
							<?php 
				
									$date_now =  date("Y-m-d");

									foreach($items as $item){

										if(($item->project_status) == 1){
											$status = 'Submitted';
										}
										
										$date = $item->project_created_date;
										$diff = abs(strtotime($date_now) - strtotime($date));

										$years = floor($diff / (365*60*60*24));
										$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
										$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

										// echo $months;echo '<br/>';
										// echo $days;echo '<br/>';

										if(($months <= 1 && $days <= 29)){ ?>
											<!-- echo $item->project_id; -->

											<li class="list-group-item bg-light mx-3 mt-2 mb-2" style="border-radius:10px;">
												<nav class="nav nav-card-icon">
													<a href=""><i data-feather="activity" class="svg-16"></i></a>
													<a href=""><i data-feather="bar-chart-2" class="svg-16"></i></a>
													<a href=""><i data-feather="chevron-down" class="svg-16"></i></a>
												</nav>
												<div class="media">
													<div class="project-logo bg-primary tx-white"><i data-feather="aperture"></i></div>
													<div class="media-body mg-l-10 mg-sm-l-15">
														<p class="tx-13 tx-color-04 mg-b-5"><?php echo $item->project_id?></p>
														<h5 class="tx-color-01 mg-b-0"><?php echo $item->name?></h5>
													</div><!-- media-body -->
												</div><!-- media -->
												<p class="project-desc"><?php echo $item->requirement?></p>
												<small class="project-deadline"><?php echo $status?>: <?php echo $item->project_created_date?></small>
											</li>
								
										<?php } ?>
								


										<?php } ?>
								
              </ul>
            </div>
          </div><!-- col -->

          <div class="col-xl-8  shadow " style="border-radius:10px ;margin-right:26px; margin-left: 12px;">
            <div id="scroll2" class="" style="height: 370px;">
              <h4 class="text-dark text-uppercase mb-3 mt-3 px-3">Project</h4>
              <table id="example11" class="table " style="border-radius:10px ;">
                <thead>
                  <tr>
                    <th class="wd-9p"><div class="custom-control custom-checkbox" style="border-radius: 8px;">
                      <input type="checkbox" class="custom-control-input" id="customCheck1" >
                      <label class="custom-control-label" for="customCheck1"></label>
                    </div></th>
                    <th class="wd-15p">logo</th>
                    <th class="wd-15p">company</th>
                    <th class="wd-15p">Project</th>
                    <th class="wd-15p">update</th>
                    <th class="wd-15p">status</th>
                    <th class="wd-15p">invoice</th>
                    <th class="wd-15p">due date</th>
                  </tr>
                </thead>
                <tbody>
                 

								<?php foreach($items as $item){?>
                  <tr >
                    <td><div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="customCheck1">
                      <label class="custom-control-label" for="customCheck1"></label>
                    </div></td>
                    <td><img src="<?php echo base_url();?>/assets/img/favicon.png" alt="..." class="img-thumbnail" width="50"></td>
                    <td><?php echo $item->company_name?></td>
                    <td><?php echo $item->name?></td>
                    <td><?php echo $item->project_created_date?></td>
										<?php 
						if(empty($item->project_status)){?>

							<td><span class="badge badge-pill badge-primary">Submitted</span></td>
								
					<?php } ?>
                    <td>$90,560</td>
                    <td><?php echo $item->date?></td>
                  </tr>
      
               <?php } ?>   
                 
                 
                  
                </tbody>
              </table>
            </div>
          </div><!-- col -->

          <!-- Notifications -->
          <div class="col-sm-6 col-xl-3 col-md-4  order-sm-1 order-xl-0" >
            <div class="card card-hover card-notification-one shadow" style="border-radius:10px ;width:22.5rem">
              <div class="card-header bg-transparent pd-y-15 pd-l-15 pd-r-10">
                <h6 class="card-title mg-b-0">Notifications</h6>
                <nav class="nav">
                  <a href="" class="link-gray-500"><i data-feather="help-circle" class="svg-16"></i></a>
                  <a href="" class="link-gray-500"><i data-feather="more-vertical" class="svg-16"></i></a>
                </nav>
              </div><!-- card-header -->
              <div class="card-body">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">
                    <div class="avatar">
                      <span class="avatar-initial rounded-circle bg-pink"><i data-feather="clock" class="svg-14"></i></span>
                    </div>
                    <div class="list-body">
                      <p class="mg-b-0">Add business hours to your <strong>Business Page</strong> so it's easy for people to plan a visit. <span>2 hours ago</span></p>
                    </div>
                    <nav class="nav">
                      <a href=""><i data-feather="more-vertical"></i></a>
                    </nav>
                  </li>
                  <li class="list-group-item">
                    <div class="avatar">
                      <span class="avatar-initial rounded-circle bg-warning"><i data-feather="calendar" class="svg-16"></i></span>
                    </div>
                    <div class="list-body">
                      <p class="mg-b-0"><strong>Edsel Santillana</strong> invited you to join the event <strong>Annual Business Product Showcase</strong>. <span>Yesterday</span></p>
                    </div>
                    <nav class="nav">
                      <a href=""><i data-feather="more-vertical"></i></a>
                    </nav>
                  </li>
                  <li class="list-group-item">
                    <div class="avatar">
                      <span class="avatar-initial rounded-circle bg-primary"><i data-feather="calendar" class="svg-16"></i></span>
                    </div>
                    <div class="list-body">
                      <p class="mg-b-0"><strong>Dyanne Aceron</strong> added some feedback to your event. <span>Yesterday</span></p>
                    </div>
                    <nav class="nav">
                      <a href=""><i data-feather="more-vertical"></i></a>
                    </nav>
                  </li>
                  <li class="list-group-item">
                    <div class="avatar">
                      <span class="avatar-initial rounded-circle bg-blue"><i data-feather="shopping-bag" class="svg-16"></i></span>
                    </div>
                    <div class="list-body">
                      <p class="mg-b-0"><strong>Reynante Labares</strong> invited you to like his <strong>Online Shop</strong>. <span>Jul 31</span></p>
                    </div>
                    <nav class="nav">
                      <a href=""><i data-feather="more-vertical"></i></a>
                    </nav>
                  </li>
                </ul>
              </div><!-- card-body -->
              <div class="card-footer bg-transparent">
                <a href="" class="link-03">Show All Notifications <i class="icon ion-android-arrow-forward"></i></a>
              </div><!-- card-footer -->
            </div><!-- card -->


          </div><!-- col -->
          <div class="col-md-6 col-xl-4 mg-t-15 mg-sm-t-20">
            
          </div><!-- col -->
        </div><!-- row -->
      </div>
