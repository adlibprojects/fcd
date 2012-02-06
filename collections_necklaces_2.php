<?php 
	// Meta Information - variables are called from the header.php file //
	$pageKeywords_str = "Tahitian Pearl, Peacock Color, South Sea Pearls";
	$pageDescription_str = "South Sea Tahitian Pearl Necklace in Exquisite Peacock Color";
	$pageTitle_str = "Tahitian Pearl Necklace | Necklaces";
	$pageName_str = "product_collections_necklaces";
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
          <img src="images/collections_thumbnails/necklaces/product/2_southseatahitianpearl.jpg" />
          <img src="images/collections_thumbnails/necklaces/product/2_southseatahitianpearl2.jpg" />
          <img src="images/collections_thumbnails/necklaces/product/2_southseatahitianpearl3.jpg" />
       </div> 
                             
        <div class="main_text float_right">
              <?php include('includes/customize_btn.php'); ?>

              <div class="collections_info clear">
              	<p class="product_name">Tahitian Pearl Necklace</p>
                <p class="border">South Sea Tahitian Pearl Necklace<br /> in Exquisite Peacock Color</p>
                <?php include ('includes/collections_necklaces_price.php'); ?>
				<?php include ('includes/product_disclaimer.php'); ?>  
                
                <div id="necklaces_thumbnails">
                	<?php include('includes/necklaces_thumbnails.php'); ?>
				</div>
   
              </div><!--end collections_info-->
        
        	</div><!--end main_text-->
        	
        </div><!--end main_content-->  
        
        <?php include('includes/slider.php'); ?>   	
        <?php include('includes/nav.php'); ?> 
            
      </div><!--end main-->
      
<?php include('includes/footer.php'); ?>

