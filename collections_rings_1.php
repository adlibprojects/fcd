<?php 
	// Meta Information - variables are called from the header.php file //
	$pageKeywords_str = "Engagement Ring, Emerald Cut, Rings, Engagement";
	$pageDescription_str = "Emerald Cut Engagement Ring";
	$pageTitle_str = "Emerald Cut Engagement Ring | Rings";
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
          <img src="images/collections_thumbnails/rings/product/1_emerald_cut.jpg" width="487" height="520" />
          <img src="images/collections_thumbnails/rings/product/1_emerald_cut_2.jpg" />
          <img src="images/collections_thumbnails/rings/product/1_emerald_cut_3.jpg" />
          <img src="images/collections_thumbnails/rings/product/1_emerald_cut_4.jpg" />
		  <img src="images/collections_thumbnails/rings/product/1_emerald_cut_5.jpg" />
      </div>               
        <div class="main_text float_right">
        	 <?php include('includes/customize_btn.php'); ?>
           
              <div class="collections_info clear">
              	<p class="product_name">Emerald Cut Ring</p>
                <p class="border">Emerald Cut Engagement Ring Set in Platinum</p>
                <?php include ('includes/collections_rings_price.php'); ?>
				<?php include ('includes/product_disclaimer.php'); ?>  
                
                <div id="rings_thumbnails">
                	<?php include('includes/rings_thumbnails.php'); ?>
				</div>

                 &bull; <a href="bridal_forHer_rings.php?category=bridal" class="rings_link">See More Engagement Rings</a>
   
              </div><!--end collections_info-->
        
        	</div><!--end main_text-->
        	
        </div><!--end main_content-->  
        
        <?php include('includes/slider.php'); ?>   	
        <?php include('includes/nav.php'); ?> 
            
      </div><!--end main-->
      
<?php include('includes/footer.php'); ?>