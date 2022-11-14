<section class="vision">
    <div class="vision__image">
        <?php get_template_part('modules/components/image',NULL,array('image' => get_sub_field('image')) ); ?>
    </div>
    <div class="vision__cont" data-aos="fade-right">
        <div class="container_big">
            <?php echo ($title = get_sub_field('title'))? '<h2 class="vision__title">'.$title.'</h2>':'';
            echo ($text = get_sub_field('text'))? '<p class="vision__text">'.$text.'</p>':'';  ?>
        </div>
    </div>
</section>