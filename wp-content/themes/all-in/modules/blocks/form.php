<?php if ($form_id = get_sub_field('form_id')): ?> 
<section class="form_block">
    <div class="container">
        <div class="formBox" ><?php echo do_shortcode('[gravityform id="'.$form_id.'" title="false" description="false" ajax="true"]'); ?></div>
    </div>
</section>
<?php endif; ?>