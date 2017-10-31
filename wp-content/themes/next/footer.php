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
                    <span>22664-5451-55</span>
                    <br>
                    <i class="fa fa-facebook-square fa-2x" id="c"></i>
                    <i class="fa fa-skype fa-2x" aria-hidden="true" id="c"></i>
                    <i class="fa fa-google-plus-square fa-2x" aria-hidden="true" id="c"></i>
                    <i class="fa fa-twitter-square fa-2x" id="c"></i>
                    <i class="fa fa-codepen fa-2x" id="c"></i>
                </div>
                <div class="logo col-lg-4 col-md-4 col-sm-12 col-xs-12 wow bounceInUp" data-wow-offset="300">
                    <h2>USEFUL LINKS</h2>
                    <ul class="list-group">
                        <li class="col-sm-6 col-xs-6"><a href="#">Introduction</a></li>
                        <li class="col-sm-6 col-xs-6"><a href="#">Our Approach</a></li>
                        <li class="col-sm-6 col-xs-6"><a href="#">Support Forum</a></li>
                        <li class="col-sm-6 col-xs-6"><a href="#">Help Center</a></li>
                        <li class="col-sm-6 col-xs-6"><a href="#">Layout Features</a></li>
                        <li class="col-sm-6 col-xs-6"><a href="#">Fre Questions</a></li>
                        <li class="col-sm-6 col-xs-6"><a href="#">Return Policy</a></li>
                        <li class="col-sm-6 col-xs-6"><a href="#">Send a Question</a></li>
                        <li class="col-sm-6 col-xs-6"><a href="#">Our Process</a></li>
                        <li class="col-sm-6 col-xs-6"><a href="#">Support Center</a></li>
                        <li class="col-sm-6 col-xs-6"><a href="#">Join Team</a></li>
                    </ul>
                </div> 
                <div class="logo col-lg-4 col-md-4 col-sm-12 col-xs-12 wow bounceInRight" data-wow-offset="200">
                    <h3>GALLERIES</h3>
                    <img src="images/avatars/avatar-1.jpg" width="100">
                    <img src="images/avatars/avatar-2.jpg" width="100">
                    <img src="images/avatars/avatar-12.jpg" width="100">
                    <img src="images/avatars/avatar-1.jpg" width="100">
                    <img src="images/avatars/avatar-1.jpg" width="100">
                    <img src="images/avatars/avatar-12.jpg" width="100">
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