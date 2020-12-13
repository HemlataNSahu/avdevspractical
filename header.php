<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title><?php wp_title();?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/responsive.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/font-awesome.min.css">

  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.min.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.min.js"></script>

</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <?php  wp_nav_menu( array( 'theme_location' => 'primary',
        'container_class'=>'collapse navbar-collapse',
        'container_id'   =>'myNavbar',
        'menu_class'     => 'nav  navbar-nav'
                                )); ?>
     <!--  <ul class="nav navbar-nav navbar-right">
        <li><a href="#home">HOME</a></li>
        <li><a href="#discovery">DISCOVERY</a></li>
        <li><a href="#photos">PHOTOS</a></li>
        <li><a href="#contact">CONTACT</a></li>
        <li><a href="#"><img src="images/christopher-campbell-28567-unsplash.png"></a></li>
        
      </ul> -->
    </div>
  </div>
</nav>

