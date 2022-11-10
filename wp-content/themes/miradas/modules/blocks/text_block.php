<section class="text_block">
    <div class="container_big">
        <?php echo ($title = get_sub_field('title'))? '<div class="title">'.$title.'</div>':''; ?>
        <?php echo ($text = get_sub_field('text'))? '<div class="text_block__cont">'.$text.'</div>':''; ?>
    </div>
</section>