<article class="post-item">
    <div class="post-item__text-cont">
        <div class="post-item__date"><?php echo get_the_date( 'F jS, Y');?></div>
        <h3 class="post-item__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <div class="post-item__text"><?php echo wp_trim_words( get_the_content(), 30, '...' ); ?></div>
        <a class="viewmore" href="<?php the_permalink(); ?>"><?php echo __('Read More','palermo'); ?></a>
    </div>
</article>