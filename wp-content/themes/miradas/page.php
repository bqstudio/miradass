<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package palermo
 */

get_header(); ?>
	<main id="primary" class="site-main wrapper">
		<?php while ( have_posts() ) : the_post(); 

			if(is_home() || is_front_page()):
				get_template_part('modules/hero/home'); 
			else: 
				get_template_part('modules/hero/simple'); 
			endif; 

			if( get_field('content') ):
				while ( has_sub_field('content') ) :
					get_template_part('modules/'.get_row_layout());
				endwhile;
			endif;
		endwhile; ?>
	</main><!-- #main -->
<?php get_footer();
