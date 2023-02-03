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
        </div>
        <!-- content-header -->

        <div class="content-card-body pd-b-15">

            <div class="row">
                <div class="px-3 " style="margin-left:67.5rem;">
                    <a href="<?php echo base_url();?>index.php/AdminTeam/addTeam"><button type="button" class="btn btn-all text-white  py-2 "style="border-radius: 8px;">Add New Team</button></a>
                </div>
                <!-- <div class="">
                    <button type="button" class="btn btn-primary text-right text-uppercase  py-2" style="border-radius: 8px;">Add to project</button>
                </div> -->


                <!-- my -->



            </div>

			<div class="card card-hover card-projects  card-task-one dashCardHover content-card-body mt-4" style="border-radius: 10px;margin-bottom:2rem !important;padding-bottom:3rem; " >
        <!--btn-->
				<div class="card-header bg-transparent pd-y-15 pd-l-15 pd-r-10" style="margin-bottom:-0.1rem;">
									<h6 class="card-title mg-b-0 px-1" style="margin-top:1px;margin-bottom:-6px">Teams</h6>
									<!-- <nav class="nav">
									<a href="" class="link-gray-500"><i data-feather="help-circle" class="svg-16"></i></a>
									<a href="" class="link-gray-500"><i data-feather="more-vertical" class="svg-16"></i></a>
									</nav> -->
              	
								</div>
       
								<div class="card-body">
                                <table id="example1" class="table" style="border-radius:10px ;font-size:13px">
                    <thead>
                        <tr>
                            <!-- <th class="wd-9p">
                                <div class="custom-control custom-checkbox" style="border-radius: 8px;">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </th> -->
                           <th></th>
                            <th  class="wd-20p"><span style="margin-left:-4rem;">Team Name<span></th>
                            <th >Parent Name</th>
                            <th >Created Date</th>
							<th >Actions</th>
                           
                           
                        </tr>
                    </thead>
                    <tbody>
				<?php foreach($items as $item){?>
					<!-- data-url="<?php echo base_url()?>index.php/AdminTeam/editTeam/<?php echo $item->team_id ?> -->
                        <tr  style="cursor:pointer;" >

						<!-- <?php 
							if(($item->currency) == 1){
								$currency = 'Rs';
								
							}
		
							else if(($item->currency) == 2){
								$currency = 'USD';
								
							}

						?> -->
                            <!-- <td>
                                <div class="custom-control custom-checkbox">

                                    <input type="checkbox" class="custom-control-input" id="<?php echo $item->team_id ?>">
                                    <label class="custom-control-label" for="<?php echo $item->team_id ?>"></label>

                                </div>
                            </td> -->
                            <td ></td>
                            <td><span style="margin-left:-4rem;"><?php echo $item->name?><span></td>
							<td><?php echo $item->parent_category?></td>
                            <td><?php echo $item->category_created_date?></td>
                           	<td>

                            
                               <div class="dropdown">
                                
                                    <button class="btn dropdown-toggle1" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border-radius: 10px;margin-left:-1rem;">
                                        <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                    </button>
                                    <div class="dropdown-menu drop-b tx-14" aria-labelledby="dropdownMenuButton">
                                        
                                    <a class="dropdown-item" href="<?php echo base_url();?>index.php/AdminTeam/editTeam/<?php echo $item->team_id?>"><i data-feather="edit" class="svg-16 mx-1 text-dark"></i><span>  Edit <span></a>
                                    <a class="dropdown-item" href="<?php echo base_url();?>index.php/AdminTeam/deleteTeam/<?php echo $item->team_id?>" class=""><i data-feather="delete" class="svg-16 mx-1 text-dark"></i>Delete</a>
                
                                    </div>
                                </div>
                                <!-- <a href="#modal6" class="btn btn-dark btn-block" data-toggle="modal" data-animation="effect-just-me">Just Me</a> -->
							</td>
                        </tr>

						<!-- <div class="modal fade" id="modal6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel6" aria-hidden="true">
							<div class="modal-dialog modal-dialog-centered" role="document">
								<div class="modal-content">
								<div class="modal-header">
									<h6 class="modal-title" id="exampleModalLabel6">Modal Title</h6>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true"><i data-feather="x"></i></span>
									</button>
								</div>
								<div class="modal-body">
									<p class="mg-b-0">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. T</p>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
									<a href=""><button type="button" class="btn btn-dark">Delete</button></a>
								</div>
								</div>
							</div>
    					</div> -->

					<?php } ?>
                       



                    </tbody>
                </table>
						</div>
            </div>
            <!-- component-section -->


        </div>
        <!-- content-body -->


       
        <!-- content-footer -->
