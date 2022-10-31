<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package palermo
 */

get_header(); ?>

	<main id="primary" class="site-main">
		
		<?php get_template_part('modules/hero/simple');

		while ( have_posts() ) :
			the_post(); ?>

			<div class="single_post">
				<div class="container_big">
					<div class="single_post__text"><?php the_content(); ?></div>
				</div>
			</div>

		<?php endwhile; 

		get_template_part('modules/posts/related_news'); ?>

	</main><!-- #main -->

<?php get_footer();