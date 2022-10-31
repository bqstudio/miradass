<?php if($args['post']): $post_id = $args['post']; else: $post_id = get_the_id(); endif; ?>
<section class="hero_simple">
  <div class="hero_simple__cont">
    <div class="hero_simple__image">
        <?php get_template_part('modules/components/image',NULL,array('image' =>get_field('image', $post_id)) ); ?>
    </div>
    <div class="container_big">
      <div class="hero_simple__text-cont">
          <?php 
          echo ($upper_title =get_field('upper_title', $post_id))? '<div class="upper_title">'.$upper_title.'</div>':'';
          echo ($title =get_field('title', $post_id))? '<h1 class="hero_simple__title">'.$title.'</h1>':'';
          echo ($text =get_field('text', $post_id))? '<div class="hero_simple__text">'.$text.'</div>':'';
          ?>
      </div>
    </div>  
  </div>

</section>