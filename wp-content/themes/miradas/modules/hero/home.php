<section class="hero-home">        
  <div class="hero-home__cont">
    <?php $media_type = get_field('media_type');?>
    <?php if ($media_type == ('video_file') && $video_file = get_field('video_file')): ?>
      <div class="hero-home__video">
          <video playsinline autoplay muted loop>
            <source src="<?php echo $video_file; ?>#t=0.1" type="video/mp4">
          </video>
      </div>
    <?php elseif($image = get_field('image')): ?>
          <div class="hero-home__image">
            <div class="image-background">
              <img 
                  srcset="<?php echo esc_url($image['sizes']['thumbnail']); ?> 500w,
                          <?php echo esc_url($image['sizes']['medium']); ?> 800w,
                          <?php echo esc_url($image['sizes']['large']); ?> 2000w"
                  src="<?php echo esc_url($image['sizes']['full-width']); ?>" 
                  alt="<?php echo esc_attr($image['alt']); ?>"
              />
            </div>
          </div>
    <?php endif; ?>

    <div class="hero-home__content">
      <div class="container">
        <?php echo ($title = get_field('title'))? '<div class="hero-home__big_text">'.$title.'</div>':''; ?>
        <?php echo ($description = get_field('description'))? '<div class="hero-home__bottom_text">'.$description.'</div>':''; ?>
      </div>
    </div>
  </div>
</section>