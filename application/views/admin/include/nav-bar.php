

<div id="dpSidebarBody" class="sidebar-body ">
        <ul class="nav nav-sidebar myDIV">
          <!-- <li class="nav-label"><label class="content-label">Template Pages</label></li> -->
          <li class="nav-item show">
					<a href="<?php echo base_url();?>index.php/AdminDashboard" class="nav-link <?php if($active == 1){ echo 'active';}else{ echo 'no';}?>"><i data-feather="box"></i>Dashboard</a>
            <!-- <nav class="nav nav-sub">
              <a href="dashboard-one.html" class="nav-sub-link">Analytics &amp; Monitoring</a>
              <a href="dashboard-two.html" class="nav-sub-link active">Projects &amp; Web Services</a>
              <a href="dashboard-three.html" class="nav-sub-link">Blog &amp; Social Media</a>
            </nav> -->
          </li>
					<li class="nav-item">
            <a href="Project-page.html" class="nav-link with-sub <?php if($active == 2){ echo 'active';}else{ echo 'no';}?>"><i data-feather="file-text"></i>Poject</a> 
            <nav class="nav nav-sub">
              <a href="<?php echo base_url();?>index.php/AdminProject/" class="nav-sub-link">Projects</a>
              <!-- <a href="<?php echo base_url();?>index.php/AdminProject/cerateProject/" class="nav-sub-link">New Projects</a> -->
              <a href="<?php echo base_url();?>index.php/AdminProject/viewProposal/" class="nav-sub-link">Proposal</a>
            </nav>
          </li>
					<li class="nav-item">
            <a href="services-page.html" class="nav-link with-sub <?php if($active == 3){ echo 'active';}else{ echo 'no';}?>"><i data-feather="layout"></i>Team</a>
            <nav class="nav nav-sub">
              <a href="<?php echo base_url();?>index.php/AdminTeam/" class="nav-sub-link">Teams</a>
              <!-- <a href="services-page.html" class="nav-sub-link">Services</a> -->
            </nav>
          </li>
					<li class="nav-item">
            <a href="services-page.html" class="nav-link with-sub <?php if($active == 4){ echo 'active';}else{ echo 'no';}?>"><i data-feather="layout"></i> Category</a>
            <nav class="nav nav-sub">
              <a href="<?php echo base_url();?>index.php/AdminCategory/" class="nav-sub-link ">Categories</a>
              <!-- <a href="services-page.html" class="nav-sub-link">Services</a> -->
            </nav>
          </li>
					<li class="nav-item">
            <a href="services-page.html" class="nav-link with-sub <?php if($active == 5){ echo 'active';}else{ echo 'no';}?>"><i data-feather="layout"></i> Services</a>
            <nav class="nav nav-sub">
							<!-- <a href="<?php echo base_url();?>index.php/AdminService/createService" class="nav-sub-link">Create Services</a> -->
             
              <a href="<?php echo base_url();?>index.php/AdminService/allServices" class="nav-sub-link">Services</a>
              <a href="<?php echo base_url();?>index.php/AdminService/" class="nav-sub-link">View Services</a>
            </nav>
          </li>
					<li class="nav-item ">
            <a href="packages-page.html" class="nav-link with-sub <?php if($active == 6){ echo 'active';}else{ echo 'no';}?>" ><i data-feather="lock"></i> Packages</a>
            <nav class="nav nav-sub">
							<!-- <a href="<?php echo base_url();?>index.php/AdminPackage/addPackage" class="nav-sub-link">Create Package</a> -->
        
              <a href="<?php echo base_url();?>index.php/AdminPackage/allPackages" class="nav-sub-link">Packages</a>
               <a href="<?php echo base_url();?>index.php/AdminPackage/" class="nav-sub-link  ">View Packages</a>
            </nav>
          </li>
					<li class="nav-item ">
            <a href="packages-page.html" class="nav-link with-sub <?php if($active == 7){ echo 'active';}else{ echo 'no';}?>"><i data-feather="user"></i> Invoice</a>
            <nav class="nav nav-sub">
              <a href="<?php echo base_url();?>index.php/AdminInvoice" class="nav-sub-link  ">Invoice</a>
              <!-- <a href="invoice-table.html" class="nav-sub-link">Invoice List</a> -->
            </nav>
          </li>
					<!-- <li class="nav-item ">
            <a href="packages-page.html" class="nav-link with-sub  "><i data-feather="book"></i> User Info</a>
            <nav class="nav nav-sub">
						<a href="<?php echo base_url();?>index.php/Client/" class="nav-sub-link  ">Sign up</a>
						<a href="<?php echo base_url();?>index.php/Client/signIn" class="nav-sub-link  ">Sign in</a>
              <a href="Inoice-pageM.html" class="nav-sub-link  ">Company Info</a>
              <a href="invoice-table.html" class="nav-sub-link">Billing Info</a>
            </nav>
					</li> -->

      </div>
