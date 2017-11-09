<!--start section page body-->
<section id="section-body">
<div class="container">
<div class="membership-page-top">
    <div class="row">
        <div class="col-sm-12 col-xs-12">
            <div class="membership-page-title text-center">
                <h1 class="page-title"> Sell or Rent your Property </h1>
                <p class="page-subtitle"> Please fill information to complete your membership! </p>
            </div>
        </div>
    </div>
</div>

<div class="membership-content-area">
<div class="account-block">
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
                          <input type="hidden" id="image_type" value="projects">
                          <div id="queue"></div>
				</div>
            </div>
        </div>
    </div>
</div>
</div>
<hr>
<div class="account-block text-right">
    <a href='<?php echo base_url('add-project'); ?>' class="btn btn-primary">Finish</a>
</div>
</div>
</section>
<!--end section page body-->
<hr>
