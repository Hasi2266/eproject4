<!-- data-spy="scroll" data-target="#navSection" data-offset="100" -->
<div class="content-body content-card-body" >
	<body onload="loadImage()">
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
	<?php foreach ($projects as $project){?>
	<form class= "all-form" action="<?php echo base_url();?>index.php/ClientProject/update/<?php echo $project->project_id ?>" method="post" enctype="multipart/form-data">
    
	<div class="pd-x-5 pd-b-15">
		
	<div class="card card-hover card-projects  card-task-one dashCardHover  mt-4" style="border-radius: 10px;margin-bottom:2rem !important;padding-bottom:3rem; " >

	<div class="card-header bg-transparent pd-y-15 pd-l-15 pd-r-10" style="margin-bottom:-0.1rem;">
									<h6 class="card-title mg-b-0 px-1" style="margin-top:1px;margin-bottom:-6px">Create New Project</h6>
									<!-- <nav class="nav">
									<a href="" class="link-gray-500"><i data-feather="help-circle" class="svg-16"></i></a>
									<a href="" class="link-gray-500"><i data-feather="more-vertical" class="svg-16"></i></a>
									</nav> -->
              	
								</div>

								<div class="card-body">

		<input type="hidden" name="project_id" value="<?php echo $project->project_id?>">
				
					<div class="form-group">
					<label for="exampleInputEmail1"><h6 class="card-title mg-b-1" style="margin-top:1px;">Project Name</h6></label>
						<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
							name="name" placeholder="Enter Name" style="border-radius:10px" readonly value="<?php echo $project->name ?>" >
					</div>

					<div class="form-group">
					<label for="exampleFormControlTextarea1"><h6 class="card-title mg-b-1" style="margin-top:1px;">Requirement</h6></label>
						<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
							placeholder="Enter Requirement" style="border-radius:10px"  name="requirement"><?php echo $project->requirement?></textarea>
					</div>

					<div class="row">
						<div class="col-md-4">
							<div class="form-group ">
							<label for="exampleFormControlTextarea1"><h6 class="card-title mg-b-1" style="margin-top:1px;">Estimated Budget(optional)</h6></label>
								<textarea class="form-control "  id="exampleFormControlTextarea1" rows="3"
									placeholder="Enter Budget" style="border-radius:10px"
									name="estimated_budget"><?php echo $project->estimated_budget?></textarea>
							</div>
						</div>
						<div class="col-md-3 px-5 mx-0">
						<label for="exampleInputEmail1"><h6 class="card-title mg-b-1" style="margin-top:1px;">End date</h6></label>
							
							<div class="form-check">

								<label class="form-check-label">

									<input type="radio"  class="form-check-input" style="margin-top:3px;" name="due_date_type" <?php if(($project->end_date)=='To be decided') {echo "checked";}?> value="To be decided" onclick="check1()">To be
									decided
								</label>
							</div>
							<div class="form-check">
								<label class="form-check-label"  style="margin-top:5px;">
									<input type="radio"  class="form-check-input" name="due_date_type"  <?php if(($project->end_date)=="Specific Date") {echo "checked";}?> onclick="check()"
										value="Specific Date" style="margin-top:3px;" id="sepcic_data">Specific Date
								</label>
								
							</div>
							
							<div class=" mt-1">
								<input type="text"  class="form-control" placeholder="Choose date" id="datepicker5" 
									name="specific_date_value" style="border-radius:10px;display:none;" value="<?php echo $project->date?>">
							</div>

						</div>
						<div class="col-md-3">
						<label for="exampleInputEmail1"><h6 class="card-title mg-b-1" style="margin-top:1px;">Type</h6></label>
							<div class="form-check">
								<label class="form-check-label">
									<input type="radio"  class="form-check-input" name="type" <?php if(($project->type)=='Recurring Project') {echo "checked";}?>
										value="Recurring Project">Recurring Project
								</label>
							</div>
							<div class="form-check">
								<label class="form-check-label"  style="margin-top:5px;">
									<input type="radio" style="margin-top:3px;"  class="form-check-input" name="type" value="Not Sure" <?php if(($project->type)=='Not Sure') {echo "checked";}?>>One time project
								</label>
							</div>
							<div class="form-check">
								<label class="form-check-label"  style="margin-top:5px;">
									<input type="radio" style="margin-top:3px;" class="form-check-input" name="type" value="On Going" <?php if(($project->type)=='On Going') {echo "checked";}?>>On Going project
								</label>
							</div>
						</div>
					</div>
					<h6 class=" mg-b-1" style="margin-top:1px;">Category</h6>
					<div class="row mt-2 mb-5">
						<?php foreach ($items as $item){?>

						<div class="col-md-2">
							<div class="form-check">

								<input type="radio"  class="form-check-input" name="category_id" <?php if(($project->category_id) == $item->name) {echo "checked";}?> value="<?php echo $item->name?>"><?php echo $item->name?>

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
								
							<input id="input2" type="text" class="form-control badge badge-pill badge-info py-2" value="<?php echo $project->required_skills?>" style="border-radius:10px"
							data-role="tagsinput" name="required_skills[]" style="background-color:#17a2b8;font-size:12px;margin-right:0.2rem;">

						</div>

						<!-- <input class="form-control" name="images[]" type="file" style="border-radius:10px;" multiple="">  -->


						<br/>
						
						
						
					
					
						<hr>

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
						<!-- <form action="" method="post" enctype="multipart/form-data" class="form-horizontal"> -->
						<div class="row form-group">
							<div class="col-12 col-md-12">
								<div class="control-group" id="fields">
									
									<div class="controls">
										<div class="entry input-group upload-input-group">
											<form name="add_name" id="add_name">
												<div class="table-responsive">
													<table class="table table5" id="dynamic_field">
														<tbody style="border-color :none !important;">
															<tr>
																<td>
											


																<?php 
																
																if(empty($service)){
																	
																	?>

																	<select class="custom-select ml-2 m-input"
																		style="border-radius:10px ;width:26rem;font-size:13px;"
																		name="services" id="category">
																		<option selected>-- Choose Team --</option>
																		<?php foreach ($teams as $item){?>
																		<option value="<?php echo $item->team_id?>">
																			<?php echo $item->name?>
																		</option>
																		<?php } ?>
																	</select>

																		
															<?php }
															
														else {

																	$i = 1;

																foreach($team_name2 as $key => $value){   ?>
																	
																	<select class="custom-select m-input ml-2 mb-2"
																		style="border-radius:10px ;width:26rem;background-color:#894ddb;color:white;font-size:13px;"
																		name="services" id="<?php echo 'teams_no_'.$i;?>">
																		<!-- <option selected>-- Choose Team --</option> -->
																		

																				<option value="<?php echo $key?>">
																					<?php echo $value?>
																				</option>
																		
																	
																	</select>

																	<?php $i = $i + 1; ?>

																<?php } }?>

															

																	<br/>
                                                                    <button type="button" name="add" id="add" class="btn  mt-2 text-dark" style="font-size:12px !important;margin-left:-5px;"><i class="fa fa-plus" ></i>&nbsp; Add Service</button>
																
																</td>

																<td>
																	
												
																
																<?php 
															 
																
																if(empty($service)){ ?>

																	<select class=" custom-select m-input mx-4"
																		style="border-radius:10px;width:26rem;font-size:13px;" id="service"
																		name="service_id[]">
																		
																		<option selected disabled>Choose service</option>

																	</select>

																	<?php }
																	
																	 else {

																	$i = 1;
																
																foreach($service as $key => $value){ ?>
																	
																	<select class="custom-select m-input mb-2 mx-4"
																		style="border-radius:10px ;width:26rem;background-color:#894ddb;color:white;font-size:13px;"
																		name="service_id[]" id="<?php echo 'service_id_'.$i;?>">
																		<!-- <option selected>-- Choose Team --</option> -->
																		

																				<option value="<?php echo $key?>">
																					<?php echo $value?>
																				</option>
																		
																	
																	</select>
																		
																	<?php $i = $i + 1; ?>

																<?php } }?>
																
																
																
																	
																</td>
																<td>

																	

																			<?php 
																			
																			if(empty($service)){?>

																				<button type="button" name="remove"  id="btnClearService4" style="font-size:13px;" class="btn btn-dark btn_remove btn-b text-white " ><span class="fa fa-trash" ></button>
																		<?php	}

																			else{?>

																				<!-- // $count = 	count($service_name);  -->

																				<!-- <input type="hidden" id="count" value="<?php echo $count ?>"> -->

																				<?php	

																					$i = 1;
																				foreach($service as $key => $value){?>

																					<?php
																					
																						if($i == 1){?>

																							
																											<button type="button" name="remove"  id="btnClearService1" class="btn btn-dark text-white btn_remove btn-b" style="font-size:13px;"><span class="fa fa-trash"></button>

																					<?php	}else{

																					
																					?>

																							<button type="button" name="remove"  style="font-size:13px;" id="<?php echo 'btn_remove_'.$i;?>" value="<?php echo $i;?>"class="btn btn-dark tex-white btn_remove btn_remove2 mt-2"><span class="fa fa-trash"></button>
																						<?php } ?>
																				
																				<?php   $i++; }
																				}

																				?>

																					<!-- <button type="button" name="remove"  id="btnClearService4" class="btn btn-dark btn_remove btn-b text-white mt-2" ><span class="fa fa-trash" ></button> -->
																				

																
														<!-- <?php	 

														  

														 if((empty($service) && (empty($service_name)))){?>

															<button type="button" name="remove"  id="btnClearService4" class="btn btn-dark btn_remove btn-b text-white" style="font-size:13px;"><span class="fa fa-trash" ></button>
														
														<?php } ?> -->

													

															
													
													
													</td>
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
								<div class="control-group" id="fields">
									<!-- <h5 id="section2" class="mb-4">Packages</h5> -->
									<div class="controls">
										<div class="entry input-group upload-input-group">
											<!-- <form name="add_name" id="add_name"> -->
												<div class="table-responsive">
													<table class="table table5" id="dynamic_field1">
													<tbody style="border-color :none !important;">
															<tr>
																<td>
																
																<?php 
																$i = 1;
																foreach($team_name as $key => $value){   ?>
																	
																	<select class="custom-select m-input mb-2 ml-2" 
																		style="border-radius:10px ;width:26rem;background-color:#8758FF;color:white;font-size:13px;" 
																		name="services"  id="<?php echo 'teams_no1_'.$i;?>">
																		<!-- <option selected>-- Choose Team --</option> -->
																		

																				<option value="<?php echo $key?>">
																					<?php echo $value?>
																				</option>
																		
																	
																	</select>
																	<?php $i = $i + 1; ?>

																<?php } ?>

																<!-- <?php 
																if(empty($package)){?>

																	<select class="custom-select m-input ml-2"
																		style="border-radius:10px ;width:26rem;font-size:13px; mb-2"
																		name="services" id="team2">
																		<option disabled selected>-- Choose Team --</option>
																		
																		<?php foreach ($teams as $item){?>
																		<option value="<?php echo $item->team_id?>">
																			<?php echo $item->name?>
																		</option>
																		<?php } ?>
																	</select>

																	<?php } ?> -->
																	
																	
																<?php if(!empty($package)){
																
																$i = 1;

																foreach($team_name1 as $key => $value){   ?>
																	
																	<select class="custom-select m-input ml-2 mb-2"
																		style="border-radius:10px ;width:26rem;background-color:#894ddb;color:white;font-size:13px;"
																		name="services" id="<?php echo 'teams_no33_'.$i;?>">
																		<!-- <option selected>-- Choose Team --</option> -->
																		
																				<option value="<?php echo $key?>">
																					<?php echo $value?>
																				</option>
																		
												
																	</select>
																		
																	<?php $i = $i + 1; ?>

																<?php } }?>

																	<!--  -->

																	<br/>
                                                                    <button type="button" name="add" id="add1"
																		class="btn text-dark mt-2" style="font-size:12px !important;margin-left:-5px;"><i class="fa fa-plus"></i> &nbsp;Add Package</button>
																

																	</td>

																<td>
																

																<?php  
																$i = 1;
																foreach($package_name as $key => $value){ ?>
																	<select class=" custom-select m-input  mb-2 mx-4"
																		style="border-radius:10px;width:26rem;background-color:#8758FF;color:white;font-size:13px;"  
																		name="package_id[]" id="<?php echo 'package_id_'.$i;?>">

												
																						<option value="<?php echo $key?>">
																							<?php echo $value?>
																						</option>

																		
																		<!-- <option selected>-- Choose Packages --</option> -->
																	</select>
																	<?php $i = $i + 1; ?>

																<?php }  ?>

																<!-- <?php 
																
																if(empty($package)){?>

																	<select class=" custom-select m-input mx-4 mb-2"
																		style="border-radius:10px;width:26rem;font-size:13px;" id="package"
																		name="package_id[]">

																		
																		<option selected disabled>-- Choose Packages --</option>
																		
																	</select>

																	<?php }?> -->
																	
																	
																<?php	if(!empty($package)){

																	$i = 1;

																foreach($package as $key => $value){   ?>
																	
																	<select class="custom-select m-input mb-2 mx-4"
																		style="border-radius:10px ;width:26rem;background-color:#894ddb;color:white;font-size:13px;"
																		name="package_id[]" id="<?php echo 'package_id33_'.$i;?>">
																		<!-- <option selected>-- Choose Team --</option> -->
																		

																				<option value="<?php echo $key?>">
																					<?php echo $value?>
																				</option>
																		
																	
																	</select>

																	<?php $i = $i + 1; ?>


																<?php }} ?>

																	<!--  -->
															
																</td>
																<td>
																	<?php 

																		$i = 1;
																		foreach($package_name as $key => $value){

																			if($i == 1) {?>
																						
																						<button type="button" name="remove"  id="btnClearPackage1" style="font-size:13px;" class="btn btn-dark text-white btn-b btn_remove"><span class="fa fa-trash"></button>

																						<?php } else{?>

																							<button type="button" name="remove" style="font-size:13px;" id="<?php echo 'btn_remove3_'.$i;?>" value="<?php echo $i;?>" class="btn btn-dark text-white btn_remove btn_remove3 btn_remove mt-2"><span class="fa fa-trash"></button>
																						
																					<?php  }?>
																		<?php $i = $i + 1; ?>
																		<?php } 
															?>

																	<?php	if(!empty($package)){?>
<!-- 
																			<button type="button" name="remove"  id="btnClearPackage4" style="font-size:13px;" class="btn btn-dark btn_remove btn-b text-white" ><span class="fa fa-trash" ></button> -->
																		


																		<?php 



																			$i = 1;

																			 foreach($package as $key => $value){?>

																			
	
																				<button type="button" name="remove" style="font-size:13px;" id="<?php echo 'btn_remove33_'.$i;?>" value="<?php echo $i;?>" class="btn btn-dark text-white btn_remove btn_remove33 mt-2"><span class="fa fa-trash"></button>
	
																			
																			
																			<?php	$i++; 

																			  }
																		}
																	
																	?>
																<!-- <button type="button" name="add" id="add1"
																		class="btn btn-all text-white"><i class="fa fa-plus"></button> -->
																	
																	</td>
															</tr>
														<tbody>
													</table>
													<button type="button" name="add" id="addP" class="btn text-dark mx-1 add2" style="font-size:12px !important;margin-left:2px;display:none;margin-top:-20px;"><i class="fa fa-plus"></i> &nbsp;Add Package</button>
													
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
								<div class="control-group  px-3" id="fields">
									<!-- <h5 id="section2" class="mb-4">Attachment</h5> -->
									<div class="controls1">
										<div class="entry1 input-group upload-input-group">
											
										
												
										<div class="card-deck">
												<?php
													$i= 1;
													// print_r($images5);die;

													if(empty($images5)){ ?>

														<span class="badge badge-pill badge-info mx-3 " style="font-size:13px;margin-bottom:50px;padding-bottom:10px;padding-top:8px;">There is no attachemet in this project</span>
                                                            <!-- <input class="form-control" name="images[]" type="file" style="border-radius:10px;display:none;" multiple="" value="1">  -->
											<input type="file" name="images[]" class="custom-file-input mt-5 mb-5" id="customFile"  multiple="" style="margin-left:-80px;">
												<label class="custom-file-label" for="customFile" style="border-radius:10px;margin-top:45px;margin-bottom:50px;">Choose file</label>
												
												
												<?php	} 

                                                  
                                                    
                                                        
                                                           
                                                           
													
                                                       
											
													else {?>

														<div class="row mb-5">
															
														

                                                    <?php foreach($images5 as $key => $value){
														
														
												
														$img = "/uploads/$value";
														$href= "/uploads/$value";
													?>
													   
													   <div class="col-md-3 mt-5 mb-5 mx-3 mx-4"  >
																
																
													
													<?php if(!empty($value)){ 
														
														?>

														
														<div class="card" style="width:12rem;height:12rem;">
															
															<a href="<?php echo base_url();?><?php echo $href;?>" download="<?php echo $project->name.'_'.$i;?>">
																
																		<img class="card-img-top " src="<?php echo base_url();?><?php echo $img;?>" style="width:12rem;height:12rem;">
																
															</a>
															
														
														<!-- <label class="label" for="upload1" ><i class="fas fa-edit"></i><?php echo $value;?></label> -->
														<br/>
														<input type="hidden" name="images1[]" value="<?php echo $value;?>" style="margin-top:40px;">
														<!-- <input type="file" id="upload" name="img" hidden>
												<label class="label" for="upload"><i class="fas fa-edit"></i></label> -->
													</div>
													<?php } else{?>

													<span class="badge badge-pill badge-info  " style="font-size:13px;margin-bottom:-2rem;padding-bottom:10px;padding-top:8px;">There is no attachemet in this project</span>
													
													
												<?php	}
														?>
													
													
													<!-- </div>	 -->
													
													
												<?php 	$i++; ?>
												</div>
													
												<?php } ?>

												
												<input type="file" name="images[]" class="custom-file-input mt-5 mb-5" id="customFile"  multiple="" style="margin-left:-80px;">
												<label class="custom-file-label" for="customFile" style="border-radius:10px;">Choose file</label>	
											
												<?php		}
												
												?>	
											
															
												</div>
												</div>
									</div>
									<!-- <button class="btn btn-primary mt-2" style="border-radius:10px">Upload</button> -->

								</div>


							</div>

						</div>
						

						<!-- </form>Attachment -->
					</div>
					
													</div>
													 
			<!-- Submit -->

			
			
			<!-- <?php if (($project->add_proposal)== 1) { ?>

				<a href="<?php echo base_url();?>index.php/AdminProject"><button class="btn btn-primary">Save</button></a>
			<?php } else { ?>
				<button type="submit" class="btn btn-primary">Submit Proposal</button>



			<?php } ?> -->
			
			<div class="row mx-4">
			<a ><button type ="submit" class="btn btn-all text-white btn-submit mt-4">Update Project</button></a>
			<a href="<?php echo base_url();?>index.php/ClientPackage" ><button type ="button" class="btn btn-all text-white btn-submit mt-4 mx-3 ">Cancel</button></a>
			</div>
			
		</form>

    </div>
	
	
	<!-- content-body -->
<?php } ?>

   <!-- content-footer -->
</div><!-- content -->

<script>
function loadImage() {
//   alert("Image is loaded");
	if(document.getElementById('sepcic_data').checked == true) {   
		var y = document.getElementById("datepicker5");
		if(y.style.display === "none"){
			y.style.display = "block";
		}
		else{
			y.style.display = "none";
		}
	} 
	// var x = document.getElementById('sepcic_data').value;
	
}
</script>
