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
     
      <div class="pd-x-20" >
         
       
			<div class="card card-hover card-projects card-task-one dashCardHover content-card-body mt-4" style="border-radius: 10px;margin-bottom:2rem !important;padding-bottom:1rem; " >
			<?php  foreach($item as $items){ ?>
			<div class="card-header bg-transparent pd-y-15 pd-l-15 " style="margin-bottom:-0.1rem;">

									<h6 class="card-title mg-b-0 px-1" style="margin-top:1px;margin-bottom:-6px"> <?php if(($items->approve_proposal) == 1) { echo "Approved "; }?> Proposal - <?php echo $items->name ;?></h6>
									<!-- <nav class="nav">
									<a href="" class="link-gray-500"><i data-feather="help-circle" class="svg-16"></i></a>
									<a href="" class="link-gray-500"><i data-feather="more-vertical" class="svg-16"></i></a>
									</nav> -->
              	
								</div>
       
								<div class="card-body" style="padding:none !important;">
	 
			

			 <input type="hidden" name="proposal_id" value="<?php echo $items->proposal_id ?>">


				<div class=" mt-4 card card-projects card-task-one dashCardHover " style="border-radius: 8px;margin-bottom:2rem !important;padding-bottom:-3rem;" >
						<!-- <form action="" method="post" enctype="multipart/form-data" class="form-horizontal"> -->
						
						<div class="card-header bg-transparent pd-l-15 pd-r-0" style="margin-bottom:-0.1rem;">
									<h6 class="card-title mg-b-0" style="margin-top:1px;margin-bottom:-6px;">Milestones</h6>
									<!-- <nav class="nav">
									<a href="" class="link-gray-500"><i data-feather="help-circle" class="svg-16"></i></a>
									<a href="" class="link-gray-500"><i data-feather="more-vertical" class="svg-16"></i></a>
									</nav> -->
								</div>
								
								<div class="card-body  mb-5">
				<table id="example1" class="table " disabled>
						<thead>
							<tr>
								<!-- <th class="wd-9p"><div class="custom-control custom-checkbox" style="border-radius: 8px;">
									<input disabled type="checkbox" class="custom-control-input" id="customCheck1" >
									<label class="custom-control-label" for="customCheck1"></label>
								</div></th> -->
								<th class="wd-15p">Name </th>
								<th class="wd-15p">Weight</th>
								<th class="wd-15p">Progress</th>
								<th class="wd-15p">Description</th>
								<th class="wd-15p">Start Date</th>
								<th class="wd-15p">End Date</th>
								<th class="wd-15p">Amount</th>
								
							</tr>
						</thead>
						<tbody>
						<?php  foreach($milestones as $item){?>
							<tr >
								<!-- <td><div class="custom-control custom-checkbox">
									<input disabled type="checkbox" class="custom-control-input" id="customCheck1">
									<label class="custom-control-label" for="customCheck1"></label>
								</div></td> -->
								<td><?php echo $item->milestone_name?></td>
								<td><?php echo $item->milestone_weight?></td>
								<td>
								<div class="progress mt-2" style="height:0.45rem;border-radius:10px">
											<div class="progress-bar bg-<?php if($item->milestone_progress >= 50){echo "green";}else{echo "danger";} ?> wd-<?php echo $item->milestone_progress?>p" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
										</div>	
								<!-- <div class="progress">
									<div class="progress-bar" role="progressbar" style="width: <?php echo $item->milestone_progress?>%;" aria-valuenow="<?php echo $item->milestone_progress?>" aria-valuemin="0" aria-valuemax="100"><?php echo $item->milestone_progress?></div>
								</div> -->
							</td>
								<td><?php echo $item->milestone_description?></td>
								<td><?php echo $item->start_date?></td>
								<td><?php echo $item->end_date?></td>
								<td><?php echo $item->	milestone_amount?></td>
							
								
							</tr>
					<?php } ?>
							
							
							
								
							</tbody>
					</table>

				<div class="badge badge-pill badge-info py-2 " style="font-size:13px;">Total : Rs. <?php echo $items->	milestone_total_price?></div>
      </div>
						</div>

			<div class=" mt-5 card card-projects card-task-one dashCardHover " style="border-radius: 8px;margin-bottom:2rem !important;padding-bottom:-3rem;" >
						<!-- <form action="" method="post" enctype="multipart/form-data" class="form-horizontal"> -->
						
						<div class="card-header bg-transparent pd-l-15 pd-r-0" style="margin-bottom:-0.1rem;">
									<h6 class="card-title mg-b-0" style="margin-top:1px;margin-bottom:-6px;">Project Duration</h6>
									<!-- <nav class="nav">
									<a href="" class="link-gray-500"><i data-feather="help-circle" class="svg-16"></i></a>
									<a href="" class="link-gray-500"><i data-feather="more-vertical" class="svg-16"></i></a>
									</nav> -->
								</div>
								<div class="card-body  mb-5">
        <div class="form-group">
          <div class="d-flex flex-row">
            <div class="">
              <input type="text" class="form-control" disabled name="duration_no" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Duration" style="border-radius:10px" value="<?php echo $items->duration_no?>"> 
            </div>
            
            <div class=" px-4">
              <select class="custom-select m-input " disabled style="border-radius:10px" name="duration_type" >
              <option selected><?php echo $duration_type?></option>
              <option value="1">Month</option>
              <option value="2">Year</option>
              <option value="3">Date</option>
            </select></div>
          </div>
          
						</div>
        </div>
        </div><!-- component-section -->
    
				<div class=" mt-5 card card-projects card-task-one dashCardHover " style="border-radius: 8px;margin-bottom:2rem !important;padding-bottom:-3rem;" >
						<!-- <form action="" method="post" enctype="multipart/form-data" class="form-horizontal"> -->
						
						<div class="card-header bg-transparent pd-l-15 pd-r-0" style="margin-bottom:-0.1rem;">
									<h6 class="card-title mg-b-0" style="margin-top:1px;margin-bottom:-6px;">Cover Letter</h6>
									<!-- <nav class="nav">
									<a href="" class="link-gray-500"><i data-feather="help-circle" class="svg-16"></i></a>
									<a href="" class="link-gray-500"><i data-feather="more-vertical" class="svg-16"></i></a>
									</nav> -->
								</div>
								<div class="card-body  mb-5">
          <div class="form-group">
            
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" style="border-radius: 13px;" name="cover_letter" disabled><?php echo $items->	cover_letter?></textarea>
          </div>

        </div>
						</div>

				<div class=" mt-5 card card-projects card-task-one dashCardHover " style="border-radius: 8px;margin-bottom:2rem !important;padding-bottom:-3rem;" >
						<!-- <form action="" method="post" enctype="multipart/form-data" class="form-horizontal"> -->
						
						<div class="card-header bg-transparent pd-l-15 pd-r-0" style="margin-bottom:-0.1rem;">
									<h6 class="card-title mg-b-0" style="margin-top:1px;margin-bottom:-6px;">Attachments</h6>
									<!-- <nav class="nav">
									<a href="" class="link-gray-500"><i data-feather="help-circle" class="svg-16"></i></a>
									<a href="" class="link-gray-500"><i data-feather="more-vertical" class="svg-16"></i></a>
									</nav> -->
								</div>
								<div class="card-body  mb-5">
						<!-- <form action="" method="post" enctype="multipart/form-data" class="form-horizontal"> -->
						<div class="row form-group">
							<div class="col-12 col-md-12">
								<div class="control-group" id="fields">
									<!-- <h5 id="section2" class="mb-4">Attachment</h5> -->
									<div class="controls1">
										<div class="entry1 input-group upload-input-group">
											
										
												
										<div class="card-deck">
								

												<?php
														// if(empty($imgaes)){
														// 	echo 'no';
														// }
														// die;
												if(empty($imgaes)){
													// echo 'hi';
													$img = "";
													$href= "";
													?>
													<span class="badge badge-pill badge-danger mx-2 pt-1 " style="font-size:13px;margin-bottom:50px;margin-bottom:-2.5rem;">There is no attachemet in this project</span>
													<input class="form-control" name="images[]" type="file" style="border-radius:10px;" multiple="" value="1">


													<?php }
													else{

													$i= 1;
													foreach($images as $key => $value){
														$img = "/uploads/$value";
														$href= "/uploads/$value";

														?>
													
														<div class="card-deck">
															<div class="card" style="width:15rem;height:15rem;margin-right:20px">
																<a href="<?php echo base_url();?>/uploads/<?php echo $href;?>" download="<?php echo $items->proposal_id.'_'.$i;?>">
																			<img class="card-img-top " src="<?php echo base_url();?>/uploads/<?php echo $img;?>" alt="Card image cap" style="width:15rem;height:15rem;border-radius:10px;">
																</a>


															</div>
														</div>
													</div>		
												<?php 	$i++; ?>
												<?php }}?>
												
											<!-- <button class="btn btn-upload btn-success btn-add1 " style="margin-left: 24px;"
													type="button">
													<i class="fa fa-plus"></i>
												</button> -->
										

									</div>
									<!-- <button class="btn btn-primary mt-2" style="border-radius:10px">Upload</button> -->

								</div>
													</div>

							</div>

						</div>

						<!-- </form>Attachment -->
					</div>
     
     
      

													</div>
													</div>
													<div class="row mx-2" style="display:flex;align-items:center;">

													<?php 

														if(($items->approve_proposal)== 1){
?>
																<a href="<?php echo base_url();?>index.php/ClientProject/Proposal">	<button type="button" class="btn btn-all text-white mt-3 mb-3 btn-submit">Back to Proposals</button></a>
													
													<?php			}else {
													?>
														<a href="<?php echo base_url();?>index.php/ClientProject/giveApprove/<?php echo $items->project_id;?>"><button type="submit" class="btn btn-all text-white  mt-3 mb-3 btn-submit" >Approve Project</button></a> 
														<a href="<?php echo base_url();?>index.php/ClientProject/Proposal"><button type="button" class="btn btn-all mt-3 mb-4 btn-submit text-white mx-3 ">Cancel</button>
													
													<?php } ?>

												
        
      </div>
		
			<?php } ?>
</div>
  
        
     
