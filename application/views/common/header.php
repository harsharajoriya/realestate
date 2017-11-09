<html lang="en">


<head>
    <title><?php 
            echo $this->fetch_value[0]->title;
        ?></title>
    <!--Meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Houzez HTML5 Template">
    <meta name="description" content="Houzez HTML5 Template">
    <meta name="author" content="Favethemes">



    <link href="<?php echo base_url('assets/css/bootstrap.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/css/bootstrap-select.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/css/font-awesome.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/css/owl.carousel.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/css/jquery-ui.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/css/styles.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/css/uploadifive.css'); ?>" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
</head>
<body>

<!--start section top-->
<section id="splash-section">
<div class="vegas-overlay"></div>
<div class="splash-inner-media"></div>
<div class="splash-inner-content">
<div class="container-fluid">
<!--start section header-->
<header class="header-section-default header-main splash-header nav-left">
<div class="header-mobile visible-sm visible-xs">
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
        <div class="user">
            <a href="#" data-toggle="modal" data-target="#pop-login"><i class="fa fa-user"></i></a>
        </div>
    </div>
</div>
<div class="hidden-sm hidden-xs clearfix">
<div class="header-left">
    <div class="logo"><a href="
	<?php echo base_url(); ?>"><img src="<?php echo base_url(DETAIL_IMAGE_PATH.'front-option/logo/thumb/'.$this->fetch_value[0]->logo); ?>" alt="logo"></a></div>
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
<style>
  .error{
	  color: red;
  }
</style>
</header>