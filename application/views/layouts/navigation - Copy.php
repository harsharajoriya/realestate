 <!-- BEGIN SIDEBAR -->
            <div class="page-sidebar-wrapper">
                <!-- BEGIN SIDEBAR -->
                <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                <div class="page-sidebar navbar-collapse collapse">
                    <!-- BEGIN SIDEBAR MENU -->
                    <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
                    <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
                    <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
                    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                    <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
                    <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                    <ul class="page-sidebar-menu   " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                        <li class="nav-item start active open">
                            <a href="<?php echo base_url(); ?>admin" class="nav-link nav-toggle">
                                <i class="icon-home"></i>
                                <span class="title">Dashboard</span>
                                <span class="selected"></span>
                                <span class="arrow open"></span>
                            </a>
                        </li>
                       
                        <li class="nav-item  ">
                            <a href="<?php echo base_url(); ?>front-options" class="nav-link nav-toggle">
                                <i class="icon-diamond"></i>
                                <span class="title">Front Options</span>
                                <span class="arrow"></span>
                            </a>
                        </li>
						<li class="nav-item  ">
                            <a href="<?php echo base_url(); ?>enquiry" class="nav-link nav-toggle">
                                <i class="icon-envelope"></i>
                                <span class="title">General Enquiry</span>
                                <span class="arrow"></span>
                            </a>
                        </li>
						<li class="nav-item  ">
                            <a href="<?php echo base_url(); ?>property" class="nav-link nav-toggle">
                                <i class="icon-home"></i>
                                <span class="title">Property</span>
                                <span class="arrow"></span>
                            </a>
                        </li>
						<li class="nav-item  ">
                            <a href="<?php echo base_url(); ?>state" class="nav-link nav-toggle">
                                <i class="icon-pointer"></i>
                                <span class="title">State</span>
                                <span class="arrow"></span>
                            </a>
                        </li>
						<li class="nav-item  ">
                            <a href="<?php echo base_url(); ?>city" class="nav-link nav-toggle">
                                <i class="icon-pointer"></i>
                                <span class="title">City</span>
                                <span class="arrow"></span>
                            </a>
                        </li>
						<li class="nav-item  ">
                            <a href="<?php echo base_url(); ?>follow-up" class="nav-link nav-toggle">
                                <i class="fa fa-hourglass-start"></i>
                                <span class="title">Follow up</span>
                                <span class="arrow"></span>
                            </a>
                        </li>
                    </ul>
                    <!-- END SIDEBAR MENU -->
                </div>
                <!-- END SIDEBAR -->
            </div>
            <!-- END SIDEBAR -->