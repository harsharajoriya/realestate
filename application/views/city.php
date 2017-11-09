<!-- BEGIN CONTENT -->
            <div class="page-wrapper-row full-height">
            <div class="page-wrapper-middle">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-container page-content-wrapper">
				<div class="page-head">
                        <!-- BEGIN PAGE TITLE -->
                        <div class="page-title">
                            <h1><a href="<?php echo base_url('admin'); ?>">Dashboard</a>
                                <small>city</small>
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
<div class="row">
    <div class="col-md-12">
        <div class="portlet light bordered">
		                        <div class="row pad">
                                    <div class="col-sm-6 search-form pull-left">
                                        <a href='#' class="btn btn-info" data-toggle="collapse" data-target="#collapse1"><i class="fa fa-envelope"></i> Add city </a>
                                    </div>
                                </div>
								<div class="collapse box-content"  id="collapse1">                      
                               <form role="form" method="post" action="<?php echo base_url('submit-city'); ?>">  
                                   <div class='form-group'>							   
                                        <label for="exampleInputEmail1">City Name</label>              
                                        <input type="text" class="form-control" placeholder="Enter State Name" name="city_name" required="true">
                                   </div>     
                                    <input type="submit" name="submit" class="btn btn-info" value="submit">
                                </form>                    
                            </div> 
		    <div class="portlet-title">
                                    <div class="caption font-dark">
                                        <i class="icon-settings font-dark"></i>
                                        <span class="caption-subject bold uppercase">City Reordering</span>
                                    </div>
                                    <div class="tools"> </div>
                                </div>
            <div class="portlet-body">
			               
							
							<div class='clear-pix'></div>
                <table class="table table-striped table-bordered table-hover" id="sample_1" >
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Added On</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            if(checkValue($city)){
                               foreach($city as $state){ ?>
                        <tr>
                            <td><?php e($state->city_name); ?></td>
							<td><?php e(short_date($state->created)); ?></td>
                             <td class="center">
                                 <?php 
                                    if(isset($state->city_status))  { if($state->city_status == 0){ ?>
                                        <a href="javascript:void(0);" onclick="approve(<?php echo $state->city_id ?>,'city')" title="Approve">
                                                <i class="btn btn-primary">Approve</i>
                                        </a>
                                    <?php } if($state->city_status==1) { ?>
                                        <a href="javascript:void(0);" onclick="disapprove(<?php echo $state->city_id ?>,'city')" title="Disapproved">
                                                <i class="btn btn-success">Disapprove</i>
                                        </a>
                                <?php } }?> 
                                   &nbsp;&nbsp;
                                    <a href="javascript:void(0)" onclick="delete_data_from_table('city',<?php echo $state->city_id ?>)" title="Delete" class="btn btn-danger"><span>Delete</span></a>
                            </td>
                        </tr>
                        <?php } } ?>
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
