<!-- FOOTER-->
<?php  
    if ( function_exists( 'ot_get_option' ) ) {
	  $logo_image = ot_get_option( 'logo' );
	  $description_footer = ot_get_option( 'description_footer' );
	  $favicon = ot_get_option( 'favicon' );
	  $facebook = ot_get_option( 'facebook' );
	  $twitter = ot_get_option( 'twitter' );
	  $google = ot_get_option( 'google' );
	  $address = ot_get_option( 'address' );
	  $phone = ot_get_option( 'phone' );
	  $email = ot_get_option( 'email' );
	  $gallerytext = ot_get_option( 'gallerytext' );
	}
    ?>
           <!--Start Footer-->
        <div class="footer col-lg-12 col-md-12 col-sm-12 col-xs-12" style="overflow: hidden">
            <div class="container">
                <div class="logo col-lg-4 col-md-4 col-sm-12 col-xs-12 wow bounceInLeft" data-wow-offset="300">
                    <img src="images/logo.png" class="img-responsive" width="200">
                    <br>
                    <p>SunHouse perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium aperiam.</p>
                    <br>
                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur.</p>
                    <br>
                    <i class="fa fa-phone fa-2x"></i>
                    <span><?php echo $phone; ?></span>
                    <br>
					 <a class="socal" href="<?php echo $facebook; ?>"><i class="fa fa-facebook-square fa-2x"></i></a>
                    <a class="socal" href="<?php echo $linkedin; ?>"><i class="fa fa-linkedin fa-2x"></i></a>
                    <a class="socal" href="<?php echo $instagram; ?>"><i class="fa fa-instagram fa-2x"></i></a>
                </div>
                <div class="logo col-lg-4 col-md-4 col-sm-12 col-xs-12 wow bounceInUp" data-wow-offset="300">
                    <?php
					if(is_active_sidebar('Footer Sidebar 1 ')){
					dynamic_sidebar('Footer Sidebar 1 ');
					}
					?>
                </div> 
				<?php
			if ( function_exists( 'ot_get_option' ) ) {
				$images = explode( ',', ot_get_option( 'gallery_footer', '' ) );
?>
                <div class="logo col-lg-4 col-md-4 col-sm-12 col-xs-12 wow bounceInRight" data-wow-offset="200">
                    <h3>GALLERIES</h3>
					<?php
								if ( ! empty( $images ) ) {
							foreach( $images as $id ) {
								if ( ! empty( $id ) ) {
							$full_img_src = wp_get_attachment_image_src( $id, 'custom-thumb' );
								  echo '<img src="' . $full_img_src[0] . '" width="100" >';
								}
							  }
							}	
						}
					?>
                </div>
            </div>
        </div>
<div class="copyright">
          <div class="container">
            <div class="row">
              <div class="col-xs-12">© <?php echo date ('Y'); ?>. All Rights Reserved | Design & Developer by <?php bloginfo('name'); ?></div>
            </div>
          </div>
        </div>
        <!--End Footer-->
        <!--start angle up-->
        <div class="up">
            <i class="fa fa-angle-up fa-4x"></i>
        </div>
<?php wp_footer(); ?>
<script>
            new WOW().init();
        </script>
	</body>	
</html>