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
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="property-title">Title</label>
                        <input class="form-control" name='title' id="property-title" placeholder="Enter your property title eg Agriculture land" required='true'>
                    </div>
                </div>
				<div class="col-sm-6">
                    <div class="form-group">
                        <label for="property-price">Property price</label>
                        <input class="form-control" id="property-price" name = 'property_price' placeholder="Enter your property title" required='true'>
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
							<option selected="true" disabled="" value="">--Select--</option>
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
			      <div class="col-sm-6">
					   <div class="form-group">
					   	<label for="projects-area">Plot Area</label>
                        <input class="form-control" id="property-area" name="property-area" placeholder="Enter property area size" required='true'>
				       </div>
					 </div>
					 <div class="col-sm-6">
					 <div class="form-group">
					   <label for="projects-area">   </label>
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
			<div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="property-size-prefix">Size Prefix</label>
                        <input class="form-control" name="property-size" id="property-size-prefix" placeholder="Sq Ft" required='true'>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="property-year-built">Complition Year</label>
                        <div class="input-group input_date">
                            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                            <input class="form-control" name="property-year-built"  id="property-year-built" required='true'>
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

