<div class="content-body ">
        <div>
          <!-- <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">UI Library</a></li>
              <li class="breadcrumb-item"><a href="#">Components</a></li>
              <li class="breadcrumb-item active" aria-current="page">Table (DataTable)</li>
            </ol>
          </nav> -->
         
        </div>
      </div><!-- content-header -->
			<div class="" style="margin-left:1.5rem;margin-right:1.5rem;">
			<?php foreach ($projects as $project){?>
		<form action="<?php echo base_url();?>index.php/AdminProject/saveMilestone/<?php echo $project->project_id ?>" method="post" enctype="multipart/form-data">
			
			<div class="card card-hover card-projects card-task-one dashCardHover content-card-body mt-4" style="border-radius: 10px;margin-bottom:2rem !important;padding-bottom:3rem;">
        <!--btn-->
				<div class="card-header bg-transparent pd-y-15 pd-l-15 " style="margin-bottom:-0.1rem;">
									<h6 class="card-title mg-b-0 px-1" style="margin-top:1px;margin-bottom:-6px"><?php echo $project->name ?></h6>
									<!-- <nav class="nav">
									<a href="" class="link-gray-500"><i data-feather="help-circle" class="svg-16"></i></a>
									<a href="" class="link-gray-500"><i data-feather="more-vertical" class="svg-16"></i></a>
									</nav> -->
              	
								</div>
       
								<div class="card-body" style="padding:none !important;">
	 
     
      
      <!-- <div class="row px-3">
     <div class="col-md-3  shadow" style="border-radius: 13px;" >
      <h5>Project Name : <?php echo $project->name ?></h5>
      <p>Date : 25 May 2022</p> 
                  <p>Due Date : 25 May 2022</p>
      </div> -->
      <!-- <div class="col-md-3  shadow" style="border-radius: 13px;" >
        <h5>Project Status : <?php echo $initial ?></h5>
        <p>Date : 25 May 2022</p> 
                  <p>Due Date : 25 May 2022</p>
          </div>
          <div class="col-md-3 shadow" style="border-radius: 13px;" >
            <h5>Project Timelines</h5>
            <p>Date : 25 May 2022</p> 
                  <p>Due Date : 25 May 2022</p>
              </div>
              <div class="col-md-3   shadow" style="border-radius: 13px;" >
                <h5>Invoice</h5>
                <p>Date : 25 May 2022</p> 
                  <p>Due Date : 25 May 2022</p> 
                  </div>
      </div> -->

      <!-- <div class="row px-3 mt-5">
        <div class="col-md-3  shadow" style="border-radius: 13px;" >
       <h5>Proposal</h5>
       <p>Date : 25 May 2022</p> 
                  <p>Due Date : 25 May 2022</p>
         </div>
         <div class="col-md-3  shadow" style="border-radius: 13px;" >
          <h5>Contract</h5>
          <p>Date : 25 May 2022</p> 
                  <p>Due Date : 25 May 2022</p> 
             </div>
             <div class="col-md-3  shadow" style="border-radius: 13px;" >
              <h5>Project Type : <?php echo $project->type ?></h5> 
              <p>Date : 25 May 2022</p> 
                  <p>Due Date : 25 May 2022</p>
                 </div>
                 <div class="col-md-3  shadow" style="border-radius: 13px;" >
                  <h5>Category : <?php echo $project->category_id ?></h5>
                  <p>Date : 25 May 2022</p> 
                  <p>Due Date : 25 May 2022</p>
                     </div>
         </div> -->
		 <input type="hidden" name="project_id" value="<?php echo $project->project_id?>">
				
					<div class="form-group">
						<label for="exampleInputEmail1"><h6 class="card-title mg-b-1" style="margin-top:1px;">Project Name</h6></label>
						<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
							name="name" placeholder="Enter Name" style="border-radius:10px" value="<?php echo $project->name ?>" disabled>
					</div>

					<div class="form-group">
						<label for="exampleFormControlTextarea1"><h6 class="card-title mg-b-1" style="margin-top:1px;">Requirement</h6></label>
						<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
							placeholder="Enter Requirement" style="border-radius:10px" disabled name="requirement"><?php echo $project->requirement?></textarea>
					</div>

					<div class="row">
						<div class="col-md-4">
							<div class="form-group ">
								<label for="exampleFormControlTextarea1"><h6 class="card-title mg-b-1" style="margin-top:1px;">Estimated Budget(optional)</h6></label>
								<textarea class="form-control " disabled id="exampleFormControlTextarea1" rows="3"
									placeholder="Enter Budget" style="border-radius:10px"
									name="estimated_budget"><?php echo $project->estimated_budget?></textarea>
							</div>
						</div>
      
						<div class="col-md-3 px-5 mx-0">
							<label for="exampleInputEmail1"><h6 class="card-title mg-b-1" style="margin-top:1px;">End date</h6></label>
							
							<div class="form-check">

								<label class="form-check-label">

									<input type="radio" disabled class="form-check-input" name="due_date_type" <?php if(($project->end_date)=='To be decided') {echo "checked";}?> value="To be decided" onclick="check1()">To be
									decided
								</label>
							</div>
							<div class="form-check">
								<label class="form-check-label">
									<input type="radio" disabled class="form-check-input" name="due_date_type"  <?php if(($project->end_date)=="Specific Date") {echo "checked";}?> onclick="check()"
										value="Specific Date"  id="sepcic_data">Specific Date
								</label>
								
							</div>
							
							<div class=" mt-1">
								<input type="text" disabled class="form-control" placeholder="Choose date" id="datepicker5" 
									name="specific_date_value" style="border-radius:10px;display:none;" value="<?php echo $project->date?>">
							</div>

						</div>
						<div class="col-md-3">
							<label for="exampleInputEmail1"><h6 class="card-title mg-b-1" style="margin-top:1px;">Type</h6></label>
							<div class="form-check">
								<label class="form-check-label">
									<input type="radio" disabled class="form-check-input" name="type" <?php if(($project->type)=='Recurring Project') {echo "checked";}?>
										value="Recurring Project">Recurring Project
								</label>
							</div>
							<div class="form-check">
								<label class="form-check-label">
									<input type="radio" disabled class="form-check-input" name="type" value="Not Sure" <?php if(($project->type)=='Not Sure') {echo "checked";}?>>Not Sure
								</label>
							</div>
							<div class="form-check">
								<label class="form-check-label">
									<input type="radio" disabled class="form-check-input" name="type" value="On Going" <?php if(($project->type)=='On Going') {echo "checked";}?>>On Going 
								</label>
							</div>
						</div>
					</div>
					<h6 class="card-title mg-b-1" style="margin-top:1px;">Category</h6>
					<div class="row mt-2 mb-5">
						<?php foreach ($items as $item){?>

						<div class="col-md-2">
							<div class="form-check">

								<input type="radio" disabled class="form-check-input" name="category_id" <?php if(($project->category_id) == $item->name) {echo "checked";}?> value="<?php echo $item->name?>"><?php echo $item->name?>

							</div>
						</div>
						<?php } ?>

					</div>
					</div>
    
				 <div class=" mt-5 card card-projects card-task-one dashCardHover mx-4" style="border-radius: 8px;margin-bottom:2rem !important;padding-bottom:-3rem;" >
						<!-- <form action="" method="post" enctype="multipart/form-data" class="form-horizontal"> -->
						
						<div class="card-header mb-3 bg-transparent pd-l-15 pd-r-0" style="margin-bottom:-0.1rem;">
									<h6 class="card-title mg-b-0" style="margin-top:1px;margin-bottom:-6px;">Project Requirements</h6>
									<!-- <nav class="nav">
									<a href="" class="link-gray-500"><i data-feather="help-circle" class="svg-16"></i></a>
									<a href="" class="link-gray-500"><i data-feather="more-vertical" class="svg-16"></i></a>
									</nav> -->
              	
								</div>
								<div class="card-body px-3 mb-5">

		  <?php echo $project->requirement?>
     
     </div>

    </div><!-- component-section -->
    
       

			

		<div class=" mt-5 card card-projects card-task-one dashCardHover mx-4" style="border-radius: 8px;margin-bottom:2rem !important;padding-bottom:-3rem;" >
						<!-- <form action="" method="post" enctype="multipart/form-data" class="form-horizontal"> -->
						
						<div class="card-header mb-3 bg-transparent pd-l-15 pd-r-0" style="margin-bottom:-0.1rem;">
									<h6 class="card-title mg-b-0" style="margin-top:1px;margin-bottom:-6px;">Required Skills</h6>
									<!-- <nav class="nav">
									<a href="" class="link-gray-500"><i data-feather="help-circle" class="svg-16"></i></a>
									<a href="" class="link-gray-500"><i data-feather="more-vertical" class="svg-16"></i></a>
									</nav> -->
              	
								</div>
								<div class="card-body px-3 mb-5">

									<?php foreach($skills as $key => $value){?>

										<span class="badge badge-pill badge-info py-2 " style="background-color:#36b8b;font-size:12px;margin-right:0.2rem;"><?php echo $value?></span>
									
						<?php	} ?>
		  <!-- <?php echo $project->required_skills?> -->
         </div>
      </div>

		
      <div class=" mt-5 card card-projects card-task-one dashCardHover mx-4 " style="border-radius: 8px;margin-bottom:2rem !important;padding-bottom:-3rem;" >
						<!-- <form action="" method="post" enctype="multipart/form-data" class="form-horizontal"> -->
						
						<div class="card-header mb-3 bg-transparent pd-l-15 pd-r-0" style="margin-bottom:-0.1rem;">
									<h6 class="card-title mg-b-0" style="margin-top:1px;margin-bottom:-6px;">Services</h6>
									<!-- <nav class="nav">
									<a href="" class="link-gray-500"><i data-feather="help-circle" class="svg-16"></i></a>
									<a href="" class="link-gray-500"><i data-feather="more-vertical" class="svg-16"></i></a>
									</nav> -->
              	
								</div>
		 
			<div class="card-body px-3 mb-5">
				<?php foreach($service as $key => $value){?>
			
					<span class="badge badge-pill badge-secondary py-2 " style="background-color:#36b8b;font-size:12px;margin-right:0.2rem;"><?php echo $value?></span>
		<?php 		} ?>
         </div>
      </div>
			

     
      <div class=" mt-5 card card-projects card-task-one dashCardHover mx-4" style="border-radius: 8px;margin-bottom:2rem !important;padding-bottom:-3rem;" >
						<!-- <form action="" method="post" enctype="multipart/form-data" class="form-horizontal"> -->
						
						<div class="card-header mb-3 bg-transparent pd-l-15 pd-r-0" style="margin-bottom:-0.1rem;">
									<h6 class="card-title mg-b-0" style="margin-top:1px;margin-bottom:-6px;">Packages</h6>
									<!-- <nav class="nav">
									<a href="" class="link-gray-500"><i data-feather="help-circle" class="svg-16"></i></a>
									<a href="" class="link-gray-500"><i data-feather="more-vertical" class="svg-16"></i></a>
									</nav> -->
              	
								</div>
								<div class="card-body px-3 mb-5">
					<?php foreach($package as $key => $value){ ?>
						<span class="badge badge-pill badge-dark py-2 " style="background-color:#36b8b;font-size:12px;margin-right:0.2rem;"><?php echo $value?></span>
				<?php 	}?>
		  <!-- <?php echo $project->packages?> -->
         </div>
      </div>

	  <div class=" mt-5 card card-projects card-task-one dashCardHover mx-4" style="border-radius: 8px;margin-bottom:2rem !important;padding-bottom:-3rem;" >
						<!-- <form action="" method="post" enctype="multipart/form-data" class="form-horizontal"> -->
						
						<div class="card-header bg-transparent pd-l-15 pd-r-0" style="margin-bottom:-0.1rem;">
									<h6 class="card-title mg-b-0" style="margin-top:1px;margin-bottom:-6px;">Milestones</h6>
									<!-- <nav class="nav">
									<a href="" class="link-gray-500"><i data-feather="help-circle" class="svg-16"></i></a>
									<a href="" class="link-gray-500"><i data-feather="more-vertical" class="svg-16"></i></a>
									</nav> -->
              	
								</div>
								<div class="card-body  mb-5">

								<div class="controls">
										<div class="entry input-group upload-input-group">
											<!-- <form name="add_name" id="add_name"> -->
												<div class="table-responsive">
													<table class="table" id="dynamic_field2">
														<tbody>
															<tr name="milestone_tr[]">
																<td> <input type="text" name="milestone_name[]" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name" style="border-radius:10px"></td>
																<td><input type="text" name="milestone_weight[]" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Weight" style="border-radius:10px"></td>
																<td><input type="text" name="milestone_progress[]" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Progress" style="border-radius:10px"></td>
																<td><input type="text" name="milestone_description[]" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Description" style="border-radius:10px"></td>
                              									<td><input type="text" name="start_date[]" class="form-control" placeholder="Start date" id="datepicker6"  style="border-radius:10px;"></td>
																<td><input type="text" name="end_date[]" class="form-control" placeholder="End date" id="datepicker7"  style="border-radius:10px;"></td>
																<td><input type="text" name="amount[]" class="form-control calc" id="milestone_amount" aria-describedby="emailHelp" placeholder="Amount" style="border-radius:10px"></td>
																<td><button type="button" name="add" id="add3" class="btn btn-success"><i class="fa fa-plus"></button></td>
															</tr>
														<tbody>
													</table>
													<!-- <input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" /> -->
												</div>
											<!-- </form> -->
										</div>

									</div>
					 
      </div>
					</div>
      <div class=" mt-5 card card-projects card-task-one dashCardHover mx-4" style="border-radius: 8px;margin-bottom:2rem !important;padding-bottom:-3rem;" >
						<!-- <form action="" method="post" enctype="multipart/form-data" class="form-horizontal"> -->
						
						<div class="card-header bg-transparent pd-l-15 pd-r-0" style="margin-bottom:-0.1rem;">
									<h6 class="card-title mg-b-0" style="margin-top:1px;margin-bottom:-6px;">Milestones</h6>
									<!-- <nav class="nav">
									<a href="" class="link-gray-500"><i data-feather="help-circle" class="svg-16"></i></a>
									<a href="" class="link-gray-500"><i data-feather="more-vertical" class="svg-16"></i></a>
									</nav> -->
              	
								</div>
								<div class="card-body  mb-5">
        <table id="example1" class="table table5">
          <thead>
            <tr>
              <!-- <th class="wd-9p"><div class="custom-control custom-checkbox" style="border-radius: 8px;">
                <input type="checkbox" class="custom-control-input" id="customCheck1" >
                <label class="custom-control-label" for="customCheck1"></label>
              </div></th> -->
              <th class="wd-15p">Name </th>
              <th class="wd-15p">Weight</th>
              <th class="wd-15p">Progress</th>
              <th class="wd-15p">Description</th>
              <th class="wd-15p">Start Date</th>
              <th class="wd-15p">End Date</th>
              
            </tr>
          </thead>
          <tbody>
           <?php  foreach($milestones as $item){?>
            <tr >
              <!-- <td><div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1"></label>
              </div></td> -->
              <td><?php echo $item->milestone_name?></td>
              <td><?php echo $item->milestone_weight?></td>
							<td><div class="progress" style="width:100px;">
                <div class="progress-bar" role="progressbar" style="width:<?php echo $item->milestone_progress?>px;" aria-valuenow="<?php echo $item->milestone_progress?>" aria-valuemin="0" aria-valuemax="100"><?php echo $item->milestone_progress?></div>
              </div></td>
							<td><?php echo $item->milestone_description?></td>
              <td><?php echo $item->start_date?></td>
              <td><?php echo $item->end_date?></td>
             
              <!-- <td><span class="badge badge-pill badge-primary"><?php echo $initial ?></span></td>
              <td>$90,560</td> -->
              
            </tr>
			<?php } ?>
          
           
           
            
          </tbody>
        </table>
					 
      </div>
		   </div>

	  <div class=" mt-5 card card-projects card-task-one dashCardHover mx-4" style="border-radius: 8px;margin-bottom:2rem !important;padding-bottom:-3rem;" >
						<!-- <form action="" method="post" enctype="multipart/form-data" class="form-horizontal"> -->
						
						<div class="card-header bg-transparent pd-l-15 pd-r-0" style="margin-bottom:-0.1rem;">
									<h6 class="card-title mg-b-0" style="margin-top:1px;margin-bottom:-6px;">Milestones</h6>
									<!-- <nav class="nav">
									<a href="" class="link-gray-500"><i data-feather="help-circle" class="svg-16"></i></a>
									<a href="" class="link-gray-500"><i data-feather="more-vertical" class="svg-16"></i></a>
									</nav> -->
              	
								</div>
								
								<div class="card-body">
								<div class="entry1 input-group upload-input-group">
								
								<?php
													$i= 1;
													foreach($images as $key => $value){?>
													
													<div class="card-deck mx-1">
														<div class="card" style="width:15rem;height:15rem;margin-right:20px">
															<a href="<?php echo base_url();?>/uploads/<?php echo $value;?>" download="<?php echo $project->name.'_'.$i;?>">
																		<img class="card-img-top " src="<?php echo base_url();?>/uploads/<?php echo $value;?>" alt="Card image cap" style="width:15rem;height:15rem;">
															</a>
														
														</div>
													</div>
															
														
														
													
														
												<?php 	$i++; ?>
												<?php }?>

													</div>

      
		   </div>
		   </div>
      <!-- Submit -->
					
	  <div class="row" style="display:flex;align-items:center;justify-content:center" >

	  
					
      
	  

						
	  <?php if ((($project->add_proposal)== 1) && (($project->approve_project)== 1) && (($project->start_project) == 0) && (($project->end_project) == 0) ) { ?>

<a href="<?php echo base_url();?>index.php/AdminProject/startProject/<?php echo $project->project_id?>"><button type ="button" class="btn btn-submit">Start Project</button></a>
<a href="<?php echo base_url();?>index.php/AdminProject/"></a><button type="submit" class="btn btn-submit mx-2">Cancel</button>

<?php } else if((((($project->start_project) == 1) && ($project->hold_project) == 0) && ($project->end_project) == 0)) {  ?>

<a href="<?php echo base_url();?>index.php/AdminProject/endProject/<?php echo $project->project_id?>"><button type ="button" class="btn btn-submit">End Project</button></a>
<a href="<?php echo base_url();?>index.php/AdminProject/holdProject/<?php echo $project->project_id?>"><button type ="button" class="btn btn-submit mx-2">Hold Project</button></a>
<a href="<?php echo base_url();?>index.php/AdminProject/"></a><button type="submit" class="btn btn-submit">Cancel</button>

<?php } else if (((($project->start_project) == 1) && ($project->hold_project) == 1)) { ?>

<a href="<?php echo base_url();?>index.php/AdminProject/startAgainProject/<?php echo $project->project_id?>"><button type ="button" class="btn btn-submit">Start Again Project</button></a>
<a href="<?php echo base_url();?>index.php/AdminProject/endProject/<?php echo $project->project_id?>"><button type ="button" class="btn btn-submit mx-2">End Project</button></a>

<?php } else if ((($project->add_proposal) == 1) && (($project->approve_project)== 0))  { ?>

<p class="">Approval Pending</p>
<!-- <button type="submit" class="btn btn-primary">Submit Proposal</button> -->
<a href="<?php echo base_url();?>index.php/AdminProject/"></a><button type="submit" class="btn btn-submit">Cancel</button>

<?php } else if ((($project->start_project)== 0) && (($project->end_project) == 1)){?>

<a href="<?php echo base_url();?>index.php/AdminProject/"><button type ="button" class="btn btn-submit">Back</button></a>

<?php } else { ?>
<button type="submit" class="btn btn-submit mt-4">Create Proposal</button>
<a href="<?php echo base_url();?>index.php/AdminProject/"></a><button type="submit" class="btn btn-submit mt-4 mx-2">Cancel</button>
</div>
	  <?php } ?>
</div>

      
	  </form>
      <?php } ?>
					 </div>
		
<!-- Submit -->
		 </div>
</div>
