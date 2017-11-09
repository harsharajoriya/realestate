<style>
.dt-buttons{
	display:none;
}
</style>
 <!-- BEGIN CONTENT -->
             <div class="page-wrapper-row full-height">
            <div class="page-wrapper-middle">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-container page-content-wrapper">
				<div class="page-head">
                        <!-- BEGIN PAGE TITLE -->
                        <div class="page-title">
                            <h1><a href="<?php echo base_url('admin'); ?>">Dashboard</a>

                                <small>Enquiry</small>
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
      <link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css"
         rel = "stylesheet">
      <script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
      <script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
 <div class='container'>    
<div class="row">
    <div class="col-md-12">
        <div class="portlet light bordered"> 
                                <div class="portlet-title">
                                    <div class="caption font-dark">
                                        <i class="icon-settings font-dark"></i>
                                        <span class="caption-subject bold uppercase">Enquiry Reordering</span>
                                    </div>
                                    <div class="tools"> </div>
                                </div>
            <div class="portlet-body">
            <a style='float: right;' class="btn btn-info text-center" href="<?php echo base_url('downloadData/').'Enquiry'; ?>">Download Excel</a>
                                    <table class="table table-striped table-bordered table-hover" id="sample_1">
                    <thead>
                        <tr>
                            <th>Date</th>
                                                    <th>Name</th>
                                                    <th>Email id</th>
													<th>Mobile Number</th>
													<th>Enquiry For</th>
													<th>Property Id</th>
                                                    <th>Subject</th>
                                                    <th>Message</th>
                                                    <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            if(checkValue($enquiry)){
                                $i = 0;
                                foreach($enquiry->result() as $var){
                           ?>
                        <tr>
                           <td class=""><?php echo short_date($var->enq_added_dtm); ?></td>
                           <td><a href="#"><?php echo $var->enq_first_name.' '.$var->enq_last_name; ?></a></td>
                           <td><a href="#"><?php echo $var->enq_email; ?></a></td>
			               <td><a href="#"><?php echo $var->enq_phone; ?></a></td> 
						   <td><a href="#"><?php if(checkValue($var->property_for)) echo $var->property_for; else  echo  $var->admin_property_for;  ?></a></td>
					       <td><a href="#"><?php if(checkValue($var->property_unique_id)) echo $var->property_unique_id; else echo 'Admin'; ?></a></td>
                           <td><a href="#"><?php  echo $var->enq_subject; ?></a></td> 
                           <td><span class="more"><?php echo $var->enq_message;?></span></td>
                           <td>
						   <input type='hidden' value='<?php echo base_url(); ?>' name='url'>
                               <a href="javascript:void(0)" onclick="delete_data_from_table('enquiry',<?php echo $var->enquiry_id ?>)" title="Delete" class="btn btn-danger"><span>Delete</span></a>
							    <a href="<?php echo base_url('edit-enquiry/').$var->enquiry_id; ?>" class='btn btn-primary' title="Edit">
                                        <i class="fa fa-pencil-square-o"></i>
                                    </a>
                           </td>
                        </tr>
                        <?php $i++;  } } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--/span-->
</div><!--/row-->
</div>
<!-- content ends -->
</div><!--/#content.col-md-0-->
</div><!--/fluid-row-->
</div>
<hr>