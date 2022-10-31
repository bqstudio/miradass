<?php 
add_action('wp_enqueue_scripts', function(){
    wp_enqueue_script( 'post', get_theme_file_uri( 'js/post.js'), array('jquery') );

    wp_localize_script( 'post', 'ajax_var', array(
        'url'    => admin_url( 'admin-ajax.php' ),
        'nonce'  => wp_create_nonce( 'post-nonce' ),
        'action' => 'get_news'
    ) );
});
function filter_post() {

ob_start();

$paged = empty($_POST['page']) ? 1 : (int)$_POST['page'];

$args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'posts_per_page' => 3,
    'paged' => $paged,
);
$year = empty($_POST['year']) || $_POST['year'] === 'ALL' ? false : (int)$_POST['year'];
if( $year !== false )
   $args['year'] = $year; 
   
$query = new WP_Query($args);

$response = array();

$response['next_page'] = $paged + 1;
$response['is_last'] = ($paged + 1) > $query->max_num_pages;

if ( $query->have_posts() ) {
    ob_start();
    while ($query->have_posts()) {
        $query->the_post();
        get_template_part ('modules/posts/item') ; 
    }
    $response['content'] = ob_get_clean();
}else { 
    $response['content'] = 'No Results';
}

wp_send_json($response);
 
}

add_action('wp_ajax_get_news', 'filter_post');
add_action('wp_ajax_nopriv_get_news', 'filter_post');