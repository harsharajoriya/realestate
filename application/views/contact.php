<section id="section-body">
        <div class="container">
            <div class="page-title breadcrumb-top">
                <div class="row">
                    <div class="col-sm-12">
                        <ol class="breadcrumb">
                            <li><a href="<?php echo base_url(''); ?>"><i class="fa fa-home"></i></a></li>
                            <li class="active">Contact</li>
                        </ol>
                        <div class="page-title-left">
                            <h2>Contact</h2>
                        </div>
                    </div>
                </div>
            </div>
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
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div id="content-area" class="contact-area">
                        <div class="white-block">
                            <div class="row">
                                <div class="col-sm-5 col-xs-12 contact-block-inner">
                                    <form action="<?php echo base_url('save-contact'); ?>" method='post'  id="contact_forms" class="bv-form" >
                                        <div class="form-group has-feedback">
                                            <label class="control-label" for="email">Your email</label>
                                            <input class="form-control" name="email" id="email" data-bv-field="email" required><i class="form-control-feedback" data-bv-icon-for="email" style="display: none;"></i>
                                        <small class="help-block" data-bv-validator="notEmpty" data-bv-for="email" data-bv-result="NOT_VALIDATED" style="display: none;">The email address is required</small><small class="help-block" data-bv-validator="emailAddress" data-bv-for="email" data-bv-result="NOT_VALIDATED" style="display: none;">The email address is not valid</small></div>
                                        <div class="form-group has-feedback">
                                            <label class="control-label" for="phone">Your Phone</label>
                                            <input class="form-control" name="number" id="phone" data-bv-field="phone" required><i class="form-control-feedback" data-bv-icon-for="phone" style="display: none;"></i>
                                        <small class="help-block" data-bv-validator="notEmpty" data-bv-for="phone" data-bv-result="NOT_VALIDATED" style="display: none;">The Name is required and cannot be empty</small></div>
                                        <div class="form-group">
                                            <label class="control-label" for="subject">Subject</label>
                                            <input class="form-control" name="subject" id="subject" required>
                                        </div>
                                        <div class="form-group has-feedback">
                                            <label class="control-label" for="message">Your Message</label>
                                            <textarea class="form-control" name="message" rows="4" id="message" data-bv-field="message" required></textarea><i class="form-control-feedback" data-bv-icon-for="message" style="display: none;"></i>
                                        <small class="help-block" data-bv-validator="notEmpty" data-bv-for="message" data-bv-result="NOT_VALIDATED" style="display: none;">The Message is required and cannot be empty</small></div>
                                        <button type="submit" class="btn btn-secondary btn-long">Send</button>
                                    </form>
                                </div>
                                <div class="col-sm-4 col-xs-12 contact-block-inner">
                                    <div class="contact-info-block">
                                        <h4 class="contact-info-title">Need help searching on&nbsp;Houzez?</h4>
                                        <p>If you&nbsp;forgot&nbsp;your password or want to change your email preferences, use the links below:</p>
                                        <ul>
                                            <li><a href="#" data-modal-target="reset-password">Forgot Password?</a></li>
                                            <li><a href="#">Edit email preferences / Unsubscribe</a></li>
                                        </ul>
                                    </div>
                                    <div class="contact-info-block">
                                        <h4 class="contact-info-title">Still need help?</h4>
                                        <p>If you didn’t find the answer to your question, please&nbsp;<a href="#">contact us</a>&nbsp;and a member of our customer support team will gladly assist you.</p>

                                    </div>
                                    <div class="contact-info-block">
                                        <h4 class="contact-info-title">Contact Us</h4>
                                        <p>To contact Houzez, please select one of the following:</p>
                                        <ul>
                                            <li><a href="#">Renter questions</a></li>
                                            <li><a href="#">Property manager questions</a></li>
                                            <li><a href="#">Business opportunity questions</a></li>
                                            <li><a href="#">Careers opportunity&nbsp;questions</a></li>
                                            <li><a href="#">Customer Support</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-3 col-xs-12 contact-block-inner">
                                    <div class="contact-info-block alert alert-info">
                                        <p class="padding-top"><strong>For All Press Inquiries,</strong><br>
                                            <strong>please contact:</strong></p>
                                        <p><strong>Amy Miller</strong><br>
                                            Public Relations Manager<br>
                                            774 NE 84th St Miami, FL 33879<br>
                                            amy.miller@houzez.com</p>
                                        <p><strong>Kyle Parker</strong><br>
                                            Public Relations Associated<br>
                                            774 NE 84th St Miami, FL 33879<br>
                                            kyle.parker@houzez.com</p>

                                    </div>
                                    <div class="contact-info-block alert alert-info">
                                        <p class="padding-top">
                                            <strong>Corporate Headquarters</strong><br>
                                            1584&nbsp;Biscayne&nbsp;Boulevard<br>
                                            Miami FL, 33176</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>