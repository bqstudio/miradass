<section class="video">
  <div class="container">
    <div class="video__cont">
      <?php echo ($subtitle = get_sub_field('subtitle'))? '<div class="video__cont__subtitle">'.$subtitle.'</div>':''; ?>
     <div class="video__file">
      <img src="<?php echo get_template_directory_uri();?>/images/video.jpg" alt=""> <!-- TODO: Dinamizar  -->  
     </div>
    </div>
  </div>
</section>