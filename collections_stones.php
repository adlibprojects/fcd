<?php 
	$pageKeywords_str = "FCD - Bridal - For Her";
	$pageDescription_str = "Work hand-in-hand with FCD Jewellers to fashion an extraordinary piece of jewelery that reflects your distinct taste and signature style.";
	$pageTitle_str = "FCD - Customized Any Way You Wish";
	$pageName_str = "collections_stones";
?>
<?php include_once('includes/header.php'); ?>

<body id="<?php if ($pageName_str) { echo $pageName_str; } else { echo "home"; } ?>">
	<div id="container">
    
      <div id="header">	
          <a href="index.php"><img src="images/fcd_logo.jpg" alt="FCD" /></a>
      </div><!--end header-->      

      <div id="main">
      
      	<div class="main_content">
             
        	<div class="main_text">
              <img src="images/collections_stones_text.png" alt="Magnificent Stones" />
            </div><!--end main_text-->
            
        	
        </div><!--end main_content-->  
        
        <?php include('includes/slider.php'); ?>   	
        <?php include('includes/nav.php'); ?> 
            
      </div><!--end main-->
      
     <?php include('includes/footer.php'); ?>

  </div><!--end container-->
    
</body>
</html>
