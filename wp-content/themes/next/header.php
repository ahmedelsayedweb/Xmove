<!DOCTYPE html>
<html <?php get_bloginfo('language') ?>>
<?php  
    if ( function_exists( 'ot_get_option' ) ) {
	  $logo_image = ot_get_option( 'logo' );
	  $favicon = ot_get_option( 'favicon' );
	  $instagram = ot_get_option( 'instagram' );
	  $facebook = ot_get_option( 'facebook' );
	  $linkedin = ot_get_option( 'linkedin' );
	  $call = ot_get_option( 'phone' );
	  $address = ot_get_option( 'address' );
	}
    ?>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>"/>
		<title><?php wp_title('|','true','right'); ?><?php bloginfo('name'); ?></title>
		<meta name="keywords" content="">
		<meta name="description" content="">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/ico" href="<?php echo $favicon; ?>" />
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		<?php wp_head(); ?>
	</head>
	<body>
 <!--Start conHeader-->
        <div class="contact-header col-lg-12 col-md-12 col-sm-12 col-xs-12" style="overflow: hidden">
            <div class="container">
                <ul class="list-inline contact-sec">
                    <?php
					if(is_active_sidebar('header')){
					dynamic_sidebar('header');
					}
					?>
                    <li><i class="fa fa-phone"></i> <?php echo $call; ?></li>
                    <li><i class="fa fa-map-marker"></i> <?php echo $address; ?></li>
                </ul>
                <div class="socials">
                    <a href="<?php echo $facebook; ?>"><i class="fa fa-facebook-square fa-2x"></i></a>
                    <a href="<?php echo $linkedin; ?>"><i class="fa fa-linkedin fa-2x"></i></a>
                    <a href="<?php echo $instagram; ?>"><i class="fa fa-instagram fa-2x"></i></a>
                </div>
            </div>  
        </div>
        <!--End conHeader-->
        <div class="clearfix"></div>
        <!--Start header-->
        <div class="header col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
            <div class="container">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/logo.png" class="img-responsive col-lg-3 col-md-3 col-sm-12 col-xs-12" id="image-menu">
                <ul class="list-inline col-lg-6" id="nav-menu">
                    <li><a href="#home">HOME</a></li>
                    <li><a href="#projects">PROJECTS</a></li>
                    <li><a href="#proper">SERVICES</a></li>
                    <li><a href="#blog">CAREERS</a></li>
                    <li><a href="#page">NEWS</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
        <!--End HEader-->
   