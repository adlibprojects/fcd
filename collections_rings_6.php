<?php 
	// Meta Information - variables are called from the header.php file //
	$pageKeywords_str = "Black Diamond, Dome Ring, Center Stone, Yellow Diamonds";
	$pageDescription_str = "Black Diamond Dome Ring with White Center Stone encircled by Yellow Diamonds";
	$pageTitle_str = "Bold Statement | Rings";
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
          <img src="images/collections_thumbnails/rings/product/6_black_withyellowdiamonds.jpg" />
          <img src="images/collections_thumbnails/rings/product/6_black_withyellowdiamonds2.jpg" />
          <img src="images/collections_thumbnails/rings/product/6_black_withyellowdiamonds3.jpg" />
          <img src="images/collections_thumbnails/rings/product/6_black_withyellowdiamonds4.jpg" />
        </div>        
               
        <div class="main_text float_right">
        	 <?php include('includes/customize_btn.php'); ?>
           
              <div class="collections_info clear">
              	<p class="product_name">Bold Statement Ring</p>
                <p class="border">Black Diamond Dome Ring with White Center Stone encircled by Yellow Diamonds</p>
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

