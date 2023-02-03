<div id="dpSidebarBody" class="sidebar-body sidebar-color" style="border-radius: 0px 0px 20px 0px;">
        <ul class="nav nav-sidebar " style="margin-top:1rem">
          <!-- <li class="nav-label"><label class="content-label">Template Pages</label></li> -->
          <li class="nav-item show">
            <a href="<?php echo base_url();?>index.php/ClientDashboard" class="nav-link   <?php if($active == 1){ echo 'active';}else{ echo 'no';}?>"><i data-feather="box" class="nav-icon-color"></i> Dashboard</a>
          </li>
					<li class="nav-item">
            <a href="" class="nav-link with-sub <?php if($active == 2){ echo 'active';}else{ echo 'no';}?>"><i data-feather="file-text" class="nav-icon-color"></i> Poject</a>
            <nav class="nav nav-sub">
              <a href="<?php echo base_url();?>index.php/ClientProject/" class="nav-sub-link">Projects</a>
              <a href="<?php echo base_url();?>index.php/ClientProject/cerateProject/" class="nav-sub-link">New Project</a>
              <a href="<?php echo base_url();?>index.php/ClientProject/Proposal/" class="nav-sub-link">Proposal</a>
            </nav>
          </li>
					<li class="nav-item">
            <a href="" class="nav-link with-sub <?php if($active == 3){ echo 'active';}else{ echo 'no';}?>"><i data-feather="layout" class="nav-icon-color"></i> Services</a>
            <nav class="nav nav-sub">
              <a href="<?php echo base_url();?>index.php/ClientService/" class="nav-sub-link">Services</a>
              <!-- <a href="services-page.html" class="nav-sub-link">Services</a> -->
            </nav>
          </li>
					<li class="nav-item ">
            <a href="" class="nav-link with-sub <?php if($active == 4){ echo 'active';}else{ echo 'no';}?>  "><i data-feather="lock" class="nav-icon-color"></i> Packages</a>
            <nav class="nav nav-sub">
              <a href="<?php echo base_url();?>index.php/ClientPackage/" class="nav-sub-link  ">Packages</a>
              <!-- <a href="packages-page.html" class="nav-sub-link">Packages</a> -->
            </nav>
          </li>
					<li class="nav-item ">
            <a href="" class="nav-link with-sub <?php if($active == 7){ echo 'active';}else{ echo 'no';}?>"><i data-feather="user"></i> Invoice</a>
            <nav class="nav nav-sub">
              <!-- <a href="Inoice-pageM.html" class="nav-sub-link  ">Invoice</a> -->
              <a href="<?php echo base_url();?>index.php/ClientInvoice" class="nav-sub-link">Invoice List</a>
            </nav>
          </li>
					<li class="nav-item ">
            <a href="" class="nav-link with-sub <?php if($active == 5){ echo 'active';}else{ echo 'no';}?>  "><i data-feather="book" class="nav-icon-color"></i> User Info</a>
            <nav class="nav nav-sub">
						<!-- <a href="<?php echo base_url();?>index.php/Client/" class="nav-sub-link  ">Sign up</a>
						<a href="<?php echo base_url();?>index.php/Client/signIn" class="nav-sub-link  ">Sign in</a> -->
              <a href="<?php echo base_url();?>index.php/ClientInfo" class="nav-sub-link  ">Company Info</a>
              <!-- <a href="invoice-table.html" class="nav-sub-link">Billing Info</a> -->
            </nav>
					</li>
					<li class="nav-item " style="position: absolute;bottom:0;background-color:none;">
						<a href="<?php echo base_url();?>index.php/Client/Logout" class="nav-link with-sub btn-signout"><i data-feather="book" class="nav-icon-color"></i> <button type="button" class="btn  bg-transparent text-white" style="color:white;">Sign out</button></a>
						
					</li>

      </div>
