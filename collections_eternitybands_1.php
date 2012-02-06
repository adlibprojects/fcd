<?php 
	// Meta Information - variables are called from the header.php file //
	$pageKeywords_str = "Eternity Bands, Emerald Cut, Rings, Bridal";
	$pageDescription_str = "Emerald Cut, all around diamond eternity band set in platinum";
	$pageTitle_str = "Emerald Cut Eternity Band | Eternity Bands";
	$pageName_str = "product_collections_rings";
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
         <img src="images/collections_thumbnails/eternitybands/product/1_emeraldcut_eternitybands_1.jpg" />
         <img src="images/collections_thumbnails/eternitybands/product/1_emeraldcut_eternitybands_2.jpg" />
      </div>               
        <div class="main_text float_right">
              <?php include('includes/customize_btn.php'); ?>
           
              <div class="collections_info clear">
              	<p class="product_name">Emerald Diamond Eternity Band</p>
                <p class="border">Emerald Cut Diamonds Set in Platinum</p>
                <?php include ('includes/collections_eternitybands_price.php'); ?>
				<?php include ('includes/product_disclaimer.php'); ?>  
                
                <div id="rings_thumbnails">
                	<?php include('includes/rings_thumbnails.php'); ?>
				</div>
                
                &bull; <a href="bridal_forHer_eternitybands.php?category=bridal" class="eternitybands_seemorelink">See More Eternity Bands</a>

   
              </div><!--end collections_info-->
        
        	</div><!--end main_text-->
        	
        </div><!--end main_content-->  
        
        <?php include('includes/slider.php'); ?>   	
        <?php include('includes/nav.php'); ?> 
            
      </div><!--end main-->
      
<?php include('includes/footer.php'); ?>