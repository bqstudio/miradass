<section class="instagram">
    <div class="container">
        <?php if( $link = get_sub_field('link')): ?>
            <a class="title" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
        <?php endif; 

        echo ($shortcode = get_sub_field('shortcode'))? '<div class="shortcode">'.$shortcode.'</div>':''; ?>
    </div>
</section>
