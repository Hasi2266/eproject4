<div class="content-header ">
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
     
      <div class="content-card-body" >
      <?php  foreach($projects as $project){ ?>
        <div class="card card-hover card-projects card-task-one dashCardHover content-card-body mt-4" style="border-radius: 10px;margin-bottom:2rem !important;padding-bottom:1rem; " >
        <!--btn-->
				<div class="card-header bg-transparent pd-y-15 pd-l-15 " style="margin-bottom:-0.1rem;">
									<h6 class="card-title mg-b-0 px-1" style="margin-top:1px;margin-bottom:-6px"><?php echo $project->name ?></h6>
									<!-- <nav class="nav">
									<a href="" class="link-gray-500"><i data-feather="help-circle" class="svg-16"></i></a>
									<a href="" class="link-gray-500"><i data-feather="more-vertical" class="svg-16"></i></a>
									</nav> -->
              	
								</div>
       
					<div class=" mt-5 card card-projects card-task-one dashCardHover mx-4" style="border-radius: 8px;margin-bottom:2rem !important;padding-bottom:-3rem;" >
						<!-- <form action="" method="post" enctype="multipart/form-data" class="form-horizontal"> -->
						
						<div class="card-header mb-3 bg-transparent pd-l-15 pd-r-0" style="margin-bottom:-0.1rem;">
									<h6 class="card-title mg-b-0" style="margin-top:1px;margin-bottom:-6px;">Milestones</h6>
									<!-- <nav class="nav">
									<a href="" class="link-gray-500"><i data-feather="help-circle" class="svg-16"></i></a>
									<a href="" class="link-gray-500"><i data-feather="more-vertical" class="svg-16"></i></a>
									</nav> -->
              	
								</div>
								<div class="card-body px-3 mb-5">
       
                <form class="all-form" action="<?php echo base_url();?>index.php/AdminProject/saveProposal" method="post" enctype="multipart/form-data">
                  
                
                
                
                <input type="hidden" name="project_id" value="<?php echo $project->project_id ?>">
                <input type="hidden" name="client_id" value="<?php echo $project->client_id ?>">

			         <?php } ?>

              <div class=" px-5 pt-5 pb-5" style="border-radius: 13px;" >
                  <div class="row form-group">
                      <div class="col-12 col-md-12">
                        <div class="control-group" id="fields">
                          <!-- <h5 id="section2" class="mb-4">Mieloston</h5> -->
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
                                          
                                          <td><button type="button" name="add" id="add3" class="btn btn-all text-white"><i class="fa fa-plus"></button></td>
                                        </tr>
                                      <tbody>
                                    </table>
                                    <!-- <input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" /> -->
                                  </div>
                                <!-- </form> -->
                              </div>

                            </div>
                            <div class="d-flex flex-row-reverse">
                                  <div class="p-2" style="margin-left:140px;">
                                  <input type="text" id="total" required name="milestone_total" class="form-control"  style="border-radius:10px">
                            </div>
                                  
                            <div class="p-2" >Total</div>
                        </div>
                          <!-- 
                            <button class="btn btn-primary mt-2" style="border-radius:10px">Upload</button> -->

                        </div>


                      </div>

                  </div>
              </div>
      </div>
      </div>

      <div class=" mt-5 card card-projects card-task-one dashCardHover mx-4" style="border-radius: 8px;margin-bottom:2rem !important;padding-bottom:-3rem;" >
						<!-- <form action="" method="post" enctype="multipart/form-data" class="form-horizontal"> -->
						
						<div class="card-header mb-3 bg-transparent pd-l-15 pd-r-0" style="margin-bottom:-0.1rem;">
									<h6 class="card-title mg-b-0" style="margin-top:1px;margin-bottom:-6px;">Project Duration</h6>
									<!-- <nav class="nav">
									<a href="" class="link-gray-500"><i data-feather="help-circle" class="svg-16"></i></a>
									<a href="" class="link-gray-500"><i data-feather="more-vertical" class="svg-16"></i></a>
									</nav> -->
              	
								</div>
								<div class="card-body px-3 ">
        </div>
        <div class="form-group mx-5 mb-5" >
          <div class="d-flex flex-row" style="margin-top:-20px;">
            <div class="">
              <input type="text" class="form-control" name="duration_no" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Duration" style="border-radius:10px">
            </div>
            
            <div class="px-4">
              <select class="custom-select m-input " style="border-radius:10px" name="duration_type">
              <option selected>duration</option>
              <option value="1">Month</option>
              <option value="2">Year</option>
              <option value="3">Date</option>
            </select></div>
          </div>
          
         
        </div>
        </div><!-- component-section -->
    
        <div class=" mt-5 card card-projects card-task-one dashCardHover mx-4" style="border-radius: 8px;margin-bottom:2rem !important;padding-bottom:-3rem;" >
						<!-- <form action="" method="post" enctype="multipart/form-data" class="form-horizontal"> -->
						
						<div class="card-header mb-3 bg-transparent pd-l-15 pd-r-0" style="margin-bottom:-0.1rem;">
									<h6 class="card-title mg-b-0" style="margin-top:1px;margin-bottom:-6px;">Cover Letter</h6>
									<!-- <nav class="nav">
									<a href="" class="link-gray-500"><i data-feather="help-circle" class="svg-16"></i></a>
									<a href="" class="link-gray-500"><i data-feather="more-vertical" class="svg-16"></i></a>
									</nav> -->
              	
								</div>
								<div class="card-body px-5">
          <div class="form-group">
            
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" style="border-radius: 13px;" name="cover_letter"></textarea>
          </div>
      </div>
        </div>
        
        <div class=" mt-5 card card-projects card-task-one dashCardHover mx-4" style="border-radius: 8px;margin-bottom:2rem !important;padding-bottom:-3rem;" >
						<!-- <form action="" method="post" enctype="multipart/form-data" class="form-horizontal"> -->
						
						<div class="card-header mb-3 bg-transparent pd-l-15 pd-r-0" style="margin-bottom:-0.1rem;">
									<h6 class="card-title mg-b-0" style="margin-top:1px;margin-bottom:-6px;">Cover Letter</h6>
									<!-- <nav class="nav">
									<a href="" class="link-gray-500"><i data-feather="help-circle" class="svg-16"></i></a>
									<a href="" class="link-gray-500"><i data-feather="more-vertical" class="svg-16"></i></a>
									</nav> -->
              	
								</div>
								<div class="card-body px-5">
            <div class="row form-group">
                <div class="col-12 col-md-12">
                    <div class="control-group" id="fields">
                      <h5 id="section2" class="mb-4">Attachment</h5>
                        <div class="controls1">
                            <div class="entry1 input-group upload-input-group">
														<div class="wd-md-100p">
											<div class="custom-file">
												<input type="file" name="images[]" class="custom-file-input" id="customFile"  multiple="">
												<label class="custom-file-label" for="customFile" style="border-radius:10px;margin-bottom:10px">Choose file</label>
											</div>
										</div>
															<!-- <input class="form-control" name="images[]" type="file" style="border-radius:10px;" multiple="">  -->
                            </div>
    
                        </div>
                       
    
                    </div>
    
      </div>
                </div>
    
            </div>
    
       
        </div>
     
     
      <div class="d-flex flex-row mx-3">
        <div class="p-2"><button type="submit" class="btn btn-all text-white mt-2 px-4" style="border-radius:10px">Submit Proposal</button></div>
				<!-- <div class="p-2 "><button type="submit" class="btn btn-primary mt-5 mb-5 px-4" style="border-radius:10px" formtarget="_blank">Save As Draft</button></div> -->
       
				</div>

			</form>
			<div class="p-2 mx-5"><a href="<?php echo base_url();?>index.php/AdminProject"><button type="submit" class="btn btn-all text-white px-4" style="border-radius:10px; margin:-88px 0 0 130px ;">Cancel</button></div>
			
		</div>
  
        
     
