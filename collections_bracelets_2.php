<?php 
	// Meta Information - variables are called from the header.php file //
	$pageKeywords_str = "Black Spinel Cuff, 18k, White Gold, Diamond Bar Clasp";
	$pageDescription_str = "18k white gold and diamond bar clasp";
	$pageTitle_str = "Black Spinel Cuff | Bracelets";
	$pageName_str = "product_collections_bracelets";
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
         <img src="images/collections_thumbnails/bracelets/product/2_bracelet_cuff_black.jpg" /> 
         <img src="images/collections_thumbnails/bracelets/product/2_bracelet_cuff_black3.jpg" />         
       </div>
               
        <div class="main_text float_right">
        	 <?php include('includes/customize_btn.php'); ?>
           
              <div class="collections_info">
              	<p class="product_name">Black Spinel Cuff</p>
                <p class="border">Black Spinel Multi-Strand Wide Cuff with 18k White Gold and Diamond Bar Clasp</p>
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

