<section class="our_partners">
    <div class="container_big">
        <?php echo ($title = get_sub_field('title'))? '<div class="our_partners__title">'.$title.'</div>':'';
        echo ($text = get_sub_field('text'))? '<div class="our_partners__text">'.$text.'</div>':''; 

        if( have_rows('logos') ): ?>
            <div class="our_partners__cont">
            <?php while( have_rows('logos') ): the_row(); 
                $image = get_sub_field('image'); ?>
                <div class="item">
                    <?php get_template_part('modules/components/image',NULL,array('image' => get_sub_field('image')) ); ?>
                </div>
            <?php endwhile; ?>
            </div>
        <?php endif; 

        echo ($bottom_text = get_sub_field('bottom_text'))? '<div class="our_partners__bottom_text">'.$bottom_text.'</div>':''; ?>
    </div>
</section>