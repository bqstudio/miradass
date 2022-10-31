<?php if( have_rows('contact') ): ?>
    <section class="contact">
        <div class="container_big">
            <div class="contact__grid">
                <?php while( have_rows('contact') ): the_row();?>
                    <div class="contact__item">
                        <div class="contact__grid__cont">
                            <?php echo ($title = get_sub_field('title'))? '<div class="contact__title">'.$title.'</div>':''; 
                                echo ($text = get_sub_field('text'))? '<div class="contact__text">'.$text.'</div>':''; ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
<?php endif; ?>