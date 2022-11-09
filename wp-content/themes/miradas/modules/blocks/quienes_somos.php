<section class="quienes_somos">
    <div class="quienes_somos__image">
        <?php get_template_part('modules/components/image',NULL,array('image' => get_sub_field('image')) ); ?>
    </div>
    <div class="quienes_somos__cont" data-aos="fade-right">
        <div class="container">
            <?php echo ($title = get_sub_field('title'))? '<h2 class="quienes_somos__title">'.$title.'</h2>':'';
            echo ($text = get_sub_field('text'))? '<p class="quienes_somos__text">'.$text.'</p>':'';  ?>
        </div>
    </div>
</section>