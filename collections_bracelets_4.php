<?php 
	// Meta Information - variables are called from the header.php file //
	$pageKeywords_str = "Champagne Topaz Cuff, Topaz Cuff, 18k, Yellow Gold, Diamond Studded Clasp";
	$pageDescription_str = "18k with yellow gold and diamond studded clasp";
	$pageTitle_str = "Champagne Topaz Cuff | Bracelets";
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
          <img src="images/collections_thumbnails/bracelets/product/4_bracelet_cuff_champagne.jpg" width="487" height="520" />
          <img src="images/collections_thumbnails/bracelets/product/4_bracelet_cuff_champagne3.jpg" />
          <img src="images/collections_thumbnails/bracelets/product/4_bracelet_cuff_champagne2.jpg" />
        </div>       
               
        <div class="main_text float_right">
        	 <?php include('includes/customize_btn.php'); ?>
           
              <div class="collections_info">
              	<p class="product_name">Champagne Topaz Cuff</p>
                <p class="border">Multi-Strand Champagne Topaz Cuff with 18k Yellow Gold and Diamond Studded Clasp</p>
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

