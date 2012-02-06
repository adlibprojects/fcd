<?php 
	$pageKeywords_str = "Revitalize Old Diamonds, Reset Old Stones, Replace Missing Gems, Restring Pearls, Restore Jewelry, Appraisals, Sizing, Purchasers of Gold";
	$pageDescription_str = "FCD provides invaluable guidance and assistance as clients decide if its worth resetting their existing stones or trading them in to go with something entirely new. Appraisals are done for all pieces, whether purchased from FCD or elsewhere.";
	$pageTitle_str = "FCD - Update";
	$pageName_str = "service_update";
?>
<?php include_once('includes/header.php'); ?>  

      <div id="main">
      
      	<div class="main_content service_update">
        <div class="float_right main_text services">
              <p class="font_family_garamond font_size_medium_garamond">FCD provides invaluable guidance and assistance as clients decide if its worth resetting their existing stones or trading them in to go with something entirely new. Appraisals are done for all pieces, whether purchased from FCD or elsewhere.</p>
              <p></p>
              
              <span class="font_family_garamond">We Will</span>
              
<style>
.main {
position:relative;
}

.fade {
margin-bottom:10px;
}

.fade a {
color:#555555;
text-decoration:none;
}

.fade a:hover {
color:#950303;
text-decoration:underline;
}
.fade div {
position: absolute;
top: 0;
left:0px;
display: none;
}
</style>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.js"></script>
<script>
// when the DOM is ready:
$(document).ready(function () {
  // find the div.fade elements and hook the hover event
  $('div.fade').hover(function() {
    // on hovering over, find the element we want to fade *up*
    var fade = $('> div', this);
    
    // if the element is currently being animated (to a fadeOut)...
    if (fade.is(':animated')) {
      // ...take it's current opacity back up to 1
      fade.stop().fadeTo(250, 1);
    } else {
      // fade in quickly
      fade.fadeIn(250);
    }
	return false;
  }, function () {
    // on hovering out, fade the element out
    var fade = $('> div', this);
    if (fade.is(':animated')) {
      fade.stop().fadeTo(700, 0);
    } else {
      // fade away slowly
      fade.fadeOut(700);
    }
	
	
  });
});

</script>
              
              <div class="hover">
                
                <div class="fade">&bull;&nbsp;&nbsp;<a href="#">Revitalize old diamonds by recutting them – maximizing their sparkle and brilliance</a>
                  <div>
                    <img src="images/service_update_revitalize.jpg" />
                  </div>
                </div><!--end fade-->
                
                <div class="fade">&bull;&nbsp;&nbsp;<a href="#">Reset old stones in au courant designer settings</a>
                  <div>
                    <img src="images/service_update_reset.jpg" />
                  </div>
                </div><!--end fade-->
                
                <div class="fade">&bull;&nbsp;&nbsp;<a href="#">Replace missing gems with expertly matched new stones</a>
                  <div>
                    <img src="images/service_update_replace.jpg" />
                  </div>
                </div><!--end fade--> 
                
                <div class="fade">&bull;&nbsp;&nbsp;<a href="#">Restring your pearl necklaces and bracelets</a>
                  <div>
                    <img src="images/service_update_restring.jpg" />
                  </div>
                </div><!--end fade--> 
                
                <div class="fade">&bull;&nbsp;&nbsp;<a href="#">Restore your jewelry to its original luster with expert cleaning and polishing</a>
                  <div>
                    <img src="images/service_update_restore.jpg" />
                  </div>
                </div><!--end fade-->         
                
                       
              <span class="font_family_garamond">Other Services</span>
              
              <div class="fade">&bull;&nbsp;&nbsp;<a href="#">Jewelry appraisals</a>
                <div>
                  <img src="images/service_update_appraisals.jpg" />
                </div>
              </div><!--end fade--> 
                
              <div class="fade">&bull;&nbsp;&nbsp;<a href="#">Sizing of rings and bracelets</a>
                <div>
                  <img src="images/service_update_sizing.jpg" />
                </div>
              </div><!--end fade--> 
                
              <div class="fade">&bull;&nbsp;&nbsp;<a href="#">Purchasers of old gold jewelry and watches</a>
                <div>
                  <img src="images/service_update_gold.jpg" />
                </div>
              </div><!--end fade-->
              
                            </div><!--end hover-->
 
         
            </div><!--end main_text-->
            
     	<div id="slider1">
        	<img src="images/main_bg_services_update_1.jpg" />
            <!--<img src="images/main_bg_services_update_2.jpg" />
            <img src="images/main_bg_services_update_3.jpg" /> -->
        </div>  
	
        </div><!--end main_content-->  
        
        <?php include('includes/slider.php'); ?>   	
        <?php include('includes/nav.php'); ?> 
            
      </div><!--end main-->
      
<?php include('includes/footer.php'); ?>

