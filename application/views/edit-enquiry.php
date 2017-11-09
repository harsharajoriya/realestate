 <!-- BEGIN CONTENT -->
            <div class="page-wrapper-row full-height">
            <div class="page-wrapper-middle">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-container page-content-wrapper">
				<div class="page-head">
                        <!-- BEGIN PAGE TITLE -->
                        <div class="page-title">
                            <h1><a href="<?php echo base_url('admin'); ?>">Dashboard</a>
                                <small>Edit Enquiry</small>
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
			<?php if(checkValue($enquiry)){ foreach($enquiry->result() as $enq) { ?>
			    <form action="<?php echo base_url('submit-enquiry'); ?>" method="post" accept-charset="utf-8" id='property_enquiry_form' enctype="multipart/form-data">            <div class="modal-body">
                <input type="hidden" id="enquiry_id" name="enquiry_id" value='<?php echo $enq->enquiry_id; ?>' >
				
				<div class='row'>
					<div class="form-group col-md-6">
						<div class="input-group"> <span class="input-group-addon"><label>First Name</label></span>
							<input type="text" name="first_name"  value='<?php echo $enq->enq_first_name; ?>' id="first_name" placeholder="Enter First Name" class="form-control" readonly />                    </div>
					</div>
				
					 <div class="form-group col-md-6">
						<div class="input-group"> <span class="input-group-addon"><label>Last Name</label></span>
							<input type="text" name="last_name" value='<?php echo $enq->enq_last_name; ?>' id="last_name" placeholder="Enter Last Name" class="form-control"  readonly/>                    </div>
					</div>
                </div>
				
				<div class='row'>
					 <div class="form-group col-md-6">
						<div class="input-group"> <span class="input-group-addon"><label>Email</label></span>
							<input type="text" name="email" value='<?php echo $enq->enq_email; ?>' id="email" placeholder="Enter Email" class="form-control" readonly />                    </div>
					</div>
				   
					<div class="form-group col-md-6">
						<div class="input-group"> <span class="input-group-addon"><label>Mobile Number</label></span>
							<input type="text" name="mobile_number" value='<?php echo $enq->enq_phone; ?>' id="number" placeholder="Enter Mobile Number" class="form-control" readonly  />                    </div>
					</div>
				</div>
				
				<div class='row'>
					<div class="form-group col-md-6">
						<div class="input-group"> <span class="input-group-addon"><label>Subject</label></span>
							<input type="text" name="subject" value='<?php echo $enq->enq_subject; ?>'  value="" id="subject" placeholder="Subject" class="form-control"  readonly/>                    </div>
					</div>
					
					<div class='from-group col-md-6'>
						<div class="input-group"> <span class="input-group-addon"><label>Enquiry For</label></span>
						 <input id="property_for" class='form-control' value='<?php if(checkValue($enq->property_for)) echo $enq->property_for; else echo  $enq->admin_property_for;  ?>'  required="" class="form-control" name="property_for" readonly /> 
					</div>
					</div>
				</div>
				
				<div class='row'>
					<div class='from-group col-md-6'>
						<div class="input-group"> <span class="input-group-addon"><label>Flat Type</label></span>
						 <input id="flat_type" class='form-control' value='<?php if(checkValue($enq->flat_type)) echo $enq->flat_type; else echo  $enq->flat_type;  ?>'  required="" class="form-control" name="flat_type" readonly /> 
						</div>
					</div>
					
					<div class='from-group col-md-6'>
						<div class="input-group"> <span class="input-group-addon"><label>Source of Enquiry</label></span>
						 <input id="source_enquiry" class='form-control' value='<?php if(checkValue($enq->source_of_enquiry)) echo $enq->source_of_enquiry; else echo  $enq->source_of_enquiry;  ?>'  required="" class="form-control" name="source_enquiry" readonly /> 
						</div>
					</div>
				</div>
				
				<div class='row'>
					<div class='from-group col-md-6'>
						<div class="input-group"> <span class="input-group-addon"><label>Source of Fund</label></span>
						 <input id="source_fund" class='form-control' value='<?php if(checkValue($enq->source_of_fund)) echo $enq->source_of_fund; else echo  $enq->source_of_fund;  ?>'  required="" class="form-control" name="source_fund" readonly /> 
						</div>
					</div>
					
					<div class='from-group col-md-6'>
						<div class="input-group"> <span class="input-group-addon"><label>Attend By</label></span>
						 <input id="attend_by" class='form-control' value='<?php if(checkValue($enq->attend_by)) echo $enq->attend_by; else echo  $enq->attend_by;  ?>'  required="" class="form-control" name="attend_by" readonly /> 
						</div>
					</div>
				</div>
				
				<div class='row'>
					 <div class="form-group col-md-12">
						<textarea name="message" cols="40" rows="10" id="message" placeholder="Message" class="form-control" readonly><?php echo $enq->enq_message; ?></textarea>
					 </div>
				</div>
				
				<div class='row'>
					<div class='from-group col-md-6'>
						<div class="input-group"> <span class="input-group-addon"><label>Enquiry Date</label></span>
						 <input type="text" class="form-control start_date" id="start_date"  value='<?php echo $enq->enq_added_dtm; ?>' data-date-format="yyyy-mm-dd" required=""   readonly /> 
						</div> 
					</div>
					
					<div class="form-group col-md-6">
						<div class="input-group"> <span class="input-group-addon"><label>Meeting Date</label></span>
						 <div class="control-group">
							 <div class='input-group date' id='datetimepicker1'>
								<input type='text' class="form-control" name="meeting_date" value='<?php if(checkValue($enq->meeting_date)) echo $enq->meeting_date; ?>' />
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-calendar"></span>
								</span>
						   </div>
						</div>
						</div> 
					</div>
				</div>
				
				<div class='row'>				
					<div class="form-group col-md-6">
					       <div class="input-group"> <span class="input-group-addon"><label>Enquiry status</label></span>
					   <select name='followup_status' class='form-control'>
						<option selected="true" disabled="" value="">--Select--</option>
					      <option value='Cold' <?php if($enq->followup_status=='Cold') echo 'selected'; ?>>Cold</option>
		                  <option value='Warm' <?php if($enq->followup_status=='Warm') echo 'selected'; ?>>Warm</option>
					      <option value='Hot' <?php if($enq->followup_status=='Hot') echo 'selected'; ?>>Hot</option>
						  <option value='Drop'  <?php if($enq->followup_status=='Drop') echo 'selected'; ?>>Drop</option>
					      <option value='Win'  <?php if($enq->followup_status=='Win') echo 'selected'; ?>>Win</option>
					   </select>
					   </div>
                     </div>
					<div class="form-group col-md-6">
                       <div class="input-group"> <span class="input-group-addon"><label>Remark</label></span>
				          <input id="remark" class='form-control' value='<?php echo $enq->remark; ?>' class="form-control" name="remark"  /> 
				       </div>
                    </div>
				</div>
            <div class="modal-footer clearfix">
                <input type="submit" name="submit" value="Update Enquiry" class="btn btn-primary pull-left"  />   
			</div>
            </form>
			<?php }} ?>
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
