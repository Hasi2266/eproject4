<div class="content-header">
            <div>
                <!-- <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">UI Library</a></li>
                        <li class="breadcrumb-item"><a href="#">Components</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Table (DataTable)</li>
                    </ol>
                </nav> -->

            </div>
        </div>
        <!-- content-header -->

        <div class=" content-card-body pd-b-15">

            <div class="row">
                <!-- <div class="px-3 " style="margin-left:53.6rem;">
                    <a hreh="<?php echo base_url();?>"><button type="button" class="btn btn-primary text-right text-uppercase py-2 " style="border-radius: 8px;">New project</button>
                </div> -->
                <!-- <div class="">
                    <button type="button" class="btn btn-primary text-right text-uppercase  py-2" style="border-radius: 8px;">Add to project</button>
                </div> -->


                <!-- my -->



            </div>

			<div class="card card-hover card-projects  card-task-one dashCardHover content-card-body mt-4" style="border-radius: 10px;margin-bottom:2rem !important;padding-bottom:3rem; " >
        <!--btn-->
				<div class="card-header bg-transparent pd-y-15 pd-l-15 pd-r-10" style="margin-bottom:-0.1rem;">
									<h6 class="card-title mg-b-0 px-1" style="margin-top:1px;margin-bottom:-6px">Projects</h6>
									<!-- <nav class="nav">
									<a href="" class="link-gray-500"><i data-feather="help-circle" class="svg-16"></i></a>
									<a href="" class="link-gray-500"><i data-feather="more-vertical" class="svg-16"></i></a>
									</nav> -->
              	
								</div>
       
								<div class="card-body">
				<!-- <i class="fas fa-edit" style="margin-right:200px">Edit</i> -->
				
                <table id="example1" class=" table table-bottom" style="border-radius:10px ;font-size:13px">
						
                    <thead>
						
					
                        <tr>
						
                            <th>
                                <!-- <div class="custom-control custom-checkbox" style="border-radius: 8px;">
                                    <input type="checkbox" class="custom-control-input" id="<?php echo $item->project_id ?>" value="<?php echo $item->project_id ?>">
                                    <label class="custom-control-label" for="<?php echo $item->project_id ?>"></label>
                                </div> -->
                            </th>
                            <!-- <th class="wd-12p">logo </th> -->
                            <!-- <th class="wd-9p">Company</th> -->
                            <th class="wd-20p" ><span style="margin-left:-1.5rem;">Project</span></th>
                            <th >Update Date</th>
                            <th class="wd-13p">Status</th>
                            <th class="wd-14p">Invoice</th>
                            <th class="wd-15p">Progress</th>
                            <th  class="wd-13p">Due date</th>
							<th class="wd-15p">Action</th>
							
							
                        </tr>
                    </thead>
                    <tbody>
				<?php foreach($items as $item){?>
					<!-- data-url="" -->
								<tr  style="cursor:pointer;">
								
								<?php 
									if(($item->project_status) == 1){
										$action = "Create Proposal";
										$status = 'Project Submitted ';
									}
									else if(($item->project_status) == 2){
										
										$status = 'Proposal Submitted';
										$action = "Approval Pending";
									}
									else if(($item->project_status) == 3){
										$action = "Start Project";
										$status = 'Project Approved';
									}
									else if(($item->project_status) == 4){
										$status = 'Project Start';
										$action = "In Progress Project";
									}	
									else if(($item->project_status) == 5){
										$status = 'Project Hold';
										$action = "Start Project";
									}
									else{
										$status = 'Project Completed';
										$action = "End Project";
									}	

									if(($item->end_date)== 'Specific Date'){
										$due_date = $item->date;
									}
									else{
										$due_date = $item->end_date;
									}

								?>
									<td>
										<!-- <div class="custom-control custom-checkbox">
											<input type="checkbox" class="custom-control-input" id="<?php echo $item->project_id ?>" value="<?php echo $item->project_id ?>">
											<label class="custom-control-label" for="<?php echo $item->project_id ?>"></label>
										</div> -->
									</td>
									<!-- <td><img src="../assets/img/favicon.png" alt="..." class="img-thumbnail" width="50"></td> -->
									<!-- <td class="data"><?php echo $item->company_name?></td> -->
									<td class="data" ><span style="margin-left:-1.5rem;"><?php echo $item->name?></span></td>
									<td class="data"><?php echo $item->update?></td>
									<td><span class="badge badge-pill badge-info" style="width:7rem;"><?php echo $status?></span></td>
									<td class="data"><?php echo $item->invoice_no?></td>
									<td><div class="progress mt-2" style="height:0.45rem;border-radius:10px">
											<div class="progress-bar bg-<?php if($item->project_progress >= 50){echo "green";}else{echo "danger";} ?> wd-<?php echo $item->project_progress?>p" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
										</div>		</td>
									<td class="data" style="text-transform: capitalize;">
										
											<?php echo $due_date?>
											<!-- <nav class="nav">
												<a href="#p" class="link-gray-500" style="text-align:right"><i data-feather="more-vertical" class="svg-16"></i></a>
											</nav> -->

											<!-- <div class="tab-pane fade" id="p" role="tabpanel" aria-labelledby="profile-tab5">
		<p>swws</p>
											</div> -->
										
										
									</td>
									<td>
									<div class="dropdown">
													<button class="btn  dropdown-toggle1" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border-radius: 10px;margin-left:-1rem;">
														<i class="fa fa-ellipsis-h" aria-hidden="true"></i>
													</button>
													<div class="dropdown-menu drop-b tx-14" aria-labelledby="dropdownMenuButton">
														
													<a class="dropdown-item" href="<?php echo base_url();?>index.php/AdminProject/editItem/<?php echo $item->pid?>">Add Progress</a>
													<a class="dropdown-item" href="<?php echo base_url()?>index.php/AdminProject/addMilestone/<?php echo $item->pid ?>"><?php echo $action ?> </a>
              
              
            
										<!-- <a href="<?php echo base_url();?>index.php/AdminProject/editItem/<?php echo $item->project_id?>"><button type="submit" class="btn btn-dark btn-submit py-1 px-2">Add Progress</button></a> -->


										<?php 
										
											if ((($item->add_proposal)== 1) && (($item->approve_project)== 1) && (($item->start_project) == 0) && (($item->end_project) == 0) && (($item->add_invoice) == 0) ){?>
													
													<a class="dropdown-item" href="<?php echo base_url();?>index.php/AdminProject/addInvoice/<?php echo $item->pid?>">Add Invoice</a>
													<!-- <a href="<?php echo base_url();?>index.php/AdminProject/addInvoice/<?php echo $item->project_id?>"><button type="submit" class="btn btn-dark btn-submit py-1 px-2">Add Invoice</button></a> -->

											<?php }
											else if($item->add_invoice == 1){?>

													<a class="dropdown-item" href="<?php echo base_url();?>index.php/AdminInvoice/viewInvoice/<?php echo $item->pid?>">View Invoice</a>
													<!-- <a href="<?php echo base_url();?>index.php/AdminInvoice/viewInvoice/<?php echo $item->project_id?>"><button type="submit" class="btn btn-dark btn-submit py-1 px-2">View Invoice</button></a> -->
											
											<?php }
											
											?>
										

										</div>
          </div>

										
										<!-- <a href="<?php echo base_url();?>index.php/AdminProject/deleteItem/<?php echo $item->project_id?>"><button type="submit" class="btn btn-submit py-1 px-2 mx-1" data-toggle="modal" data-animation="effect-just-me" >Delete</button></a> -->
										<!-- <a href="#modal6" class="btn btn-dark btn-block" data-toggle="modal" data-animation="effect-just-me">Just Me</a> -->
									</td>
									
									
									<!-- <td>
							<button class="save"> Save </button>
							<button class="edit"> Edit </button>
							<button class="delete"> Delete </button>
						</td> -->

								</tr>
						</div>
						
					</div>
					
					<?php } ?>
                       



                    </tbody>
                </table>
								</div>
            </div>
			
            <!-- component-section -->


        </div>
        <!-- content-body -->


        <!-- <div class="content-footer">
            &copy; 2019. All Rights Reserved. Created by <a href="http://themepixels.me" target="_blank">ThemePixels</a>
        </div> -->
        <!-- content-footer -->
