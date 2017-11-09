 <div class="page-wrapper-row full-height">
            <div class="page-wrapper-middle">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-container page-content-wrapper">
				<div class="page-head">
                        <!-- BEGIN PAGE TITLE -->
                        <div class="page-title">
                            <h1><a href="<?php echo base_url('admin'); ?>">Dashboard</a>
                                <small>Edit Project</small>
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
			<?php if(checkValue($projects)) {   ?>

<form method='post'  action='<?php echo base_url("update-project"); ?>'  enctype="multipart/form-data">
<div class="account-block">
    <div class="add-title-tab">
        <h3>Property description and price</h3>
        <div class="add-expand"></div>
    </div>
    <div class="add-tab-content">
        <div class="add-tab-row push-padding-bottom">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="property-title">Title</label>
                        <input class="form-control" name='title' id="property-title" placeholder="Enter your property title eg 1BHK" value='<?php echo $projects[0]->title; ?>' required='true'>
                    </div>
                </div>
				<div class="col-sm-6">
                    <div class="form-group">
                        <label for="property-price">Property price</label>
                        <input class="form-control" value='<?php echo $projects[0]->projects_price; ?>' id="property-price" name = 'projects_price' placeholder="Enter your property title" required='true'>
                    </div>
                </div>
               
            </div>
        </div>
        <div class="add-tab-row push-padding-bottom">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="property-type">Property For</label>
                        <select class="form-control"  name='projects_type'  readonly>
						<option selected="true" disabled="" value="">--Select--</option>
                            <option value='Rent' <?php if($projects[0]->projects_for == 'Rent') echo 'selected'; ?>>Rent</option>
                            <option value='Sell'<?php if($projects[0]->projects_for == 'Sell') echo 'selected'; ?>>Sell</option>
                        </select>
                    </div>
                </div>
				 <div class="col-sm-6">
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" name='description' id="description" rows="6" placeholder="Enter your property title" required='true'><?php echo $projects[0]->description; ?></textarea>
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
                          <hr>
						  <?php $i=1; if(checkValue($projectsdetails)) { foreach($projectsdetails as $img) {  ?>
                                <div class="col-sm-3">
                                    <figure class="item-thumb">
                                        <a href="<?php echo base_url().DETAIL_IMAGE_PATH.'projects/'.$img->projects_id.'/thumb/'.$img->projects_images_name;  ?>" class="hover-effect" data-fancy="property_gallery[ga1]" title="Gallery Image">
                                            <img src="<?php echo base_url().DETAIL_IMAGE_PATH.'projects/'.$img->projects_id.'/thumb/'.$img->projects_images_name;  ?>" alt="Gallery Image">
                                        </a>
                                    </figure>
                                </div>
		                  <?php $i++; }}?>
				</div>
				
            </div>
        </div>
    </div>
</div>
<div class='clearfix'></div>
<hr>
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
                        <textarea class="form-control" name = 'address' id="address" placeholder="Enter your property address" required='true'><?php echo $projects[0]->address; ?></textarea>
                    </div>
                </div>
				<div class="col-sm-6">
                    <div class="form-group">
                        <label for="State">City</label>
                        <select class="form-control" name='city' id="country"  required>
						    <option selected="true" disabled="" value="">--Select--<?php echo $value->city_name.$projects[0]->city; ?></option>
							<?php if(checkValue($city)){ foreach($city as $value){ if( $value->city_name == $projects[0]->city ){ ?>
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
                        <input class="form-control" value='<?php echo $projects[0]->zip; ?>' id="zip" name="zip" placeholder="Enter your property title" required='true'>
                    </div>
                </div>
				<div class="col-sm-6">
                    <div class="form-group">
                        <label for="State">State</label>
                        <select class="form-control" name='state' id="country"  required>
												    <option selected="true" disabled="" value="">--Select--</option>
						<?php if(checkValue($state)){ foreach($state as $res) { if( $res->state_name == $projects[0]->state ){ ?>
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
        <h3>Property Size</h3>
        <div class="add-expand"></div>
    </div>
	<hr>
    <div class="add-tab-content">
        <div class="add-tab-row push-padding-bottom">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="property-area">Area Size</label>
                        <input class="form-control" value='<?php echo $projects[0]->projects_area; ?>' id="property-area" name="projects-area" placeholder="Enter property area size" required='true'>
                    </div>
                </div>
				<div class="col-sm-6">
					 	<div class="form-group">
							<label for="projects-area"></label>
					<select name='area_in' class='form-control'>
						   <option value='Sq-yrd'>Sq-yrd</option>
						   <option value='Sq-ft'>Sq-ft</option>
						   <option value='Sq-m'>Sq-m</option>
						   <option value='Acre'>Acre</option>
						   <option value='Bigha'>Bigha</option>
						   <option value='Hectare'>Hectare</option>
						   <option value='Marla'>Marla</option>
						   <option value='Kanal'>Kanal</option>
						   <option value='Biswa1'>Biswa1</option>
						   <option value='Biswa2'>Biswa2</option>
						   <option value='Ground'>Ground</option>
						   <option value='Aankadam'>Aankadam</option>
						   <option value='Rood'>Rood</option>
						   <option value='Chatak'>Chatak</option>
						   <option value='Kottah'>Kottah</option>
						   <option value='Marla'>Marla</option>
						    <option value='Cent'>Cent</option>
						   <option value='Perch'>Perch</option>
						   <option value='Guntha'>Guntha</option>
						   <option value='Are'>Are</option>
						 </select>
					  </div>
				   </div>
				</div>
				<div class='row'>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="property-size-prefix">Size Prefix</label>
                        <input class="form-control" value='<?php echo $projects[0]->projects_size; ?>' name="projects-size" id="property-size-prefix" placeholder="Sq Ft" required='true'>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="property-year-built">Year Built</label>
                        <div class="input-group input_date">
                            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                            <input class="form-control" name="projects-year-built" value='<?php echo $projects[0]->projects_year; ?>'  id="property-year-built" required='true'>
                             <input type='hidden' value='<?php  if(!empty($insertid)) echo $insertid; ?>'  name ='insertid'>
						</div>
                    </div>
                </div>
				</div>
            </div>
        </div>
    </div>
</div>
<div class="account-block">
<!--<div class="account-block">
    <div class="add-tab-content">
        <div class="add-tab-row push-padding-bottom">
            <div class="row">
                <div class="col-sm-12">
                    <div class="table-list">
                        <div class="form-group table-cell full-width" style="padding-right: 8px;">
                            <label for="videoImageUrl">Video Embeded URL</label>
                            <input class="form-control" name="videourl"  id="videoImageUrl" placeholder="Enter your property title" >
                            <input type='hidden' value='<?php // if(!empty($insertid)) echo $insertid; ?>'  name ='insertid'>
						</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>-->
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

