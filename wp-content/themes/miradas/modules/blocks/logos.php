<section class="logos">
    <div class="container_big">
        <?php echo ($title = get_sub_field('title'))? '<div class="logos__title">'.$title.'</div>':'';
        echo ($text = get_sub_field('text'))? '<div class="logos__text">'.$text.'</div>':''; 

        if( have_rows('logos') ): ?>
            <div class="logos__cont">
                <?php while( have_rows('logos') ): the_row(); 
                    $image = get_sub_field('image'); 
                    
                    if( $link = get_sub_field('link')): ?>
                        <a class="item" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>">
                            <?php get_template_part('modules/components/image',NULL,array('image' => get_sub_field('image')) ); ?>
                        </a>
                <?php  else: ?>
                    <div class="item">
                        <?php get_template_part('modules/components/image',NULL,array('image' => get_sub_field('image')) ); ?>
                    </div>
                    <?php endif;
                endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</section>