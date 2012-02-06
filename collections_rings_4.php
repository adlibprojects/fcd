<?php 
	// Meta Information - variables are called from the header.php file //
	$pageKeywords_str = "Brilliant Diamond, Center Stone, Engagement Ring";
	$pageDescription_str = "Round Brilliant Diamond with Smaller Diamonds around Center Stone";
	$pageTitle_str = "Brilliant Diamond Engagement Ring | Rings";
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
          <img src="images/collections_thumbnails/rings/product/4_rounddiamond_doubleshank.jpg" />
          <img src="images/collections_thumbnails/rings/product/4_rounddiamond_doubleshank2.jpg" />
          <img src="images/collections_thumbnails/rings/product/4_rounddiamond_doubleshank3.jpg" />
          <img src="images/collections_thumbnails/rings/product/4_rounddiamond_doubleshank4.jpg" />
        </div>    
                             
        <div class="main_text float_right">
        	 <?php include('includes/customize_btn.php'); ?>
           
              <div class="collections_info clear">
             	<p class="product_name">Diamond Double Helix<br /> Engagement Ring</p>
                <p class="border">Round Brilliant Diamond Center Stone Surrounded by Smaller Diamonds on a <br />Double Helix Diamond Band</p>
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
