 <!-- BEGIN CONTENT -->
            <div class="page-wrapper-row full-height">
            <div class="page-wrapper-middle">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-container page-content-wrapper">
				<div class="page-head">
                        <!-- BEGIN PAGE TITLE -->
                        <div class="page-title">
                            <h1><a href="<?php echo base_url('admin'); ?>">Dashboard</a>
                                <small>Add Enquiry</small>
                            </h1>
                        </div>
                        <!-- END PAGE TITLE -->
                 </div>
				    <div class='container'>
                        <!-- END PAGE TITLE -->
                        
                    </div>
					<hr>
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
    
<div class='container'>    
<div class="row">
    <div class="col-lg-12 col-xs-12 col-sm-12  light bordered">
        <div class="box box-info"> 
            <div class="box-body pad">
			    <form action="<?php echo base_url('submit-new-enquiry'); ?>" method="post" accept-charset="utf-8" id='property_enquiry_form' enctype="multipart/form-data">            <div class="modal-body">
                <input type="hidden" id="enquiry_id" name="enquiry_id" value='<?php echo $enq->enquiry_id; ?>' >
				<div class='row'>
					<div class="form-group col-md-6">
						<div class="input-group"> <span class="input-group-addon"><label>First Name</label></span>
							<input type="text" name="first_name"  id="first_name" placeholder="Enter First Name" class="form-control" required='true'  /> 
						</div>
					</div>
				
					 <div class="form-group col-md-6">
						<div class="input-group"> <span class="input-group-addon"><label>Last Name</label></span>
							<input type="text" name="last_name"  id="last_name" placeholder="Enter Last Name" class="form-control" required='true' />                    </div>
					</div>
				</div>
				
				<div class='row'>
					 <div class="form-group col-md-6">
						<div class="input-group"> <span class="input-group-addon"><label>Email</label></span>
							<input type="text" name="email"  id="email" placeholder="Enter Email" class="form-control" required='true' />                    </div>
					</div>               
					<div class="form-group col-md-6">
						 <div class="input-group"> <span class="input-group-addon"><label>Mobile Number</label></span>
						 <input type="text" name="mobile_number"  id="number" placeholder="Enter Mobile Number" class="form-control"  required='true' />                    </div>
					</div>
				</div>
				
				<div class='row'>
					<div class="form-group col-md-6">
						<div class="input-group"> <span class="input-group-addon"><label>Subject</label></span>
							<input type="text" name="subject"  value="" id="subject" placeholder="Subject" class="form-control" required='true' />                    </div>
					</div>
					
					<div class='from-group col-md-6'>
						<div class="input-group"> <span class="input-group-addon"><label>Budjet</label></span>
						 <input id="Price" class='form-control'   required="" class="form-control" name="price_range"required='true'/> 
						</div>
					</div>
                </div>
				
				<div class='row'>
					<div class='from-group col-md-6'>
						<div class="input-group"> <span class="input-group-addon"><label>Property For</label></span>
						 <select name="property_for" class='form-control' required='true'>
							 <option value='' selected="true" disabled="">--Select--</option>
							<option value='Rent'>Rent</option>
							<option value='Sell'>Sell</option>
							<option value='Buy'>Buy</option>
						 </select>
						</div>
					</div>
					 <div class="form-group col-md-6">
						<div class="input-group"> <span class="input-group-addon"><label>Flat Type</label></span>
							 <select class="form-control" name='flat_type' id="flat-type" required>
								<option selected="true" disabled="" value="">--Select--</option>
								<option value='1BHK'>1BHK</option>
								<option value='2BHK'>2BHK</option>
								<option value='3BHK'>3BHK</option>
								<option value='4BHK'>4BHK</option>
								<option value='5+BHK'>5+BHK</option>
							</select>
						</div>
					</div>
				</div>
				<div class='row'>
					<div class="form-group col-md-6">
					   <div class="input-group"> <span class="input-group-addon"><label>Source of Fund</label></span>
                         <select class="form-control" name='source_fund' id="source-fund" required>
							<option selected="true" disabled="" value="">--Select--</option>
                            <option value='Cash'>Cash</option>
                            <option value='Bank Loan'>Bank Loan</option>
                        </select>
					   </div>
				    </div>
					
					<div class='from-group col-md-6'>
						<div class="input-group"> <span class="input-group-addon"><label>Source Of Enquiery</label></span>
						 <input id="source-enquiry" class='form-control'   required="" class="form-control" name="source_enquiry" required='true'/> 
						</div>
					</div>
				</div>
				
				<div class='row'>
					<div class='from-group col-md-6'>
						<div class="input-group"> <span class="input-group-addon"><label>Attend By</label></span>
						 <input id="attend-by" class='form-control'   required="" class="form-control" name="attend_by" /> 
					   </div>
					</div>
					
					 <div class="form-group col-md-6">
						<div class="input-group"> <span class="input-group-addon"><label>Message</label></span>
						<textarea name="message" cols="40" rows="10" id="message" placeholder="Message" class="form-control" required='true'></textarea>
						</div>	
					</div>
				</div>
				
            <div class="clearfix">
			</div>
			   <input type="submit" name="submit" value="Update Enquiry" class="btn btn-primary pull-left"  />   
            </form>
			<div class="clearfix">
			</div>
        </div>
    </div>
	</div>
</div>
</div><!--/row-->
</div>
</div>
<!-- content ends -->
</div><!--/#content.col-md-0-->
</div><!--/fluid-row-->
<hr>
