<?php if ($popup_id = get_field('popup_id','options')): ?> 
  <div class="popup">
    <div class="close_popup"></div>
    <div class="container">
      <div class="formBox" ><?php echo do_shortcode('[gravityform id="'.$popup_id.'" title="true" description="false" ajax="true"]'); ?></div>
    </div>
  </div>
<?php endif; ?>