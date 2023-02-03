<div class="content-header content-card-body">
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
     
      <div class="pd-x-20 pd-b-15" >
      
        <div class="row">
					<div class="px-3 newbtnProject"style="margin-left:68.5rem;margin-top:0rem;" >
          <!-- btn-all -->
            <a href="<?php echo base_url();?>index.php/ClientProject/cerateProject"><button type="button" class="btn btn-all btn-dark text-white   " style="border-radius: 8px;">+ New Project</button></a>
          </div>
            <!-- <div class="">
              <button type="button" class="btn btn-primary text-right  py-2"style="border-radius: 8px;">Add to project</button>
            </div> -->
          
        
<!-- my -->

        

      </div>

      <div class="card card-hover card-projects  card-task-one dashCardHover content-card-body mt-4" style="border-radius: 10px;margin-bottom:2rem !important;padding-bottom:3rem; " >
        <!--btn-->
				<div class="card-header bg-transparent pd-y-15 pd-l-15 pd-r-10" style="margin-bottom:-0.1rem;">
									<h6 class="card-title mg-b-0 px-1" style="margin-top:1px;margin-bottom:-6px">Proposal</h6>
									<!-- <nav class="nav">
									<a href="" class="link-gray-500"><i data-feather="help-circle" class="svg-16"></i></a>
									<a href="" class="link-gray-500"><i data-feather="more-vertical" class="svg-16"></i></a>
									</nav> -->
              	
								</div>
       <!-- <h3 class="text-dark  mb-4">Proposal</h3> -->
       <div class="card-body">
        <table id="example1" class=" table" style="border-radius:10px ;font-size:13px;">
          <thead>
            <tr>
			<!-- <th class="wd-9p"><div class="custom-control custom-checkbox" style="border-radius: 8px;">
                <input type="checkbox" class="custom-control-input" id="customCheck1" >
                <label class="custom-control-label" for="customCheck1"></label>
              </div></th> -->
              <th></td>
            <th><span style="margin-left:-1.5rem;">Project</span></th>
            <th>Proposal Created Date</th>
            <th class="wd-13p">Status</th>
            <!-- <th class="wd-14p">Invoice</th> -->
            <th class="wd-15p">Progress</th>
            <th  class="wd-13p">Due date</th>
            <th class="wd-15p">Action</th>
            </tr>
          </thead>
          <tbody>
		  <?php foreach($proposals as $proposal){ 
        
        if(($proposal->end_date)== 'Specific Date'){
          $due_date = $proposal->date;
        }
        else{
          $due_date = $proposal->end_date;
        }
        
        ?>

				<tr style="cursor:pointer;">
				
				<!-- <td><div class="custom-control custom-checkbox">
					<input type="checkbox" class="custom-control-input" id="customCheck1">
					<label class="custom-control-label" for="customCheck1"></label>
				</div></td> -->
				<td></td>
				<td style="text-transform: capitalize;"><span style="margin-left:-1.5rem;"><?php echo $proposal->name?></span></td>
				<td><?php echo $proposal->proposal_created_date?></td>
				<?php 
				
						if(($proposal->proposal_status) == 1){
							
								$status = "Proposal Submitted";

						}else if(($proposal->proposal_status) == 2){
							$status = "Proposal Approved";
						}
							?>

							<td><span class="badge badge-pill badge-info" style="background-color:#36b8b;"><?php echo $status;?></span></td>
								
					
					
					<!-- <td class="due"><?php echo $proposal->proposal_created_date?></td> -->
					<td><div class="progress mt-2" style="height:0.45rem;border-radius:10px">
											<div class="progress-bar bg-<?php if($proposal->project_progress >= 50){echo "green";}else{echo "danger";} ?> wd-<?php echo $proposal->project_progress?>p" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
										</div>		</td>
					<td class="due" style="text-transform: capitalize;"><?php echo $due_date?></td>
					<td>	<div class="dropdown">
													<button class="btn  dropdown-toggle1" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border-radius: 10px;margin-left:-1rem;">
														<i class="fa fa-ellipsis-h" aria-hidden="true"></i>
													</button>
													<div class="dropdown-menu drop-b tx-14" aria-labelledby="dropdownMenuButton">
														
													
													
													
													<a class="dropdown-item" href="<?php echo base_url()?>index.php/ClientProject/viewProposal/<?php echo $proposal->proposal_id ?>">View Proposal</a>
											
												</div>
												</div></td>
					<!-- <td>24 May 2022</td> -->
					
				</tr>
				
           <?php } ?> 
           
            
          </tbody>
        </table>
					</div>
      </div><!-- component-section -->


      </div><!-- content-body -->
      

      <!-- <div class="content-footer">
        &copy; 2019. All Rights Reserved. Created by <a href="http://themepixels.me" target="_blank">ThemePixels</a>
      </div> -->
.
