<!-- data-spy="scroll" data-target="#navSection" data-offset="100" -->
<div class="content-body content-card-body">
    <!-- header -->
    <div class="content-header">
        <div>
            <!-- <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">UI Library</a></li>
                    <li class="breadcrumb-item"><a href="#">Components</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Project (DataTable)</li>
                </ol>
            </nav> -->

        </div>
    </div><!-- content-header -->

	<form class="all-form" action="<?php echo base_url();?>index.php/ClientProject/save" method="post" enctype="multipart/form-data">
    <div class="pd-x-5">
		
	<div class="card card-hover card-projects  card-task-one dashCardHover  mt-4" style="border-radius: 10px;margin-bottom:2rem !important;padding-bottom:-2rem; " >
				
			<div class="card-header bg-transparent pd-y-15 pd-l-15 pd-r-10" style="margin-bottom:-0.1rem;">
									<h6 class="card-title mg-b-0 px-1" style="margin-top:1px;margin-bottom:-6px">Create New Project</h6>
									<!-- <nav class="nav">
									<a href="" class="link-gray-500"><i data-feather="help-circle" class="svg-16"></i></a>
									<a href="" class="link-gray-500"><i data-feather="more-vertical" class="svg-16"></i></a>
									</nav> -->
              	
								</div>
				<!-- <h3 class="text-dark mb-4">Project</h3> -->

				<div class="card-body">
					<div class="form-group">
						<label for="exampleInputEmail1"><h6 class="card-title mg-b-1" style="margin-top:1px;">Project Name</h6></label>
						<input type="text" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp"
							name="name" placeholder="Enter Name" style="border-radius:10px" <?php if($no==1 || $no==2){ ?>value="<?php echo $project_name?>" <?php }else{?>value=""<?php } ?>>

					</div>

					<div class="form-group">
					
						<label for="exampleFormControlTextarea1"><h6 class="card-title mg-b-1" style="margin-top:1px;">Requirement</h6></label>
						<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
							placeholder="Enter Requirement" style="border-radius:10px" name="requirement" required></textarea>
					</div>

					<div class="row">
						<div class="col-md-4">
							<div class="form-group ">
								<label for="exampleFormControlTextarea1"><h6 class="card-title mg-b-1" style="margin-top:1px;">Estimated Budget(optional)</h6></label>
								<textarea class="form-control " id="exampleFormControlTextarea1" rows="3"
									placeholder="Enter Budget" style="border-radius:10px"
									name="estimated_budget" ></textarea>
							</div>
						</div>
						<div class="col-md-3 px-5 mx-0">
						
							<label for="exampleInputEmail1"><h6 class="card-title mg-b-1" style="margin-top:1px;">End date</h6></label>
							
							<div class="form-check">

								<label class="form-check-label">
									<input type="radio" style="margin-top:3px;" class="form-check-input" name="due_date_type" value="To be decided" onclick="check1()"  >To Be Decided
								</label>
							</div>
							<div class="form-check">
								<label class="form-check-label" style="margin-top:5px;">
									<input type="radio" style="margin-top:3px;" class="form-check-input" name="due_date_type" onclick="check()"
										value="Specific Date">Specific Date
								</label>
							</div>
							
							<div class=" mt-1">
								<input type="text" class="form-control" placeholder="Choose date" id="datepicker5" 
									name="specific_date_value" style="border-radius:10px;display:none;">
							</div>

						</div>
						<div class="col-md-3">
							<label for="exampleInputEmail1"><h6 class="card-title mg-b-1" style="margin-top:1px;">Type</h6></label>
							<div class="form-check">
								<label class="form-check-label">
									<input type="radio" style="margin-top:3px;" class="form-check-input" name="type"
										value="Recurring Project">Reccuring Project
								</label>
							</div>
							<div class="form-check">
								<label class="form-check-label" style="margin-top:5px;">
									<input type="radio" style="margin-top:3px;" class="form-check-input" name="type" value="Not Sure">One Time Project
								</label>
							</div>
							<div class="form-check">
								<label class="form-check-label" style="margin-top:5px;">
									<input type="radio" style="margin-top:3px;" class="form-check-input" name="type" value="On Going"><span  >On Going Project</span>
								</label>
							</div>
						</div>
					</div>
					
					<!-- <select class="form-control select2">
              <option label="Choose one"></option>
              <option value="Firefox">Firefox</option>
              <option value="Chrome">Chrome</option>
              <option value="Safari">Safari</option>
              <option value="Opera">Opera</option>
              <option value="Internet Explorer">Internet Explorer</option>
            </select> -->
					<h6 class=" mg-b-1" style="margin-top:1px;">Category</h6>
					
					<div class="row mt-2 mb-5">
						<?php foreach ($items as $item){?>

						<div class="col-md-2">
							<div class="form-check" style="margin-top:5px;">
 
								<input type="radio" class="form-check-input" name="category_id"  style="margin-top:2px;"
									value="<?php echo $item->name?>" ><?php echo $item->name?>

							</div>
						</div>
						<?php } ?>

					</div>
					</div>

					<div class=" mt-5 card card-projects card-task-one dashCardHover content-card-body" style="border-radius: 8px;margin-bottom:2rem !important;padding-bottom:-3rem;" >
						<!-- <form action="" method="post" enctype="multipart/form-data" class="form-horizontal"> -->
						
						<div class="card-header mb-3  bg-transparent pd-l-15 pd-r-0" style="margin-bottom:-0.1rem;">
									<h6 class="card-title mg-b-0 mx-1" style="margin-top:1px;margin-bottom:-6px;margin-left:-12px">Required Skills</h6>
									<!-- <nav class="nav">
									<a href="" class="link-gray-500"><i data-feather="help-circle" class="svg-16"></i></a>
									<a href="" class="link-gray-500"><i data-feather="more-vertical" class="svg-16"></i></a>
									</nav> -->
              	
								</div>

								<div class="card-body px-3">

						<input id="input2" type="text" class="form-control" value="html,css" 
							data-role="tagsinput" name="required_skills[]">


						</div>
						


						<br/>
						
						
						
					
					
						<!-- <hr> -->

					</div>
					<div class=" mt-5  card card-projects card-task-one dashCardHover content-card-body" style="border-radius: 8px;margin-bottom:2rem !important;padding-bottom:3rem; " >
						<!-- <form action="" method="post" enctype="multipart/form-data" class="form-horizontal"> -->
						
						<div class="card-header mb-4 bg-transparent pd-l-15 pd-r-10" style="margin-bottom:-0.1rem;">
									<h6 class="card-title mg-b-0 mx-1" style="margin-top:1px;margin-bottom:-6px;margin-left:-12px">Add Services</h6>
									<!-- <nav class="nav">
									<a href="" class="link-gray-500"><i data-feather="help-circle" class="svg-16"></i></a>
									<a href="" class="link-gray-500"><i data-feather="more-vertical" class="svg-16"></i></a>
									</nav> -->
              	
								</div>
						<div class="row form-group">
							<div class="col-12 col-md-12">
								<div class="control-group px-2" id="fields">
									<div class="controls">
										<div class="entry input-group upload-input-group">
											<form name="add_name" id="add_name" >
												<div class="table-responsive" >
													<table class="table table5 mt-3" id="dynamic_field" >
														<tbody style="border-color :none !important;">
															<tr >
																<td>
																	
																<?php if($no == 2){   $i = 1;
																	
																	foreach($team_name as $key => $value){   ?>
																	
																	<select class="custom-select m-input mb-2"
																		style="border-radius:10px ;width:26rem;background-color:#8758FF;color:white;font-size:13px;"
																		name="services" id="<?php echo 'teams_no_'.$i;?>">
																		<!-- <option selected>-- Choose Team --</option> -->
																		

																				<option value="<?php echo $key?>">
																					<?php echo $value?>
																				</option>
																		
																	
																	</select>

																	<?php $i = $i + 1; ?>

																<?php } } if($no==3 || $select_non==2){?>

																<select class="custom-select  mb-2"
																		style="border-radius:10px ;width:26rem;box-shadow:none !important;font-size:13px;"
																		name="services" id="category">
																		<div class="dropdown-menu drop-b tx-14" >
																		<option selected>-- Choose Team --</option>
																		<?php foreach ($teams as $item){?>
																		<option value="<?php echo $item->team_id?>">
																			<?php echo $item->name?>
																		</option>

																		<?php } ?>
																		</div>
																	</select>

																<?php } ?>
																<br/>
                                                                    <button type="button" name="add" id="add" class="btn mt-1 text-dark" style="font-size:12px !important;margin-left:-10px;"><i class="fa fa-plus" ></i>&nbsp; Add Service</button>
																</td>
																<td>
																	
																<?php if($no == 2){
																	  $i = 1;
																	foreach($service_name as $key => $value){ ?>
																	<select class=" custom-select m-input mx-3 mb-2" 
																		style="border-radius:10px;width:26rem;background-color:#8758FF;color:white;font-size:13px;" 
																		name="service_id[]" id="<?php echo 'service_id_'.$i;?>">

																		
																						
																						<option value="<?php echo $key?>">
																							<?php echo $value?>
																						</option>

																		
																		<!-- <option selected>-- Choose Packages --</option> -->
																	</select>
																		<?php $i = $i + 1; ?>

																<?php } } if($no==3 || $select_non==2){ ?>
																
																<select class="custom-select m-input  mx-3"
																		style="border-radius:10px;width:26rem;font-size:13px;" id="service"
																		name="service_id[]">

																		<option style="margin-left:-100px!important;" disabled selected>-- Choose Services --</option>

																	</select>
																
																	<?php } ?>

																</td>
																<td>
																<?php 
															 
																
															 if(!empty($service_name)){
																
																$i = 1;
																
																foreach($service_name as $key => $value){
																	
																	if($i == 1) {?>
																		<button type="button" name="remove"  id="btnClearService1" class="btn btn-dark text-white btn_remove btn-b" ><span class="fa fa-trash"></button>
																  
																  <?php  }else{?>

																	<button type="button" name="remove"  id="<?php echo 'btn_remove_'.$i;?>" value="<?php echo $i;?>"class="btn btn-dark tex-white btn_remove btn_remove2 mt-2"><span class="fa fa-trash"></button>

																<?php  }
																	
																	?>

																					<?php $i = $i + 1; ?>
                                                                     <?php } }
																	 else{?>

																		<button type="button" name="remove"  id="btnClearService4" class="btn btn-dark btn_remove btn-b text-white" ><span class="fa fa-trash" ></button>
																<?php	 }?>
																	

																
																
																<!-- <button type="button" name="remove"  id="btnClearService4" class="btn btn-dark btn_remove btn-b text-white" ><span class="fa fa-trash" ></button></td> -->
															</tr>
														<tbody>
													</table>
													<button type="button" name="add" id="addS" class="btn text-dark" style="font-size:12px !important;margin-left:2px;display:none;margin-top:-20px;"><i class="fa fa-plus" ></i>&nbsp; Add Service</button>
													<!-- <input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" /> -->
												</div>
											</form>
										</div>

									</div>
									<!-- 
										<button class="btn btn-primary mt-2" style="border-radius:10px">Upload</button> -->

								</div>


							</div>

						</div>

						<!-- </form>Attachment -->
					</div>

					<div class=" mt-5  card card-projects card-task-one dashCardHover content-card-body" style="border-radius: 8px;margin-bottom:2rem !important;padding-bottom:3rem; " >
						<!-- <form action="" method="post" enctype="multipart/form-data" class="form-horizontal"> -->
						
						<div class="card-header mb-4 bg-transparent pd-l-15 pd-r-10" style="margin-bottom:-0.1rem;">
									<h6 class="card-title mg-b-0 mx-1" style="margin-top:1px;margin-bottom:-6px;margin-left:-12px">Add Packages</h6>
									<!-- <nav class="nav">
									<a href="" class="link-gray-500"><i data-feather="help-circle" class="svg-16"></i></a>
									<a href="" class="link-gray-500"><i data-feather="more-vertical" class="svg-16"></i></a>
									</nav> -->
              	
								</div>
						<!-- <form action="" method="post" enctype="multipart/form-data" class="form-horizontal"> -->
						<div class="row form-group">
							<div class="col-12 col-md-12">
								<div class="control-group px-2"  id="fields">
									<!-- <h5 id="section2" class="mb-4">Packages</h5> -->
									<div class="controls">
										<div class="entry input-group upload-input-group">
											<!-- <form name="add_name" id="add_name"> -->
												<div class="table-responsive">
													<table class="table table5 mt-2" id="dynamic_field1">
														<tbody>
															<tr>
																<td>
																<?php if($no == 1){ 
																	 $i = 1;
																	foreach($team_name as $key => $value){   ?>
																	
																	<select class="custom-select m-input"
																		style="border-radius:10px ;width:26rem;background-color:#8758FF;color:white;font-size:13px;"
																		name="services" id="<?php echo 'teams_no1_'.$i;?>">
																		<!-- <option selected>-- Choose Team --</option> -->
																		

																				<option value="<?php echo $key?>">
																					<?php echo $value?>
																				</option>
																		
																	</select>
																	<?php $i = $i + 1; ?>

																<?php } }if($no==3 || $select_non==1){?>

																	<select class="custom-select m-input"
																		style="border-radius:10px ;width:26rem;font-size:13px;"
																		name="services" id="team2">
																		<option selected>-- Choose Team --</option>
																		
																		<?php foreach ($teams as $item){?>
																		<option value="<?php echo $item->team_id?>">
																			<?php echo $item->name?>
																		</option>
																		<?php } ?>

																	</select>

																<?php } ?>

																<br/>
                                                                    <button type="button" name="add" id="add1" class="btn text-dark mt-2 add1" 
																	style="font-size:12px !important;margin-left:-10px;"><i class="fa fa-plus"></i> &nbsp;Add Package</button>
																
																	</td>
																<td>
																<?php if($no == 1){ 
																	 $i = 1;
																	foreach($package_name as $key => $value){ ?>
																	<select class=" custom-select m-input mx-3"
																		style="border-radius:10px;width:26rem;background-color:#8758FF;color:white;font-size:13px;" 
																		name="package_id[]" id="<?php echo 'package_id_'.$i;?>">

																		
																						<option value="<?php echo $key?>">
																							<?php echo $value?>
																						</option>

																		
																		<!-- <option selected>-- Choose Packages --</option> -->
																	</select>
																		
																	<?php $i = $i + 1; ?>

																<?php } } if($no==3 || $select_non==1){ ?>
																	<select class=" custom-select m-input mx-3"
																		style="border-radius:10px;width:26rem;font-size:13px;" id="package"
																		name="package_id[]">

																			<option disabled selected style="margin-top:5rem">-- Choose Packages --</option>

																	</select>
																<?php } ?>
																
																</td>
																

																<td> 
																<?php 
															 
																
															 if(!empty($package_name)){
																
																$i = 1;
																
																foreach($package_name as $key => $value){
																	
																	if($i == 1) {?>
																		<button type="button" name="remove"  id="btnClearPackage1" class="btn btn-dark text-white btn-b btn_remove"><span class="fa fa-trash"></button>
																  
																  <?php  }else{?>

																	<button type="button" name="remove"  id="<?php echo 'btn_remove1_'.$i;?>" class="btn btn-dark text-white btn_remove3 mt-2"><span class="fa fa-trash"></button>

																<?php  }
																	
																	?>

																	  
																
																		<?php $i = $i + 1; ?>
															 <?php } }
															 else{?>

																	<button type="button" name="remove"  id="btnClearPackage4" class="btn btn-dark btn_remove btn-b text-white" ><span class="fa fa-trash" ></button></td>
														<?php	 }?>
																
																
																<!-- <button type="button" name="remove"  id="btnClearPackage4" class="btn btn-dark btn_remove btn-b text-white" ><span class="fa fa-trash" ></button></td> -->
															</tr>
															
														<tbody>
															
													</table>

													<button type="button" name="add" id="addP" class="btn text-dark  add2" style="font-size:12px !important;margin-left:2px;display:none;margin-top:-20px;"><i class="fa fa-plus"></i> &nbsp;Add Package</button>
													<!-- <input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" /> -->
												</div>
											<!-- </form> -->
										</div>

									</div>
									<!-- 
										<button class="btn btn-primary mt-2" style="border-radius:10px">Upload</button> -->

								</div>


							</div>

						</div>

						<!-- </form>Attachment -->
					</div>
					
				
					<!-- <button type="submit" class="btn btn-secondary py-2 px-4 service-input-box">Create</button>
					</form> -->
					<!-- component-section -->


					


					

					<!-- <div class=" px-5 shadow pt-5 pb-5 mt-5" style="border-radius: 13px;">
						<form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
							<div class="row form-group">
								<div class="col-12 col-md-12">
									<div class="control-group" id="fields">
										<h5 id="section3" class="mb-4">Mieloston</h5>
										<div class="controls3">
											<div class="entry3 input-group upload-input-group">


												<input type="text" class="form-control" id="exampleInputEmail1"
													aria-describedby="emailHelp" placeholder="Name" style="border-radius:10px">

												<input type="text" class="form-control mx-4" id="exampleInputEmail1"
													aria-describedby="emailHelp" placeholder="Progress" style="border-radius:10px">
												<input type="text" class="form-control" id="exampleInputEmail1"
													aria-describedby="emailHelp" placeholder="Description"
													style="border-radius:10px">
												<input type="text" class="form-control mx-4" id="exampleInputEmail1"
													aria-describedby="emailHelp" placeholder="Date" style="border-radius:10px">



												<button class="btn btn-upload btn-success btn-add3" type="button">
													<i class="fa fa-plus"></i>
												</button>
											</div>

										</div>
										<button class="btn btn-primary mt-2" style="border-radius:10px">Upload</button>

									</div>


								</div>

							</div>

						</form>
					</div> -->

					<div class=" mt-5  card card-projects card-task-one dashCardHover content-card-body" style="border-radius: 8px;margin-bottom:2rem !important; " >
						<!-- <form action="" method="post" enctype="multipart/form-data" class="form-horizontal"> -->
						
						<div class="card-header mb-4 bg-transparent pd-l-15 pd-r-10" style="margin-bottom:-0.1rem;">
									<h6 class="card-title mg-b-0 mx-1" style="margin-top:1px;margin-bottom:-6px;margin-left:-12px">Attachment</h6>
									<!-- <nav class="nav">
									<a href="" class="link-gray-500"><i data-feather="help-circle" class="svg-16"></i></a>
									<a href="" class="link-gray-500"><i data-feather="more-vertical" class="svg-16"></i></a>
									</nav> -->
              	
								</div>
						<!-- <form action="" method="post" enctype="multipart/form-data" class="form-horizontal"> -->
						<div class="row form-group">
							<div class="col-12 col-md-12">
								<div class="control-group px-3" id="fields">
									
									<div class="controls1">
										<div class="entry1 input-group upload-input-group">
										<div class="wd-md-100p">
											<div class="custom-file">
												<input type="file" name="images[]" class="custom-file-input" id="customFile"  multiple="">
												<label class="custom-file-label" for="customFile" style="border-radius:10px;margin-bottom:10px">Choose file</label>
											</div>
										</div>
										<!-- <input class="form-control" name="images[]" type="file" style="border-radius:10px;margin-bottom:10px" multiple=""> -->
											<!-- <button class="btn btn-upload btn-success btn-add1 " style="margin-left: 24px;"
													type="button">
													<i class="fa fa-plus"></i>
												</button> -->
										</div>
									</div>
									<!-- <button class="btn btn-primary mt-2" style="border-radius:10px">Upload</button> -->

								</div>


							</div>

						</div>

						<!-- </form>Attachment -->
					</div>
					
				
			<!-- Submit -->

			<div class="row" style="display:flex;align-items:left;justify-content:left" >
				<button type="submit" class="btn btn-dark  mt-3 mb-5 btn-submit ml-5" >Submit Project</button>
				<!-- <button type="button" class="btn btn-primary mt-5 mb-5 btn-submit mx-2">Save As Draft</button> -->
				<a href="<?php echo base_url();?>index.php/ClientDashboard"><button type="button" class="btn btn-dark mx-3 mt-3 mb-5 btn-submit">Cancel Project</button></a>
			</div>

			
		</form>

    </div><!-- content-body -->

																</div>
    <!-- <div class="content-footer">
        &copy; 2019. All Rights Reserved. Created by <a href="http://themepixels.me" target="_blank">ThemePixels</a>
    </div> -->
</div><!-- content -->
