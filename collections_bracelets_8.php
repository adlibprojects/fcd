<?php 
	// Meta Information - variables are called from the header.php file //
	$pageKeywords_str = "Semi Precious, Tiger eye Beads, Diamond Studded, White Gold, Charm";
	$pageDescription_str = "Tiger eye beads with diamond studded white gold charm";
	$pageTitle_str = "Semi Precious - Tiger Eye Bead | Bracelets";
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
          <img src="images/collections_thumbnails/bracelets/product/8_bracelet_semi_tiger_white.jpg" />
          <img src="images/collections_thumbnails/bracelets/product/8_bracelet_semi_tiger_yellow.jpg" />
       </div> 
                             
        <div class="main_text float_right">
        	 <?php include('includes/customize_btn.php'); ?>
           
              <div class="collections_info">
              	<p class="product_name">Semi Precious - Tiger Eye Bead</p>
                <p class="border">Tiger Eye Beads with Diamond Studded White Gold Charm / Detailed Yellow Gold Roundel<br /><br />Add some style and playful fun with this versatile piece that can accessorize your look from casual to dressy, day to evening.
</p>
                <p>Starting at $300</p>
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
