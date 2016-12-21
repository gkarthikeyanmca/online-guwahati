<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php wp_title(); ?></title>

    <!-- Bootstrap -->
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/css/dropdown-onhover.css" rel="stylesheet">
    <!--<link href="<?php bloginfo('template_url'); ?>/css/media-queries.css" rel="stylesheet">-->
    <!--<link href="<?php bloginfo('template_url'); ?>/style.css" rel="stylesheet">-->
    <link href="<?php bloginfo('template_directory'); ?>/css/media-queries.php" rel="stylesheet">
    <link href="<?php bloginfo('template_directory'); ?>/style.php" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <!--TopNavBar Start -->
    <?php require_once('inc/wp-bootstrap-walker.php'); ?>
    <div class="topnav-fixed">
      <div class="container-fluid topnav-wrapper">
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-sm-12">              
              <span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span> 
              <?php
                if(have_rows('phone_numbers','option')):
                  $phone_numbers=array();
                  while(have_rows('phone_numbers','option')): the_row();
                    if (strpos(get_sub_field('phone_number_title'), 'Whats') === false) {
                      //$phone_numbers[get_sub_field('phone_number_title')]=get_sub_field('phone_number');
                      echo get_sub_field('phone_number_title')." : ".get_sub_field('phone_number')." ";
                    }
                  endwhile;
                endif;
              ?>
              <div class="topnav-email">
                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                <a href="mailto:<?php the_field('email','option'); ?>"><?php the_field('email','option'); ?></a>
              </div>
            </div>
            <div class="col-md-4 col-sm-12">
              <div class="topnav-social-icons">
                <a href="<?php the_field('facebook_url','option'); ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="<?php the_field('twitter_url','option'); ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a href="<?php the_field('google_plus_url','option'); ?>"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                <a href="<?php the_field('linkedin_url','option'); ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--TopNavBar End -->

    <!--Primary Navbar Start -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="blue-bar-toggle hidden-lg hidden-md"><span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span></div>
      <div class="container primary-nav">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#primary-nav-wrapper" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!--<a class="navbar-brand" href="#"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" /></a>-->
          <a class="navbar-brand" href="#"><strong>ONLINE GUWAHATI</strong></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="primary-nav-wrapper">
          <?php
            wp_nav_menu( array(
                'menu'              => 'Primary Menu',
                'theme_location'    => 'primary_menu',
                'menu_class'        => 'nav navbar-nav navbar-left',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
          ?>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    <?php
      if(is_front_page()){
        echo do_shortcode('[crellyslider alias="home"]');
      }
    ?>
    <!--Primary Navbar End -->