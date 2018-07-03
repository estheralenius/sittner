<?php 
    $comapnies = get_field('companies');
?>
<div class="row kunder">
    <section class="autoplay slider"> 
        <?php if($comapnies):
            foreach($comapnies as $company):?>
                <div class="kundcase">
                    <div class="kundbubbla" style="background-image: url(<?php echo $company['image']?>)"></div>
                    <h3><?php echo $company['title']?></h3>
                    <p><?php echo $company['text']?></p>
                </div> 
            <?php endforeach;
        endif; ?>
    </section>    
</div>    
    
<div class="inforad">
    <div class="sidostolar">
        <!--<img src="images/stolar.jpg" class="stolar">-->
    </div>
    <div class="mobilbakgrundstartsida"></div>
    <div class="infoblock">
        <div class="enrad verticalcontainer hideme">
            <div class="verticalalign">
                <div class="text">
                    <h2><?php the_field('title_1') ?></h2>
                    <p><?php the_field('text_1') ?></p>
                </div>
            </div>
            <div class="verticalalign">
                <div class="rundabilden"><img src="<?php the_field('image_1')?>"></div>
            </div>
        </div>
        <div class="enrad verticalcontainer hideme">
            <div class="verticalalign">
                <div class="text">
                    <h2><?php the_field('title_2') ?></h2>
                    <p><?php the_field('text_2') ?></p>
                </div>
            </div>
            <div class="verticalalign">
                <div class="rundabilden"><img src="<?php the_field('image_2') ?>"></div>
            </div>
        </div>
        <div class="enrad verticalcontainer hideme">
            <div class="verticalalign">
                <div class="text">
                    <a href="omoss.html">
                    <h2><?php the_field('title_3') ?></h2>
                    <p><?php the_field('text_3') ?></p>
                    </a>
                </div>
            </div>
            <div class="verticalalign">
                <a href="omoss.html"><div class="rundabilden"><img src="<?php the_field('image_3') ?>"></div></a>
            </div>
        </div>
    </div>    
</div>