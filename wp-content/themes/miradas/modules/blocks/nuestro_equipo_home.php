<section class="nuestro_equipo nuestro_equipo--home" id="nuestro_equipo--home">
    <div class="container">
        <?php echo ($title = get_sub_field('title'))? '<div class="title">'.$title.'</div>':''; ?>
        <?php echo ($subtitle = get_sub_field('subtitle'))? '<div class="nuestro_equipo__subtitle">'.$subtitle.'</div>':''; ?>
        
        <?php $nuestro_equipo = get_sub_field('nuestro_equipo');
            if( $nuestro_equipo ): ?>
                <div class="nuestro_equipo__cont">
                    <?php foreach( $nuestro_equipo as $post ): 
                        setup_postdata($post); ?>
                        <div class="nuestro_equipo__item js-open-equipo">
                            <?php if( has_post_thumbnail() ): ?>
                                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'thumbnail');?>" alt="<?php echo get_the_title();?>" />
                            <?php endif; ?>
                            <div class="nuestro_equipo__persona"><?php the_title();?></div>
                            <div class="nuestro_equipo__especializacion"><?php the_content();?></div>
                        </div>
                        
                        <?php get_template_part('modules/popup_equipo'); ?> 
                    <?php endforeach; ?>
                </div>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>
    </div>
</section>