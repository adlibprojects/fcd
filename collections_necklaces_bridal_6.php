<?php 
	// Meta Information - variables are called from the header.php file //
	$pageKeywords_str = "Fresh Water Pearl, Pearls";
	$pageDescription_str = "Fresh Water Pearl Necklace";
	$pageTitle_str = "Pearl Necklace | NecklaceBracelets";
	$pageName_str = "product_collections_necklaces";
	$pageCategory = "blackBridal";

?>
<?php include_once('includes/header.php'); ?>     

      <div id="main">
      
      	<div class="main_content product_collections_black">
         <?php 
		 	//Includes the left menu
			include('includes/collections_nav.php');
		?>
              
         <img src="images/collections_thumbnails/necklaces/product/bridal_necklace_pearl_3diamondroundel.jpg" class="float_left"/>
               
        <div class="main_text float_right">
              <?php include('includes/customize_btn.php'); ?>
           
              <div class="collections_info clear">
              	<p class="product_name">Pearl Necklace</p>
                <p class="border">Fresh Water Pearl Necklace</p>
                <p>Starting at $500</p>
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

