<?php
/**
 * The template for displaying the About page
 *
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

			<section class="about-accelerate">
				<div class="site-content">
						
					<?php while ( have_posts() ) : the_post(); ?>
				
					<h2><?php the_content(); ?></h2>
				</div>
			</section>
				
			<section class="about-services">
				<div class="site-content">
					<h3>Our Services</h3>
					<?php the_field('introduction'); ?>
					<div style="height: 60px;"></div>
						
					<img src="<?php the_field('service_1_image'); ?>" class="left"><span class="two"><?php the_field('service_1_title'); ?></span><?php the_field('service_1'); ?><div style="clear: both; height: 60px;"></div>
					<img src="<?php the_field('service_2_image'); ?>" class="right"><span class="two"><?php the_field('service_2_title'); ?></span><?php the_field('service_2'); ?><div style="clear: both; height: 60px;"></div>
					<img src="<?php the_field('service_3_image'); ?>" class="left"><span class="two"><?php the_field('service_3_title'); ?></span><?php the_field('service_3'); ?><div style="clear: both; height: 60px;"></div>
					<img src="<?php the_field('service_4_image'); ?>" class="right"><span class="two"><?php the_field('service_4_title'); ?></span><?php the_field('service_4'); ?><div style="clear: both; height: 60px;"></div>

				</div
			</section>
				
				
			<?php endwhile; // end of the loop. ?>
			
			
			<section class="about-button">
				
					<span class="three">Interested in working with us? &nbsp;&nbsp; <a class="button" href="<?php echo home_url(); ?>/contact">Contact Us</a></span>
				
			</section>


		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>