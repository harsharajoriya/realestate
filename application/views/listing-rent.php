<section class="advanced-search advance-search-header">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <form action='<?php echo base_url('search-property'); ?>' method='GET'>
                    <div class="form-group search-long">
                        <div class="search">
                            <div class="input-search input-icon">
                                <input class="form-control" type="text" required='true' placeholder="Search for a place to stay?" name='search' id='search' value="<?php if (isset($_GET["search"])) echo $_GET['search']; ?>">
                            </div>
							<select class="selectpicker bs-select-hidden"  name='location' id='location' title="Location" >
								 <?php if(checkValue($city)) { foreach($city as $name){  if($_GET['location'] == $name->city_name) { ?>
									<option value='<?php echo $name->city_name; ?>' selected><?php echo $name->city_name; ?></option>
								 <?php }else{ ?>
									<option value='<?php echo $name->city_name; ?>'><?php echo $name->city_name; ?></option>
								 <?php }} } ?>
                             </select>
							 <select class="selectpicker bs-select-hidden" id='property_for'  name='property_for' title="Property Type" >
							   <?php if(checkValue($_GET['property_for'])) {?>
								<option value='Rent' <?php if($_GET['property_for'] == 'Rent') {echo 'selected'; } else{}?> >Rent</option>
								<option value='Sell' <?php if($_GET['property_for'] == 'Sell') {echo 'selected'; } else{}?> >Sell<option>
							   <?php }else{ ?> 
								<option value='Rent'>Rent</option>
								<option value='Sell'>Sell<option>
							   <?php }?>
					        </select>
                            <div class="advance-btn-holder">
                                <button class="advance-btn btn" type="button"><i class="fa fa-gear"></i> Advanced</button>
                            </div>
                        </div>
                        <div class="search-btn">
                            <button  type='submit' class="btn btn-secondary">Go</button>
                        </div>
                    </div>
                    <div class="advance-fields">
                        <div class="row">
                            <div class="col-sm-12 col-xs-6">
                                <div class="range-advanced-main">
                                    <div class="range-text">
                                        <input type="text" name='min-price' class="min-price-range-hidden range-input" readonly="">
                                        <input type="text" name='max-price'  class="max-price-range-hidden range-input" readonly="">
                                        <p><span class="range-title">Price Range:</span> from <span id='min-price' class="min-price-range">$ 500</span> to <span id='max-price' class="max-price-range">$ 5,000</span></p>
                                    </div>
                                    <div class="range-wrap">
                                        <div class="price-range-advanced ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 0%; width: 100%;"></div><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 0%;"></span><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 100%;"></span></div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
    <!--start section page body-->
    <section id="section-body">
        <div class="container">
            <div class="page-title breadcrumb-top">
                <div class="row">
                    <div class="col-sm-12">
                        <ol class="breadcrumb"><li ><a href="<?php echo base_url(); ?>"><i class="fa fa-home"></i></a></li><li class="active">Sell – List View</li></ol>
                        <div class="page-title-left">
                            <h1 class="title-head">Rent – List View</h1>
                        </div>
                        <div class="page-title-right">
                            <div class="view hidden-xs">
                                <div class="table-cell">
                                    <span class="view-btn btn-list active"><i class="fa fa-th-list"></i></span>
                                    <span class="view-btn btn-grid"><i class="fa fa-th-large"></i></span>
                                    <span class="view-btn btn-grid-3-col"><i class="fa fa-th"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			<?php if ($this->session->flashdata("flashSuccess")) { ?> 
                <div class="alert alert-success alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <strong><?php echo $this->session->flashdata("flashSuccess"); ?></strong>
                </div>
            <?php }if ($this->session->flashdata("flashError")) { ?>
                <div class="alert alert-danger alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <strong><?php echo $this->session->flashdata("flashError"); ?></strong>
                </div>
            <?php } ?>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 list-grid-area">
                    <div id="content-area">
 <!--start property items-->
 							 <div class="modal fade" id="composemodal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title"><i class="fa fa-envelope-o"></i>Property Enquiry</h4>
            </div>
            
            <form action="<?php echo base_url('submit-enquiry'); ?>" method="post" accept-charset="utf-8" id='property_enquiry_form' enctype="multipart/form-data">            <div class="modal-body">
                <input type="hidden" id="property_id" name="property_id" >
                 <input type='hidden' name='url' value='listing-rent'> 
				<div class="form-group">
                    <div class="input-group"> <span class="input-group-addon"><label>First Name</label></span>
                        <input type="text" name="first_name" id="first_name" placeholder="Enter First Name" class="form-control"  />                    </div>
                </div>
				
				 <div class="form-group">
                    <div class="input-group"> <span class="input-group-addon"><label>Last Name</label></span>
                        <input type="text" name="last_name" id="last_name" placeholder="Enter Last Name" class="form-control"  />                    </div>
                </div>
                
				 <div class="form-group">
                    <div class="input-group"> <span class="input-group-addon"><label>Email</label></span>
                        <input type="text" name="email" id="email" placeholder="Enter Email" class="form-control"  />                    </div>
                </div>
               
			    <div class="form-group">
                    <div class="input-group"> <span class="input-group-addon"><label>Mobile Number</label></span>
                        <input type="text" name="mobile_number" id="number" placeholder="Enter Mobile Number" class="form-control"  />                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group"> <span class="input-group-addon"><label>Subject</label></span>
                        <input type="text" name="subject" value="" id="subject" placeholder="Subject" class="form-control"  />                    </div>
                </div>
				
				<div class="form-group">
                    <textarea name="message" cols="40" rows="10" id="message" placeholder="Message" class="form-control" ></textarea>
                 </div>
            </div>
            <div class="modal-footer clearfix">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Discard</button>
                <input type="submit" name="submit" value="Send Message" class="btn btn-primary pull-left"  />            </div>

            </form>
		</div>
        <!-- /.modal-content --> 
    </div>
    <!-- /.modal-dialog --> 
</div>
                        <div class="property-listing list-view">
                            <div class="row">
							<?php if(checkValue($property)){ foreach($property as $value) {  ?>
                                <a href='<?php echo base_url("product-details/").$value->property_id; ?>'>
								<div class="item-wrap">
                                    <div class="property-item table-list">
                                        <div class="table-cell">
                                            <div class="figure-block">
                                                <figure class="item-thumb">
                                                    <span class="label-featured label label-success">Featured</span>
                                                    <div class="label-wrap label-right hide-on-list">
                                                        <span class="label label-default">For rent</span>
                                                    </div>
                                                    <div class="price hide-on-list">
                                                        <p class="rant"><?php echo ₹.$value->property_price.'/mo'; ?></p>
                                                    </div>
                                                    <a href='<?php echo base_url("property-details/").$value->property_id; ?>' class="hover-effect-grid">
					                                <?php if(checkValue($value->property_images_name)){ $path = base_url(DETAIL_IMAGE_PATH.'property/'.$value->property_id.'/thumb/'.$value->property_images_name); }else{$path = DETAIL_IMAGE_PATH.'no-image.png'; }?>
                                                        <img src="<?php echo $path; ?>" alt="<?php echo $value->title; ?>">
                                                    </a>
                                                    <ul class="actions">
                                                        <li>
                                                                <span title="" data-placement="top" data-toggle="tooltip" data-original-title="Favorite">
                                                                    <i class="fa fa-heart"></i>
                                                                </span>
                                                        </li>
                                                        <li class="share-btn">
                                                            <div class="share_tooltip fade">
                                                                <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                                                                <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                                                                <a target="_blank" href="#"><i class="fa fa-google-plus"></i></a>
                                                                <a target="_blank" href="#"><i class="fa fa-pinterest"></i></a>
                                                            </div>
                                                            <span title="" data-placement="top" data-toggle="tooltip" data-original-title="share"><i class="fa fa-share-alt"></i></span>
                                                        </li>
                                                        <li>
                                                                <span data-toggle="tooltip" data-placement="top" title="Photos (12)">
                                                                    <i class="fa fa-camera"></i>
                                                                </span>
                                                        </li>
                                                    </ul>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="item-body table-cell">

                                            <div class="body-left table-cell">
                                                <div class="info-row">
                                                    <div class="label-wrap hide-on-grid">
                                                        <div class="label-status label label-default">For rent</div>
                                                    </div>
                                                    <h2 class="property-title"><a href="#"><?php echo $value->title; ?></a></h2>
                                                    <h4 class="property-location"><?php echo $value->address; ?></h4>
                                                </div>
                                                <div class="info-row amenities hide-on-grid">
                                                    <p>
                                                       <span>Bed room: <?php echo $value->property_bedrooms; ?></span>
														<span>hall: <?php echo $value->property_hall; ?></span>
														<span>Baths: <?php echo $value->property_bathrooms; ?></span>
														<span>Sqft: <?php echo $value->property_size; ?></span>
                                                    </p>
                                                </div>
                                                <div class="info-row date hide-on-grid">
                                                    <p><i class="fa fa-user"></i> <a href="#"><?php echo $value->first_name.' '.$value->last_name; ?></a></p>
                                                    <p><i class="fa fa-calendar"></i><?php $now = time(); // or your date as well
                                                 $your_date = strtotime($value->created);
                                                 $datediff = $now - $your_date;
                                                 $day =  floor($datediff / (60 * 60 * 24));
												 if($day == 0)
											     {
													 echo 'Today';
												 }else{
													 echo $day.' '.'Days ago';
												 }
												 ?></p>
                                                </div>
                                            </div>
                                            <div class="body-right table-cell hidden-gird-cell">
                                                <div class="info-row price">
                                                    <p class="price-start">Start from</p>
                                                    <h3><?php echo ₹.$value->property_price.'/mo'; ?></h3>
                                                </div>
                                                <div class="info-row phone text-right">
                                                    <a href="#" class="btn btn-primary property_enquiry" value='<?php echo $value->property_id; ?>'>Enquiry <i class="fa fa-angle-right fa-right"></i></a>
                                                    <p><a href="#"><?php echo $value->number; ?></a></p>
                                                </div>
                                            </div>
                                            <div class="table-list full-width hide-on-list">
                                                <div class="cell">
                                                    <div class="info-row amenities">
                                                        <p>
                                                        <span>Bed room: <?php echo $value->property_bedrooms; ?></span>
														<span>hall: <?php echo $value->property_hall; ?></span>
														<span>Baths: <?php echo $value->property_bathrooms; ?></span>
														<span>Sqft: <?php echo $value->property_size; ?></span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="cell">
                                                    <div class="phone">
                                                        <a href="#" class="btn btn-primary property_enquiry" value='<?php echo $value->property_id; ?>'>Enquiry <i class="fa fa-angle-right fa-right"></i></a>
                                                        <p><a href="#"><?php echo $value->number; ?></a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-foot date hide-on-list">
                                        <div class="item-foot-left">
                                            <p><i class="fa fa-user"></i> <a href="#"><?php echo $value->first_name.' '.$value->last_name; ?></a></p>
                                        </div>
                                        <div class="item-foot-right">
                                            <p><i class="fa fa-calendar"></i><?php $now = time(); // or your date as well
                                                 $your_date = strtotime($value->created);
                                                 $datediff = $now - $your_date;
                                                 $day =  floor($datediff / (60 * 60 * 24));
												 if($day == 0)
											     {
													 echo 'Today';
												 }else{
													 echo $day.' '.'Days ago';
												 }
												 ?></p>
                                        </div>
                                    </div>
                                </div>
								</a>
							<?php }}else{ ?>
								<div class="alert alert-warning alert-dismissible fade in" role="alert">
									<strong>No Property found....</strong>
								</div>
							<?php } ?>
                            </div>
                        </div>
                        <!--end property items-->
                        <hr>

                        <!--start Pagination-->
                        <div class="pagination-main">
                               <?php echo isset($links) && !empty($links) ? $links : ''; ?>
                        </div>
                        <!--start Pagination-->

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end section page body-->