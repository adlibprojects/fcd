<?php 
	// Meta Information - variables are called from the header.php file //
	$pageKeywords_str = "Stackable Diamond Bangles, Diamond Bangles, White Gold, Yellow Gold, Rose Gold";
	$pageDescription_str = "Stackable diamond bangles in white, yellow and rose gold";
	$pageTitle_str = "Stackable Diamond Bangles | Bracelets";
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
          <img src="images/collections_thumbnails/bracelets/product/7_bracelet_diamond_stackable4.jpg" />
          <img src="images/collections_thumbnails/bracelets/product/7_bracelet_diamond_stackable3.jpg" />
          <img src="images/collections_thumbnails/bracelets/product/7_bracelet_diamond_stackable.jpg" />
       </div> 

        <div class="main_text float_right">
        	 <?php include('includes/customize_btn.php'); ?>
           
              <div class="collections_info">
              	<p class="product_name">Stackable Diamond Bangles</p>
                <p class="border">Stackable Diamond Bangles in<br /> White, Yellow and Rose Gold</p>
                <p>Starting at $2200</p>
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
