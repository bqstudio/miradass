<section class="stay_informed">
    <?php get_template_part('modules/components/image',NULL,array('image' => get_field('image', 'options')) ); ?>
    <div class="stay_informed__content">
        <div class="container">
            <div class="stay_informed__text-cont">
                <?php 
                echo ($upper_title = get_field('upper_title', 'option'))? '<div class="upper_title">'.$upper_title.'</div>':'';
                echo ($title = get_field('title', 'option'))? '<div class="stay_informed__title h1">'.$title.'</div>':'';
                echo ($text = get_field('text', 'option'))? '<p class="stay_informed__text">'.$text.'</p>':''; ?>
            </div>
            <?php if ($form_id = get_field('form_id', 'option')): ?> 
                <div class="stay_informed__form" ><?php echo do_shortcode('[gravityform id="'.$form_id.'" title="false" description="false" ajax="true"]'); ?></div>
            <?php endif; ?>
        </div>
    </div>
</section>