<section class="nuestro_equipo">
    <div class="container">
        <?php echo ($title = get_sub_field('title'))? '<div class="title">'.$title.'</div>':''; ?>
        <?php echo ($subtitle = get_sub_field('subtitle'))? '<div class="nuestro_equipo__subtitle">'.$subtitle.'</div>':''; ?>
       
        <?php if( have_rows('nuestro_equipo') ): ?>
            <div class="nuestro_equipo__cont">
            <?php while( have_rows('nuestro_equipo') ): the_row();?>
                <div class="nuestro_equipo__item">
                    <?php get_template_part('modules/components/image',NULL,array('image' => get_sub_field('Image')) ); ?>
                    <?php echo ($persona = get_sub_field('persona'))? '<div class="nuestro_equipo__persona">'.$persona.'</div>':''; ?>
                    <?php echo ($especificacion = get_sub_field('especificacion'))? '<div class="nuestro_equipo__especializacion">'.$especificacion.'</div>':''; ?>
                </div>
            <?php endwhile; ?>
            </div>
        <?php endif; ?>
            
    </div>
</section>