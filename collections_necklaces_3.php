<?php 
	// Meta Information - variables are called from the header.php file //
	$pageKeywords_str = "Diamond Pendant, Solitaire, Gold, Platinum, Pendant";
	$pageDescription_str = "Solitaire Diamond Pendant set in Gold or Platinum";
	$pageTitle_str = "Solitaire Diamond Pendant Necklace | Necklaces";
	$pageName_str = "product_collections_necklaces";
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
          <img src="images/collections_thumbnails/necklaces/product/3_solitairediamondpendant.jpg" />
          <img src="images/collections_thumbnails/necklaces/product/3_solitairediamondpendant2.jpg" />
          <img src="images/collections_thumbnails/necklaces/product/3_solitairediamondpendant3.jpg" />
          <img src="images/collections_thumbnails/necklaces/product/3_solitairediamondpendant4.jpg" />

       </div> 
                             
        <div class="main_text float_right">
             <?php include('includes/customize_btn.php'); ?>

              <div class="collections_info clear">
              	<p class="product_name">Solitaire Diamond Pendant Necklace</p>
                <p class="border">Solitaire Diamond Pendant set in Gold or Platinum</p>
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

