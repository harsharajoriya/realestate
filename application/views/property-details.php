    <?php //print_r($this->session->userdata()); ?>
    <?php  if($this->session->flashdata("flashSuccess")){  ?> 
    <div class="alert alert-success alert-dismissible fade in" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <strong><?php echo $this->session->flashdata("flashSuccess"); ?></strong>
   </div>
    <?php }if($this->session->flashdata("flashEroor")){  ?>
      <div class="alert alert-dangor alert-dismissible fade in" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <strong><?php echo $this->session->flashdata("flashEroor"); ?></strong>
      </div>
    <?php } ?>
        <!--start detail top-->
		<?php if(checkValue($property)) { foreach($property as $pro){ ?>
    <section class="detail-top detail-top-full no-margin">
        <div class="detail-media">
            <div class="tab-content">
                 <?php $path = base_url().DETAIL_IMAGE_PATH.'property/'.$pro->property_id.'/large/'.$pro->property_images_name; ?>
                <div id="gallery" class="tab-pane fade in active" style="background-image: url(<?php echo $path; ?>)">
                    <a href="#" class="popup-trigger popup-trigger-v2"></a>
                    <div class="media-tabs-up">
                        <div class="container">
                                <span class="label-wrap">
                                    <span class="label label-primary"><?php if($pro->property_for == 'For Rent') echo 'For Rent'; else echo 'For Sell'; ?></span>
                                </span>
                        </div>
                    </div>
                    <div class="media-detail-down">
                        <div class="container">
                            <div class="header-detail table-list">
                                <div class="header-left table-cell">
                                    <div class="table-cell"><h1>Family home</h1></div>

                                    <div class="table-cell">
                                        <ul class="actions">
                                            <li class="share-btn">
                                                <div class="share_tooltip tooltip_left fade">
                                                    <a href="#" onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;"><i class="fa fa-facebook"></i></a>
                                                    <a href="#" onclick="if(!document.getElementById('td_social_networks_buttons')){window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;}"><i class="fa fa-twitter"></i></a>

                                                    <a href="#" onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;"><i class="fa fa-pinterest"></i></a>

                                                    <a href="#" onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;"><i class="fa fa-linkedin"></i></a>

                                                    <a href="#" onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;"><i class="fa fa-google-plus"></i></a>
                                                    <a href="#"><i class="fa fa-envelope"></i></a>
                                                </div>
                                                <span data-placement="right" data-toggle="tooltip" data-original-title="share"><i class="fa fa-share-alt"></i></span>
                                            </li>
                                            <li>
                                                <span><i class="fa fa-heart-o"></i></span>
                                            </li>
                                        </ul>
                                    </div>
                                    <address class="property-address"><?php echo $pro->address; ?></address>
                                </div>
                                <div class="header-right table-cell">
                                    <h4><?php echo ₹.$pro->property_price.'/mo'; ?></h4>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div id="map" class="tab-pane fade"></div>
                <div id="street-map" class="tab-pane fade">
                </div>

            </div>
            <div class="media-tabs-up">
                <div class="container">
                    <div class="media-tabs">
                        <ul class="actions">
                            <li class="share-btn">

                                <div class="share_tooltip tooltip_left fade">
                                    <a href="#" onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;"><i class="fa fa-facebook"></i></a>
                                    <a href="#" onclick="if(!document.getElementById('td_social_networks_buttons')){window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;}"><i class="fa fa-twitter"></i></a>

                                    <a href="#" onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;"><i class="fa fa-pinterest"></i></a>

                                    <a href="#" onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;"><i class="fa fa-linkedin"></i></a>

                                    <a href="#" onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-envelope"></i></a>
                                </div>
                                <span title="" data-placement="right" data-toggle="tooltip" data-original-title="share">
                                            <i class="fa fa-share-alt"></i>
                                        </span>
                            </li>
                            <li>
                                <span><span class="add_fav" data-propid="383"><i class="fa fa-heart-o"></i></span></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end detail top-->

    <!--start section page body-->
    <section id="section-body" class="no-padding">

        <!--start detail content-->
        <section class="section-detail-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 no-padding">
                        <div class="detail-bar detail-bar-full">
                            <div class="property-description detail-block">
                                <div class="detail-title">
                                    <h2 class="title-left">Description</h2>
                                </div>
                                <p><?php echo $pro->description; ?></p>
                                <h3 class="detail-sub-title"><span>Details</span></h3>
                                <ul class="detail-amenities-list">
								    
									<li class="media">
                                        <div class="media-left media-middle"><img src="<?php echo base_url().DETAIL_IMAGE_PATH.'icons/rera.png'  ?>" width="37" height="50" alt="Icon"></div>
                                        <div class="media-body"> Rera ID<br><?php echo $this->fetch_value[0]->meta_key; ?>  </div>
                                    </li>
									
                                    <li class="media">
                                        <div class="media-left media-middle"><img src="<?php echo base_url().DETAIL_IMAGE_PATH.'icons/icon-4.png'  ?>" width="37" height="50" alt="Icon"></div>
                                        <div class="media-body"> Property ID<br><?php echo $pro->property_unique_id; ?>  </div>
                                    </li>
									
                                    <li class="media">
                                        <div class="media-left media-middle"><img src="<?php echo base_url().DETAIL_IMAGE_PATH.'icons/icon-2.png'  ?>" width="50" height="30" alt="Icon"></div>
                                        <div class="media-body"><?php echo $pro->property_bedrooms; ?><br> Bedrooms  </div>
                                    </li>
                                    <li class="media">
                                        <div class="media-left media-middle"><img src="<?php echo base_url().DETAIL_IMAGE_PATH.'icons/icon-3.png'  ?>" width="50" height="34" alt="Icon"></div>
                                        <div class="media-body"><?php echo $pro->property_bathrooms; ?><br> Bathrooms </div>
                                    </li>
                                    <li class="media">
                                        <div class="media-left media-middle"><img src="<?php echo base_url().DETAIL_IMAGE_PATH.'icons/icon-4.png'  ?>" width="50" height="46" alt="Icon"></div>
                                        <div class="media-body"> Property Size<br> <?php echo $pro->property_size; ?> </div>
                                    </li>
                                    <li class="media">
                                        <div class="media-left media-middle"><img src="<?php echo base_url().DETAIL_IMAGE_PATH.'icons/icon-7.png'  ?>" width="50" height="50" alt="Icon"></div>
                                        <div class="media-body"> Year Built<br> <?php echo $pro->property_year; ?> </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="detail-features detail-block">
                                <div class="detail-features-left">
                                    <div class="detail-title">
                                        <h4 class="title-left">Address Details</h4>
                                    </div>
                                    <ul class="list-two-col">
                                        <li><strong>Address: </strong><?php echo $pro->address; ?></li>
                                        <li><strong>City:</strong><?php echo $pro->city; ?></li>
                                        <li><strong>State:</strong><?php echo $pro->state; ?></li>
                                        <li><strong>Zip:</strong><?php echo $pro->zip; ?></li>
                                        <li><strong>Country:</strong><?php echo $pro->country; ?></li>
                                        <li><strong>Neighbourhood:</strong><?php echo $pro->neigh; ?></li>
                                    </ul>
                                </div>
                                <div class="detail-features-right">
                                    <div class="detail-title">
                                        <h2 class="title-left">Features</h2>
                                    </div>
                                    <ul class="list-two-col list-features">
                                        <li><a href="#">Air Conditioning</a></li>
                                        <li><a href="#">Barbeque</a></li>
                                        <li><a href="#">Dryer</a></li>
                                        <li><a href="#">Gym</a></li>
                                        <li><a href="#">Laundry</a></li>
                                        <li><a href="#">Lawn</a></li>
                                        <li><a href="#">Microwave</a></li>
                                        <li><a href="#">Outdoor Shower</a></li>
                                        <li><a href="#">Refrigerator</a></li>
                                        <li><a href="#">Sauna</a></li>
                                        <li><a href="#">Swimming Pool</a></li>
                                        <li><a href="#">TV Cable</a></li>
                                        <li><a href="#">Washer</a></li>
                                        <li><a href="#">WiFi</a></li>
                                        <li><a href="#">Window Coverings</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="detail-gallery detail-block clearfix">
							<?php $i=1; if(checkValue($propertydetails)) { foreach($propertydetails as $img) { ?>
                                <div class="col-sm-3">
                                    <figure class="item-thumb">
                                        <a href="<?php echo base_url().DETAIL_IMAGE_PATH.'property/'.$img->property_id.'/large/'.$img->property_images_name;  ?>" class="hover-effect" data-fancy="property_gallery[gal]" title="Gallery Image">
                                            <img src="<?php echo base_url().DETAIL_IMAGE_PATH.'property/'.$img->property_id.'/thumb/'.$img->property_images_name;  ?>" alt="Gallery Image">
                                        </a>
                                    </figure>
                                </div>
							
		                    <?php $i++; }}?>
                            </div>

                           <!-- <div class="property-video detail-block">
                                <div class="detail-title">
                                    <h2 class="title-left">Video</h2>
                                </div>
                                <div class="video-block">
                                    <a href="https://www.youtube.com/watch?v=QK66RK7ogKU" data-fancy="property_video" title="YouTube demo">
                                        <span class="play-icon"><img src="<?php //echo base_url().DETAIL_IMAGE_PATH.'icons/icon-11.png'  ?>" alt="YouTube demo" width="60" height="60"></span>
                                        <img src="<?php //echo base_url().DETAIL_IMAGE_PATH.'property-detail/property-detail-landing-page/video_1440x600.jpg'  ?>" alt="thumb" class="video-thumb">
                                    </a>
                                </div>
                            </div>-->
                        </div>
					</div>
                </div>
            </div>
        </section>
        <!--end detail content-->
    </section>
    <!--end section page body-->
		<?php }} ?>
