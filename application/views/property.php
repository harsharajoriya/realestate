<!-- BEGIN CONTENT -->
            <div class="page-wrapper-row full-height">
            <div class="page-wrapper-middle">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-container page-content-wrapper">
				<div class="page-head">
                        <!-- BEGIN PAGE TITLE -->
                        <div class="page-title">
                            <h1><a href="<?php echo base_url('admin'); ?>">Dashboard</a>
                                <small>Property</small>
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
    <div class="col-md-12">
        <div class="portlet light bordered">
		 <div class="row pad">
                                    <div class="col-sm-6 search-form pull-left">
                                        <a href='<?php echo base_url('user_data'); $this->session->set_userdata('comming_from','admin');  ?>' class="btn btn-info"><i class="fa fa-envelope"></i> Add Property </a>
                                    </div>
                                </div>
             <div class="portlet-title">
                                    <div class="caption font-dark">
                                        <i class="icon-settings font-dark"></i>
                                        <span class="caption-subject bold uppercase">Property</span>
                                    </div>
                                    <div class="tools"> </div>
                                </div>
            <div class="portlet-body">
                <table class="table table-striped table-bordered table-hover" id="sample_1">
                    <thead>
                        <tr>
                            <th>Title</th>
							<th>Property Id</th>
                            <th>Property Type</th>
                            <th>Property For</th>
                            <th>City</th>
							<th>Name</th>
							<th>Mobile No</th>
                            <th>Added On</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            if(checkValue($property)){
                               foreach($property as $product){ if(!empty($product->property_unique_id)){  ?>
                        <tr>
                            <td><?php e($product->title); ?></td>
						    <td><?php echo $product->property_unique_id; ?></td>
							 <td><?php e($product->property_type); ?></td> 
							 <td><?php e($product->property_for); ?></td>
							 <td><?php e($product->city); ?></td> 							 
							 <td><?php e($product->first_name).' '.($product->last_name); ?></td>
							 <td><?php e($product->number); ?></td>
							<td><?php e(short_date($product->created)); ?></td>

                            <td class="center">
                                 <?php 
                                    if(isset($product->property_status))  { if($product->property_status == 0){ ?>
                                        <a href="javascript:void(0);" onclick="approve(<?php echo $product->property_id ?>,'property')" title="Approve">
                                                <i class="btn btn-primary">Approve</i>
                                        </a>
                                    <?php } if($product->property_status==1) { ?>
                                        <a href="javascript:void(0);" onclick="disapprove(<?php echo $product->property_id ?>,'property')" title="Disapproved">
                                                <i class="btn btn-success">Disapprove</i>
                                        </a>
                                <?php } }?> 
                                 &nbsp;&nbsp;
                                 <a href="<?php echo base_url('edit-property').'/'.$product->property_id; ?>" title="Edit">
                                        <i class="btn btn-info">Edit</i>
                                    </a>
                                   &nbsp;&nbsp;
                                    <!--<a href="javascript:void(0)" onclick="delete_data_from_table('property',<?php //echo $product->property_id ?>)" title="Delete" class="glyphicon glyphicon-trash"><span></span></a>-->
                            </td>
                        </tr>
							   <?php } } } ?>
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