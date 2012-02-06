<?php 
	// Meta Information - variables are called from the header.php file //
	$pageKeywords_str = "Oval Diamond, Sapphire Stone, Sapphire";
	$pageDescription_str = "Oval Diamond with Sapphire Side Stones";
	$pageTitle_str = "Sapphire Side Stone Ring | Rings";
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
          <img src="images/collections_thumbnails/rings/product/10_pearl1.jpg" />
          <img src="images/collections_thumbnails/rings/product/10_pearl2.jpg" />
          <img src="images/collections_thumbnails/rings/product/10_pearl3.jpg" />
       </div>      
               
        <div class="main_text float_right">
        	 <?php include('includes/customize_btn.php'); ?>
           
              <div class="collections_info clear">
              	<p class="product_name">Bold Statement Ring</p>
                <p class="border">Silver South Sea Pearl in White Gold</p>
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

