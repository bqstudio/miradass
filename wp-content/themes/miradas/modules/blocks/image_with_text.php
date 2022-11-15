<section class="image_with_text">
    <div class="container_big">
    <?php echo ($title_block = get_sub_field('title_block'))? '<div class="subtitle subtitle--left">'.$title_block.'</div>':''; ?>
        <div class="image_with_text__cont">
            <div class="image_with_text__img">
                <?php get_template_part('modules/components/image',NULL,array('image' => get_sub_field('image')) ); ?>
            </div>
            <div class="image_with_text__content">
                <?php 
              /*   echo ($upper_title = get_sub_field('upper_title'))? '<div class="upper_title">'.$upper_title.'</div>':''; */
                echo ($title = get_sub_field('title'))? '<h1 class="image_with_text__title">'.$title.'</h1>':'';
                echo ($text = get_sub_field('text'))? '<p class="image_with_text__text">'.$text.'</p>':'';
                if( $link = get_sub_field('link')): ?>
                    <a class="read_more" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>