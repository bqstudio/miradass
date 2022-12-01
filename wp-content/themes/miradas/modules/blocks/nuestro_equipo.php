<section class="nuestro_equipo">
    <div class="container">
        <?php echo ($title = get_sub_field('title'))? '<div class="title">'.$title.'</div>':''; ?>
        <?php echo ($subtitle = get_sub_field('subtitle'))? '<div class="nuestro_equipo__subtitle">'.$subtitle.'</div>':''; ?>
       
        <?php $args = array(  
            'post_type' => 'equipo',
            'post_status' => 'publish',
            'posts_per_page' => -1, 
            'orderby' => 'title', 
            'order' => 'ASC', 
        );

        $loop = new WP_Query( $args ); ?>
        <div class="nuestro_equipo__cont">
            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <div class="nuestro_equipo__item js-open-equipo">
                <?php if( has_post_thumbnail() ): ?>
                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'thumbnail');?>" alt="<?php echo get_the_title();?>" />
                <?php endif; ?>
                <div class="nuestro_equipo__persona"><?php the_title();?></div>
                <div class="nuestro_equipo__especializacion"><?php the_content();?></div>
            </div>
            <?php endwhile; ?>
            <?php while( $loop->have_posts() ): $loop->the_post();?>
                    <?php get_template_part('modules/popup_equipo'); ?> 
                <?php endwhile; ?>
        </div>
        <?php wp_reset_postdata();  ?>
    </div>
</section>