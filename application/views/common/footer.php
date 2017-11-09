<!--start footer section-->
<footer class="footer-v2">
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="footer-widget widget-about">
                        <div class="widget-top">
                            <h3 class="widget-title">About Site</h3>
                        </div>
                        <div class="widget-body">
                            <p>Houzez is a premium WordPress theme for real estate where modern aesthetics are combined with tasteful simplicity.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="footer-widget widget-contact">
                        <div class="widget-top">
                            <h3 class="widget-title">Contact Us</h3>
                        </div>
                        <div class="widget-body">
                            <ul class="list-unstyled">
                                <li><i class="fa fa-location-arrow"></i><?php  echo $this->fetch_value[0]->address; ?></li>
                                <li><i class="fa fa-phone"></i><?php  echo $this->fetch_value[0]->call_us; ?> </li>
                                <li><i class="fa fa-envelope-o"></i> <a href="#"><?php  echo $this->fetch_value[0]->email_us; ?></a></li>
                            </ul>
                            <p class="read"><a href="<?php echo base_url('contact-us'); ?>">Contact us <i class="fa fa-caret-right"></i></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="footer-widget widget-newsletter">
                      
                        <div class="widget-body">
                  
                            <p>Houzez is a premium WordPress theme for real estate agents.<br>Don’t forget to fullow us on:</p>
                            <ul class="social">
                                <li>
                                    <a href="<?php  echo $this->fetch_value[0]->facebook_link; ?>" class="btn-facebook"><i class="fa fa-facebook-square"></i></a>
                                </li>
                                <li>
                                    <a href="<?php  echo $this->fetch_value[0]->twitter_link; ?>" class="btn-twitter"><i class="fa fa-twitter-square"></i></a>
                                </li>
                                <li>
                                    <a href="<?php  echo $this->fetch_value[0]->google_link; ?>" class="btn-google-plus"><i class="fa fa-google-plus-square"></i></a>
                                </li>
                                <li>
                                    <a href="<?php  echo $this->fetch_value[0]->linked_link; ?>" class="btn-linkedin"><i class="fa fa-linkedin-square"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3">
                    <div class="footer-col">
                        <p>Houzez - All rights reserved</p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="footer-col">
                        <div class="navi">
                            <ul id="footer-menu" class="">
                                <li><a href="<?php echo base_url('privacy'); ?>">Privacy</a></li>
                                <li><a href="<?php echo base_url('terms-conditions'); ?>">Terms and Conditions</a></li>
                                <li><a href="<?php echo base_url('contact-us'); ?>">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div class="footer-col foot-social">
                        <p>
                            Follow us
                            <a target="_blank" class="btn-facebook" href="https://facebook.com/Favethemes"><i class="fa fa-facebook-square"></i></a>

                            <a target="_blank" class="btn-twitter" href="https://twitter.com/favethemes"><i class="fa fa-twitter-square"></i></a>

                            <a target="_blank" class="btn-linkedin" href="http://linkedin.com/"><i class="fa fa-linkedin-square"></i></a>

                            <a target="_blank" class="btn-google-plus" href="http://google.com/"><i class="fa fa-google-plus-square"></i></a>

                            <a target="_blank" class="btn-instagram" href="http://instagram.com/"><i class="fa fa-instagram"></i></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--end footer section-->

<!--Start Scripts-->
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.js'); ?>" ></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/modernizr.custom.js'); ?>" ></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.js'); ?>" ></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/owl.carousel.min.js'); ?>" ></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.prettyPhoto.js'); ?>" ></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.matchHeight-min.js'); ?>" ></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap-select.js'); ?> "></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-ui.js'); ?> "></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/isotope.pkgd.min.js'); ?> "></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.nicescroll.js'); ?> "></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/custom.js'); ?> "></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.uploadifive.min.js'); ?> "></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.10.0/jquery.validate.js" type="text/javascript"></script>
<script type="text/javascript">	
    jQuery.validator.addMethod('nameValidation', function (value, element, param) {var regex = /^[a-zA-Z]{2,50}$/;if (regex.test(value)) {return true;}else {return false;}});
	 jQuery.validator.addMethod("aFunction", function(value, element) { if (value == "none")  { return false; } else { return true; } });
    $("#master-form").validate({
        rules: {            
            title: {
                required:true
            },  
            description: {
                required:true
			},
			property_for: {
             aFunction: false
           },
		   property_type: {
             aFunction: true
           },
			property_price:{
				digits:true,
				required:true
			},
			city: {
             aFunction: true
           },
			state: {
             aFunction: true
           },
            address:{
                required:true
            },
			country: {
				aFunction: true
             },
			zip:{
				required:true,
				digits:true
			}
        },
            
        // Specify the validation error messages
        messages: {
            title :
                {
                required : "Please enter Title"
            },
            description :{
                required:"Please enter description"
            },
            country:
            {
                aFunction : "Please select country"
            },
			property_for:
            {
                aFunction : "Please select property for"
            },
            property_type :
                {
                aFunction : "Please select property_type"
            },
            zip:
            {
                required : "Please enter zip code",
				digits: 'please enter correct pin code'
            },
            property_price:
            {
                required : "Please enter property price",
			    digits: 'please enter correct price'
            },
			city: {
                 aFunction: true
			},
			state: {
				 aFunction: true
			},
            address:
                {
                required : "Please enter valid address"
            }    
        },
        errorElement: "em",
            
        highlight: function ( element, errorClass, validClass ) {
            $( element ).parents(".col-sm-6").addClass( "has-error" ).removeClass( "has-success" );
        },
        unhighlight: function (element, errorClass, validClass) {
            $( element ).parents(".col-sm-6").addClass( "has-success" ).removeClass( "has-error" );
        } 
    }); 
	jQuery.validator.addMethod("lettersonly", function(value, element) {return this.optional(element) || /^[a-z\s]+$/i.test(value);
}, "Only alphabetical characters"); 
	 jQuery.validator.addMethod("aFunction", function(value, element) { if (value == "none")  { return false; } else { return true; } });
     $("#user-form").validate({
        rules: {         
                email: {
                    required:true,
                    email:true
                },
               first_name :{
                    required:true,
                    lettersonly: true
                },
				last_name :{
                    required:true,
                    lettersonly: true
                },
				property_for :{
                   aFunction:"Please select property for"
				},
				 property_type :{
					aFunction:"Please select property type"
				},
                number:{
                    required:true,
                    digits:true,
					minlength: 10
                }
            },
            // Specify the validation error messages
            messages: {
              email :
                {
                    required : "Please enter email-id",
                    email : "Please enter valid email-id",
                },
                first_name :{
                     lettersonly: 'Please Enter correct first name',
                    required:"Please enter first name"
                },
                number:
                {
                    required : "Please enter mobile number",
                    digits : "Please enter digits only",
					minlength: 'Enter correct 10 digits mobile number'
                },
                last_name:
                {
                    required : "Please enter valid last name",
                    lettersonly: 'please enter correct last name'
                }    
            },
            errorElement: "em",
        highlight: function ( element, errorClass, validClass ) {
            $( element ).parents(".col-sm-6").addClass( "has-error" ).removeClass( "has-success" );
        },
        unhighlight: function (element, errorClass, validClass) {
            $( element ).parents(".col-sm-6").addClass( "has-success" ).removeClass( "has-error" );
        } 
        });
		
		jQuery.validator.addMethod("lettersonly", function(value, element) {return this.optional(element) || /^[a-z\s]+$/i.test(value);
}, "Only alphabetical characters"); 
     $("#property_enquiry_form").validate({
        rules: {         
               email: {
                    required:true,
                    email:true
                },
               first_name :{
                    required:true,
                    lettersonly: true
                },
				last_name :{
                    required:true,
                    lettersonly: true
                },
                mobile_number:{
                    required:true,
                    digits:true,
					minlength: 10
                },
				subject:{
					required:true
				},
				message:{
					required: true
				}
            },
            // Specify the validation error messages
            messages: {
              email :
                {
                    required : "Please enter email-id",
                    email : "Please enter valid email-id",
                },
                first_name :{
                     lettersonly: 'Please Enter correct first name',
                    required:"Please enter first name"
                },
                mobile_number:
                {
                    required : "Please enter mobile number",
                    digits : "Please enter digits only",
					minlength: 'Enter correct 10 digits mobile number'
                },
                last_name:
                {
                    required : "Please enter valid last name",
                    lettersonly: 'please enter correct last name'
                },
                subject:{
					required: "Please enter valid subject"
				},
                message:{
					required: "Please enter valid message"
				}				
            },
            errorElement: "em",
        highlight: function ( element, errorClass, validClass ) {
            $( element ).parents(".col-sm-6").addClass( "has-error" ).removeClass( "has-success" );
        },
        unhighlight: function (element, errorClass, validClass) {
            $( element ).parents(".col-sm-6").addClass( "has-success" ).removeClass( "has-error" );
        } 
        });
		 $('#upload-photo').change(function(){
            var formData = false;
            var formData = new FormData();
            $.each(this.files, function(i, file) {
            	formData.append(i, file);
            });
            formData.append('csrf_test_name', $('input[name=csrf_test_name]').val()); 
                 
            var url = "<?php echo base_url('browseimage') ?>";
            $("#upload-photo").after("<img class='preloader' src='<?php echo base_url(); ?>/assets/images/loading.gif'/>");
            $.ajax({
                url: url,
                type: 'POST',
                processData: false,                       
                contentType: false,
                data: formData,
                dataType:'json',
                success: function(data) { 
                    console.log(data);
                    $(".preloader").remove();
                    if(data){
                        $('.uploaded').append(data.images);
                        $('#sid').val(data.id);
                        $('.addpackage').show();
                        
                    }
                }
            });
        }); 

</script>
<script type="text/javascript">
    $(document).ready(function() 
    {     
        var base_url = $('#base_url').val();
        $('#file_upload').uploadifive({
                'auto'         : true,
                'method'       : 'post',
                'buttonText'   : 'Upload Files Here',
                'fileSizeLimit' : 0,
                'multi' : true,

                'formData'         : {
                                        'timestamp' : '1414397670',
                                        'token'     : '9f6f89154514b964e8639a1e77af9e5c',
                                        'list_id' : $('#list_id').val(),
                                        'image_type' : $('#image_type').val()
                                     },
                'queueID'          : 'queue',
                'uploadScript'     : base_url + 'uploadify/upload_file/',
                'onError'      : function(errorType) 
                {
            alert('Error Encountered : "' + errorType + '"');
        },
                'onUploadComplete' : function(file, data) 
                {                         
                        $.ajax({
                             url : base_url + 'uploadify/filemanipulation/'+file.name+'/'+$('#list_id').val()+'/'+$('#image_type').val(),
                             success : function(response){

                                if(response == 'rejected')
                                {
                                    alert('Something went wrong and your file upload failed');
                                    //location.reload();
                                }

                             }
                        })
                }
        });
    // }
    });
	$(document).ready(function() {
    $(".property_enquiry").click(function() {
        var id = $(this).attr('value');
        $("#property_id").val(id);
        $("#composemodal").modal()
    });
    });
	
	jQuery.validator.addMethod("aFunction", function(value, element) { if (value == "none")  { return false; } else { return true; } });
     $("#contact_forms").validate({
        rules: {         
                email: {
                    required:true,
                    email:true
                },
               subject :{
                    required:true,
                    lettersonly: true
                },
				message :{
                    required:true
                },
                number:{
                    required:true,
                    digits:true,
					minlength: 10
                }
            },
            // Specify the validation error messages
            messages: {
              email :
                {
                    required : "Please enter email-id",
                    email : "Please enter valid email-id",
                },
                subject :{
                     lettersonly: 'Please Enter correct first name',
                    required:"Please enter first name"
                },
                number:
                {
                    required : "Please enter mobile number",
                    digits : "Please enter digits only",
					minlength: 'Enter correct 10 digits mobile number'
                },
                message:
                {
                    required : "Please enter valid last name",
                }    
            },
            errorElement: "em",
        highlight: function ( element, errorClass, validClass ) {
            $( element ).parents(".col-sm-6").addClass( "has-error" ).removeClass( "has-success" );
        },
        unhighlight: function (element, errorClass, validClass) {
            $( element ).parents(".col-sm-6").addClass( "has-success" ).removeClass( "has-error" );
        } 
        });
	</script>

</body>

</html>