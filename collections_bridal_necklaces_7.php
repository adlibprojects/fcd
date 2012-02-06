<?php 
	// Meta Information - variables are called from the header.php file //
	$pageKeywords_str = "FCD - Collections - Bracelets";
	$pageDescription_str = "Work hand-in-hand with FCD Jewellers to fashion an extraordinary piece of jewelery that reflects your distinct taste and signature style.";
	$pageTitle_str = "FCD - Collections - Bracelets";
	$pageName_str = "product_collections_necklaces";
	$pageCategory = "whiteBridal";

?>
<?php include_once('includes/header.php'); ?>

<body id="<?php if ($pageName_str) { echo $pageName_str; } else { echo "home"; } ?>">
	<div id="container">
    
      <div id="header">	
          <a href="index.php"><img src="images/fcd_logo.jpg" alt="FCD" /></a>
      </div><!--end header-->      

      <div id="main">
      
      	<div class="main_content product_collections_necklaces">
         <?php 
		 	//Includes the left menu
			include('includes/collections_nav.php');
		?>
              
         <img src="images/collections_thumbnails/necklaces/product/bridal_necklace_pearl_3diamondroundel.jpg" class="float_left"/>
               
        <div class="main_text float_right">
              <?php include('includes/customize_btn.php'); ?>

              <div class="collections_info clear">
              	<p class="product_name">Necklace</p>
                <p class="border">Fresh Water Pearl Necklace</p>
                <p>Starting at $500</p>
				<?php include ('includes/product_disclaimer.php'); ?>  
                
               
                  <div id="necklaces_thumbnails">
                	<?php include('includes/collection_necklaces_slide_thumbnails.php'); ?>
				</div>
   
              </div><!--end collections_info-->
        
        	</div><!--end main_text-->
        	
        </div><!--end main_content-->  
        
        <?php include('includes/slider.php'); ?>   	
        <?php include('includes/nav.php'); ?> 
            
      </div><!--end main-->
      
     <?php include('includes/footer.php'); ?>

  </div><!--end container-->
    
</body>
</html>
