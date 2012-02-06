<?php 
	// Meta Information - variables are called from the header.php file //
	$pageKeywords_str = "French Wire Earrings, Diamonds, South Sea Pearls";
	$pageDescription_str = "French Wire Earrings with Diamonds and South Sea Pearls";
	$pageTitle_str = "French Wire Earrings | Earrings";
	$pageName_str = "product_collections_earrings";
	$pageCategory = "whiteRegular";
?>
<?php include_once('includes/header.php'); ?>   

      <div id="main">
      
      	<div class="main_content product_collections">
         <?php 
		 	//Includes the left menu
			include('includes/collections_nav.php');
		?>
        
       <div id="product_slides" class="float_left">
          <img src="images/collections_thumbnails/earrings/product/2_french_wire_pearl.jpg" />
          <img src="images/collections_thumbnails/earrings/product/2_french_wire_pearl2.jpg" />
          <img src="images/collections_thumbnails/earrings/product/2_french_wire_pearl3.jpg" />
       </div> 
               
        <div class="main_text float_right">
              <?php include('includes/customize_btn.php'); ?>
           
              <div class="collections_info clear">
              	<p class="product_name">French Wire Earrings</p>
                <p class="border">French Wire Earrings with Diamonds and South Sea Pearls <br /><br />A delightful pair that will frame your face with an enchanting touch.
</p>
                <?php include ('includes/collections_earrings_price.php'); ?>
				<?php include ('includes/product_disclaimer.php'); ?>  
                
                <div id="earrings_thumbnails">
                	<?php include('includes/earrings_thumbnails.php'); ?>
				</div>
   
              </div><!--end collections_info-->
        
        	</div><!--end main_text-->
        	
        </div><!--end main_content-->  
        
        <?php include('includes/slider.php'); ?>   	
        <?php include('includes/nav.php'); ?> 
            
      </div><!--end main-->
      
<?php include('includes/footer.php'); ?>

