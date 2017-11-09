<!DOCTYPE html>
<html lang="en">
   
    <head>
        <meta charset="utf-8" />
        <title><?php 
            echo $this->fetch_value[0]->title;
        ?> | Dashboard</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Preview page of Metronic Admin Theme #3 for dashboard & statistics" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/global/plugins/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/global/plugins/simple-line-icons/simple-line-icons.min.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/global/plugins/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css'); ?>" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="<?php echo base_url('assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/global/plugins/morris/morris.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/global/plugins/fullcalendar/fullcalendar.min.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/global/plugins/jqvmap/jqvmap/jqvmap.css'); ?>" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="<?php echo base_url('assets/global/css/components.min.css'); ?>" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?php echo base_url('assets/global/css/plugins.min.css'); ?>" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="<?php echo base_url('assets/layout3/css/layout.min.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/layout3/css/themes/default.min.css'); ?>" rel="stylesheet" type="text/css" id="style_color" />
        <link href="<?php echo base_url('assets/layout3/css/custom.min.css'); ?>" rel="stylesheet" type="text/css" />
         <link href="<?php echo base_url(); ?>assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" />
        <link href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
<style>
  .error{
	  color: red;
  }
  .portlet-title{
	background-color: rgba(32, 178, 170, 0.22);
}
 .box-info{
	  background-color: lightgrey;
 }
 .membership-content-area{
	     background-color: rgba(211, 211, 211, 0.3);
 }
</style>
		</head>
    <!-- END HEAD -->
        <div class="page-wrapper-top">
                    <!-- BEGIN HEADER -->
                    <div class="page-header">
                        <!-- BEGIN HEADER TOP -->
                        <div class="page-header-top">
                            <div class="container">
                                <!-- BEGIN LOGO -->
                                <div class="page-logo">
									 <a href="<?php echo base_url('dashboard'); ?>"class="logo-default">
									 <?php 
						            echo $this->fetch_value[0]->title; ?>
                                    </a>
                                </div>
                                <!-- END LOGO -->
                                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                                <a href="javascript:;" class="menu-toggler"></a>
                                <!-- END RESPONSIVE MENU TOGGLER -->
                                <!-- BEGIN TOP NAVIGATION MENU -->
                                <div class="top-menu">
                                    <ul class="nav navbar-nav pull-right">
                                        <li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
                                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                                <img alt="" class="img-circle" src="<?php echo base_url(); ?>assets/layout4/img/avatar9.jpg">
                                                <span class="username username-hide-mobile"><?php echo ucwords($this->session->userdata('full_name')); ?></span>
                                            </a>
                                            <ul class="dropdown-menu">
											<!-- BEGIN QUICK SIDEBAR TOGGLER -->
                                        <li class="dropdown dropdown-extended quick-sidebar-toggler">
                                            <span class="sr-only">Toggle Quick Sidebar</span>
											<a href="<?php echo base_url('logout'); ?>">
                                                        <i class="icon-key"></i> Log Out </a>
                                        </li>
                                        <!-- END QUICK SIDEBAR TOGGLER -->
                                    </ul>
                                </div>
                                <!-- END TOP NAVIGATION MENU -->
                            </div>
                        </div>
                        <!-- END HEADER TOP -->
                        <!-- BEGIN HEADER MENU -->
                        <div class="page-header-menu">
                            <div class="container">
                               <div class="hor-menu">
                                    <ul class="nav navbar-nav">
                                        <li aria-haspopup="true" class="menu-dropdown classic-menu-dropdown ">
                                            <a href="<?php echo base_url('dashboard'); ?>"> Dashboard
                                                <span class="arrow"></span>
                                            </a>
                                        </li>
										<li aria-haspopup="true" class="menu-dropdown classic-menu-dropdown">
                                            <a href="#"> Masters
                                                <span class="arrow"></span>
                                            </a>
                                            <ul class="dropdown-menu pull-left">  
												<li aria-haspopup="true" class="dropdown-submenu">
													<a href="<?php echo base_url(); ?>state"> States
														<span class="arrow"></span>
													</a>
												</li>
												<li aria-haspopup="true" class="dropdown-submenu">
													<a href="<?php echo base_url(); ?>city"> City
														<span class="arrow"></span>
													</a>
												</li>
											</ul>
                                        </li>
                                        <li aria-haspopup="true" class="menu-dropdown mega-menu-dropdown  ">
                                            <a href="<?php echo base_url(); ?>front-options"> Front Options
                                                <span class="arrow"></span>
                                            </a>
                                        </li>
                                        <li aria-haspopup="true" class="menu-dropdown classic-menu-dropdown">
                                            <a href="<?php echo base_url(); ?>projects"> Project
                                                <span class="arrow"></span>
                                            </a>
                                            <ul class="dropdown-menu pull-left">  
												<li aria-haspopup="true" class="dropdown-submenu">
													<a href="<?php echo base_url(); ?>projects">Project Listing</a>
												</li>
												<li aria-haspopup="true" class="dropdown-submenu">
													<a href="<?php echo base_url(); ?>add-project">Add Project</a>
												</li>
											</ul>
                                        </li>
										<li aria-haspopup="true" class="menu-dropdown classic-menu-dropdown">
                                            <a href="<?php echo base_url(); ?>property"> Property
                                                <span class="arrow"></span>
                                            </a>
                                            <ul class="dropdown-menu pull-left">
                                               
									              <li aria-haspopup="true" class="dropdown-submenu ">
                                                       <a href="<?php echo base_url(); ?>property">Property Listing</a>
                                                  </li>
                                                  <li aria-haspopup="true" class="dropdown-submenu ">
                                                       <a href="<?php echo base_url('user_data'.'/'.'admin'); ?>"> Add Property </a>
                                                  </li>
											</ul>
                                        </li>
										<li aria-haspopup="true" class="menu-dropdown classic-menu-dropdown">
                                            <a href="<?php echo base_url(); ?>enquiry"> General Enquiry
                                                <span class="arrow"></span>
                                            </a>
                                            <ul class="dropdown-menu pull-left">
                                                  <li aria-haspopup="true" class="dropdown-submenu ">
                                                       <a href="<?php echo base_url(); ?>enquiry"> Property Enquiry Listing </a>
                                                  </li><li aria-haspopup="true" class="dropdown-submenu ">
                                                       <a href="<?php echo base_url(); ?>add-enquiry"> Add Property Enquiry </a>
                                                  </li>
												  <li aria-haspopup="true" class="dropdown-submenu ">
                                                       <a href="<?php echo base_url(); ?>project-enquiry"> Project Enquiry </a>
                                                  </li>
												  </li><li aria-haspopup="true" class="dropdown-submenu ">
                                                       <a href="<?php echo base_url(); ?>add-project-enquiry"> Add Project Enquiry </a>
                                                  </li>
											</ul>
                                        </li>
                                        
										
										<li aria-haspopup="true" class="menu-dropdown classic-menu-dropdown">
                                            <a href="<?php echo base_url(); ?>follow-up"> Follow UP
                                                <span class="arrow"></span>
                                            </a>
                                        </li>
                                    </ul>                                    
                                </div>
                                <!-- END MEGA MENU -->
                            </div>
                        </div>
                        <!-- END HEADER MENU -->
                    </div>
                    <!-- END HEADER -->
                </div>