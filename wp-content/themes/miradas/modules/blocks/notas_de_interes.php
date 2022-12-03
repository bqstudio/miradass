<?php if( have_rows('notas_de_interes') ): ?>
  <section class="notas_de_interes"> 
    <div class="container_big">
      <div class="notas_de_interes__cont">
        <?php while( have_rows('notas_de_interes') ): the_row(); ?>
          <div class="notas_de_interes__item">
            <div class="notas_de_interes__img">
              <?php get_template_part('modules/components/image',NULL,array('image' => get_sub_field('image')) ); ?>
            </div>
            <?php echo ($title = get_sub_field('title'))? '<h4 class="notas_de_interes__title">'.$title.'</h4>':''?>
            <?php echo ($description = get_sub_field('description'))? '<div class="notas_de_interes__description">'.$description.'</div>':''; ?>
            <?php echo ($fuente = get_sub_field('fuente'))? '<div class="fuente">'.$fuente.'</div>':''?>
            <?php if( $link = get_sub_field('link')): ?>
              <a class="read_more" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a> <!-- TODO: es necesario hacer un if? en este caso que va un link solo -->
            <?php endif; ?>
          </div>
        <?php endwhile; ?>
      </div>
    </div>
  </section>
<?php endif; ?>