<?php
/**
 * Template Name: Page service Template
 * Template Post Type: page
 * The template for displaying Page Home
 */
?>
<?php get_header(); ?>
<?php
			$cats = [];
						$args = array(
								'post_type' => 'projects',
								'posts_per_page' => 200,
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
        <div class="flat flat2 col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" id="projects">
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
<?php get_footer(); ?>