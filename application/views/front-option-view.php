 <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
				<div class="page-head">
                        <!-- BEGIN PAGE TITLE -->
                        <div class="page-title">
                            <h1><a href="<?php echo base_url('admin'); ?>">Dashboard</a>
                                <small>Front Option</small>
                            </h1>
                        </div>
                        <!-- END PAGE TITLE -->
                </div>
						<div class='container'>                        
                        </div>
					<hr>
    <!-- Content Header (Page header) -->
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

    <!-- Main content -->
	<div class='container'>
        <div class='row'>
               <div class="col-lg-12 col-xs-12 col-sm-12  light bordered">		
                <div class='box box-info'>
                    <!-- /.box-header -->
					<h3 class='text-center'><b>Front Option</b></h3>
					<hr>
                    <div class='box-body pad'>
                       <?php
                                if(isset($front_options) && $front_options != '')
                                {
                                    foreach($front_options as $data)
                                    {           
                            ?>
                        <form id='front_options_form' role="form" method="post" action="<?php echo base_url('submit-front-option'); ?>/<?php echo $data->front_options_id; ?>" enctype="multipart/form-data">
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Site Name</label>
                                <input type="text" name="title" value="<?php echo($data->title != '') ? $data->title : '';  ?>" class="form-control" placeholder="Site Name">
                            </div>
                            
                             <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Rera Code</label>
                                <input type="text" name="meta_key" class="form-control" value="<?php echo($data->meta_key != '') ? $data->meta_key : '';  ?>">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Meta Description</label>
                                <input type='text' name="meta_desc" class="form-control" value='<?php echo($data->meta_desc != '') ? $data->meta_desc : '';  ?>' >
                            </div>
 
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1" >Email Us</label>
                                <input type="email" name="email_us" value="<?php echo($data->email_us != '') ? $data->email_us : '';  ?>" class="form-control" id="exampleInputEmail1" placeholder="Enter Email Id" required >
                            </div>
                     
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Call US</label>
                                <input type="text" name="call_us" value="<?php echo($data->call_us != '') ? $data->call_us : '';  ?>" class="form-control" id="exampleInputEmail1" placeholder="Enter contact number" required>
                            </div>
							
							<div class="form-group col-md-6">
                             <label for="exampleInputEmail1">Select Date Format</label>
                              <select class="form-control" id="site_date_format" name="site_date_format" required="">
                                <option value='d M y'" <?php if($data->site_date_format == "d M y") echo 'selected';  ?> ><?php echo date('d M y'); ?></option>
                                <option value='d-m-Y'"  <?php if($data->site_date_format == "d-m-Y") echo 'selected';  ?>><?php echo date('d-m-Y'); ?></option>
                                <option value="Y-m-d" <?php if($data->site_date_format == "Y-m-d") echo 'selected';  ?> ><?php echo date('Y-m-d'); ?></option>
                                <option value="d/m/y"  <?php if($data->site_date_format == "d/m/y") echo 'selected';  ?>><?php echo date('d/m/y'); ?></option>
                                <option value="d M Y" <?php if($data->site_date_format == "d M Y") echo 'selected';  ?> ><?php echo date('d M Y'); ?></option>
                                <option value="Y-m-d H:i"  <?php if($data->site_date_format == "Y-m-d H:i") echo 'selected';  ?>><?php echo date('Y-m-d H:i'); ?></option>
                                <option value="d-m-Y g:i a" <?php if($data->site_date_format == "d-m-Y g:i a") echo 'selected';  ?> ><?php echo date('d-m-Y g:i a'); ?></option>
                                <option value="F j, Y, g:i a"  <?php if($data->site_date_format == "F j, Y, g:i a") echo 'selected';  ?>><?php echo date('F j, Y, g:i a'); ?></option>
                                <option value="Y-m-d H:i:s" <?php if($data->site_date_format == "Y-m-d H:i:s") echo 'selected';  ?> ><?php echo date('Y-m-d H:i:s'); ?></option>
                              </select>                     
                            </div>
							
                            <div class="form-group col-md-12">
                                <label for="exampleInputEmail1">Address</label>
                                <textarea name="address" class="form-control" placeholder="Enter Address"><?php echo($data->address != '') ? $data->address : '';  ?></textarea>
                            </div>
                           
                            
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Facebook Link</label>
                                <input type="text" name="facebook_link" value="<?php echo($data->facebook_link != '') ? $data->facebook_link : '';  ?>" class="form-control" id="exampleInputEmail1" placeholder="Enter Facebook Link">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Instagram Link</label>
                                <input type="text" name="twitter_link" class="form-control" value="<?php echo($data->twitter_link != '') ? $data->twitter_link : '';  ?>" placeholder="Enter Twitter Link">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Google plus Link</label>
                                <input type="text" name="google_link" class="form-control" value="<?php echo($data->google_link != '') ? $data->google_link : '';  ?>" placeholder="Enter Google plus Link">
                                
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">LinkedIn Link</label>
                                <input type="text" name="linked_link" class="form-control" value="<?php echo($data->linked_link != '') ? $data->linked_link : '';  ?>" placeholder="Enter LinkedIn Link">
                                
                            </div>
                                
                            </div>
                           <?php 
                             $path = base_url(DETAIL_IMAGE_PATH.'front-option/');
                           ?>
                            
                            <div class="form-group">
                                <label for="exampleInputEmail1">Logo</label>
                                <input type="file" name="logo">
                                <br/>
                                <img src="<?php echo $path.'logo/'.$data->logo; ?>" width="15%" height="10%">
                            </div>
                          
                            <input type="hidden" name="table_name" value="front_options">
                            <input type="submit" name="submit" class="btn btn-info" value="Submit">
                            <hr>
                        </form>
                        <?php
                                    }
                                }
                            ?>
                    </div>
            </div>
        </div>
    </div>
</div>
</div>