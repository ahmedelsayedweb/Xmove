<!DOCTYPE html>
<html <?php get_bloginfo('language') ?>>
<?php  
    if ( function_exists( 'ot_get_option' ) ) {
	  $logo_image = ot_get_option( 'logo' );
	  $logo_thumbnail = ot_get_option( 'logo_thumbnail' );
	  $favicon = ot_get_option( 'favicon' );
	}
    ?>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>"/>
		<title><?php wp_title('|','true','right'); ?><?php bloginfo('name'); ?></title>
		<meta name="keywords" content="">
		<meta name="description" content="">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/ico" href="<?php echo $logo_thumbnail; ?>" />
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		<?php wp_head(); ?>
	</head>
	<body>
 <!--Start conHeader-->
        <div class="contact-header col-lg-12 col-md-12 col-sm-12 col-xs-12" style="overflow: hidden">
            <div class="container">
                <ul class="list-inline contact-sec">
                    <li>
                        <i class="fa fa-globe"></i>
                        <a href="#">
                            English
                        </a>
                        <i class="fa fa-angle-down"></i>
                            <ul class="hidden">
                                <li>Arabic</li>
                            </ul>
                    </li>
                    <li><i class="fa fa-phone"></i> 0115982303211</li>
                    <li><i class="fa fa-map-marker"></i> Global@Eccomerce.com</li>
                </ul>
                <div class="socials">
                    <a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
                    <a href="#"><i class="fa fa-twitter fa-2x"></i></a>
                    <a href="#"><i class="fa fa-pinterest fa-2x"></i></a>
                    <a href="#"><i class="fa fa-rss fa-2x"></i></a>
                    <a href="#"><i class="fa fa-instagram fa-2x"></i></a>
                    <a href="#"><i class="fa fa-dribbble fa-2x"></i></a>
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
                    <li><a href="#home">HOME</a><i class="fa fa-angle-down"></i></li>
                    <li><a href="#agents">AGENTS</a><i class="fa fa-angle-down"></i></li>
                    <li><a href="#proper">PROPERTY</a><i class="fa fa-angle-down"></i></li>
                    <li><a href="#blog">BLOG</a><i class="fa fa-angle-down"></i></li>
                    <li><a href="#page">PAGE</a><i class="fa fa-angle-down"></i></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
        <!--End HEader-->
   