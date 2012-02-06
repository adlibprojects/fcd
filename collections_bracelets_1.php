<?php 
	// Meta Information - variables are called from the header.php file //
	$pageKeywords_str = "Ruby Cuff, Ruby, Cuff, Yellow Gold, 18k, Diamond, Fleurette Clasp";
	$pageDescription_str = "18k yellow gold and diamond fleurette clasp";
	$pageTitle_str = "Ruby Cuff | Bracelets";
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
         <img src="images/collections_thumbnails/bracelets/product/1_bracelet_cuff_ruby.jpg" />
         <img src="images/collections_thumbnails/bracelets/product/1_bracelet_cuff_ruby3.jpg" />
       </div>  
               
        <div class="main_text float_right">
        	  <?php include('includes/customize_btn.php'); ?>

              <div class="collections_info clear">
              	<p class="product_name">Ruby Cuff</p>
                <p class="border">Multi-Strand Wide Ruby Cuff with 18k Yellow Gold and Diamond Fleurette Clasp<br /><br />Command attention with this striking showstopper that melds the fire and ice of rubies and diamonds.
</p>
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
