<div class="content-header content-card-body" >
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
      
        <div class="row ">
          <div class="px-3"style="margin-left:68.5rem;margin-top:0rem;" >
            <a href="<?php echo base_url();?>index.php/ClientProject/cerateProject"><button type="button" class="btn btn-all text-white "style="border-radius: 8px;">+ New Project</button></a>
          </div>
            <!-- <div class="" style="msrgin-top:-1rem">
              <button type="button" class="btn btn-primary text-right py-2"style="border-radius: 8px;">Add to project</button>
            </div> -->
          
        
<!-- my -->

      </div>

      <div class="card card-hover card-projects  card-task-one dashCardHover content-card-body mt-4" style="border-radius: 10px;margin-bottom:2rem !important;padding-bottom:3rem; " >
        <!--btn-->
				<div class="card-header bg-transparent pd-y-15 pd-l-15 pd-r-10" style="margin-bottom:-0.1rem;">
									<h6 class="card-title mg-b-0 px-1" style="margin-top:1px;margin-bottom:-6px">Invoices</h6>
									<!-- <nav class="nav">
									<a href="" class="link-gray-500"><i data-feather="help-circle" class="svg-16"></i></a>
									<a href="" class="link-gray-500"><i data-feather="more-vertical" class="svg-16"></i></a>
									</nav> -->
              	
								</div>
       
								<div class="card-body">

        <table id="example1" class=" table " style="border-radius:10px ;font-size:13px;">
          <thead>
            <tr>
              <!-- <th class="wd-12p"><div class="custom-control custom-checkbox" style="border-radius: 8px;">
                <input type="checkbox" class="custom-control-input" id="customCheck" >
                <label class="custom-control-label" for="customCheck1"></label>
              </div></th> -->
				<th></th>
              <th class="wd-20p"><span style="margin-left:-2rem;">Invoice Number</span></th>
              <th class="wd-20p">Project Name</th>
              <th class="wd-12p">Date</th>
              <th class="wd-12p">Total Amount</th>
              <th class="wd-12p">Status</th>
			  <th class="wd-15p">Action</th>
              <!-- <th class="wd-12p">Due date</th> -->
            </tr>
          </thead>
          <tbody>
					<?php foreach($items as $item){ ?>

						<!-- <?php 
							if($item->status == 2){
								$status = "In Progress";
							}
							else {
								$status = "Pending";
							}
									// if((($item->project_status) == 1)){
									// 	$status = 'Project Submitted ';
									// }
									// else if(($item->project_status) == 5){
									// 	$status = 'Prooposal Submitted';
									// }
									// else if(($item->project_status) == 2){
									// 	$status = 'Project Approved';
									// }
									// else if(($item->project_status) == 3){
									// 	$status = 'In Progress ';
									// }	
									// else if(($item->project_status) == 4){
									// 	$status = 'Project Hold';
									// }
									// else{
									// 	$status = 'Project Completed';
									// }	

									if(($item->end_date)== 'Specific Date'){
										$due_date = $item->date;
									}
									else{
										$due_date = $item->end_date;
									}

								?> -->

				<tr  style="cursor:pointer;">
				
				<!-- <td><div class="custom-control custom-checkbox">
					<input type="checkbox" class="custom-control-input" id="customCheck1">
					<label class="custom-control-label" for="customCheck1"></label>
				</div></td> -->
				<td></td>
				<td><span style="margin-left:-2rem;"><?php echo $item->invoice_no?></span></td>
				<td><?php echo $item->name?></td>
				<td><?php echo $item->invoice_created_date?></td>
				<td><?php echo $item->total_amount?></td>
				<td><span class="badge badge-pill badge-info"><?php echo $status?></span></td>
			
				<td>
				<div class="dropdown">
													<button class="btn  dropdown-toggle1" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border-radius: 10px;margin-left:-1rem;">
														<i class="fa fa-ellipsis-h" aria-hidden="true"></i>
													</button>
													<div class="dropdown-menu drop-b tx-14" aria-labelledby="dropdownMenuButton">
														
													<!-- <?php 
														if ((($item->add_proposal)== 0) && (($item->approve_project)== 0) && (($item->start_project) == 0) && (($item->end_project) == 0) && (($item->add_invoice) == 0) ){?>

															<a class="dropdown-item" href="<?php echo base_url();?>index.php/ClientProject/editItem/<?php echo $item->project_id?>">Edit Project</a>

													<?php } ?> -->
													
													
													<a class="dropdown-item" href="<?php echo base_url()?>index.php/ClientInvoice/updateInvoice/<?php echo $item->invoice_id ?>">View Invoice</a>
											
												</div>
				</td>
					
					
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
