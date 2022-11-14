<?php $video = get_sub_field('video');
$image_placeholder = get_sub_field('image_placeholder');?>
<section class="video">
  <div class="container">
      <?php echo ($subtitle = get_sub_field('subtitle'))? '<div class="subtitle">'.$subtitle.'</div>':''; ?>
    <div class="video__cont">
      <video preload playsinline loop>
            <source src="<?php echo $video['url']; ?>#t=0.1" type="video/mp4">
        </video>
      </video>
      <div class="controls">
          <div class="video-controls pause">STOP</div>
      </div>
      <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="play" class="play-button" role="img" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" height="100px" width="100px" viewBox="0 0 448 512">
      <path fill="#ffffff" d="M424.4 214.7L72.4 6.6C43.8-10.3 0 6.1 0 47.9V464c0 37.5 40.7 60.1 72.4 41.3l352-208c31.4-18.5 31.5-64.1 0-82.6z"></path></svg>
            
      <?php if($image_placeholder):?>
        <div class="image_placeholder">
          <div clas="image-background">
            <img src="<?php echo esc_url($image_placeholder['sizes']['large']); ?>" alt="<?php echo esc_attr($image_placeholder['alt']); ?>" />
          </div>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>