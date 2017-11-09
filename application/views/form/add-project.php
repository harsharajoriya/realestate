<!--start section page body-->
<section id="section-body">
<div class="container">
<div class="membership-page-top">
    <div class="row">
        <div class="col-sm-12 col-xs-12">
            <div class="membership-page-title text-center">
                <h1 class="page-title"> Sell or Rent your Project </h1>
                <p class="page-subtitle"> Please fill information to complete your membership! </p>
            </div>
        </div>
    </div>
</div>
<?php  if($this->session->flashdata("flashSuccess")){  ?> 
                  <div class="alert alert-success alert-dismissible fade in" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                        <strong><?php echo $this->session->flashdata("flashSuccess"); ?></strong>
                 </div>
                  <?php }if($this->session->flashdata("flashError")){ ?>
                  <div class="alert alert-danger alert-dismissible fade in" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      <strong><?php echo $this->session->flashdata("flashError"); ?></strong>
                  </div>
<?php } ?>
<div class="membership-content-area">
<form action='<?php echo base_url('submit-project'); ?>' method='post' id='property_project' enctype="multipart/form-data">
<div class="account-block">
    <div class="add-title-tab">
        <h3>Project description and price</h3>
        <div class="add-expand"></div>
    </div>
	<hr>
    <div class="add-tab-content">
        <div class="add-tab-row push-padding-bottom">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="projects-title">Title</label>
                        <input class="form-control" name='title' id="projects-title" placeholder="Enter your projects title eg 1BHK" required='true'>
                    </div>
                </div>
				<div class="col-sm-6">
					<div class="form-group">
						<label for="projects-price">Project price</label>
						<input class="form-control" id="projects-price" name = 'projects_price' placeholder="Enter your projects title" required='true'>
					</div>
				</div>               
            </div>
        </div>
        <div class="add-tab-row push-padding-bottom">
		  <div class="row">
		     <div class="col-sm-6">
                    <div class="form-group">
                        <label for="projects-type">Project For</label>
                        <select class="form-control"  name='projects_for' required>
						<option selected="true" disabled="" value="">--Select--</option>
                            <option value='Rent'>Rent</option>
                            <option value='Sell'>Sell</option>
                        </select>
                    </div>
             </div>
			  <div class="col-sm-6">
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" name='description' id="description" rows="6" placeholder="Enter your projects title" required='true'></textarea>
                    </div>
              </div>
			</div>
        </div>
    </div>
</div>
<hr>

<div class="account-block">
    <div class="add-title-tab">
        <h3>Project location</h3>
        <div class="add-expand"></div>
    </div>
	<hr>
    <div class="add-tab-content">
        <div class="add-tab-row  push-padding-bottom">
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="address">Address</label>
                        <textarea class="form-control" name = 'address' id="address" placeholder="Enter your projects address" required='true'></textarea>
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
                        <input class="form-control" id="zip" name="zip" placeholder="Enter your projects title" required='true'>
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
    </div>
</div>
<hr>
<div class="account-block">
    <div class="add-title-tab">
        <h3>Project Size</h3>
        <div class="add-expand"></div>
    </div>
	<hr>
    <div class="add-tab-content">
        <div class="add-tab-row push-padding-bottom">
            <div class="row">
					 <div class="col-sm-6">
					   <div class="form-group">
					   	<label for="projects-area">Plot Area</label>
                         <input class="form-control" id="projects-area" name="projects-area" placeholder="Enter projects area size" required='true'>
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
				<div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="projects-size-prefix">Size Prefix</label>
                        <input class="form-control" name="projects-size" id="projects-size-prefix" placeholder="Sq Ft" required='true'>
                    </div>
                </div>
                
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="projects-year-built">Complition Year</label>
                        <div class="input-group input_date">
                            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                            <input class="form-control" name="projects-year-built"  id="projects-year-built" required='true'>
                        </div>
                    </div>
                </div>
				
            </div>
        </div>
    </div>
</div>
<hr>
<div class="account-block text-right">
    <button type="submit" class="btn btn-primary">Next</button>
</div>
</form>
</div>
</section>
<!--end section page body-->
<hr>
