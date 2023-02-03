<div class="content-body">
    <div class="content-header">
        <div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">UI Library</a></li>
                    <li class="breadcrumb-item"><a href="#">Components</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Table (DataTable)</li>
                </ol>
            </nav>

        </div>
    </div><!-- content-header -->

    <div class="pd-x-65 pd-b-15">
        <div class="row">
            <div class="px-3 " style="margin-left:53.6rem;">
                <button type="button" class="btn btn-primary text-right text-uppercase py-2 "
                    style="border-radius: 8px;">New project</button>
            </div>
            <div class="">
                <button type="button" class="btn btn-primary text-right text-uppercase  py-2"
                    style="border-radius: 8px;">Add to project</button>
            </div>
            <!-- my -->
        </div>

        <div class="component-section px-5 shadow" style="border-radius: 13px;">
            <!--btn-->
            <h3 class="text-dark text-uppercase mb-4">Project</h3>

            <table id="example1" class="table ">
                <thead>
                    <tr>
                        <th class="wd-9p">
                            <div class="custom-control custom-checkbox" style="border-radius: 8px;">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1"></label>
                            </div>
                        </th>
                        <th class="wd-12p">Project Name</th>
                        <th class="wd-12p">Update</th>
                        <th class="wd-12p">Status</th>
                        <th class="wd-12p">Progress</th>
                        <!-- <th class="wd-12p">Progress</th>
                        <th class="wd-12p">due date</th> -->

                    </tr>
                </thead>
                <tbody>

                    <?php foreach($items as $item){
						// foreach($items1 as $items2){
						// 	$items2->service_name;
						// }
						// ?>
						
                    <tr>
						<?php  
							$select_list = json_decode("[".$item->services."]");
						?>
                        <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1"></label>
                            </div>
                        </td>
                        <td><?php echo $item->name?></td>
						<td><?php echo $item->project_created_date?></td>

						<?php 
							if(empty($item->project_status)){?>

								<td><span class="badge badge-pill badge-primary">Submitted</span></td>
							
						<?php } ?>
						<td><?php echo $item->project_progress?> %</td>
						
						<!-- <td> <input type="checkbox" name="user_level[]"  <?php if (in_array($items2->service_id, $select_list)) {  echo "checked";} ?>  value="<?php echo $items2->service_id;?>"></td>
						<span class="input-span"></span><?php echo $items2->service_name;?></label></li> -->
                    </tr>
                    <?php }?>

                    <!-- <tr>
                        <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1"></label>
                            </div>
                        </td>


                        <td>Software Engineer</td>
                        <td>Edinburgh</td>
                        <td>Edinburgh</td>
                        <td><span class="badge badge-pill badge-primary">Completed</span></td>
                        <td>80%</td>
                        <td>24 May 2022</td>

                    </tr> -->

                    <!-- <tr>
                        <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1"></label>
                            </div>
                        </td>

                        <td>Software Engineer</td>
                        <td>Edinburgh</td>
                        <td>Edinburgh</td>
                        <td><span class="badge badge-pill badge-primary">Completed</span></td>
                        <td>80%</td>
                        <td>24 May 2022</td>

                    </tr> -->
                </tbody>
            </table>
        </div><!-- component-section -->


    </div><!-- content-body -->


    <div class="content-footer">
        &copy; 2019. All Rights Reserved. Created by <a href="http://themepixels.me" target="_blank">ThemePixels</a>
    </div><!-- content-footer -->
</div><!-- content -->
