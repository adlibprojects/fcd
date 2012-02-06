<?php 
	// Meta Information - variables are called from the header.php file //
	$pageKeywords_str = "Diamond, Center Stone, round, Engagement Ring";
	$pageDescription_str = "Round Brilliant Diamond Engagement Ring with Smaller Diamonds Encircling Center Stone and Ring";
	$pageTitle_str = "Brilliant Diamond Engagement Ring | Rings";
	$pageName_str = "product_collections_rings";
	$pageCategory = "blackRegular";

?>
<?php include_once('includes/header.php'); ?>   

      <div id="main">
      
      	<div class="main_content product_collections_black">
         <?php 
		 	//Includes the left menu
			include('includes/collections_nav.php');
		?>
         <div id="product_slides" class="float_left">
          <img src="images/collections_thumbnails/rings/product/bridal_2_roundbrilliantdiamond_diamond.jpg" />
          <img src="images/collections_thumbnails/rings/product/bridal_2_roundbrilliantdiamond_diamond1.jpg" />
        </div>  
                             
        <div class="main_text float_right">
        	 <?php include('includes/customize_btn.php'); ?>
           
              <div class="collections_info clear">
              	<p class="product_name">Brilliant Diamond<br /> Engagement Ring</p>
                <p class="border">Round Brilliant Diamond Engagement Ring<br /><br />Exquisite Simplicity.</p>
                <p>Starting at $500</p>
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

