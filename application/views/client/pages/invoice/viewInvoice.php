<style>
  .switch {
  position: relative;
  display: inline-block;
  width: 43px;
  height: 20px;
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
  height: 12px;
  width: 12px;
  left: 3px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #8758FF;
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
      <form action="<?php echo base_url();?>index.php/ClientInvoice/confirmInvoice" method="post" enctype="multipart/form-data">
			<?php foreach ($items as $item){?>
			
        <input type="hidden" name="project_id" value="<?php echo $item->project_id ?>">
        <input type="hidden" name="client_id" value="<?php echo $item->client_id ?>">
        <input type="hidden" name="total_amount" value="<?php echo $item->total_amount ?>">
        <input type="hidden" name="invoice_id" value="<?php echo $item->invoice_id ?>">

								<div class="card-body" style="padding:none !important;">
	 
     
                <!-- <?php 
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

								?> -->

            <div class="row">
                <div class="col-md-6">

                <div class="row">
                    
                    <div class="col-md-6">
                            <div class="card invoice-card " style="height:7.5rem">
                               
                                <div class="card-body ">
                                    <h5 class=" invoice-card-title">Status - <?php echo $status?></h5>
                                    
                                    <div class="card-content-invoice">
                                        <p class="card-text">Date: <span class="invoice-card-value"><?php echo $item->project_created_date?></span></p>
                                        <p class="card-text">Due Date: <span class="invoice-card-value"><?php echo $due_date?></span></p>
                                    </div>
                                    
                                </div>
                                
                        </div>
                    </div>
                    <div class="col-md-6">
                            <div class="card invoice-card " style="height:7.5rem">
                               
                                <div class="card-body">
                                    <h5 class=" invoice-card-title">Invoice</h5>
                                    
                                    <div class="card-content-invoice">
                                        <p class="card-text">Project Date: <span class="invoice-card-value"><?php echo $item->project_created_date?></span></p>
                                        <p class="card-text">Invoice Date: <span class="invoice-card-value"><?php echo $due_date?></span></p>
                                    </div>
                                    
                                </div>
                                
                        </div>
                    </div>
                    
                
                </div>
                
                <div class="row " style="margin-top:38px;">
                    
                <div class="col-md-6">
                            <div class="card invoice-card " style="height:15rem;">
                               
                                <div class="card-body">
                                    <h5 class="invoice-card-title" style="margin-bottom:2px;">Delnix</h5>
                                    <small class="invoice-card-value" >www.delinx.com</small>
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
                                    <h5 class=" invoice-card-title" style="margin-bottom:2px;">Invoice To</h5>
                                    <small class="invoice-card-value">Even W. Bowye</small>
                                    
                                    <div class="card-content-invoice mt-5">
                                        <h5 class=" invoice-card-title "><?php echo $item->company_name?></h5>
                                       
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
						<div class="card-header bg-transparent pd-y-15 pd-l-15 pd-r-10" style="margin-bottom:-0.1rem;">
									<h6 class="invoice-card-title mg-b-0 px-1 " style="margin-top:1px;margin-bottom:-6px;"><?php echo $item->name ?> - <?php echo $item->total_amount ?></h6>
									<!-- <nav class="nav">
									<a href="" class="link-gray-500"><i data-feather="help-circle" class="svg-16"></i></a>
									<a href="" class="link-gray-500"><i data-feather="more-vertical" class="svg-16"></i></a>
									</nav> -->
              	
								</div>
       
								<div class="card-body">
					

            <div class="table-responsive bg-white mb-5 mt-4"  style="border-none">
              <table class="table table3 mg-b-0 invoice-table"  id="dynamic_field3">
                <thead>
                  <tr>
                    <th></th>
                    <th scope="col" class="thColor">Description</th>
                    <th scope="col" class="datecol thColor"  >Date</th>
                    <th scope="col" class="datecol thColor"  >Weight</th>
                    <th scope="col" class="thColor" ><span style="margin-left:33.5rem;">Amount</span></th>
                    <th scope="col" class="thColor"></th>
                    <th scope="col" class="thColor">Status</th>
                  </tr>
                </thead>
                <tbody>

                
                <?php foreach($items1 as $items2){?>

                  <?php 
                    
                    if($items2->status == 2 ){
                      $status = "Paid";
                    }
                    else{
                      $status = "Pending";
                    }
                    
                    ?>

                  <tr>
                    <td><input type="hidden" name ="id" id = "<?php echo $items2->id?>" value="<?php echo $items2->id?>"/></td>
                    <td style="margin-left: 1rem"><?php echo $items2->description?></td>
                    <td style="margin-left:-2rem;"><?php echo $items2->date?></td>
                    <td style="margin-left:-2rem;"><?php echo $items2->weight?></td>
                    <td><input type="" disabled name="amount" value="<?php echo $items2->amount?>" id="amount_<?php echo $items2->id?>" class="calc1"  style="margin-left:33.5rem;border:none"></td>
                    <!-- <td id = "amount_<?php echo $items2->id?>"></td> -->
                    <td><label class="switch"> <input type="checkbox" <?php if($items2->status==2){echo "checked disabled";}?> name="chk[]" id="chk1_<?php echo $items2->id?>" value="<?php echo $items2->id?>"  class="chk"> <span class="slider round"></label></td>
                    <td><span class="badge badge-pill <?php if($status=="Paid"){echo "badge-info";}else{ echo "badge-dark";}?> " style="background-color:#36b8b;"><?php echo $status?></span></td>
                  </tr>
                
                  <?php  } ?>
                 
                </tbody>
              </table>

              <div class="mt-5 text-end invoice-total1">
                  <div class="d-flex justify-content">
                    <p>Sub Total Amount</p>
                    <p style="margin-left:4.5rem"><?php echo $item->total_amount?></p>
                  </div>
       
                
                  <div class="d-flex justify-content">
                    <p>Balance Payment</p>
                    <input type="hidden"  id="sub_total" name="milestone_total" value="<?php echo $item->total_amount?>">
                    <input type="hidden"  id="total1" name="milestone_total">

                    <!-- <?php 
                    
                        $total = $project->milestone_total_price;
                        // <?php echo $item->balance?>
                    
                    ?> -->
                   
                    <input type="hidden" id="balance2" style="border:none;" name="balance" value="<?php echo $item->balance?>">
                    <p class="" style="margin-left:4.5rem"><input type="text" disabled id="balance1" style="border:none;" name="balance1" value="<?php echo $item->balance?>"> </p>
                  </div>

              </div>
            </div><!-- table-responsive -->

                                </div>
    </div>
       

			<div class="text-end" style="margin-left: 61rem">
            <!-- <button type="submit" class="btn  btn-all mt-5 mb-5  ml-5 text-end text-white" style="background-color:#00a7e6" >Generate PDF</button> -->
            <button type="submit" class="btn  btn-all mt-5 mb-5 ml-2 border text-white" style="background-color:white">Update Invoice</button>
            <a href="<?php echo base_url();?>index.php/ClientInvoice"><button type="button" class="btn btn-all text-white mb-5 mt-5 ml-2 border">Cancel</button></a>
      </div>

   

						
					
			
	  <?php } ?>
		

      
<form>
      
					 </div>
		
<!-- Submit -->
		 </div>
		 