<section class="que_ofrecemos" id="que_ofrecemos">
  <div class="container_big">
    <div class="que_ofrecemos__cont">
      <?php echo ($title_block = get_sub_field('title_block'))? '<div class="title">'.$title_block.'</div>':''; ?>
      <?php if( have_rows('que_ofrecemos') ): ?>
        <div class="que_ofrecemos__layout__grid">
          <?php while( have_rows('que_ofrecemos') ): the_row();?>
            <div class="que_ofrecemos__item">
              <figure>
                <?php get_template_part('modules/components/image',NULL,array('image' => get_sub_field('Image')) ); ?>
              </figure>
              <div class="overlay-text">
                <?php echo ($title = get_sub_field('title'))? '<h3 class="que_ofrecemos__title">'.$title.'</h3>':''; ?>
                <?php echo ($Description = get_sub_field('Description'))? '<div class="que_ofrecemos__description">'.$Description.'</div>':''; ?>
              </div>
            </div>   
          <?php endwhile; ?>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>