<style>
#splash-section .splash-inner-content {
  height: 100%; 
}
#splash-section .splash-inner-media{
	background-image: url('./assets/images/splash/02_splash_page.jpg')
}
</style>
<div class="splash-search">
    <div class="search-table">
        <div class="search-col">
            <h1>The Right Place of House Finding</h1>
            <h2 class="banner-sub-title">Search for a place to stay?</h2>
            <form class="form-inline banner-search-main"  action='<?php echo base_url("search-property"); ?>' method='get'>
                <div class="form-group">
                    <select class="selectpicker"  name='location' title="Location" >
					 <?php if(checkValue($city)) { foreach($city as $name){  if($_GET['location'] == $name->city_name) { ?>
                        <option value='<?php echo $name->city_name; ?>' selected><?php echo $name->city_name; ?></option>
                     <?php }else{ ?>
					    <option value='<?php echo $name->city_name; ?>'><?php echo $name->city_name; ?></option>
					 <?php }} } ?>
                    </select>
					 <select class="selectpicker"  name='property_for' title="Property Type" >
					   <?php if(checkValue($_GET['property_for'])) {?>
                        <option value='Rent' <?php if($_GET['property_for'] == 'Rent') {echo 'selected'; } else{}?> >Rent</option>
						<option value='Sell' <?php if($_GET['property_for'] == 'Sell') {echo 'selected'; } else{}?> >Sell<option>
                       <?php }else{ ?> 
					    <option value='Rent'>Rent</option>
						<option value='Sell'>Sell<option>
					   <?php }?>
					</select>
                    <div class="search input-search input-icon">
                        <input class="form-control" type="text" placeholder="Enter Landmark, Location or Project" name='search' value="<?php if (isset($_GET["search"])) echo $_GET['search']; ?>" required='true'>
                    </div>
                    <div class="search-btn">
                        <button class="btn btn-secondary" type='submit'><i class="fa fa-search"></i> Search</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="splash-footer">
    <div class="row">
        <div class="col-sm-6 col-xs-6 splash-foot-left">
            <p><i class="fa fa-phone-square"></i> CALL US FREE <strong><?php  echo $this->fetch_value[0]->call_us; ?></strong></p>
        </div>
        <div class="col-sm-6 col-xs-6 splash-foot-right">
            <p>Follow us
                
              <a href="<?php  echo $this->fetch_value[0]->facebook_link; ?>" class="btn-facebook"><i class="fa fa-facebook-square"></i></a>
              <a href="<?php  echo $this->fetch_value[0]->twitter_link; ?>" class="btn-twitter"><i class="fa fa-twitter-square"></i></a>
              <a href="<?php  echo $this->fetch_value[0]->google_link; ?>" class="btn-google-plus"><i class="fa fa-google-plus-square"></i></a>
              <a href="<?php  echo $this->fetch_value[0]->linked_link; ?>" class="btn-linkedin"><i class="fa fa-linkedin-square"></i></a>
            </p>
        </div>
    </div>
</div>
</div>
</div>
</section>
<!--end section top-->

<!--start section page body-->
<section id="section-body">

<!--start carousel module-->
<div class="houzez-module-main">
<div class="houzez-module carousel-module">
<div class="container">
<div class="row">
<div class="col-sm-12">
    <div class="module-title-nav clearfix">
        <div>
            <h2>Latest for Sale</h2>
        </div>
        <div class="module-nav">
            <button class="btn btn-sm btn-crl-pprt-1-prev">Prev</button>
            <button class="btn btn-sm btn-crl-pprt-1-next">Next</button>
            <a href="<?php echo base_url('sell-property'); ?>" class="btn btn-carousel btn-sm">All</a>
        </div>
    </div>
</div>
<div class="col-sm-12">
<div class="row grid-row">
<div class="carousel properties-carousel-grid-1 slide-animated">
<?php if(checkValue($property)) { foreach($property as $value){
	if($value->property_for == 'Sell'){
?>
<div class="item">
    <div class="item-wrap">
        <div class="property-item item-grid">
            <div class="figure-block">
                <figure class="item-thumb">
                    <div class="label-wrap hide-on-list">
                        <div class="label-status label label-default">For Sell</div>
                    </div>
                    <span class="label-featured label label-success">Featured</span>
                    <div class="price hide-on-list">
                        <h3><?php echo ₹.$value->property_price; ?></h3>
                    </div>
                    <a href="<?php echo base_url("property-details/").$value->property_id; ?>" class="hover-effect">
					<?php if(checkValue($value->property_images_name)){ $path = DETAIL_IMAGE_PATH.'property/'.$value->property_id.'/thumb/'.$value->property_images_name; }else{$path = DETAIL_IMAGE_PATH.'no-image.png'; }?>
                        <img src="<?php  echo $path; ?>" alt="thumb">
                    </a>
                    <ul class="actions">
                        <li class="share-btn">
                            <div class="share_tooltip fade">
                                <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                                <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                                <a href="#"  target="_blank"><i class="fa fa-google-plus"></i></a>
                                <a href="#" target="_blank"><i class="fa fa-pinterest"></i></a>
                            </div>
                            <span data-toggle="tooltip" data-placement="top" title="share"><i class="fa fa-share-alt"></i></span>
                        </li>
                        <li>
                                                                <span data-toggle="tooltip" data-placement="top" title="Favorite">
                                                                    <i class="fa fa-heart-o"></i>
                                                                </span>
                        </li>
                        <li>
                                                                <span data-toggle="tooltip" data-placement="top" title="Photos (12)">
                                                                    <i class="fa fa-camera"></i>
                                                                </span>
                        </li>
                    </ul>
                </figure>
            </div>
            <div class="item-body">

                <div class="body-left">
                    <div class="info-row">
                        <div class="rating">
                            <span class="bottom-ratings"><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span style="width: 70%" class="top-ratings"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></span></span>
                            <span class="star-text-right">15 Ratings</span>
                        </div>
                        <h2 class="property-title"><a href="#"><?php echo $value->title; ?></a></h2>
                        <h4 class="property-location"><?php echo $value->address; ?></h4>
                    </div>
                    <div class="table-list full-width info-row">
                        <div class="cell">
                            <div class="info-row amenities">
                                <p>
                                    <span>Bed room: <?php echo $value->property_bedrooms; ?></span>
									<span>hall: <?php echo $value->property_hall; ?></span>
                                    <span>Baths: <?php echo $value->property_bathrooms; ?></span>
                                    <span>Sqft: <?php echo $value->property_size; ?></span>
                                </p>
                                <!--<p>Single Family Home</p>-->
                            </div>
                        </div>
                        <div class="cell">
                            <div class="phone">
                                <a href="#" class="btn btn-primary">Details <i class="fa fa-angle-right fa-right"></i></a>
                                <p><a href="#"><?php echo $value->number; ?></a></p>
                            </div>
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
</div>
<?php } } }else{ ?>
<div class="alert alert-warning alert-dismissible fade in" role="alert">
    <strong>No Property found....</strong>
</div>
 <?php } ?>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!--end carousel module-->

<!--start carousel module-->
<div class="houzez-module-main">
<div class="houzez-module carousel-module">
<div class="container">
<div class="row">
<div class="col-sm-12">
    <div class="module-title-nav clearfix">
        <div>
            <h2>Latest for Rent</h2>
        </div>
        <div class="module-nav">
            <button class="btn btn-sm btn-crl-pprt-2-prev">Prev</button>
            <button class="btn btn-sm btn-crl-pprt-2-next">Next</button>
            <a href="<?php echo base_url('rent-property'); ?>" class="btn btn-carousel btn-sm">All</a>
        </div>
    </div>
</div>
<div class="col-sm-12">
<div class="row grid-row">
<div class="carousel properties-carousel-grid-2 slide-animated">
<?php if(checkValue($property)) { foreach($property as $value){
	if($value->property_for == 'Rent'){
?>
<div class="item">
    <div class="item-wrap">
        <div class="property-item item-grid">
            <div class="figure-block">
                <figure class="item-thumb">
                    <div class="label-wrap hide-on-list">
                        <div class="label-status label label-default">For Rent</div>
                    </div>
                    <span class="label-featured label label-success">Featured</span>
                    <div class="price hide-on-list">
                        <h3><?php echo ₹.$value->property_price; ?></h3>
                    </div>
                    <a href="<?php echo base_url("property-details/").$value->property_id; ?>" class="hover-effect">
					<?php if(checkValue($value->property_images_name)){ $path = DETAIL_IMAGE_PATH.'property/'.$value->property_id.'/thumb/'.$value->property_images_name; }else{$path = DETAIL_IMAGE_PATH.'no-image.png'; }?>
                        <img src="<?php echo $path; ?>" alt="thumb">
                    </a>
                    <ul class="actions">
                        <li class="share-btn">
                            <div class="share_tooltip fade">
                                <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                                <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                                <a href="#"  target="_blank"><i class="fa fa-google-plus"></i></a>
                                <a href="#" target="_blank"><i class="fa fa-pinterest"></i></a>
                            </div>
                            <span data-toggle="tooltip" data-placement="top" title="share"><i class="fa fa-share-alt"></i></span>
                        </li>
                        <li>
                                                                        <span data-toggle="tooltip" data-placement="top" title="Favorite">
                                                                            <i class="fa fa-heart-o"></i>
                                                                        </span>
                        </li>
                        <li>
                                                                        <span data-toggle="tooltip" data-placement="top" title="Photos (12)">
                                                                            <i class="fa fa-camera"></i>
                                                                        </span>
                        </li>
                    </ul>
                </figure>
            </div>
            <div class="item-body">

                <div class="body-left">
                    <div class="info-row">
                        <div class="rating">
                            <span class="bottom-ratings"><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span style="width: 70%" class="top-ratings"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></span></span>
                            <span class="star-text-right">15 Ratings</span>
                        </div>
                        <h2 class="property-title"><a href="#"><?php echo $value->title; ?></a></h2>
                        <h4 class="property-location"><?php echo $value->address; ?></h4>
                    </div>
                    <div class="table-list full-width info-row">
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
                                <a href="#" class="btn btn-primary">Details <i class="fa fa-angle-right fa-right"></i></a>
                                <p><a href="#"><?php echo $value->number; ?></a></p>
                            </div>
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
</div>
<?php } } } else{ ?>
<div class="alert alert-warning alert-dismissible fade in" role="alert">
    <strong>No Property found....</strong>
</div>
 <?php } ?>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!--end carousel module-->

<!--start location module-->
<div class="houzez-module-main module-white-bg">
    <div class="houzez-module module-title text-center">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <h2>Our Locations</h2>
                    <h3 class="sub-heading">Book space in amazing locations across the world</h3>
                </div>
            </div>
        </div>
    </div>
    <div id="location-modul" class="houzez-module location-module grid">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="location-block">
                        <figure>
                            <a href="<?php echo base_url('sell-property'); ?>">
                                <img src="<?php echo base_url('assets/images/taxonomy-grid/01_370x370.jpg'); ?>" width="370" height="370" alt="Apartment">
                            </a>
                            <figcaption class="location-fig-caption">
                                <h3 class="heading">Sell Property</h3>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="location-block">
                        <figure>
                            <a href="<?php echo base_url('projects-listing'); ?>">
                                <img src="<?php echo base_url('assets/images/taxonomy-grid/01_770x370.jpg'); ?>" width="770" height="370" alt="Loft">
                            </a>
                            <div class="location-fig-caption">
                                <h3 class="heading">Projects</h3>
                            </div>
                        </figure>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="location-block">
                        <figure>
                            <a href="<?php echo base_url('rent-property'); ?>">
                                <img src="<?php echo base_url('assets/images/taxonomy-grid/02_770x370.jpg'); ?>" width="770" height="370" alt="Single Family Home">
                            </a>
                            <div class="location-fig-caption">
                                <h3 class="heading">Rent Property</h3>
                            </div>
                        </figure>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="location-block">
                        <figure>
                            <a href="<?php echo base_url('projects-listing'); ?>">
                                <img src="<?php echo base_url('assets/images/taxonomy-grid/02_370x370.jpg'); ?>" width="370" height="370" alt="Villa">
                            </a>
                            <div class="location-fig-caption">
                                <h3 class="heading">Projects</h3>
                            </div>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end location module-->

<!--start property item module-->
<div class="houzez-module-main module-gray-bg">
    <div class="houzez-module module-title text-center">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2>Best Property Value</h2>
                    <h3 class="sub-heading">Create Your Real Estate Website or Marketplace</h3>
                </div>
            </div>
        </div>
    </div>
    <div id="property-item-module" class="houzez-module property-item-module">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="row grid-row">
					<?php if(checkValue($projects)) $i= 0; { foreach($projects as $pro){ if($i <= 1){ ?>
                        <div class="col-sm-6">
                            <div class="item-wrap">
                                <div class="property-item item-grid">
                                    <div class="figure-block">
                                        <figure class="item-thumb">
                                            <div class="label-wrap hide-on-list">
                                                <div class="label-status label label-default">For <?php echo $pro->projects_for; ?></div>
                                            </div>
                                            <span class="label-featured label label-success">Featured</span>
                                            <div class="price hide-on-list">
                                                <h3><?php echo ₹.$pro->projects_price; ?></h3>
                                            </div>
                                            <a href="#" class="hover-effect">
																<?php if(checkValue($pro->projects_images_name)){ $path = DETAIL_IMAGE_PATH.'projects/'.$pro->projects_id.'/thumb/'.$pro->projects_images_name; }else{$path = DETAIL_IMAGE_PATH.'no-image.png'; }?>
                                                <img src="<?php echo $path; ?>" alt="thumb">
                                            </a>
                                            <ul class="actions">
                                                <li class="share-btn">
                                                    <div class="share_tooltip fade">
                                                        <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                                                        <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                                                        <a href="#"  target="_blank"><i class="fa fa-google-plus"></i></a>
                                                        <a href="#" target="_blank"><i class="fa fa-pinterest"></i></a>
                                                    </div>
                                                    <span data-toggle="tooltip" data-placement="top" title="share"><i class="fa fa-share-alt"></i></span>
                                                </li>
                                                <li>
                                                                        <span data-toggle="tooltip" data-placement="top" title="Favorite">
                                                                            <i class="fa fa-heart-o"></i>
                                                                        </span>
                                                </li>
                                            </ul>
                                        </figure>
                                    </div>
                                    <div class="item-body">

                                        <div class="body-left">
                                            <div class="info-row">
                                                <div class="rating">
                                                    <span class="bottom-ratings"><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span style="width: 70%" class="top-ratings"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></span></span>
                                                </div>
                                                <h2 class="property-title"><a href="#"><?php echo $pro->title; ?></a></h2>
                                                <h4 class="property-location"><?php echo $pro->address.' '.$pro->city; ?></h4>
                                            </div>
                                             
                                        </div>

                                    </div>
                                </div>
                               
                            </div>
                        </div>
					<?php } $i++; }} ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end property item module-->

</section>
<!--end section page body-->


