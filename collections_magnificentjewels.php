<?php 
	$pageKeywords_str = "FCD - Magnificent Jewels";
	$pageDescription_str = "Work hand-in-hand with FCD Jewellers to fashion an extraordinary piece of jewelery that reflects your distinct taste and signature style.";
	$pageTitle_str = "FCD - Magnificent Jewels";
	$pageName_str = "collections_stones";
?>
<?php include_once('includes/header.php'); ?>

<body id="<?php if ($pageName_str) { echo $pageName_str; } else { echo "home"; } ?>">
	<div id="container">
    
      <div id="header">	
          <a href="index.php"><img src="images/fcd_logo.jpg" alt="FCD" /></a>
      </div><!--end header-->      

      <div id="main">
      
      	<div class="main_content stones">
             <img src="images/collections_stones_text.png" alt="Magnificent Stones" class="stones_text"/>
        	<div class="main_text">
              <p class="font_family_garamond">We offer a vast selection of hand picked gems –in every color, shape and size.</p>
              <p class="text_line_height">Indulge your passion with fiery rubies, intense sapphires, vibrant topaz, shimmering emeralds, brilliant diamonds &amp; more</p>
            </div><!--end main_text-->
            
        	
        </div><!--end main_content-->  
        
        <?php include('includes/slider.php'); ?>   	
        <?php include('includes/nav.php'); ?> 
            
      </div><!--end main-->
      
     <?php include('includes/footer.php'); ?>

  </div><!--end container-->
    
</body>
</html>
