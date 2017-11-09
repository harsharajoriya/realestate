 <!-- BEGIN CONTENT -->
            <div class="page-wrapper-row full-height">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-wrapper-middle">
                    <!-- BEGIN PAGE HEAD-->
                    <div class="page-container page-content-wrapper">
                        <!-- BEGIN PAGE TITLE -->
					<div class='page-head'>
                        <div class="page-title">
                            <h1>  Home
                                <small>Dashboard</small>
                            </h1>
                        </div>
					</div>
					<div class='container'>
                        <!-- END PAGE TITLE -->
                        
                    </div>
					<hr>
                    <!-- END PAGE BREADCRUMB -->
				<div class='container'>
					<div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <a class="dashboard-stat dashboard-stat-v2 blue" href="#">
                                <div class="visual">
                                    <i class="fa fa-comments"></i>
                                </div>
                                <div class="details">
                                    <div class="number">
                                        <span data-counter="counterup" data-value="<?php echo count($enquiries); ?>
"><?php echo count($enquiries); ?>
</span>
                                    </div>
                                    <div class="desc"> Total Enquiries </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <a class="dashboard-stat dashboard-stat-v2 red" href="#">
                                <div class="visual">
                                    <i class="fa fa-bar-chart-o"></i>
                                </div>
                                <div class="details">
                                    <div class="number">
									<?php $pr=0; foreach($property as $prop){ if($prop->property_for == 'Rent' || $prop->property_for == 'Sell' ) { $pr++; }  }  ?>
                                        <span data-counter="counterup" data-value="<?php echo $pr; ?>"><?php echo $pr; ?></span></div>
                                    <div class="desc"> Total Property </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <a class="dashboard-stat dashboard-stat-v2 green" href="#">
                                <div class="visual">
                                    <i class="fa fa-shopping-cart"></i>
                                </div>
                                <div class="details">
                                    <div class="number">
									<?php $i=0; foreach($property as $pro){ if($pro->property_for == 'Rent') { $i++; }  }  ?>
                                        <span data-counter="counterup" data-value="<?php  echo $i; ?>"><?php  echo $i; ?></span>
                                    </div>
                                    <div class="desc">Total Rent Property </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <a class="dashboard-stat dashboard-stat-v2 purple" href="#">
                                <div class="visual">
                                    <i class="fa fa-globe"></i>
                                </div>
                                <div class="details">
                                    <div class="number"> 
									<?php $s=0; foreach($property as $pro){ if($pro->property_for == 'Sell') { $s++; }  }  ?>
                                        <span data-counter="counterup" data-value="<?php  echo $s; ?>"><?php  echo $s; ?></span></div>
                                    <div class="desc"> Total Sell Property </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- BEGIN PAGE BASE CONTENT -->
                         <div class="row">
                        <div class="col-lg-6 col-xs-12 col-sm-12">
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <span class="caption-subject bold uppercase font-dark">Revenue</span>
                                        <span class="caption-helper">distance stats...</span>
                                    </div>
                                    <div class="actions">
                                        <a class="btn btn-circle btn-icon-only btn-default" href="#">
                                            <i class="icon-cloud-upload"></i>
                                        </a>
                                        <a class="btn btn-circle btn-icon-only btn-default" href="#">
                                            <i class="icon-wrench"></i>
                                        </a>
                                        <a class="btn btn-circle btn-icon-only btn-default" href="#">
                                            <i class="icon-trash"></i>
                                        </a>
                                        <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="#"> </a>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div id="dashboard_amchart_1" class="CSSAnimationChart"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xs-12 col-sm-12">
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption ">
                                        <span class="caption-subject font-dark bold uppercase">Finance</span>
                                        <span class="caption-helper">distance stats...</span>
                                    </div>
                                    <div class="actions">
                                        <a href="#" class="btn btn-circle green btn-outline btn-sm">
                                            <i class="fa fa-pencil"></i> Export </a>
                                        <a href="#" class="btn btn-circle green btn-outline btn-sm">
                                            <i class="fa fa-print"></i> Print </a>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div id="dashboard_amchart_3" class="CSSAnimationChart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
             </div>
           </div>
                    <!-- END PAGE BASE CONTENT -->
          