<?php 
	// Meta Information - variables are called from the header.php file //
	$pageKeywords_str = "Diamond, Sapphire Stones, Sapphire";
	$pageDescription_str = "Sapphire Stone With Diamond Side Stones";
	$pageTitle_str = "Sapphire Stone With Diamond Side Stones Ring | Rings";
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
          <img src="images/collections_thumbnails/rings/product/3_sapphire_diamondsidestones.jpg" />
          <img src="images/collections_thumbnails/rings/product/3_sapphire_diamondsidestones2.jpg" />
          <img src="images/collections_thumbnails/rings/product/3_sapphire_diamondsidestones3.jpg" />
       </div>      
               
        <div class="main_text float_right">
        	 <?php include('includes/customize_btn.php'); ?>
           
              <div class="collections_info clear">
              	<p class="product_name">Sapphire with Diamond<br /> Side Stones Ring</p>
                <p class="border">Sapphire Center Stone with Diamond Side Stones <br /><br />For a regal flair, adorn your finger with this mark of royalty.</p>
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

