 <div class="page-wrapper-row full-height">
            <div class="page-wrapper-middle">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-container page-content-wrapper">
				<div class="page-head">
                        <!-- BEGIN PAGE TITLE -->
                        <div class="page-title">
                            <h1><a href="<?php echo base_url('admin'); ?>">Dashboard</a>
                                <small>Edit Property</small>
                            </h1>
                        </div>
                        <!-- END PAGE TITLE -->
                 </div>
				     <div class='container'>
                        <!-- END PAGE TITLE -->
                        
                    </div>
					<hr>
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
<div class='container'>    
 <div class='row'>
      <div class="col-lg-12 col-xs-12 col-sm-12  light bordered">		
         <div class='box box-info'>
        <!-- /.box-header -->
            <div class='box-body pad'>
			<?php if(checkValue($property)) {   ?>

<form action='<?php echo base_url('update-post'); ?>' method='post' id='master-form' enctype="multipart/form-data">
<div class="account-block">
    <div class="add-title-tab">
        <h3>Property description and price</h3>
        <div class="add-expand"></div>
    </div>
	<hr>
    <div class="add-tab-content">
        <div class="add-tab-row push-padding-bottom">
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="property-title">Title</label>
                        <input class="form-control" name='title' id="property-title" placeholder="Enter your property title eg 1BHK" value='<?php echo $property[0]->title; ?>' required='true'>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" name='description' id="description" rows="6" placeholder="Enter your property title" required='true'><?php echo $property[0]->description; ?></textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="add-tab-row push-padding-bottom">
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="property-type">Property For</label>
                        <select class="form-control"  name='property_type' required>
						<option selected="true" disabled="" value="">--Select--</option>
                            <option value='Rent' <?php if($property[0]->property_for == 'Rent') echo 'selected'; ?>>Rent</option>
                            <option value='Sell'<?php if($property[0]->property_for == 'Sell') echo 'selected'; ?>>Sell</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="property-type">Property Type</label>
                        <select class="form-control" id="property_type" name='property_type'  required>
							<option selected="true" disabled="" value="">--Select--</option>
                            <optgroup label="ALL RESIDENTIAL"></optgroup>
							    <option value='Residential House' <?php if($property[0]->property_type == 'Residential House') echo 'selected'; ?>>Residential House</option>
								<option value="Multistorey Apartment" <?php if($property[0]->property_type == 'Multistorey Apartment') echo 'selected'; ?>>Multistorey Apartment</option>
							
								<option value="Builder Floor Apartment" <?php if($property[0]->property_type == 'Builder Floor Apartment') echo 'selected'; ?>>Builder Floor Apartment</option>
							
								<option value="Residential House"<?php if($property[0]->property_type == 'Residential House') echo 'selected'; ?>>Residential House</option>
							
								<option value="Villa" <?php if($property[0]->property_type == 'Villa') echo 'selected'; ?>>Villa</option>
							
								<option value="Residential Plot" <?php if($property[0]->property_type == 'Residential Plot') echo 'selected'; ?>>Residential Plot</option>
							
								<option value="Penthouse" <?php if($property[0]->property_type == 'Penthouse') echo 'selected'; ?>>Penthouse</option>
							
								<option value="Studio Apartment" <?php if($property[0]->property_type == 'Studio Apartment') echo 'selected'; ?>>Studio Apartment</option>
								<option value='Hostel' <?php if($property[0]->property_type == 'Hostel') echo 'selected'; ?>>Hostele</option>
							<optgroup label="ALL COMMERCIAL"></optgroup>
								<option value="Commercial Office Space" <?php if($property[0]->property_type == 'Commercial Office Space') echo 'selected'; ?>>Commercial Office Space</option>
								<option value="Office in IT Park/ SEZ" <?php if($property[0]->property_type == 'Office in IT Park/ SEZ') echo 'selected'; ?>>Office in IT Park/ SEZ</option>
								<option value="Commercial Shop" <?php if($property[0]->property_type == 'Commercial Shop') echo 'selected'; ?>>Commercial Shop</option>
								<option value="Commercial Showroom" <?php if($property[0]->property_type == 'Commercial Showroom') echo 'selected'; ?>>Commercial Showroom</option>
								<option value="Commercial Land" <?php if($property[0]->property_type == 'Commercial Land') echo 'selected'; ?>>Commercial Land</option>
								<option value="Warehouse/ Godown" <?php if($property[0]->property_type == 'Warehouse/ Godown') echo 'selected'; ?>>Warehouse/ Godown</option>
								<option value="Industrial Land" <?php if($property[0]->property_type == 'Industrial Land') echo 'selected'; ?>>Industrial Land</option>
								<option value="Industrial Building" <?php if($property[0]->property_type == 'Industrial Building') echo 'selected'; ?>>Industrial Building</option>
								<option value="Industrial Shed" <?php if($property[0]->property_type == 'Industrial Shed') echo 'selected'; ?>>Industrial Shed</option>
							   <optgroup label="ALL AGRICULTURAL" <?php if($property[0]->property_type == 'ALL AGRICULTURAL') echo 'selected'; ?>></optgroup>
								<option value="Agricultural Land" <?php if($property[0]->property_type == 'Agricultural Land') echo 'selected'; ?>>Agricultural Land</option>
								<option value="Farm House" <?php if($property[0]->property_type == 'Farm House') echo 'selected'; ?>>Farm House</option>
                        </select>
                    </div>
                </div>
				<div class="col-sm-4">
                    <div class="form-group">
                        <label for="property-price">Property price</label>
                        <input class="form-control" value='<?php echo $property[0]->property_price; ?>' id="property-price" name = 'property_price' placeholder="Enter your property title" required='true'>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<hr>
<div class="account-block">
    <div class="add-title-tab">
        <h3>Property media</h3>
        <div class="add-expand"></div>
    </div>
	<hr>
    <div class="add-tab-content">
        <div class="add-tab-row">
            <div class="property-media">
                <div class="media-drag-drop">
					<input id="file_upload" name="file_upload" type="file" multiple="true"  class="btn btn-primary" >
                    <input type="hidden" name="base_url" id="base_url" value="<?php echo base_url(); ?>">
                         <input type="hidden" id="list_id" value="<?php if(!empty($insertid)) echo $insertid; ?>">
                          <input type="hidden" id="image_type" value="property">
                          <div id="queue"></div>
						  <div class= clearfix></div>

						  <?php $i=1; if(checkValue($propertydetails)) { foreach($propertydetails as $img) { ?>
                                <div class="col-sm-3">
                                    <figure class="item-thumb">
                                        <a href="<?php echo base_url().DETAIL_IMAGE_PATH.'property/'.$img->property_id.'/thumb/'.$img->property_images_name;  ?>" class="hover-effect" data-fancy="property_gallery[ga1]" title="Gallery Image">
                                            <img src="<?php echo base_url().DETAIL_IMAGE_PATH.'property/'.$img->property_id.'/thumb/'.$img->property_images_name;  ?>" alt="Gallery Image">
                                        </a>
                                    </figure>
                                </div>
		                    <?php $i++; }}?>
				</div>
				
            </div>
        </div>
    </div>
</div>
<hr>
<div class= clearfix></div>
<div class="account-block">
    <div class="add-title-tab">
        <h3>Property location</h3>
        <div class="add-expand"></div>
    </div>
	<hr>
    <div class="add-tab-content">
        <div class="add-tab-row  push-padding-bottom">
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="address">Address</label>
                        <textarea class="form-control" name = 'address' id="address" placeholder="Enter your property address" required='true'><?php echo $property[0]->address; ?></textarea>
                    </div>
                </div>
				<div class="col-sm-6">
                    <div class="form-group">
                        <label for="State">City</label>
                        <select class="form-control" name='city' id="country"  required>
						    <option selected="true" disabled="" value="">--Select--<?php echo $value->city_name.$property[0]->city; ?></option>
							<?php if(checkValue($city)){ foreach($city as $value){ if( $value->city_name == $property[0]->city ){ ?>
                            <option value='<?php echo $value->city_name; ?>' selected><?php echo $value->city_name; ?></option>
							<?php }else{ ?>
							 <option value='<?php echo $value->city_name; ?>'><?php echo $value->city_name; ?></option>
							<?php }}} ?>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="zip">Zip</label>
                        <input class="form-control" value='<?php echo $property[0]->zip; ?>' id="zip" name="zip" placeholder="Enter your property title" required='true'>
                    </div>
                </div>
				<div class="col-sm-6">
                    <div class="form-group">
                        <label for="State">State</label>
                        <select class="form-control" name='state' id="country"  required>
												    <option selected="true" disabled="" value="">--Select--</option>
						<?php if(checkValue($state)){ foreach($state as $res) { if( $res->state_name == $property[0]->state ){ ?>
                            <option value='<?php echo $res->state_name; ?>' selected><?php echo $res->state_name; ?></option>
						<?php }else{ ?>
						    <option value='<?php echo $res->state_name; ?>'><?php echo $res->state_name; ?></option>
						<?php } } } ?>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="country">Country</label>
                        <select class="form-control" name='country' id="country" required>
                            <option value='india'>India</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
       <!-- <div class="add-tab-row">
            <div class="row">
                <div class="col-sm-6">
                    <div id="map">
                        <img src="images/add-map-image.png" alt="img">
                    </div>
                    <button class="btn btn-primary btn-block">Place the pin using the property address above</button>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="property-map">Google Maps latitude</label>
                        <input class="form-control" id="property-map" placeholder="Enter your property title" required='true'>
                    </div>
                    <div class="form-group">
                        <label for="property-map-long">Google Maps longitude</label>
                        <input class="form-control" id="property-map-long" placeholder="Enter your property title" required='true'>
                    </div>
                    <div class="form-group">
                        <label for="property-map-street">Google Street View - Camera Angle</label>
                        <input class="form-control" id="property-map-street" placeholder="Enter your property title" required='true'>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox">
                            Enable Google street view
                        </label>
                    </div>
                </div>
            </div>
        </div>-->
    </div>
</div>
<hr>
<div class="account-block">
    <div class="add-title-tab">
        <h3>Property location</h3>
        <div class="add-expand"></div>
    </div>
	<hr>
    <div class="add-tab-content">
        <div class="add-tab-row push-padding-bottom">
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="property-area">Area Size</label>
                        <input class="form-control" value='<?php echo $property[0]->property_area; ?>' id="property-area" name="property-area" placeholder="Enter property area size" required='true'>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="property-size-prefix">Size Prefix</label>
                        <input class="form-control" value='<?php echo $property[0]->property_size; ?>' name="property-size" id="property-size-prefix" placeholder="Sq Ft" required='true'>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="property-bedrooms">Bedrooms</label>
                        <input class="form-control" value='<?php echo $property[0]->property_bedrooms; ?>' id="property-bedrooms" name="property-bedrooms" placeholder="Enter number of bedrooms" required='true'>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="property-bathrooms">Bathrooms</label>
                        <input type='number'class="form-control" value='<?php echo $property[0]->property_bathrooms; ?>' id="property-bathrooms" name="property-bathrooms" placeholder="Enter number of bathrooms" required='true'>
                    </div>
                </div>
				 <div class="col-sm-4">
                    <div class="form-group">
                        <label for="property_hall">Hall</label>
                        <input type='number' class="form-control" value='<?php echo $property[0]->property_hall; ?>' id="property_hall" name="property_hall" placeholder="Enter number of hall" required='true'>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="property-year-built">Year Built</label>
                        <div class="input-group input_date">
                            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                            <input class="form-control" name="property-year-built" value='<?php echo $property[0]->property_year; ?>'  id="property-year-built" required='true'>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<hr>
<div class="account-block">
    <div class="add-title-tab">
        <h3>Property Features</h3>
        <div class="add-expand"></div>
    </div>
	<hr>
    <div class="add-tab-content">
        <div class="add-tab-row push-padding-bottom">
                <div class="col-sm-2">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" id='Swimingpull' name='Swimingpull' <?php if($property[0]->Swimingpull == '1') echo 'checked'; ?> >
                            Swimming pool
                        </label>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" id='gym' name='gym' <?php if($property[0]->gym == '1') echo 'checked'; ?> >
                            Gym
                        </label>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name='balcuny' id='balcuny'  <?php if($property[0]->balcuny == '1') echo 'checked'; ?> >
                            Balcony
                        </label>
                    </div>
                </div>
    </div>
</div>
<!--<div class="account-block">
    <div class="add-tab-content">
        <div class="add-tab-row push-padding-bottom">
            <div class="row">
                <div class="col-sm-12">
                    <div class="table-list">
                        <div class="form-group table-cell full-width" style="padding-right: 8px;">
                            <label for="videoImageUrl">Video Embeded URL</label>
                            <input class="form-control" name="videourl"  id="videoImageUrl" placeholder="Enter your property title" >
                            <input type='hidden' value='<?php //if(!empty($insertid)) echo $insertid; ?>'  name ='insertid'>
						</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>-->
<hr>
<div class="account-block">
    <button type="submit" class="btn btn-primary">Submit Property</button>
</div>
<hr>
</form>
			<?php } ?>
  </div>
    </div>
      </div>
		  </div>
		  </div>
		  </div>
		  </div>
		  </div>
		  </div>
<!--end section page body-->

