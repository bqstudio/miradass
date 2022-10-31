<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package palermo
 */

get_header(); 

	get_template_part('modules/hero/simple',NULL,array('post' => get_option('page_for_posts'))); 


	get_template_part('modules/posts/featured_post'); ?>

	<form method="POST" id="filter" data-page="1">
		<div class="container">
			<div class="links_filter">
				<div class="links_filter__title">More News</div>
				<li>
					<a class="all js-active" href="#!">ALL</a>
				</li>
				<?php wp_get_archives( array( 'type' => 'yearly','post_type' => 'post',  'format' => 'html', 'posts_per_page' => -1 ) ); ?>
			</div>

			<div class="post_internal">
				<div class="post_internal__cont js-loading" id="result">

				</div>

				<div class="post_internal__button">             
					<button type="submit" class="js-load-more button" title="<?php _e('Load More', 'all-in'); ?>" data-page="1" ><?php _e('Load More', 'all-in'); ?></button>
				</div>
			</div>
		</div>
	</form>
	
<?php get_footer();
