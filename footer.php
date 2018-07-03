<footer>
    <div class="row footer verticalcontainer">
        <div class="footermeny verticalalign">
            <ul>
                <li><a href="<?php echo site_url() ?>">Start</a></li>
                <li><a href="<?php echo site_url('om-oss') ?>">Om oss</a></li>
                <li><a href="<?php echo site_url('vara-kunder') ?>">Våra kunder</a></li>
                <li><a href="<?php echo site_url('inspiration') ?>">Inspiration</a></li>
                <li><a href="<?php echo site_url('kontakt') ?>">Kontakt</a></li>
            </ul>
        </div>
        <div class="ikoner">
            <div class="insta"><a href="<?php the_field('instagram_url', 'options')?>">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/images/instagramsvart.png">
                <div class="overlayinsta">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/images/instagramvit.png">
                </div></a>
            </div> 
             <div class="fb"><a href="<?php the_field('facebook_url', 'options')?>">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/images/fbsvart.png">
                <div class="overlayfb">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/images/fbvit.png">
                </div></a>
            </div> 
        </div>
        </div>
</footer>
<?php wp_footer() ?>
<script> 
jQuery(document).ready(function(){
    jQuery(".hamburgarmeny").click(function(){
        jQuery(".meny").animate({
            height: 'toggle',
            width: 'toggle'
        });
    });
});
</script> 
    
<script>
      /* Every time the window is scrolled ... */
    jQuery(window).scroll( function(){
    
        /* Check the location of each desired element */
        jQuery('.hideme').each( function(i){
            
            var bottom_of_object = jQuery(this).position().top;
            var bottom_of_window = jQuery(window).scrollTop() + jQuery(window).height();
            
            /* If the object is completely visible in the window, fade it it */
            if( bottom_of_window > bottom_of_object ){
                
              jQuery(this).animate({'opacity':'1', 'margin-top':'0px'},700);
                    
            }
        }); 
    });
</script>   
    
<script>
    
jQuery('.autoplay').slick({
    dots: true,
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 4000,
    pauseOnHover: true,
  pauseOnFocus: true,
});    
    
/*Får menyloggan att poppa fram när man scrollat ner 600px*/   
jQuery(document).scroll(function() {
  var y = jQuery(this).scrollTop();
  if (y > 400) {
    jQuery('.logomeny').fadeIn();
  } else {
    jQuery('.logomeny').fadeOut();
  }
});    
    
    
/*Får menybubblan att ändra storlek när man scrollat ner 100px*/   
    
jQuery(document).ready(function(){
  var scrollTop = 0;
  jQuery(window).scroll(function(){
    scrollTop = jQuery(window).scrollTop();
     
    
    if (scrollTop >= 400) {
      jQuery('.menybubbla').addClass('scrolled-nav');
    } else if (scrollTop < 400) {
      jQuery('.menybubbla').removeClass('scrolled-nav');
    } 
    
  }); 
  
});  
    
    
</script>    
    
 <script>
jQuery(document).ready(function(){
    //Add your images, we'll set the path in the next step
    var images = ['stolar/1stol.jpg', 'stolar/4stolar.jpg', 'stolar/5stolar.jpg', 'stolar/6stolar.jpg', 'stolar/7stolar.jpg', 'stolar/7stolar2.jpg', 'stolar/8stolar.jpg'];
    
//Build the img, then do a bit of maths to randomize load and append to a div. Add a touch off css to fade them badboys in all sexy like.

    document.getElementById("banner-load").style.backgroundImage = "url('<?php echo get_stylesheet_directory_uri() ?>/images/" + images[Math.floor(Math.random() * images.length)] + "')";
});

</script>
</body>
</html>