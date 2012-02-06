<?php 
	// Meta Information - variables are called from the header.php file //
	$pageKeywords_str = "Bridal Bracelet";
	$pageDescription_str = "South Sea Pearl Bracelet with White Gold and Diamond Lock/Dangling Charm";
	$pageTitle_str = "Bridal Bracelets | Bridal";
	$pageName_str = "product_collections_bracelets";
	$pageCategory = "blackBridal";

?>
<?php include_once('includes/header.php'); ?>

      <div id="main">
      
      	<div class="main_content product_collections_black">
         <?php 
		 	//Includes the left menu
			include('includes/collections_nav.php');
		?>
        
       <div id="product_slides" class="float_left">
          <img src="images/collections_thumbnails/bracelets/product/bridal_1_bracelet_pearl_with_charm.jpg" />
          <img src="images/collections_thumbnails/bracelets/product/bridal_1_bracelet_pearl_with_charm2.jpg" />
       </div> 
                             
        <div class="main_text float_right">
             <?php include('includes/customize_btn.php'); ?>

              <div class="collections_info clear">
              	<p class="product_name">Bridal Bracelet</p>
                <p class="border">South Sea Pearl Bracelet with White Gold and Diamond Lock and Dangling Charm</p>
                <?php include ('includes/collections_bracelets_price.php'); ?>
				<?php include ('includes/product_disclaimer.php'); ?>  
                              
                <div id="bracelet_thumbnails">
				  <?php include('includes/bracelets_thumbnails.php'); ?>
                </div>
   
              </div><!--end collections_info-->
        
        	</div><!--end main_text-->
        	
        </div><!--end main_content-->  
        
        <?php include('includes/slider.php'); ?>   	
        <?php include('includes/nav.php'); ?> 
            
      </div><!--end main-->
      
<?php include('includes/footer.php'); ?>

