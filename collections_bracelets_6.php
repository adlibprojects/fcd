<?php 
	// Meta Information - variables are called from the header.php file //
	$pageKeywords_str = "Diamond Tennis Bracelet, Tennis Bracelet, White Gold, Milgrain Bezel";
	$pageDescription_str = "Round diamond tennis bracelet in white gold milgrain bezel setting";
	$pageTitle_str = "Diamond Tennis Bracelet | Bracelets";
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
         <img src="images/collections_thumbnails/bracelets/product/6_diamond_rounds.jpg" />
         <img src="images/collections_thumbnails/bracelets/product/6_diamond_rounds1.jpg" />
        </div>  
                             
        <div class="main_text float_right">
        	 <?php include('includes/customize_btn.php'); ?>
           
              <div class="collections_info">
              	<p class="product_name">Diamond Tennis Bracelet</p>
                <p class="border">Round Diamond Tennis Bracelet in White Gold Milgrain Bezel Setting</p>
				<p>Prices starting at $2,000.</p>
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
