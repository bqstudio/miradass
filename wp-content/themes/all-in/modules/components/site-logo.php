<a class="site-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
    <?php echo ($site_logo = get_field('site_logo','option'))? '
        <img src="'.$site_logo['sizes']['medium'].'" alt="'.$site_logo['alt'].'"/>
    ':'
        <img src="'.get_template_directory_uri().'/images/sitelogo.svg" alt="Parlemo"/>
    '; ?>
</a>