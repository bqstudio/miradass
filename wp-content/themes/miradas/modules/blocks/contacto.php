<section class="contacto">
  <div class="container_big">
    <div class="contacto__cont">        
        <?php if( have_rows('contacto') ): ?>
          <div class="date">
              <?php while( have_rows('contacto') ): the_row();  ?>                  
                <?php echo ($titulo = get_sub_field('titulo'))? '<h3 class="date__titulo">'.$titulo.'</h3>':''; ?>
                <?php echo ($texto = get_sub_field('texto'))? '<div class="date__text">'.$texto.'</div>':''; ?>
              <?php endwhile; ?>
          </div>
        <?php endif; ?>
      <div class="date">
        <?php echo ($map = get_sub_field('map'))? '<div class="iframe_cont">'.$map.'</div>':''?>
      </div>

    </div>
  </div>
</section>