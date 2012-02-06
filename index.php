<?php 
$pageKeywords_str = "FCD, Favi Cahan, Jewelery, Rings, Earrings, Necklaces, Bracelets, Bridal, Diamonds, Precious Stones";
$pageDescription_str = "FCD - Pieces of character & distinction handcrafted by the finest jewelers and artisans, as well as custom-crafted pieces to reflect individual taste and personality";
$pageTitle_str = "FCD - Home";
$pageName_str = "home";
?>
<?php include_once('includes/header.php'); ?>   
<script src="js/video-js/video.js" type="text/javascript" charset="utf-8"></script>
<link rel="stylesheet" href="js/video-js/video-js.css" type="text/css" media="screen" title="Video JS" charset="utf-8">
<script type="text/javascript" charset="utf-8">
 $(document).ready(function(){
	$('.fcd_logo').hide();
	$('#header').css('height','56px');
	$('.main_content').css('height', '564px');

	  // Add VideoJS to all video tags on the page when the DOM is ready
    VideoJS.setupAllWhenReady();
      $('.video-js').bind("ended", function(){
	  $('.video-js-box').fadeOut();
	  $('.main_content').css({'margin-top': '-72px'});								
	  $('.fcd_logo').show();

    });			 
});  
</script>
    <div id="main">
        
        <div class="main_content home"><!--bg image brought in from css file-->   
             
          <!-- Begin VideoJS -->
            <div class="video-js-box">
              <!-- Using the Video for Everybody Embed Code http://camendesign.com/code/video_for_everybody -->
              <video class="video-js" width="1200" height="584" preload autoplay poster="images/main_bg_home_video_start.jpg">
                <source src="animation/fcd_home.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"' />
                <source src="animation/fcd_home.webm" type='video/webm; codecs="vp8, vorbis"' />
                <source src="animation/fcd_home.theora.ogv" type='video/ogg; codecs="theora, vorbis"' />
                <!-- Flash Fallback. Use any flash video player here. Make sure to keep the vjs-flash-fallback class. -->
                <object id="flash_fallback_1" class="vjs-flash-fallback" width="1200" height="564 type="application/x-shockwave-flash" 
                  data="http://releases.flowplayer.org/swf/flowplayer-3.2.1.swf">
                  <param name="movie" value="http://releases.flowplayer.org/swf/flowplayer-3.2.1.swf" />
                  <param name="allowfullscreen" value="true" />
                  <param name="flashvars" 
                    value='config={"playlist":["/images/main_bg_home.jpg", {"url": "http://video-js.zencoder.com/oceans-clip.mp4","autoPlay":true,"autoBuffering":true}]}' />
                  <!-- Image Fallback. Typically the same as the poster image. -->
                  <img src="/images/main_bg_home.jpg" width="1200" height="564" alt="Poster Image" 
                    title="No video playback capabilities." />
                </object>
              </video>
            </div>
        <!-- End VideoJS -->
        
        <div class="main_text">
            <p class="font_family_garamond"><span class="font_size_medium_garamond">Custom pieces of character<br></span>& distinction handcrafted by the finest jewelers and artisans to reflect your individual taste and personality...</p>           
        </div><!--end main_text-->
        
          <div class="button_figures">
          	<a href="customize_experience.php"><img src="images/button_customize_figures.png" /></a>
          </div><!--end button_figures-->

        </div><!--end main_content-->  
        
        <?php include('includes/slider.php'); ?> 
                
        <?php include('includes/nav.php'); ?> 
    
    </div><!--end main-->
    
<?php include('includes/footer.php'); ?>