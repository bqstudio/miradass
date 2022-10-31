<div class="socials">
  <?php if (get_field('facebook','option')) { ?>
    <a href="<?php the_field('facebook','option') ?>" target="_blank" title="Visit our Facebook Page">
      <?php get_template_part('images/socials/facebook'); ?>
    </a>
  <?php }  ?>
  <?php if (get_field('twitter','option')) { ?>
    <a href="<?php the_field('twitter','option') ?>" target="_blank" title="Visit our Twitter Page">
      <?php get_template_part('images/socials/twitter'); ?>
    </a>
  <?php }  ?>
  <?php if (get_field('instagram','option')) { ?>
    <a href="<?php the_field('instagram','option') ?>" target="_blank"  title="Visit our Instagram Page">
      <?php get_template_part('images/socials/instagram'); ?>
    </a>
  <?php }  ?>
  <?php if (get_field('linkedin','option')) { ?>
    <a href="<?php the_field('linkedin','option') ?>" target="_blank" title="Visit our linkedin Page">
      <?php get_template_part('images/socials/linkedin'); ?>
    </a>
  <?php }  ?>
</div>	<!--/socials -->
