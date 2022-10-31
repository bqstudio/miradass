<?php if( $related_news = get_field('related_news') ): ?>
    <section class="featured_post">
        <div class="container">
        <?php echo ($related_title = get_field('related_title'))? '<div class="featured_post__title">'.$related_title.'</div>':''; ?>
            <div class="featured_post__grid">
                <?php foreach( $related_news as $post ): 
                        setup_postdata($post);
                        get_template_part('modules/posts/item','grid');
                    endforeach; ?>
            </div>
        </div>
    </section>
    <?php wp_reset_postdata(); ?>
<?php endif; ?>