
<html lang="en">


<head>
    <title><?php echo $this->fetch_value[0]->title; ?></title>
    <!--Meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Houzez HTML5 Template">
    <meta name="description" content="Houzez HTML5 Template">
    <meta name="author" content="Favethemes">

    <!--<link rel="apple-touch-icon" sizes="144x144" href="images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="images/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="images/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="images/favicons/manifest.json">
    <link rel="mask-icon" href="images/favicons/safari-pinned-tab.svg">-->

    <link href="<?php echo base_url('assets/css/bootstrap.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/css/bootstrap-select.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/css/font-awesome.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/css/owl.carousel.css'); ?>" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url('assets/css/prettyPhoto.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/css/jquery-ui.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/css/styles.css'); ?>" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>

</head>
<body>
<button class="btn scrolltop-btn back-top"><i class="fa fa-angle-up"></i></button>
<header id="header-section" class="header-section-4 header-main nav-left hidden-sm hidden-xs" data-sticky="1">
  <div class="container">
    <div class="header-left">
		<div class="logo">
		<a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(DETAIL_IMAGE_PATH.'front-option/logo/thumb/'.$this->fetch_value[0]->logo); ?>" alt="logo"></a>
	</div>
    <nav class="navi main-nav">
        <ul>
            <li><a href="<?php echo base_url(); ?>">Home</a></li>
			<li><a href='<?php echo base_url("rent-property"); ?>'>Rent Property</a></li>
			<li><a href='<?php echo base_url("sell-property"); ?>'>Sell Property</a></li>
			<li><a href='<?php echo base_url("projects-listing"); ?>'>Projects</a></li>
        </ul>
    </nav>
	</div>
	<div class="header-right">
		<div>
			<a href="<?php echo base_url('user_data'.'/'.'user'); ?>" class="btn btn-info">Post Property Free</a>
		</div>
    </div>
  </div>
</header>

<div class="header-mobile visible-sm visible-xs">
    <div class="container">

    <!--start mobile nav-->
    <div class="mobile-nav">
        <span class="nav-trigger"><i class="fa fa-navicon"></i></span>
        <div class="nav-dropdown main-nav-dropdown"></div>
    </div>
	
    <!--end mobile nav-->
    <div class="header-logo">
        <a href="#"><img src="<?php echo base_url(DETAIL_IMAGE_PATH.'front-option/logo/thumb/'.$this->fetch_value[0]->logo); ?>" alt="logo"></a>
    </div>
    <div class="header-user">
         <ul class="account-action">
                <li>
                    <span class="user-icon"><i class="fa fa-user"></i></span>
                    <div class="account-dropdown">
                        <ul>
                            <li> <a href="<?php echo base_url('user_data'); ?>" ><i class="fa fa-plus-circle"></i>Post Property Free</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
    </div>
	</div>
</div>

<style>
  .error{
	  color: red;
  }
</style>
