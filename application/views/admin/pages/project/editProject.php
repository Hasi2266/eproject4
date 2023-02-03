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
		<form action="<?php echo base_url();?>index.php/AdminProject/updateProject" method="post" enctype="multipart/form-data">
			
			<div class="card card-hover card-projects card-task-one dashCardHover content-card-body mt-4" style="border-radius: 10px;margin-bottom:2rem !important;padding-bottom:3rem; " >
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
					<h6 class="mg-b-1" style="margin-top:1px;">Category</h6>
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
      <div class="form-group mx-4">
						<label for="exampleInputEmail1"><h6 class="card-title mg-b-1" style="margin-top:1px;">Project Progress</h6></label>
						<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
							name="progress" placeholder="Enter Name" style="border-radius:10px" value="<?php echo $project->project_progress ?>" >
					</div>

					<div class="all-btns" > 
							<button type ="submit" class="btn btn-all btn-submit mt-4 mx-4 text-white mb-3">Update Project</button>
                                <a href="<?php echo base_url();?>index.php/AdminProject"><button type="button" class="btn btn-all btn-submit btn-dark text-white btn-new mt-4 px-5 mb-3" style="margin-left:-0.6rem" >Back</button></a>
                            </div>

      
		</div>
      
		   </div>

	 
      
		   </div>
		   </div>
      <!-- Submit -->
					
    
	 
     
                   
      
	  </form>
      <?php } ?>
					 </div>
		
<!-- Submit -->
		 </div>
</div>
