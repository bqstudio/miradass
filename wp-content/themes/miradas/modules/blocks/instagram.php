

<section class="layout_instagram">
  <div class="container">
    <div class="layout_instagram__title">
      <?php if( $link = get_sub_field('link')): ?>
          <a class="title" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
      <?php endif; ?>
    </div>  
    <?php if ($shortcode = get_sub_field('shortcode')): ?>
      <div class="layout_instagram__slider"><?php echo $shortcode; ?></div>
    <?php endif; ?>
  </div>
</section>
