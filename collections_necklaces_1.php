<?php 
	// Meta Information - variables are called from the header.php file //
	$pageKeywords_str = "Brilliant Cut Graduated, Diamond, Round";
	$pageDescription_str = "Round Brilliant Cut Graduated Diamond Necklace";
	$pageTitle_str = "Round Graduated Diamond Necklace | Necklaces";
	$pageName_str = "product_collections_necklaces";
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
		  <img src="images/collections_thumbnails/necklaces/product/1_necklace_diamond_rounds.jpg" />
          <img src="images/collections_thumbnails/necklaces/product/1_necklace_diamond_rounds2.jpg" />
          <img src="images/collections_thumbnails/necklaces/product/1_necklace_diamond_rounds3.jpg" />
          <img src="images/collections_thumbnails/necklaces/product/1_necklace_diamond_rounds4.jpg" />
       </div> 

        <div class="main_text float_right">
              <?php include('includes/customize_btn.php'); ?>

              <div class="collections_info clear">
              	<p class="product_name">Round Graduated <br />Diamond Necklace</p>
                <p class="border">Round Brilliant Cut Graduated Diamond Necklace<br /><br />This sensational piece will light up the room with its fiery glow.</p>
                <?php include ('includes/collections_necklaces_price.php'); ?>
				<?php include ('includes/product_disclaimer.php'); ?>  
                
                <div id="necklaces_thumbnails">
                	<?php include('includes/necklaces_thumbnails.php'); ?>
				</div>
   
              </div><!--end collections_info-->
        
        	</div><!--end main_text-->
        	
        </div><!--end main_content-->  
        
        <?php include('includes/slider.php'); ?>   	
        <?php include('includes/nav.php'); ?> 
            
      </div><!--end main-->
      
     <?php include('includes/footer.php'); ?>