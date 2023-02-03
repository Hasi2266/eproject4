<style>
  .switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
</style>

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
      <form action="<?php echo base_url();?>index.php/AdminInvoice/submitInvoice" method="post" enctype="multipart/form-data">
			<?php foreach ($projects as $project){?>
			
        <input type="hidden" name="project_id" value="<?php echo $project->project_id ?>">
        <input type="hidden" name="client_id" value="<?php echo $project->client_id ?>">
        <input type="hidden" name="total_amount" value="<?php echo $project->milestone_total_price ?>">

								<div class="card-body" style="padding:none !important;">
	 
     
                <?php 
									if(($project->project_status) == 1){
										$status = 'Submitted';
									}
									else if(($project->project_status) == 2){
										$status = 'Confirmed ';
									}
									else if(($project->project_status) == 3){
										$status = 'In Progress ';
									}	
									else if(($project->project_status) == 4){
										$status = 'Hold ';
									}
									else{
										$status = 'Completed';
									}		

									if(($project->end_date)== 'Specific Date'){
										$due_date = $project->date;
									}
									else{
										$due_date = $project->end_date;
									}

								?>

            <div class="row">
                <div class="col-md-6">

                <div class="row">
                    
                    <div class="col-md-6">
                            <div class="card invoice-card " style="height:7.5rem">
                               
                                <div class="card-body mx-1">
                                    <h5 class="invoice-card-title">Status - <?php echo $status?></h5>
                                    
                                    <div class="card-content-invoice">
                                        <p class="card-text">Date: <span class="invoice-card-value"><?php echo $project->project_created_date?></span></p>
                                        <p class="card-text">Due Date: <span class="invoice-card-value"><?php echo $due_date?></span></p>
                                    </div>
                                    
                                </div>
                                
                        </div>
                    </div>
                    <div class="col-md-6">
                            <div class="card invoice-card " style="height:7.5rem">
                               
                                <div class="card-body mx-1">
                                    <h5 class="invoice-card-title">Invoice</h5>
                                    
                                    <div class="card-content-invoice">
                                        <p class="card-text">Date: <span class="invoice-card-value">Mar 08 2018</span></p>
                                        <p class="card-text">Due Date: <span class="invoice-card-value">Mar 08 2018</span></p>
                                    </div>
                                    
                                </div>
                                
                        </div>
                    </div>
                    
                
                </div>
                
                <div class="row " style="margin-top:38px;">
                    
                <div class="col-md-6">
                            <div class="card invoice-card " style="height:15rem;">
                               
                                <div class="card-body mx-1">
                                    <h5 class="invoice-card-title" style="margin-bottom:2px;">Delnix</h5>
                                    <small class="invoice-card-value">www.delinx.com</small>
                                    <div class="card-content-invoice" style="margin-top:35px"> 
                                        <p class="card-text">2121 Wnifired Way</p>
                                        <p class="card-text">Loganspot, IN 46947</p>
                                        <p class="card-text">United States</p>
                                     
                                    </div>
                                    <div class="card-content-invoice mt-4 mb-3">
                                        <p class="card-text">Telephoe: <span class="invoice-card-value">8035458544</span></p>
                                        <p class="card-text">Fax: <span class="invoice-card-value">8035458544</span></p>
                                    </div>
                                    
                                </div>
                                
                        </div>
                </div>
                    <div class="col-md-6">
                            <div class="card invoice-card " style="height:15rem;"> 
                               
                                <div class="card-body mx-1">
                                    <h6 class=" invoice-card-title" style="margin-bottom:2px;">Invoice To</h6>
                                    <small class="invoice-card-value">Even W. Bowye</small>
                                    
                                    <div class="card-content-invoice mt-5">
                                        <h5 class="invoice-card-title "><?php echo $project->company_name?></h5>
                                       
                                    </div>
                                    <div class="card-content-invoice  mb-3">
                                    <p class="card-text">2121 Wnifired Way</p>
                                        <p class="card-text">Loganspot, IN 46947</p>
                                        <p class="card-text">United States</p>
                                     
                                    </div>
                                    
                                </div>
                                
                        </div>
                    </div>
                    
                
                </div>
                </div>
                <div class="col-md-6">
                <div class="card invoice-card   ml-3" style="width: 35rem;height:25rem">
                               
                               <div class="card-body mx-1">
                                   <h5 class=" invoice-card-title" style="margin-bottom:-2px;">Payment Details</h5>
                                   
                                  
                                   <div class="card-content-invoice1 mt-4 mb-3">
                                       <p class="card-text">Total Due   &ensp; &ensp; &ensp; &ensp;&ensp; &ensp; &ensp; &ensp;  : &ensp; &ensp; &ensp; &ensp; <span class="invoice-card-value"> +2121 Wnifired Way</span></p>
                                       <p class="card-text">Bank Name    &ensp; &ensp; &ensp; &ensp;&ensp;  &ensp; &ensp; :&ensp; &ensp; &ensp; &ensp; <span class="invoice-card-value">2121 Wnifired Way</span></p>
                                       <p class="card-text">Country      &ensp; &ensp; &ensp; &ensp;&ensp; &ensp; &ensp; &ensp; &ensp;  : &ensp; &ensp; &ensp; &ensp;<span class="invoice-card-value">+2121 Wnifired Way</span></p>
                                       <p class="card-text">City        &ensp; &ensp; &ensp; &ensp; &ensp;  &ensp; &ensp; &ensp; &ensp; &ensp; &ensp;  :&ensp; &ensp; &ensp; &ensp; <span class="invoice-card-value">2121 Wnifired Way</span></p>
                                       <p class="card-text"> Address     &ensp; &ensp;&ensp; &ensp;   &ensp; &ensp; &ensp;&ensp; &ensp;   : &ensp; &ensp; &ensp; &ensp;<span class="invoice-card-value">+2121 Wnifired Way</span></p>
                                       <p class="card-text">IBAN      &ensp; &ensp; &ensp; &ensp;&ensp; &ensp; &ensp;&ensp; &ensp; &ensp; &ensp;     :&ensp;  &nbsp;  &ensp; &ensp; &ensp;<span class="invoice-card-value">2121 Wnifired Way</span></p>
                                       <p class="card-text">SWIFYT Code &ensp; &ensp; &ensp; &ensp;&ensp; &nbsp;   :&ensp;  &ensp; &ensp;   &nbsp; &nbsp; <span class="invoice-card-value">2121 Wnifired Way</span></p>

                                   </div>
                                   
                               </div>
                               
                       </div>
                </div>
            </div>                    
      
      <!-- <div class="row px-3">
     <div class="col-md-3 shadow" style="border-radius: 13px;" >
      <h5>Project Name : <?php echo $project->name ?></h5>
      <p>Date : 25 May 2022</p> 
                  <p>Due Date : 25 May 2022</p>
      </div>
      <div class="col-md-3  shadow" style="border-radius: 13px;" >
        <h5>Project Status : </h5>
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
      </div>

      <div class="row px-3 mt-5">
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
      
      
    
				 <div class=" mt-5 card card-projects shadow card-task-one dashCardHover border-0 px-4" style="border-radius:15px;margin-bottom:2rem !important;padding-bottom:-3rem;" >
						<!-- <form action="" method="post" enctype="multipart/form-data" class="form-horizontal"> -->
						
            <?php $date_now = date("Y-m-d"); ?>
					

            <div class="table-responsive bg-white mb-5 mt-4"  style="border-none">
              <table class="table table3 mg-b-0 invoice-table" style="border-none" id="dynamic_field3">
                <thead>
                  <tr>
                   
                    <th scope="col" >Description</th>
                    <th scope="col">Date</th>
                    <th scope="col"  >Weight</th>
                    <th scope="col" class="">Total</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                  
                    <td style="margin-left: 1rem">Web Development</td>
                    <td style="margin-left:-2rem;"><input type="text" class="form-control" placeholder="Choose date" id="datepicker7" 
									name="specific_date_value" style="border:none;border-radius:10px;" value="<?php echo $date_now?>"></td>
                    <td style="margin-left:-2rem;">dcd</td>
                    <td><?php echo $project->milestone_total_price?></td>
                    <td><span class="badge badge-pill badge-danger" style="background-color:#36b8b;">Pending</span></td>
                    <td><button type="button" name="add" id="invoice_add"
																		class="btn  btn-all text-white bg-dark" style="margin-right:-1.5rem;width:10px;height:34px"><i class="fa fa-plus" style="font-size:10px;margin-left:-5px;"></button></td>
                  </tr>
                
                  
                </tbody>
              </table>

              <div class="mt-5 text-end invoice-total" >
              <div class="d-flex justify-content">
                <p>Sub Total Amount</p>
                <p style="margin-left:4.5rem"><?php echo $project->milestone_total_price?></p>
               </div>
       
                
               <div class="d-flex justify-content">
                <p>Balance Payment</p>
                <input type="hidden"  id="sub_total" name="milestone_total" value="<?php echo $project->milestone_total_price?>">
                <input type="hidden"  id="total1" name="milestone_total" >

                <?php 
                
                    $total = $project->milestone_total_price;

                
                ?>
                <p class="" style="margin-left:4.5rem"><input type="text"  id="balance1" value="<?php echo $project->milestone_total_price?>" style="border:none;" > </p>
               </div>

              </div>
            </div><!-- table-responsive -->

            
    </div>
       

			<div class="text-end" style="margin-left: 54.5rem">
      <button type="submit" class="btn  mt-5 mb-5  ml-5 text-end text-white btn-all" style="background-color:#00a7e6" >Generate PDF</button>
            <button type="submit" class="btn  mt-5 mb-5 ml-2 border text-white btn-all" style="background-color:white">Submit Invoice</button>
      </div>

   

						
					
			
	  <?php } ?>
		

      
<form>
      
					 </div>
		
<!-- Submit -->
		 </div>
		 