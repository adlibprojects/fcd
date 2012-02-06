<?php 
	// Meta Information - variables are called from the header.php file //
	$pageKeywords_str = "Diamond Band, Engagement ring, Brilliant Diamond";
	$pageDescription_str = "Round Brilliant Diamond Ring with Diamond Band";
	$pageTitle_str = "Diamond Band Engagement Ring | Rings";
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
          <img src="images/collections_thumbnails/rings/product/5_roundbrilliant_smaller_diamonds.jpg" />
          <img src="images/collections_thumbnails/rings/product/5_roundbrilliant_smaller_diamonds3.jpg" />
        </div>      
               
        <div class="main_text float_right">
        	 <?php include('includes/customize_btn.php'); ?>

              <div class="collections_info clear">
              	<p class="product_name">Diamond Band<br /> Engagement Ring</p>
                <p class="border">Round Brilliant Diamond Ring with Diamond Band</p>
                <?php include ('includes/collections_rings_price.php'); ?>
				<?php include ('includes/product_disclaimer.php'); ?>  
                
                <div id="rings_thumbnails">
                	<?php include('includes/rings_thumbnails.php'); ?>
				</div>
   
              </div><!--end collections_info-->
        
        	</div><!--end main_text-->
        	
        </div><!--end main_content-->  
        
        <?php include('includes/slider.php'); ?>   	
        <?php include('includes/nav.php'); ?> 
            
      </div><!--end main-->
      
<?php include('includes/footer.php'); ?>

