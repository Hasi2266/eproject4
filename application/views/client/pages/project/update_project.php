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
      
      
    
				 <div class=" mt-5 card card-projects card-task-one dashCardHover " style="border-radius: 8px;margin-bottom:2rem !important;padding-bottom:-3rem;" >
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
    
       

			

		<div class=" mt-5 card card-projects card-task-one dashCardHover " style="border-radius: 8px;margin-bottom:2rem !important;padding-bottom:-3rem;" >
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

		
      <div class=" mt-5 card card-projects card-task-one dashCardHover " style="border-radius: 8px;margin-bottom:2rem !important;padding-bottom:-3rem;" >
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
			
					<span class="badge badge-pill badge-secondary py-2 " style="background-color:#894ddb;font-size:12px;margin-right:0.2rem;"><?php echo $value?></span>
		<?php 		} ?>
         </div>
      </div>
			

     
      <div class=" mt-5 card card-projects card-task-one dashCardHover " style="border-radius: 8px;margin-bottom:2rem !important;padding-bottom:-3rem;" >
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
						<span class="badge badge-pill badge-dark py-2 " style="background-color:#894ddb;font-size:12px;margin-right:0.2rem;"><?php echo $value?></span>
				<?php 	}?>
		  <!-- <?php echo $project->packages?> -->
         </div>
      </div>

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
           <?php  foreach($milestones as $item){?>
            <tr >
              <!-- <td><div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1"></label>
              </div></td> -->
              <td><?php echo $item->milestone_name?></td>
              <td><?php echo $item->milestone_weight?></td>
							<td>
              <div class="progress mt-2" style="height:0.45rem;border-radius:10px">
											<div class="progress-bar bg-<?php if($item->milestone_progress >= 50){echo "green";}else{echo "danger";} ?> wd-<?php echo $item->milestone_progress?>p" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
										</div>	
              <!-- <div class="progress" style="width:100px;">
                <div class="progress-bar" role="progressbar" style="width:<?php echo $item->milestone_progress?>px;" aria-valuenow="<?php echo $item->milestone_progress?>" aria-valuemin="0" aria-valuemax="100"><?php echo $item->milestone_progress?></div>
              </div> -->
            
            </td>
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

      

      
        
		
      <!-- Submit -->
					 </div>
					 <div class="row" style="display:flex;align-items:center;" >
					 <a href="<?php echo base_url();?>index.php/ClientProject"><button type="submit" class="btn btn-submit btn-all text-white btn-med text-center mx-3" style="border-radius:10px;margin-bottom:-50px;margin-top:-20px;">Back to Projects</button></a><!-- content-body -->
					 </div>
					
      </div>
			
	  <?php } ?>
		

      

      
					 </div>
		
<!-- Submit -->
		 </div>
		 