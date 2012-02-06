<?php 
	// Meta Information - variables are called from the header.php file //
	$pageKeywords_str = "Geometric, Diamond, 18k, White gold";
	$pageDescription_str = "Geometric Drop Diamond Earrings set in 18k White Gold";
	$pageTitle_str = "Geometric Drop Diamond Earrings | Earrings";
	$pageName_str = "product_collections_earrings";
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
          <img src="images/collections_thumbnails/earrings/product/5_geometric_drop.jpg" />
          <img src="images/collections_thumbnails/earrings/product/5_geometric_drop2.jpg" />
       </div> 

        <div class="main_text float_right">
             <?php include('includes/customize_btn.php'); ?>

              <div class="collections_info clear">
              	<p class="product_name">Geometric Diamond Earrings</p>
                <p class="border">Geometric Drop Diamond<br /> Earrings set in 18k White Gold</p>
                <?php include ('includes/collections_earrings_price.php'); ?>
				<?php include ('includes/product_disclaimer.php'); ?>  
                
                <div id="earrings_thumbnails">
                	<?php include('includes/earrings_thumbnails.php'); ?>
				</div>
   
              </div><!--end collections_info-->
        
        	</div><!--end main_text-->
        	
        </div><!--end main_content-->  
        
        <?php include('includes/slider.php'); ?>   	
        <?php include('includes/nav.php'); ?> 
            
      </div><!--end main-->
      
<?php include('includes/footer.php'); ?>
