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
      </div><!-- content-header -->
     
      <div class="pd-b-15" >
      <?php  foreach($items as $item){ ?>

        <div class="card card-hover mx-5 card-projects card-task-one dashCardHover content-card-body mt-4" style="border-radius: 10px;margin-bottom:2rem !important;padding-bottom:3rem;">
        <!--btn-->
				<div class="card-header bg-transparent pd-y-15 pd-l-15 " style="margin-bottom:-0.1rem;">
									<h6 class="card-title mg-b-0 px-1" style="margin-top:1px;margin-bottom:-6px"><?php echo $item->name ?></h6>
									<!-- <nav class="nav">
									<a href="" class="link-gray-500"><i data-feather="help-circle" class="svg-16"></i></a>
									<a href="" class="link-gray-500"><i data-feather="more-vertical" class="svg-16"></i></a>
									</nav> -->
              	
								</div>
       
								<div class="card-body" style="padding:none !important;">

        <div class=" mt-5 card card-projects card-task-one dashCardHover " style="border-radius: 8px;margin-bottom:2rem !important;padding-bottom:-3rem;" >
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
           <?php  foreach($milestones as $milestone){?>
            <tr >
              <!-- <td><div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1"></label>
              </div></td> -->
              <td><?php echo $milestone->milestone_name?></td>
              <td><?php echo $milestone->milestone_weight?></td>
							<td><div class="progress" style="width:100px;">
                <div class="progress-bar" role="progressbar" style="width:<?php echo $milestone->milestone_progress?>px;" aria-valuenow="<?php echo $milestone->milestone_progress?>" aria-valuemin="0" aria-valuemax="100"><?php echo $milestone->milestone_progress?></div>
              </div></td>
							<td><?php echo $milestone->milestone_description?></td>
              <td><?php echo $milestone->start_date?></td>
              <td><?php echo $milestone->end_date?></td>
             
              <!-- <td><span class="badge badge-pill badge-primary"><?php echo $initial ?></span></td>
              <td>$90,560</td> -->
              
            </tr>
			<?php } ?>
          
           
           
            
          </tbody>
        </table>
					 
      </div>
           </div>

      <div class=" mt-5 card card-projects card-task-one dashCardHover" style="border-radius: 8px;margin-bottom:2rem !important;padding-bottom:-3rem;" >
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
              <input type="text" class="form-control" name="duration_no" id="exampleInputEmail1" aria-describedby="emailHelp" disabled placeholder="Duration" style="border-radius:10px" value="<?php echo $item->duration_no?>">
            </div>
            
            <div class="px-4">
              <select class="custom-select m-input " style="border-radius:10px" name="duration_type" disabled>

              <?php 
              
              if($item->duration_type == 1){
                $type = "Month";
              }
              else if($item->duration_type == 2){
                $type="Year";

              }
              else{
                $type="Date";
              }
              ?>
              <option selected><?php echo $type?></option>
              <option value="1">Month</option>
              <option value="2">Year</option>
              <option value="3">Date</option>
            </select></div>
          </div>
          
         
        </div>
        </div><!-- component-section -->
    
        <div class=" mt-5 card card-projects card-task-one dashCardHover" style="border-radius: 8px;margin-bottom:2rem !important;padding-bottom:-3rem;" >
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
            
            <textarea class="form-control" disabled id="exampleFormControlTextarea1" rows="4" style="border-radius: 13px;" name="cover_letter"><?php echo $item->cover_letter?></textarea>
          </div>
      </div>
        </div>
        
        <div class=" mt-5 card card-projects card-task-one dashCardHover " style="border-radius: 8px;margin-bottom:2rem !important;padding-bottom:-3rem;" >
						<!-- <form action="" method="post" enctype="multipart/form-data" class="form-horizontal"> -->
						
						<div class="card-header mb-3 bg-transparent pd-l-15 pd-r-0" style="margin-bottom:-0.1rem;">
									<h6 class="card-title mg-b-0" style="margin-top:1px;margin-bottom:-6px;">Attachments</h6>
									<!-- <nav class="nav">
									<a href="" class="link-gray-500"><i data-feather="help-circle" class="svg-16"></i></a>
									<a href="" class="link-gray-500"><i data-feather="more-vertical" class="svg-16"></i></a>
									</nav> -->
              	
								</div>
								<div class="card-body px-5">
                                
						<!-- <form action="" method="post" enctype="multipart/form-data" class="form-horizontal"> -->
						
						
								<div class="card-body">
								<div class="entry1 input-group upload-input-group">
								
								<?php
													$i= 1;
													foreach($images as $key => $value){?>
													
													<div class="card-deck mx-1">
														<div class="card" style="width:15rem;height:15rem;margin-right:20px">
															<a href="<?php echo base_url();?>/uploads/<?php echo $value;?>" download="<?php echo $item->name.'_'.$i;?>">
																		<img class="card-img-top " src="<?php echo base_url();?>/uploads/<?php echo $value;?>"  style="width:15rem;height:15rem;">
															</a>
														
														</div>
													</div>
															
														
														
													
														
												<?php 	$i++; ?>
												<?php }?>

													</div>

      
		   </div>
		   </div>
                </div>
    
            </div>
            <div class="p-2"><a href="<?php echo base_url();?>index.php/AdminProject/viewProposal"><button type="submit" class="btn btn-primary mt-4 text-start mx-2 px-4" style="border-radius:10px; margin:-140px 0 0 0px ;">Back</button></div>
       
        </div>
     
    
      
  <?php } ?>
        
     
