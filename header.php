<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <title><?php wp_title(); ?></title>
        <?php wp_head(); ?>
    </head>
    <?php if(is_front_page()): ?>
        <div class="startbild">
            <div id="banner-load"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/logo.png"></div> 
        </div>
    <?php endif; ?>
    <div class="menycontainer">  
        <div class="menybubbla">
            <a href="#">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/images/logo.png" class="logomeny">
            </a>
            <img src="<?php echo get_stylesheet_directory_uri() ?>/images/icons8-menu-50.png" class="hamburgarmeny">
        </div>    
        <div class="meny">
            <ul>
                <li><a href="<?php echo site_url() ?>">Start</a></li>
                <li><a href="<?php echo site_url('om-oss') ?>">Om oss</a></li>
                <li><a href="<?php echo site_url('vara-kunder') ?>">Våra kunder</a></li>
                <li><a href="<?php echo site_url('inspiration') ?>">Inspiration</a></li>
                <li><a href="<?php echo site_url('kontakt') ?>">Kontakt</a></li>
            </ul>
        </div> 
    </div>  
    