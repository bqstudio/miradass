<?php if( $featured_post = get_field('featured_post',get_option('page_for_posts')) ): ?>
	<section class="featured_post">
        <div class="container">
            <div class="featured_post__grid featured_post__grid--first">
                <?php $i = 0;
                foreach( $featured_post as $post ): 
                    setup_postdata($post);
                    get_template_part('modules/posts/item','grid');
                    echo ($i++ == 0)? '</div><div class="featured_post__grid">' : '';
                endforeach; ?>
            </div>
        </div>
    </section>
    <?php wp_reset_postdata(); ?>
<?php endif; ?>