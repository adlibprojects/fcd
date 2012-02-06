<?php 
	// Meta Information - variables are called from the header.php file //
	$pageKeywords_str = "Pearl Drop, Diamonds, Bezel Set Bar";
	$pageDescription_str = "Oval Shaped Pearl Drop with Diamonds in Bezel Set Bar";
	$pageTitle_str = "Pearl Drop Earrings | Earrings";
	$pageName_str = "product_collections_earrings";
	$pageCategory = "blackBridal";
?>
<?php include_once('includes/header.php'); ?>    

      <div id="main">
      
      	<div class="main_content product_collections_black">
         <?php 
		 	//Includes the left menu
			include('includes/collections_nav.php');
		?>
              
       <div id="product_slides" class="float_left">
          <img src="images/collections_thumbnails/earrings/product/bridal_3_ovalshapedpearldop.jpg" />
          <img src="images/collections_thumbnails/earrings/product/bridal_3_ovalshapedpearldop2.jpg" />
       </div> 

        <div class="main_text float_right">
              <?php include('includes/customize_btn.php'); ?>
           
              <div class="collections_info clear">
              	<p class="product_name">Pearl Drop Earrings</p>
                <p class="border">Oval Shaped Pearl Drop with Diamonds in Bezel Set Bar<br /><br />Exquisite in its simplicity, this dainty set of glowing orbs are set off by a row of dazzling diamonds.
</p>
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
