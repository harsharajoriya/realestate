<!--start section page body-->
<section id="section-body">
<div class="container">
<div class="membership-page-top">
    <div class="row">
        <div class="col-sm-12 col-xs-12">
            <div class="membership-page-title">
                <h1 class="page-title"> Sell or Rent your Property </h1>
                <p class="page-subtitle"> Post your property online for free </p>
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
<div class="membership-content-area">
<form action='<?php echo base_url('submit-user'); ?>' method='post' id='user-form' >
<div class="account-block">
    <div class="add-title-tab">
        <h3>User Information</h3>
        <div class="add-expand"></div>
    </div>
    <div class="add-tab-content">
        <div class="add-tab-row push-padding-bottom">
            <div class="row">
			
			   <div class="col-sm-12">
			      <div class="form-group">
			                           <span class="customRadioButton">   I am   </span>
			                   			<span class="customRadioButton">
			                   				<input id="iamO" name="iAmType"  value="Owner" type="radio" required> 
			                   			</span> 
			                   			<label class="curPoint" for="iamO" id="iam_O">Owner</label>
									
			                   			<span class="customRadioButton">
			                   				<input id="iamA" name="iAmType"  value="Agent" type="radio" required> 
			                   			</span> 
			                   			<label class="curPoint" for="iamO" id="iam_O">Agent</label>

			                   			<span class="customRadioButton">
			                   				<input id="iamB" name="iAmType"  value="Builder" type="radio" required> 
			                   			</span> 
			                  	       <label class="curPoint" for="iamB" id="iam_B">Builder</label>
					 </div>
				</div>	
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="property-title">First Name</label>
                        <input class="form-control" name='first_name' id="first_name" placeholder="Enter your First Name" required='true'>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="description">Last Name</label>
                        <input class="form-control" name='last_name' id="last_name" placeholder="Enter your Last Name" required='true'>
                    </div>
                </div>
            </div>
        </div>
        <div class="add-tab-row push-padding-bottom">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="property-type">Email</label>
                        <input class="form-control" name='email' id="email" placeholder="Enter your Email" required='true'>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="property-type">Mobile Number</label>
                        <input class="form-control" name='number' id="number" placeholder="Enter your Mobile Number" required='true'>
                    </div>
                </div>
            </div>
        </div>
		<div class="add-tab-row push-padding-bottom">
		   <div class="row">
		     <div class="col-sm-6">
                    <div class="form-group">
                        <label for="property-type">Property For</label>
                        <select class="form-control"  name='property_for' required>
						<option selected="true" disabled="" value="">--Select--</option>
                            <option value='Rent'>Rent</option>
                            <option value='Sell'>Sell</option>
                        </select>
                    </div>
              </div>
			    <div class="col-sm-6">
                    <div class="form-group">
                        <label for="property-type">Property Type</label>
                        <select class="form-control" id="property_type" name='property_type'  required>
							<option selected="true" disabled="" value="">--Select--</option>
                            <optgroup label="ALL RESIDENTIAL"></optgroup>
							    <option value='Residential House'>Residential House</option>
								<option value="Multistorey Apartment">Multistorey Apartment</option>
							
								<option value="Builder Floor Apartment">Builder Floor Apartment</option>
							
								<option value="Residential House">Residential House</option>
							
								<option value="Villa">Villa</option>
							
								<option value="Residential Plot">Residential Plot</option>
							
								<option value="Penthouse">Penthouse</option>
							
								<option value="Studio Apartment">Studio Apartment</option>
								<option value='Hostel'>Hostele</option>
							<optgroup label="ALL COMMERCIAL"></optgroup>
								<option value="Commercial Office Space">Commercial Office Space</option>
								<option value="Office in IT Park/ SEZ">Office in IT Park/ SEZ</option>
								<option value="Commercial Shop">Commercial Shop</option>
								<option value="Commercial Showroom">Commercial Showroom</option>
								<option value="Commercial Land">Commercial Land</option>
								<option value="Warehouse/ Godown">Warehouse/ Godown</option>
								<option value="Industrial Land">Industrial Land</option>
								<option value="Industrial Building">Industrial Building</option>
								<option value="Industrial Shed">Industrial Shed</option>
							   <optgroup label="ALL AGRICULTURAL"></optgroup>
								<option value="Agricultural Land">Agricultural Land</option>
								<option value="Farm House">Farm House</option>
                        </select>
                    </div>
                </div>
			</div>
		</div>
		<div class="account-block text-right">
          <button type="submit" class="btn btn-primary">Next</button>
        </div>
</div>
		</div>	
</form>
</div>
</section>
<!--end section page body-->

