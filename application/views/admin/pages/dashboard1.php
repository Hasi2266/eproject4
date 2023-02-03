<div class="content-header justify-content-between">
            <div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Projects &amp; Web Services</li>
                    </ol>
                </nav>
                <div class="row">

                    <h4 class="content-title content-title-xs px-3">Welcome to Dashboard</h4>
                    <div class=" " style="margin-left:72rem;">
                        <button type="button" class="btn btn-primary text-right  py-2 " style="border-radius: 8px;"> New Project</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-header -->
        <div class="content-body">
            <div class="card card-hover card-task-one shadow mb-5" style="border-radius: 10px;">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6 col-md-3">
                            <h6 class="card-title">Total spend</h6>
                            <div class="d-flex align-items-center justify-content-between mg-b-10">
                                <h1 class="card-value">932 <span class="tx-success"><i class="icon ion-android-arrow-up"></i>2.3%</span></h1>
                                <div class="chart-wrapper">
                                    <div id="flotChart1" class="flot-chart"></div>
                                </div>
                            </div>
                            <p class="card-desc">skills that require mastery of many details in an ever-changing environment. </p>
                        </div>
                        <!-- col -->
                        <div class="col-sm-6 col-md-3 mg-t-20 mg-sm-t-0">
                            <h6 class="card-title">Projects </h6>
                            <div class="d-flex align-items-center justify-content-between mg-b-10">
                                <h1 class="card-value">268 <span class="tx-success"><i class="icon ion-android-arrow-up"></i>2.4%</span></h1>
                                <div class="chart-wrapper">
                                    <div id="flotChart2" class="flot-chart"></div>
                                </div>
                            </div>
                            <p class="card-desc">are represented as fairly standardized skills in a relatively constant environment.</p>
                        </div>
                        <!-- col -->
                        <div class="col-sm-6 col-md-3 mg-t-20 mg-md-t-0">
                            <h6 class="card-title">Proposal</h6>
                            <div class="d-flex align-items-center justify-content-between mg-b-10">
                                <h1 class="card-value">746 <span class="tx-color-03">hours</span></h1>
                                <div class="chart-wrapper">
                                    <div id="flotChart3" class="flot-chart"></div>
                                </div>
                            </div>
                            <p class="card-desc">represents the total amount of time users interact with a specific dimension item.</p>
                        </div>
                        <!-- col -->
                        <div class="col-sm-6 col-md-3 mg-t-20 mg-md-t-0">
                            <h6 class="card-title">invoices</h6>
                            <div class="d-flex align-items-center justify-content-between mg-b-10">
                                <h1 class="card-value">231 <span class="tx-color-03">hours</span></h1>
                                <div class="chart-wrapper">
                                    <div id="flotChart4" class="flot-chart"></div>
                                </div>
                            </div>
                            <p class="card-desc">the total amount of time users interact with a specific dimension item.</p>
                        </div>
                        <!-- col -->
                    </div>
                    <!-- row -->
                </div>
                <!-- card-body -->
            </div>
            <!-- card -->
            <div class="row row-sm mg-t-15 mg-sm-t-20">
                <div class="col-sm-6 col-xl-5">
                    <div class="card card-hover card-todo shadow mb-5 " style="border-radius:10px ;margin-right: 15px;">
                        <div class="card-header bg-transparent pd-y-15 pd-l-15 pd-r-10">
                            <h6 class="card-title mg-b-0">Project Status</h6>
                            <nav class="nav">
                                <a href="" class="link-gray-500"><i data-feather="help-circle" class="svg-16"></i></a>
                                <a href="" class="link-gray-500"><i data-feather="more-vertical" class="svg-16"></i></a>
                            </nav>
                        </div>
                        <!-- card-header -->
                        <div id="scroll1">
                            <ul class="list-group list-group-flush" style="height: 317px;">
                                <li class="list-group-item bg-light mx-3 mt-2 mb-2 " style="border-radius:10px ;">
                                    <div class="list-group-header">

                                        <a href="" class="link-03 mg-l-auto"><i data-feather="more-horizontal" class="svg-16"></i></a>
                                    </div>

                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="avatar-group">
                                            <h6 class="tx-13 mg-b-3"><a href="" class="link-01">Theme Launch</a></h6>
                                        </div>
                                        <div class="progress1 blue " style="margin-right:-1px ;" data-value="10">
                                            <span class="progress1-left">
                          <span class="progress1-bar"></span>
                                            </span>
                                            <span class="progress1-right">
                          <span class="progress1-bar"></span>
                                            </span>
<!-- 
                                            <div class="progress1-value">20%</div> -->

											<div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center" style="background-color:black;color:white">
												<div class="h4 font-weight-bold " ><?php echo $item->project_progress?><sup class="small" style="font-size:14px;">%</sup></div>
											</div>

                                        </div>

                                    </div>
                                </li>
                                <li class="list-group-item bg-light mx-3 mt-2 mb-2 " style="border-radius:10px ;">
                                    <div class="list-group-header">

                                        <a href="" class="link-03 mg-l-auto"><i data-feather="more-horizontal" class="svg-16"></i></a>
                                    </div>

                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="avatar-group">
                                            <h6 class="tx-13 mg-b-3"><a href="" class="link-01">Theme Launch</a></h6>
                                        </div>
                                        <div class="progress1 blue " style="margin-right:-1px ;">
                                            <span class="progress1-left">
                          <span class="progress1-bar"></span>
                                            </span>
                                            <span class="progress1-right">
                          <span class="progress1-bar"></span>
                                            </span>

                                            <div class="progress1-value">20%</div>

                                        </div>

                                    </div>
                                </li>
                                <li class="list-group-item bg-light mx-3 mt-2 mb-2 " style="border-radius:10px ;">
                                    <div class="list-group-header">

                                        <a href="" class="link-03 mg-l-auto"><i data-feather="more-horizontal" class="svg-16"></i></a>
                                    </div>

                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="avatar-group">
                                            <h6 class="tx-13 mg-b-3"><a href="" class="link-01">Theme Launch</a></h6>
                                        </div>
                                        <div class="progress1 blue " style="margin-right:-1px ;">
                                            <span class="progress1-left">
                          <span class="progress1-bar"></span>
                                            </span>
                                            <span class="progress1-right">
                          <span class="progress1-bar"></span>
                                            </span>

                                            <div class="progress1-value">20%</div>

                                        </div>

                                    </div>
                                </li>
                            </ul>
                        </div>


                    </div>
                    <!-- card -->
                </div>
                <!-- col -->


                <!-- Recent Projects -->
                <div class="col-xl-7 mg-t-15 mg-sm-t-20 mg-xl-t-0">
                    <div class="card card-hover card-projects shadow" style="border-radius:10px ;">
                        <div class="card-header bg-transparent pd-y-15 pd-l-15 pd-r-10">
                            <h6 class="card-title mg-b-0">Recent Projects</h6>
                            <nav class="nav">
                                <a href="" class="link-gray-500"><i data-feather="help-circle" class="svg-16"></i></a>
                                <a href="" class="link-gray-500"><i data-feather="more-vertical" class="svg-16"></i></a>
                            </nav>
                        </div>
                        <!-- card-header -->
                        <ul class="list-group list-group-flush mb-2">
                            <li class="list-group-item">
                                <nav class="nav nav-card-icon">
                                    <a href=""><i data-feather="activity" class="svg-16"></i></a>
                                    <a href=""><i data-feather="bar-chart-2" class="svg-16"></i></a>
                                    <a href=""><i data-feather="chevron-down" class="svg-16"></i></a>
                                </nav>
                                <div class="media">
                                    <div class="project-logo bg-primary tx-white"><i data-feather="aperture"></i></div>
                                    <div class="media-body mg-l-10 mg-sm-l-15">
                                        <p class="tx-13 tx-color-04 mg-b-5">Themepixels, Inc.</p>
                                        <h5 class="tx-color-01 mg-b-0">Tiger Wave Premium</h5>
                                    </div>
                                    <!-- media-body -->
                                </div>
                                <!-- media -->
                                <p class="project-desc">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis.</p>
                                <small class="project-deadline">End Date: July 29, 2019</small>
                            </li>
                            <li class="list-group-item">
                                <nav class="nav nav-card-icon">
                                    <a href=""><i data-feather="activity" class="svg-16"></i></a>
                                    <a href=""><i data-feather="bar-chart-2" class="svg-16"></i></a>
                                    <a href=""><i data-feather="chevron-down" class="svg-16"></i></a>
                                </nav>
                                <div class="media">
                                    <div class="project-logo bg-green tx-white"><i data-feather="music"></i></div>
                                    <div class="media-body mg-l-10 mg-sm-l-15">
                                        <p class="tx-13 tx-color-04 mg-b-5">Spotify, Inc.</p>
                                        <h5 class="tx-color-01 mg-b-0">K3A20 Music Player</h5>
                                    </div>
                                    <!-- media-body -->
                                </div>
                                <!-- media -->
                                <p class="project-desc">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis.</p>
                                <small class="project-deadline">End Date: July 28, 2019</small>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- col -->


                <div class="col-xl-8  shadow " style="border-radius:10px ;margin-right:26px; margin-left: 12px;">
                    <div id="scroll2" class="" style="height: 340px;">
                        <h6 class="card-title  mt-4 mb-3">Projects</h6>
                        <table id="example11" class="table " style="border-radius:10px ;">
                            <thead>
                                <tr>
                                    <th class="wd-9p">
                                        <div class="custom-control custom-checkbox" style="border-radius: 8px;">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1"></label>
                                        </div>
                                    </th>
                                    <th class="wd-12p">Logo </th>
                                    <th class="wd-12p">Company</th>
                                    <th class="wd-12p">Project</th>
                                    <th class="wd-12p">Update</th>
                                    <th class="wd-12p">Status</th>
                                    <th class="wd-12p">Invoice</th>
                                    <th class="wd-12p">Progress</th>
                                    <th class="wd-12p">Due date</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1"></label>
                                        </div>
                                    </td>
                                    <td><img src="../assets/img/favicon.png" alt="..." class="img-thumbnail" width="50"></td>
                                    <td>Software Engineer</td>
                                    <td>Edinburgh</td>
                                    <td>24 May 2022</td>
                                    <td><span class="badge badge-pill badge-primary">Completed</span></td>
                                    <td>005</td>
                                    <td>80%</td>
                                    <td>24 May 2022</td>

                                </tr>
                                <tr>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1"></label>
                                        </div>
                                    </td>
                                    <td><img src="../assets/img/favicon.png" alt="..." class="img-thumbnail" width="50"></td>
                                    <td>Software Engineer</td>
                                    <td>Edinburgh</td>
                                    <td>24 May 2022</td>
                                    <td><span class="badge badge-pill badge-primary">Completed</span></td>
                                    <td>005</td>
                                    <td>80%</td>
                                    <td>24 May 2022</td>

                                </tr>
                                <tr>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1"></label>
                                        </div>
                                    </td>
                                    <td><img src="../assets/img/favicon.png" alt="..." class="img-thumbnail" width="50"></td>
                                    <td>Software Engineer</td>
                                    <td>Edinburgh</td>
                                    <td>24 May 2022</td>
                                    <td><span class="badge badge-pill badge-primary">Completed</span></td>
                                    <td>005</td>
                                    <td>80%</td>
                                    <td>24 May 2022</td>

                                </tr>
                                <tr>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1"></label>
                                        </div>
                                    </td>
                                    <td><img src="../assets/img/favicon.png" alt="..." class="img-thumbnail" width="50"></td>
                                    <td>Software Engineer</td>
                                    <td>Edinburgh</td>
                                    <td>24 May 2022</td>
                                    <td><span class="badge badge-pill badge-primary">Completed</span></td>
                                    <td>005</td>
                                    <td>80%</td>
                                    <td>24 May 2022</td>

                                </tr>
                                <tr>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1"></label>
                                        </div>
                                    </td>
                                    <td><img src="../assets/img/favicon.png" alt="..." class="img-thumbnail" width="50"></td>
                                    <td>Software Engineer</td>
                                    <td>Edinburgh</td>
                                    <td>24 May 2022</td>
                                    <td><span class="badge badge-pill badge-primary">Completed</span></td>
                                    <td>005</td>
                                    <td>80%</td>
                                    <td>24 May 2022</td>

                                </tr>



                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- col -->

                <!-- Notifications -->
                <div class="col-sm-6 col-xl-3 col-md-4  order-sm-1 order-xl-0">
                    <div class="card card-hover card-notification-one shadow" style="border-radius:10px ;width:22.5rem">
                        <div class="card-header bg-transparent pd-y-15 pd-l-15 pd-r-10">
                            <h6 class="card-title mg-b-0">Notifications</h6>
                            <nav class="nav">
                                <a href="" class="link-gray-500"><i data-feather="help-circle" class="svg-16"></i></a>
                                <a href="" class="link-gray-500"><i data-feather="more-vertical" class="svg-16"></i></a>
                            </nav>
                        </div>
                        <!-- card-header -->
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <div class="avatar">
                                        <span class="avatar-initial rounded-circle bg-pink"><i data-feather="clock" class="svg-14"></i></span>
                                    </div>
                                    <div class="list-body">
                                        <p class="mg-b-0">Add business hours to your <strong>Business Page</strong> so it's easy for people to plan a visit. <span>2 hours ago</span></p>
                                    </div>
                                    <nav class="nav">
                                        <a href=""><i data-feather="more-vertical"></i></a>
                                    </nav>
                                </li>
                                <li class="list-group-item">
                                    <div class="avatar">
                                        <span class="avatar-initial rounded-circle bg-warning"><i data-feather="calendar" class="svg-16"></i></span>
                                    </div>
                                    <div class="list-body">
                                        <p class="mg-b-0"><strong>Edsel Santillana</strong> invited you to join the event <strong>Annual Business Product Showcase</strong>. <span>Yesterday</span></p>
                                    </div>
                                    <nav class="nav">
                                        <a href=""><i data-feather="more-vertical"></i></a>
                                    </nav>
                                </li>
                                <li class="list-group-item">
                                    <div class="avatar">
                                        <span class="avatar-initial rounded-circle bg-primary"><i data-feather="calendar" class="svg-16"></i></span>
                                    </div>
                                    <div class="list-body">
                                        <p class="mg-b-0"><strong>Dyanne Aceron</strong> added some feedback to your event. <span>Yesterday</span></p>
                                    </div>
                                    <nav class="nav">
                                        <a href=""><i data-feather="more-vertical"></i></a>
                                    </nav>
                                </li>
                                <li class="list-group-item">
                                    <div class="avatar">
                                        <span class="avatar-initial rounded-circle bg-blue"><i data-feather="shopping-bag" class="svg-16"></i></span>
                                    </div>
                                    <div class="list-body">
                                        <p class="mg-b-0"><strong>Reynante Labares</strong> invited you to like his <strong>Online Shop</strong>. <span>Jul 31</span></p>
                                    </div>
                                    <nav class="nav">
                                        <a href=""><i data-feather="more-vertical"></i></a>
                                    </nav>
                                </li>
                            </ul>
                        </div>
                        <!-- card-body -->
                        <div class="card-footer bg-transparent">
                            <a href="" class="link-03">Show All Notifications <i class="icon ion-android-arrow-forward"></i></a>
                        </div>
                        <!-- card-footer -->
                    </div>
                    <!-- card -->


                </div>
                <!-- col -->
                <div class="col-md-6 col-xl-4 mg-t-15 mg-sm-t-20">

                </div>
                <!-- col -->
            </div>
            <!-- row -->
        </div>
