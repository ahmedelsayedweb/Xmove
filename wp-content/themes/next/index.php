<?php get_header(); ?>
<?php  
    if ( function_exists( 'ot_get_option' ) ) {
	  $title_about = ot_get_option( 'title_about' );
	  $description_about = ot_get_option( 'description_about' );
	 
	}
    ?>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>
<?php
			if ( function_exists( 'ot_get_option' ) ) {
				$images = explode( ',', ot_get_option( 'banner', '' ) );
?>
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
	  <?php
								if ( ! empty( $images ) ) {
							foreach( $images as $id ) {
								if ($i++ == 1){
									$class = ' active ';
								}
								if ( ! empty( $id ) ) {
							$full_img_src = wp_get_attachment_image_src( $id, 'custom-thumb' );
								  echo '<div class="item ' . $class . '">
      <img src="' . $full_img_src[0] . '" class="img-responsive">
    </div> ';
								}
							  }
							}	
						}
					?>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
	 <div class="search col-md-3 col-sm-3 col-xs-12 text-center">
            <h2 class="h1" data-wow-offset="100">PROPERTIES</h2>
		 <?php
				  $lang = custom_get_current_lang();
    				if($lang == 'ar'){
						 echo do_shortcode('[contact-form-7 id="74" title="Contact form 1"]'); 
						}elseif($lang == 'en'){
						echo do_shortcode('[contact-form-7 id="34" title="Contact form 1"]'); 
					};
				  	?> 
<!--
            <div class="search1">
                <h4>CITY</h4>
                <div class="dropdown" id="btn-search1">
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" id="border" style="color: black">ALL TYPE
                <span class="caret"></span></button>
                <ul class="dropdown-menu" id="type1" style="background-color: rgb(255, 120, 0)">
                    <li><a href="#">TYPE ONE</a></li>
                    <li><a href="#">TYPE TWO</a></li>
                    <li><a href="#">TYPE THREE</a></li>
                    </ul>
                </div>
            </div>

            <div class="search1">
                <h4>DISTRICT</h4>
                <div class="dropdown" id="btn-search2">
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" id="border" style="color: black">ALL TYPE
                <span class="caret"></span></button>
                <ul class="dropdown-menu" id="type2" style="background-color: rgb(255, 120, 0)">
                    <li><a href="#">TYPE ONE</a></li>
                    <li><a href="#">TYPE TWO</a></li>
                    <li><a href="#">TYPE THREE</a></li>
                    </ul>
                </div>
            </div>
            <div class="search1">
                <h4>PROPERTY TYPE</h4>
                <div class="dropdown" id="btn-search3">
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" id="border" style="color: black">ALL TYPE
                <span class="caret"></span></button>
                <ul class="dropdown-menu" id="type3" style="background-color: rgb(255, 120, 0)">
                    <li><a href="#">TYPE ONE</a></li>
                    <li><a href="#">TYPE TWO</a></li>
                    <li><a href="#">TYPE THREE</a></li>
                    </ul>
                </div>
            </div>
            <div class="search1">
                <h4>E-mail</h4>
                <input type="text" placeholder="Email">
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 searchbtn" data-wow-offset="100">
                <button>SEARCH PROPERTIES</button>
            </div>-->
        </div>
</div>
 <div class="clearfix"></div>
        <!--start EMILLA -->
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 emilla" style="overflow: hidden" id="home">
            <div class="container text-center">
                <div class="img col-lg-12 col-md-12 wow bounceInRight" data-wow-offset="200">
                    <h2 class="h2"><?php echo $title_about; ?></h2>
                    <?php echo $description_about; ?>
                </div>
            </div>
        </div>
        <!-- end EMILLA -->
<?php
			$cats = [];
						$args = array(
								'post_type' => 'projects',
								'posts_per_page' => 6,
						);
						$product_query = new WP_Query( $args );
							 ?>
						<?php if ( $product_query->have_posts() ) : ?>
			<?php $i = 1; ?>
							<?php while ($product_query->have_posts()) : $product_query->the_post(); 
			$categories = get_the_category();
			$cats = array_merge($cats, $categories);
			?>
			<?php endwhile; endif; ?>
        <!--start flats-->
        <div class="flat col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" id="projects">
            <div class="container wow fadeInUp" data-wow-offset="300">
                <h2 class="h2">PROJECTS</h2>
				<?php if ( $product_query->have_posts() ) : ?>
			<?php $i = 0; ?>
			<?php while ($product_query->have_posts()) : $product_query->the_post();
			$categories = get_the_category();
			$slug = '';
			foreach($categories  as $cat){
			if(isset($cat->slug)){
				$slug .= $cat->slug;
			}
			}
			?>
				<div class="tab-panel <?php echo $class; ?>" id="<?php echo $slug; ?>">
                <div class="flatone col-lg-4 col-md-4">
                    <div class="sale"><?php the_field('sale'); ?></div>
                    <a href="<?php the_permalink(); ?>">
						<img src="<?php the_post_thumbnail_url(); ?>">
					</a>
                    <div class="icons text-center">
                        <div class="icon">
                            <div class="price">
                                <i class="fa fa-shower fa-2x" aria-hidden="true"></i>
                                <span><?php the_field('bathrooms'); ?></span>
                            </div>
                            <div class="price">
                                <i class="fa fa-bed fa-2x" aria-hidden="true"></i>
                                <span><?php the_field('bed_rooms'); ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="paragraphs">
                       <a href="<?php the_permalink(); ?>">
						   <h3 class="h2"><?php the_title() ?></h3>
						</a>
                        <?php the_excerpt(); ?>
                    </div>
                    <div class="contact">
                        <i class="fa fa-map-marker"></i>
                        <span><?php the_field('location'); ?></span>
                        <h3><?php the_field('price'); ?></h3>
                    </div>
                </div>
				</div>
				<?php $i++;
									?>
							
			<?php endwhile; endif; ?>
            </div>
        </div>
        <!--end Flats-->
<?php
		$args = array(
				'post_type' => 'services',
				'posts_per_page' => 8,
		);
		$team_query = new WP_Query( $args );
			 ?>
		<?php if ( $team_query->have_posts() ) : ?>	
        <!--Our Service-->
        <div class="service col-xs-12 text-center"  style="overflow: hidden" id="proper">
            <h2 class="h1 wow bounceInUp" data-wow-offset="300">OUR SERVICE</h2>
			<?php $i = 1; ?>
				<?php while ($team_query->have_posts()) : $team_query->the_post(); ?>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 icons wow bounceInLeft" data-wow-offset="300">
                <div class="iconone">
					<img src="<?php the_post_thumbnail_url(); ?>">    
                </div>
                <h3><?php the_title(); ?></h3>
                <?php the_content();?>
            </div>
			<?php $i++;	?>
			<?php endwhile; endif; ?>
        </div>
        <!--End Our Service-->
        <!--start Our Agents-->
        <div class="our-agents text-center col-lg-12 col-md-12 col-sm-12 col-xs-12" id="agents">
            <div class="container">
                    <div class="head wow bounceInUp" data-wow-offset="300">
						<h2 class="h1">OUR AGENTS</h2>
                    </div>
                <div class="owl-carousel owl-theme">
					<?php 
		if ( function_exists( 'ot_get_option' ) ) {			
		  $slides = ot_get_option( 'agents_as', array() );	
			$title_slider = ot_get_option( 'title_slider' );
			$link_slider = ot_get_option( 'link_slider' );
		  if ( ! empty( $slides ) ) {
			foreach( $slides as $slide ) {
			  echo '
			  <div class="agents col-lg-3 col-md-3 col-xs-12 col-sm-12 text-center wow bounceInDown" data-wow-offset="300">
			<img src="' . $slide['image'] . '" width="500">
				<h3>' . $slide['title'] . '</h3>
				<p>' . $slide['description'] . '</p>
		</div>';
			}
		  }
		}	
	  ?>	
                </div>
            </div>
        </div>
        <!--End Our Agents-->
<?php
		$args = array(
				'post_type' => 'careers',
				'posts_per_page' => 6,
		);
		$team_query = new WP_Query( $args );
			 ?>
		<?php if ( $team_query->have_posts() ) : ?>	
        <!--start Provi-->
        <div class="provi col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center flat" style="overflow: hidden" id="blog">
            <div class="container">
				<h4 class="h3">Careers</h4>
				<?php $i = 0; ?>
	<?php while ($team_query->have_posts()) : $team_query->the_post(); ?>
                <div class="paragraphss wow bounceInUp" data-wow-offset="300">
                   <div class="flatone col-lg-4 col-md-4">
                    <img src="<?php the_post_thumbnail_url(); ?>" class="img-responsive">
                    <div class="icons text-center">
                        <h3 class="h2"><?php the_title(); ?></h3>
                    </div>
                    <div class="paragraphs">
                        <?php the_excerpt(); ?>
                    </div>
                    <div class="contact">
                        <a href="">Request</a>
                    </div>
                </div>
                </div>
				<?php $i++; ?>
			<?php endwhile; endif; ?>
            </div>
        </div>
        <!--end Provi-->
        <!--Start Client-->
        <div class="clients col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="overflow: hidden" id="page">
            <div class="container">
                <h2 class="news_t">NEWS</h2>
				<?php
						$args = array(
								'post_type' => 'news',
								'posts_per_page' => 3,
						);
						$news_query = new WP_Query( $args );
							 ?>
						<?php if ( $news_query->have_posts() ) : ?>
<div class="col-lg-12">
	<?php $i = 1; ?>
	<?php while ($news_query->have_posts()) : $news_query->the_post(); ?>
	<div class="col-md-4">
        <div class="article_item">
          <a href="<?php echo get_permalink(); ?>" class="article_photo">
              <img class="article_photo_img" src="<?php the_post_thumbnail_url(); ?>" alt="">
            <time class="article__time">
              <?php the_time('d') ?>
            </time>
          </a>
          <div class="article_details">
            <a href="<?php echo get_permalink(); ?>" class="article_title"><?php the_title(); ?></a>
            <div class="article_intro"> <?php the_excerpt(); ?></div>
            <a href="<?php echo get_permalink(); ?>" class="article__more">Read More</a>
          </div>
        </div>
      </div>
	<?php $i++; ?>
			<?php endwhile; endif; ?>
            </div>
        </div>
</div>
        <!--End Client-->
<?php
			if ( function_exists( 'ot_get_option' ) ) {
				$images = explode( ',', ot_get_option( 'gallery', '' ) );
?>
        <!--Start Icons-->
        <div class="iconss col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="container">
                <div class="wow fadeInUp" data-wow-offset="300">
                    <div class="owl-carousel owl-theme">
						<?php
								if ( ! empty( $images ) ) {
							foreach( $images as $id ) {
								if ( ! empty( $id ) ) {
							$full_img_src = wp_get_attachment_image_src( $id, 'custom-thumb' );
								  echo '
								  <div class="item"><img src="' . $full_img_src[0] . '" class="col-lg-2 col-md-2 col-sm-12 col-xs-12"></div> ';
								}
							  }
							}	
						}
					?>
                    </div>
                </div>
            </div>
        </div>
        <!--End Icons-->
<?php  
    if ( function_exists( 'ot_get_option' ) ) {
	  $logo_image = ot_get_option( 'logo' );
	  $favicon = ot_get_option( 'favicon' );
	  $instagram = ot_get_option( 'instagram' );
	  $facebook = ot_get_option( 'facebook' );
	  $email = ot_get_option( 'email' );
	  $call = ot_get_option( 'phone' );
	  $address = ot_get_option( 'address' );
	}
    ?>
        <!--Start Form-->
        <div class="form col-xs-12 text-center" id="contact">
            <div class="container">
                <div class="col-lg-6 section1 wow bounceInUp" data-wow-offset="400">
                    <div class="contact">
                        <h4 class="h3">CONTACT</h4>
                        <div class="div">
                            <i class="fa fa-map-marker"></i>
                            <span><?php echo $address; ?></span>
                        </div>
                        <div class="div">
                            <i class="fa fa-phone"></i>
                            <span><?php echo $call; ?></span>
                        </div>
                        <div class="div">
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                            <span><?php echo $email; ?></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 section2 wow bounceInDown" data-wow-offset="400">
                    <h4 class="h3">NEWSLETTER</h4>
                    <div>
                        <form>
							<?php
				  $lang = custom_get_current_lang();
    				if($lang == 'ar'){
						 echo do_shortcode('[contact-form-7 id="68" title="NEWSLETTER"]'); 
						}elseif($lang == 'en'){
						echo do_shortcode('[contact-form-7 id="68" title="NEWSLETTER"]'); 
					};
				  	?> 
<!--
                            <input type="text" placeholder="Your Name">
                            <input type="text" placeholder="Your Email">
                            <input type="text" placeholder="Your Message">
                            <button>SEND MESSAGE</button>
-->
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--End Form-->
<?php get_footer(); ?>