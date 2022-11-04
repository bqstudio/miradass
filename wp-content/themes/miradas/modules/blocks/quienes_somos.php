<section class="quienes_somos">
    <div class="quienes_somos__image">
        <?php get_template_part('modules/components/image',NULL,array('image' => get_sub_field('image')) ); ?>
    </div>
    <div class="quienes_somos__cont">
        <div class="container">
            <?php echo ($title = get_sub_field('title'))? '<div class="quienes_somos__title">'.$title.'</div>':'';
            echo ($text = get_sub_field('text'))? '<p class="quienes_somos__text">'.$text.'</p>':'';  ?>
        </div>
    </div>
</section>