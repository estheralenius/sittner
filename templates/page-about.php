<div class="mobilbakgrund"></div>    
<div class="omosssida">    
    <div class="inforad">
        <div class="sidostolar">
            <!--<img src="images/stolar.jpg" class="stolar">-->
        </div>
        <div class="infoblock">
            <h2><?php echo $post->post_title ?></h2>
            <div id="omosstext">
                <?php echo get_field('text') ?>
                <img src="<?php the_field('image') ?>">
            </div> 
        </div>    
    </div>    
</div> 