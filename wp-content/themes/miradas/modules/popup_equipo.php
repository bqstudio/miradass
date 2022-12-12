<div class="popup_equipo" data-id="<?php the_ID(); ?>">

    <div class="container">
        <div class="popup_equipo__cont">
        <div class="close_popup"></div>
            <?php if( has_post_thumbnail() ): ?>
                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'thumbnail');?>" alt="<?php echo get_the_title();?>" />
            <?php endif; ?>
            <div class="popup_equipo__cont__title"><?php the_title();?></div>
            <div class="nuestro_equipo__cont__especializacion"><?php the_content();?></div>
            <?php if($popup_text = get_field('popup_text')): ?>
                <div class="popup_equipo__cont__text"><?php echo $popup_text; ?></div>
            <?php endif; ?>
        
        </div>
    </div>
</div>