<!-- BEGIN CONTENT -->
            <div class="page-wrapper-row full-height">
            <div class="page-wrapper-middle">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-container page-content-wrapper">
				<div class="page-head">
                        <!-- BEGIN PAGE TITLE -->
                        <div class="page-title">
                            <h1><a href="<?php echo base_url('admin'); ?>">Dashboard</a>
                                <small>Projects</small>
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
                                        <a href='<?php echo base_url('add-project'); $this->session->set_userdata('comming_from','admin');  ?>' class="btn btn-info"><i class="fa fa-envelope"></i> Add Property </a>
                                    </div>
                                </div>
             <div class="portlet-title">
                                    <div class="caption font-dark">
                                        <i class="icon-settings font-dark"></i>
                                        <span class="caption-subject bold uppercase">Projects</span>
                                    </div>
                                    <div class="tools"> </div>
                                </div>
            <div class="portlet-body">
                <table class="table table-striped table-bordered table-hover" id="sample_1">
                    <thead>
                        <tr>
                            <th>Title</th>
							<th>Projects Id</th>
                            <th>Projects Type</th>
                            <th>Projects For</th>
                            <th>City</th>
                            <th>Added On</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            if(checkValue($projects)){
                               foreach($projects as $product){ if(!empty($product->projects_unique_id)){  ?>
                        <tr>
                            <td><?php e($product->title); ?></td>
						    <td><?php echo $product->projects_unique_id; ?></td>
							 <td><?php echo 'Project'; ?></td> 
							 <td><?php e($product->projects_for); ?></td>
							 <td><?php e($product->city); ?></td> 							 
							<td><?php e(short_date($product->created)); ?></td>

                            <td class="center">
                                 <?php 
                                    if(isset($product->projects_status))  { if($product->projects_status == 0){ ?>
                                        <a href="javascript:void(0);" onclick="approve(<?php echo $product->projects_id ?>,'projects')" title="Approve">
                                                <i class="btn btn-primary">Approve</i>
                                        </a>
                                    <?php } if($product->projects_status==1) { ?>
                                        <a href="javascript:void(0);" onclick="disapprove(<?php echo $product->projects_id ?>,'projects')" title="Disapproved">
                                                <i class="btn btn-success">Disapprove</i>
                                        </a>
                                <?php } }?> 
                                 &nbsp;&nbsp;
                                 <a href="<?php echo base_url('edit-projects').'/'.$product->projects_id; ?>" title="Edit">
                                        <i class="btn btn-info">Edit</i>
                                    </a>
                                   &nbsp;&nbsp;
                                    <!--<a href="javascript:void(0)" onclick="delete_data_from_table('projects',<?php //echo $product->projects_id ?>)" title="Delete" class="glyphicon glyphicon-trash"><span></span></a>-->
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