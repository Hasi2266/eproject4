<div class="content-body pd-t-30 d-flex flex-column  content-card-body">
        <!-- <div class="pricing-header mg-b-25 mg-md-b-35 mg-lg-b-45">
          <label class="content-label content-label-lg tx-10 tx-sm-11 tx-md-12 tx-primary mg-b-2 tx-spacing-2">Simple Pricing That Fit For Your Needs</label>
          <h1 class="tx-24 tx-md-32 tx-xl-36 tx-normal tx-color-01">Choose the right plans for your business</h1>
          <p class="tx-md-16 tx-color-03 mg-b-0">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi.</p>
        </div> -->

		<div class="row">
			<div class="col-md-9">
			<ul class="nav nav-pillsService">

				<?php foreach($teams as $item){?>

					<li class="nav-item">
						<a class="nav-link btn-team btn-info <?php if(($items1->team_id) == ($item->team_id)) {echo "active";}?>"  data-toggle="pill" href="#<?php echo $item->name?>" role="tab" aria-controls="pills-<?php echo $item->name?>" aria-selected="true"><?php echo $item->name?></a>
					</li>

				<?php } ?> 
			</ul>
			
			<div class="col-md-3 mt-1 " style="align-items:right;justify-content:right;">
				<a href="javascript: void(0)" data-toggle="modal" data-animation="effect-scale" class="text-white mx-3" id="my"><button id="btnCheck" style="border-radius: 8px;"  class="btn btn-submit text-white  py-2">New Project</button></a>
				<a href=""  data-toggle="modal" data-animation="effect-scale" class="text-white" id="link2"><button id="btnCheck1" style="border-radius: 8px;"  class="btn btn-submit text-white  py-2">Add to project</button></a>
			</div>
			
		</div>
        <div class="" style="margin-top:10px;">
          
                <ul class="nav nav-pillsService">

						<?php foreach($teams as $item){?>

							<li class="nav-item">
								<a class="nav-link btn-team <?php if(($items1->team_id) == ($item->team_id)) {echo "active";}?>"  data-toggle="pill" href="#<?php echo $item->name?>" role="tab" aria-controls="pills-<?php echo $item->name?>" aria-selected="true"><?php echo $item->name?></a>
							</li>

						<?php } ?> 

                  <!-- <li class="nav-item ">
                    <a class="nav-link active text-uppercase" data-toggle="pill" href="#flamingo" role="tab" aria-controls="pills-flamingo" aria-selected="true">Digital</a>
                  </li>
                  <li class="nav-item mx-2">
                    <a class="nav-link text-uppercase" data-toggle="pill" href="#cuckoo" role="tab" aria-controls="pills-cuckoo" aria-selected="false">lab</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-uppercase" data-toggle="pill" href="#ostrich" role="tab" aria-controls="pills-ostrich" aria-selected="false">Studio</a>
                  </li>
                  <li class="nav-item mx-2">
                    <a class="nav-link text-uppercase" data-toggle="pill" href="#tropicbird" role="tab" aria-controls="pills-ostrich" aria-selected="false">Commerce</a>
                  </li> -->
                  <!-- <li class="nav-item">
                    <a class="nav-link text-uppercase" data-toggle="pill" href="#tropicbird" role="tab" aria-controls="pills-ostrich" aria-selected="false">Ostrich</a>
                  </li> -->
                  <div class="px-3 " style="margin-left:42rem;">
				  <!-- <a href="javascript: void(0)" id="newbtn" class="btn btn-primary text-right " style="border-radius: 8px;" data-toggle="modal" data-animation="effect-scale"><button ><a href="#model6">new project</button></a> -->
						<button id="btnCheck" style="border-radius: 8px;"  class="btn btn-primary text-right  py-2"><a href="javascript: void(0)" data-toggle="modal" data-animation="effect-scale" class="text-white" id="my">New project</a></button>
                  </div>
                    <div class="">
					
					<a href="javascript: void(0)" data-toggle="modal" data-animation="effect-scale" class="text-white" id="link2"><button type="submit" id="btnCheck1" style="border-radius: 8px;"  class="btn btn-primary text-right py-2">Add to project</button></a>
					
				</div>
                </ul>
					<form action="<?php echo base_url();?>index.php/ClientPackage/addNewProj" method="post">
								<div class="modal fade" id="modal6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel6" aria-hidden="true">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content px-5 py-5 "style="border-radius:10px" >
											<div class="modal-header">
												<h6 class="modal-title" id="exampleModalLabel6">New Project</h6>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true"><i data-feather="x"></i></span>
												</button>
											</div>
											<div class="modal-body">
										
											<div class="form-group">
												<label for="exampleInputEmail1">Project Name</label>
												<input type="text"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
													name="name" placeholder="Enter Name" style="border-radius:10px">
											</div>

											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
												<button type="submit" class="btn btn-dark"  name="btn_addnewproj" value="addNew" >Add</button></a>
											</div>
										
										</div>
									</div>
    							</div>

								<div class="modal fade" id="modal7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel6" aria-hidden="true">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content px-5 py-5" style="border-radius:10px">
											<div class="modal-header">
												<h6 class="modal-title" id="exampleModalLabel6">Add to Project</h6>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true"><i data-feather="x"></i></span>
												</button>
											</div>
											<div class="modal-body">
												
													<div class="form-group">
														
														<label for="exampleInputEmail1">Project Name</label>
														<!-- <input type="text" id="check2" value=""> -->
														<span id = "check2" style="color:red"> </span>
														<select class="custom-select m-input px-5" 
																				style="border-radius:10px;width:26rem;"
																				name="project_id" id="project_i">
																				<option value = "">-- Select Project --</option>

														<?php  foreach($projects as $project){?>

															<option value="<?php echo $project->project_id?>"><?php echo $project->name?></option>
															
														<?php } ?>
														</select>
														<span id = "check3" style="color:red"> </span>
													</div>

													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-secondary" data-dismiss="modal" id="btnClear">Close</button>
														<input type="submit" class="btn btn-dark" name="btn_addtoproj" value="AddTo" id="btnAdd" disabled ></button></a>
													</div>
												
										</div>
								</div>
    				</div>
								
								
                  
						<div class="tab-content mt-3">

							<?php foreach($teams as $item1){?>

							<div class="tab-pane fade show <?php if(($items1->team_id) == ($item1->team_id)) {echo "active";}?>" id="<?php echo $item1->name?>" role="tabpanel" aria-labelledby="<?php echo $item1->name?>-tab">
				
								<div class="pricing-wrapper mg-lg-b-40">
						
									<div class="row row-xs mt-5">
										<?php  foreach($packages as $package){?>
											<?php if(($package->team) == ($item1->team_id)){?>
												<div class="col-sm-6 col-md-4" >
												<div class="card card-pricing shadow cardBody" style=""  id="tblFruits">
																	<div class="card-header">
																			<div class="custom-control custom-checkbox checkbox-xl card_checkbox "style="">
																					<input type="checkbox" class="custom-control-input check1" name="check[]" id="<?php echo $package->package_id ?>" value="<?php echo $package->package_id ?>"  style="border-radius:8px;">
																					<!-- <input type="text" value="<?php echo $package->package_id ?>" name="check_id"> -->
																					<label class="custom-control-label check1" for="<?php echo $package->package_id ?>"></label>
																			</div>
																		
																		<i data-feather="box"></i>
																		<h4><?php echo $package->name?></h4>
																		<?php $req = $package->description;
														$y = implode(' ', array_slice(explode(' ', $req), 0, 14))."\n";?>
																		<p><?php echo $y?></p>
																	</div><!-- card-header -->
																		<?php 
																			if(($package->currency)==1){
																				$currency = '$';
																			}
																			else{
																				$currency = 'Rs.';
																			}

																			
																		?>
																								<div class="pricing-price mt-4" style="margin-left:1rem">
																		<h1 ><span><?php echo $currency?></span><?php echo $package->price?><small style="margin-left:-0.1rem;margin-top:1rem!important"><?php if(($package->pduration) == 1){echo '/Anually';} else { echo '/Monthly';}?></small></h1>
																	</div><!-- pricing-price -->
																	<div class="card-body " style="padding-top:12px ;padding-bottom:1px">
																		<ul class="list-unstyled">
																		<?php 

																						$flield = $package->flieds;
																						$array = explode(' ', $flield);
																						// print_r($array) ;
																						foreach($array as $key => $value){
																							
																							$ids_image = explode(',',$value);
																							// print_r($ids_image) ; die;
																							
																						}

																						foreach($ids_image as $key => $value){	?>

																								<li><i data-feather="check"></i> <?php echo $value?></li><br/>

																						<?php } ?>
																		</ul>
																	</div><!-- card-body -->
																	<!-- <div class="card-footer">
																		<button class="btn btn-block btn-brand-02 btn-uppercase tx-spacing-2 py-2" style="border-radius: 8px;">Add to project</button>
																		<div class="tx-11 tx-sans tx-color-04 mg-t-10">Prices may vary depending on the options you need.</div>
																	</div>card-footer -->
																</div><!-- card -->
												</div><!-- col -->
											<?php	} ?>
										<?php	}?>
								</form>
							</div><!-- row -->
					</form>

					
			</div>
		
	
</div>
  
 

<?php }?>

              
             
          </div>
        </div>
        
      </div><!-- content-body -->


	 
