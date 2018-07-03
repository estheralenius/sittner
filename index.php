<?php get_header(); ?>

<?php if( is_front_page() ){
    get_template_part('templates/page', 'home');    
} else if( $post->ID == 59 ) {
    get_template_part('templates/page', 'about');    
} else if( in_array($post->ID, array(61,63,65) ) ) {
    get_template_part('templates/page', 'list');
} ?>

<?php get_footer(); ?>