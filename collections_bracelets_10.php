<?php 
	// Meta Information - variables are called from the header.php file //
	$pageKeywords_str = "Semi Precious, Hemitite, Hemitite Bead, Diamond Studded, White Gold, Charm";
	$pageDescription_str = "Hemitite beads with diamond studded white gold charm";
	$pageTitle_str = "Semi Precious - Hemitite Bead | Bracelets";
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
          <img src="images/collections_thumbnails/bracelets/product/10_bracelet_semi_hematite.jpg" width="486" height="520" />
          <img src="images/collections_thumbnails/bracelets/product/10_bracelet_semi_hematite1.jpg" width="486" height="520" />
        </div>       
               
        <div class="main_text float_right">
        	 <?php include('includes/customize_btn.php'); ?>
	           
               <div class="collections_info">
              	<p class="product_name">Semi Precious - Hematite Bead</p>
                <p class="border">Hematite Beads with Diamond<br /> Studded White Gold Charm</p>
                <?php include ('includes/collections_bracelets_price.php'); ?>
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

