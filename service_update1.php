<?php 
	$pageKeywords_str = "Revitalize Old Diamonds, Reset Old Stones, Replace Missing Gems, Restring Pearls, Restore Jewelry, Appraisals, Sizing, Purchasers of Gold";
	$pageDescription_str = "FCD provides invaluable guidance and assistance as clients decide if its worth resetting their existing stones or trading them in to go with something entirely new. Appraisals are done for all pieces, whether purchased from FCD or elsewhere.";
	$pageTitle_str = "FCD - Update";
	$pageName_str = "service_update";
?>
<?php include_once('includes/header.php'); ?>  

<script>
/*
 * Image preview script 
 * powered by jQuery (http://www.jquery.com)
 * 
 * written by Alen Grakalic (http://cssglobe.com)
 * 
 * for more info visit http://cssglobe.com/post/1695/easiest-tooltip-and-image-preview-using-jquery
 *
 */
 
this.imagePreview = function(){	
	/* CONFIG */
		
	var xOffset = 0;
	var yOffset = 0;
		
		// these 2 variable determine popup's distance from the cursor
		// you might want to adjust to get the right result
		
	/* END CONFIG */
	$("a.preview").hover(function(e){
		this.t = this.title;
		this.title = "";	
		var c = (this.t != "") ? "<br/>" + this.t : "";
		$(".main_content").append("<p id='preview'><img src='"+ this.href +"' alt='Image preview' />"+ c +"</p>");								 
		$("#preview")
			.fadeIn("slow");						
    },
	function(){
		this.title = this.t;	
		$("#preview").remove();
    });	
	//$("a.preview").mousemove(function(e){
	//	$("#preview")
	//		.css("top",(e.pageY - xOffset) + "px")
	//		.css("left",(e.pageX + yOffset) + "px");
	//});			
};


// starting the script on page load
$(document).ready(function(){
	imagePreview();
});

</script>
<style>

img{border:none;}

/*  */

#preview{
	position:absolute;
	top:0px;
	left:0px;
	xpadding:5px;
	display:none;
	color:#fff;
	z-index:10;
	}


</style>

      <div id="main">
      
      	<div class="main_content service_update">
        <div class="float_right main_text services">
              <p class="font_family_garamond font_size_medium_garamond">FCD provides invaluable guidance and assistance as clients decide if its worth resetting their existing stones or trading them in to go with something entirely new. Appraisals are done for all pieces, whether purchased from FCD or elsewhere.</p>
              <p></p>
              
              <span class="font_family_garamond">We Will</span>

              <div class="services_hover_wrapper">
                <ul>
                    <li><a href="images/service_update_revitalize.jpg" class="preview">Revitalize old diamonds by recutting them – maximizing their sparkle and brilliance</a></li>
                    <li><a href="images/service_update_reset.jpg" class="preview">Reset old stones in au courant designer settings</a></li>
                    <li><a href="images/service_update_replace.jpg" class="preview">Replace missing gems with expertly matched new stones</a></li>
                    <li><a href="images/service_update_restring.jpg" class="preview">Restring your pearl necklaces and bracelets</a></li>
                    <li><a href="images/service_update_restore.jpg" class="preview">Restore your jewelry to its original luster with expert cleaning and polishing</a></li>
                </ul>
                
                <span class="font_family_garamond">Other Services</span>
                <ul>
                    <li><a href="images/service_update_appraisals.jpg" class="preview">Jewelry appraisals</a></li>
                    <li><a href="images/service_update_sizing.jpg" class="preview">Sizing of rings and bracelets</a></li>
                    <li><a href="images/service_update_gold.jpg" class="preview">Purchasers of old gold jewelry and watches</a></li>
                </ul>
              </div><!--end services_hover_wrapper-->

         
            </div><!--end main_text-->
            
     	<div id="slider1">
        	<img src="images/main_bg_services_update_1.jpg" />
            <img src="images/main_bg_services_update_2.jpg" />
            <img src="images/main_bg_services_update_3.jpg" />
        </div>  
	
        </div><!--end main_content-->  
        
        <?php include('includes/slider.php'); ?>   	
        <?php include('includes/nav.php'); ?> 
            
      </div><!--end main-->
      
<?php include('includes/footer.php'); ?>

