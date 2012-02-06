<?php 
	$pageKeywords_str = "FCD - Bridal - For Her";
	$pageDescription_str = "Work hand-in-hand with FCD Jewellers to fashion an extraordinary piece of jewelery that reflects your distinct taste and signature style.";
	$pageTitle_str = "FCD - Customized Any Way You Wish";
	$pageName_str = "service_update_sizing";
?>
<?php include_once('includes/header.php'); ?>

<body id="<?php if ($pageName_str) { echo $pageName_str; } else { echo "home"; } ?>">
	<div id="container">
    
      <div id="header">	
          <a href="index.php"><img src="images/fcd_logo.jpg" alt="FCD" /></a>
      </div><!--end header-->      

      <div id="main">
      
      	<div class="main_content service_update">
        <div class="float_right main_text services">
              <p class="font_family_garamond font_size_medium_garamond">Revitalize old diamonds by recutting them<br /> – maximizing their sparkle and brilliance<br />text about new and more sophisticated methods of cutting stones today to maximize the beauty and sparkle of diamonds</p>
              <p></p>
              
              <span class="font_family_garamond">We Will</span>
              <ul>
              	<li class="revitalize"><a href="service_update_revitalize.php">Revitalize old diamonds by recutting them – maximizing their sparkle and brilliance</a></li>
                <li class="reset"><a href="service_update_reset.php">Reset old stones in au courant designer settings</a></li>
              	<li class="replace"><a href="service_update_replace.php">Replace missing gems with expertly matched new stones</a></li>
              	<li class="restring"><a href="service_update_restring.php">Restring your pearl necklaces and bracelets</a></li>
                <li class="restore"><a href="service_update_restore.php">Restore your jewelry to its original luster with expert cleaning and polishing</a></li>
              </ul>
              
              <span class="font_family_garamond">Other Services</span>
              <ul>
              	<li class="appraisals"><a href="service_update_appraisals.php">Jewelry appraisals</a></li>
                <li class="sizing"><a href="service_update_sizing.php">Sizing of rings and bracelets</a></li>
              	<li class="purchase"><a href="service_update_purchase.php">Purchasers of old gold jewelry and watches</a></li>
              </ul>
            </div><!--end main_text-->
        
        	
            <img src="images/main_bg_services_update_3.jpg" />
       
        
        	
        	
        </div><!--end main_content-->  
        
        <?php include('includes/slider.php'); ?>   	
        <?php include('includes/nav.php'); ?> 
            
      </div><!--end main-->
      
     <?php include('includes/footer.php'); ?>

  </div><!--end container-->
    
</body>
</html>
