
    <div class="content-header">
        <div>
            <!-- <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item"><a href="#">Services</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Create Service</li>
                </ol>
            </nav> -->
            <!-- <h4 class="content-title content-title-sm">Create Service</h4> -->
        </div>
    </div>
    <!-- content-header -->
    <div class=" content-card-body pd-b-15">
	<div class="card card-hover card-projects  card-task-one dashCardHover content-card-body mt-4" style="border-radius: 10px;margin-bottom:2rem !important;padding-bottom:3rem; " >
        <!--btn-->
				<div class="card-header bg-transparent pd-y-15 pd-l-15 pd-r-10" style="margin-bottom:-0.1rem;">
									<h6 class="card-title mg-b-0 px-1" style="margin-top:1px;margin-bottom:-6px">Add Team</h6>
									<!-- <nav class="nav">
									<a href="" class="link-gray-500"><i data-feather="help-circle" class="svg-16"></i></a>
									<a href="" class="link-gray-500"><i data-feather="more-vertical" class="svg-16"></i></a>
									</nav> -->
              	
								</div>
       
								<div class="card-body">

								<!-- class=" category-form border " -->

                    <form class="all-form" action="<?php echo base_url();?>index.php/AdminTeam/saveTeam" method="post">
					<!-- <h5 id="section1" class="tx-semibold p-4">Add Team</h5> -->
					
					<div class="row row-sm row-md  px-4">

					
							
                            <div class="col-md-6 ">
                                <label for="inputEmail4" class="form-label">Name</label>
                                <input type="text" name="name" class="form-control  py-2 service-input-box" style="border-radius:8px">
                            </div>
                            <div class="col-md-6 mg-t-10 mg-sm-t-0 rounded ">
                                <label for="inputEmail4" class="form-label">Parent</label>
                                <input type="text " class=" form-control py-2 service-input-box" name="parent_category" style="border-radius:8px">
                            </div>
                            <!-- <div class="col-md-12 mg-t-30 rounded mb-5">
                                <button type="submit" class="btn btn-secondary py-2 px-4 service-input-box">Create</button>
                            </div> -->
                            <div class="all-btns" > 
                                <button type="submit" class="btn btn-all btn-submit btn-dark btn-new mt-4" >Create</button>
                                <a href="<?php echo base_url();?>index.php/AdminTeam"><button type="button" class="btn btn-submit btn-all btn-dark btn-new mt-4 px-5" style="margin-left:0.6rem" >Back</button></a>
                            </div>
                        </div>
                    </form>
                    <!-- row -->
                </div>
            </div>

					</div>
        </div>




        <!-- component-section -->
        <!-- row -->
    </div>
</div>
    <!-- content-body -->

