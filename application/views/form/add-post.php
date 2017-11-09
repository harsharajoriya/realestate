<!--start section page body-->
<section id="section-body">
<div class="container">
<div class="membership-page-top">
    <div class="row">
        <div class="col-sm-12 col-xs-12">
            <div class="membership-page-title">
                <h1 class="page-title"> Sell or Rent your Property </h1>
                <p class="page-subtitle"> Please fill information to complete your membership! </p>
            </div>
        </div>
    </div>
</div>

<div class="membership-content-area">
<form action='<?php echo base_url('submit-post'); ?>' method='post' id='master-form' enctype="multipart/form-data">
<div class="account-block">
    <div class="add-title-tab">
        <h3>Property description and price</h3>
        <div class="add-expand"></div>
    </div>
    <div class="add-tab-content">
        <div class="add-tab-row push-padding-bottom">
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="property-title">Title</label>
                        <input class="form-control" name='title' id="property-title" placeholder="Enter your property title eg 1BHK" required='true'>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" name='description' id="description" rows="6" placeholder="Enter your property title" required='true'></textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="add-tab-row push-padding-bottom">
            <div class="row">
				<div class="col-sm-4">
                    <div class="form-group">
                        <label for="property-price">Property price</label>
                        <input class="form-control" id="property-price" name = 'property_price' placeholder="Enter your property title" required='true'>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="account-block">
    <div class="add-title-tab">
        <h3>Property media</h3>
        <div class="add-expand"></div>
    </div>
    <div class="add-tab-content">
        <div class="add-tab-row">
            <div class="property-media">
                <div class="media-drag-drop">
					<input id="file_upload" name="file_upload" type="file" multiple="true" required="true" class="btn btn-default" >
                    <input type="hidden" name="base_url" id="base_url" value="<?php echo base_url(); ?>">
                         <input type="hidden" id="list_id" value="<?php if(!empty($insertid)) echo $insertid; ?>">
                          <input type="hidden" id="image_type" value="property">
                          <div id="queue"></div>
				</div>
            </div>
        </div>
    </div>
</div>
<div class="account-block">
    <div class="add-title-tab">
        <h3>Property location</h3>
        <div class="add-expand"></div>
    </div>
    <div class="add-tab-content">
        <div class="add-tab-row  push-padding-bottom">
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="address">Address</label>
                        <textarea class="form-control" name = 'address' id="address" placeholder="Enter your property address" required='true'></textarea>
                    </div>
                </div>
				<div class="col-sm-6">
                    <div class="form-group">
                        <label for="State">City</label>
                        <select class="form-control" name='city' id="country"  required>
						    <option selected="true" disabled="" value="">--Select--</option>
							<?php if(checkValue($city)){ foreach($city as $value){ ?>
                            <option value='<?php echo $value->city_name; ?>'><?php echo $value->city_name; ?></option>
							<?php }} ?>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="zip">Zip</label>
                        <input class="form-control" id="zip" name="zip" placeholder="Enter your property title" required='true'>
                    </div>
                </div>
				<div class="col-sm-6">
                    <div class="form-group">
                        <label for="State">State</label>
                        <select class="form-control" name='state' id="country"  required>
												    <option selected="true" disabled="" value="">--Select--</option>
						<?php if(checkValue($state)){ foreach($state as $res) {  ?>
                            <option value='<?php echo $res->state_name; ?>'><?php echo $res->state_name; ?></option>
						<?php } } ?>
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
<div class="account-block">
    <div class="add-title-tab">
        <h3>Property Size</h3>
        <div class="add-expand"></div>
    </div>
    <div class="add-tab-content">
        <div class="add-tab-row push-padding-bottom">
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="property-area">Area Size</label>
                        <input class="form-control" id="property-area" name="property-area" placeholder="Enter property area size" required='true'>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="property-size-prefix">Size Prefix</label>
                        <input class="form-control" name="property-size" id="property-size-prefix" placeholder="Sq Ft" required='true'>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="property-bedrooms">Bedrooms</label>
                         <select class="form-control" name='property-bedrooms' id="property-bedrooms" required>
							<option selected="true" disabled="" value="">--Select--</option>
                            <option value='1'>1</option>
                            <option value='2'>2</option>
                            <option value='3'>3</option>
                            <option value='4'>4</option>
                            <option value='5+'>5+</option>
                        </select>
					</div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="property-bathrooms">Bathrooms</label>
                        <select class="form-control" name='property-bathrooms' id="property-bathrooms" required>
							<option selected="true" disabled="" value="">--Select--</option>
                            <option value='1'>1</option>
                            <option value='2'>2</option>
                            <option value='3'>3</option>
                            <option value='4'>4</option>
                            <option value='5+'>5+</option>
                        </select>
					</div>
                </div>
				 <div class="col-sm-4">
                    <div class="form-group">
                        <label for="property_hall">Hall</label>
                       <select class="form-control" name='property_hall' id="property_hall" required>
							<option selected="true" disabled="" value="">--Select--</option>
                            <option value='1'>1</option>
                            <option value='2'>2</option>
                            <option value='3'>3</option>
                            <option value='4'>4</option>
                            <option value='5+'>5+</option>
                        </select>
					</div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="property-year-built">Complition Year</label>
                        <div class="input-group input_date">
                            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                            <input class="form-control" name="property-year-built"  id="property-year-built" required='true'>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="account-block">
    <div class="add-title-tab">
        <h3>Property Features</h3>
        <div class="add-expand"></div>
    </div>
    <div class="add-tab-content">
        <div class="add-tab-row push-padding-bottom">
            <div class="row">
                <div class="col-sm-2">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" id='Swimingpull' name='Swimingpull'>
                            Swimming pool
                        </label>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" id='gym' name='gym'>
                            Gym
                        </label>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name='balcuny' id='balcuny'>
                            Balcony
                        </label>
                    </div>
                </div>
        </div>
    </div>
</div>
<div class="account-block">
    <div class="add-tab-content">
        <div class="add-tab-row push-padding-bottom">
            <div class="row">
                <div class="col-sm-12">
                    <div class="table-list">
                        <div class="form-group table-cell full-width" style="padding-right: 8px;">
                            <!--<label for="videoImageUrl">Video Embeded URL</label>
                            <input class="form-control" name="videourl"  id="videoImageUrl" placeholder="Enter your property title" >-->
                            <input type='hidden' value='<?php if(!empty($insertid)) echo $insertid; ?>'  name ='insertid'>
						   	<input type='hidden' value='<?php if(!empty($property_for)) echo $property_for; ?>'  name ='property_for'>
						</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="account-block text-right">
    <button type="submit" class="btn btn-primary">Submit Property</button>
</div>
</form>
</div>
</section>
<!--end section page body-->

