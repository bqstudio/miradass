<?php if( have_rows('buttons') ):?>
    <section class="buttons-block">
        <div class="container">
        <?php while ( have_rows('buttons') ) : the_row(); ?>
            <?php if( $button = get_sub_field('button')): ?>
                <a class="button" href="<?php echo $button['url']; ?>" target="<?php echo $button['target']; ?>"><?php echo $button['title']; ?></a>
            <?php endif; ?>
        <?php endwhile; ?>
        </div> 
    </section>
<?php endif; ?>