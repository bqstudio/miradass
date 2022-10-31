<section class="hero_home">
  <div class="container_big">
    <div class="hero_home__cont">
      <div class="hero_home__text-cont">
          <?php 
          echo ($upper_title = get_field('upper_title'))? '<div class="upper_title">'.$upper_title.'</div>':'';
          echo ($title = get_field('title'))? '<h1 class="hero_home__title">'.$title.'</h1>':'';
          echo ($text = get_field('text'))? '<div class="hero_home__text">'.$text.'</div>':'';
          echo ($description = get_field('description'))? '<p class="hero_home__description">'.$description.'</p>':'';
          if( $button = get_field('button')): ?>
            <a class="button" href="<?php echo $button['url']; ?>" target="<?php echo $button['target']; ?>"><?php echo $button['title']; ?></a>
        <?php endif; ?>
      </div>
      <div class="hero_home__image">
        <?php get_template_part('modules/components/image',NULL,array('image' => get_field('image')) ); ?>
      </div>
    </div>
  </div>  
</section>