<?php 
	// Meta Information - variables are called from the header.php file //
	$pageKeywords_str = "Diamond Stud, Diamonds, Circlet";
	$pageDescription_str = "Diamond Stud Earrings surrounded by Smaller Diamonds in Circlet";
	$pageTitle_str = "Diamond Stud Earrings | Earrings";
	$pageName_str = "product_collections_earrings";
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
          <img src="images/collections_thumbnails/earrings/product/7_diamond_stud2.jpg" />
          <img src="images/collections_thumbnails/earrings/product/7_diamond_stud.jpg" />
       </div>
                             
        <div class="main_text float_right">
              <?php include('includes/customize_btn.php'); ?>
           
              <div class="collections_info clear">
              	<p class="product_name">Diamond Stud Earrings</p>
                <p class="border">Diamond Stud Earrings Surrounded<br /> by Smaller Diamonds in Circlet</p>
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

