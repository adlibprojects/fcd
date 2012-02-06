<style>

.container {
	margin:0 auto;
	width:400px;
}
</style>

<link rel="stylesheet" type="text/css" href="accordion/jquery-ui-1.8.10.custom.css" />
<script type="text/javascript"
src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"></script>
<script type="text/javascript"
src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.10/jquery-ui.min.js"></script>
<script type="text/javascript">
			$(function(){

				// Accordion
				$("#accordion").accordion({ header: "h3", navigation: true });
				
			});
		</script>



<style type="text/css">
			/*demo page css*/
			body{ font: 62.5% "Trebuchet MS", sans-serif; margin: 50px;}
			.demoHeaders { margin-top: 2em; }
			#dialog_link {padding: .4em 1em .4em 20px;text-decoration: none;position: relative;}
			#dialog_link span.ui-icon {margin: 0 5px 0 0;position: absolute;left: .2em;top: 50%;margin-top: -8px;}
			ul#icons {margin: 0; padding: 0;}
			ul#icons li {margin: 2px; position: relative; padding: 4px 0; cursor: pointer; float: left;  list-style: none;}
			ul#icons span.ui-icon {float: left; margin: 0 4px;}
		</style>	
	</head>
	<body>
		
		<!-- Accordion -->
		<div id="accordion">
			<div>
				<h3><a href="#forHer" name="forHer">For Her</a></h3>
                 <ul>
                    <li class="collections_rings_dropdown1.php"><a href="collections_rings_dropdown1.php#forHer">D</a></li>
                  <li class="product_collections_rings"><a href="collections_rings.php">Rings</a></li>
                  <li class="product_collections_earrings"><a href="collections_earrings.php">Earrings</a></li> 
                  <li class="product_collections_necklaces"><a href="collections_necklaces.php">Necklaces</a></li> 
                  <li class="product_collections_bracelets"><a href="collections_bracelets.php">Bracelets</a></li>
                </ul>
			</div>
			<div>
				<h3><a href="#forHim" name="forHim">For Him</a></h3>
				<ul>
                 <li class="collections_rings_dropdown2.php"><a href="collections_rings_dropdown2.php#forHim">D</a></li>
                  <li class="product_bridal_forHim_cufflinks"><a href="collections_cufflinks.php">Cufflinks</a></li>
                  <li class="product_bridal_forHim_tiepins"><a href="collections_tiepins.php">Tie Pins</a></li> 
                </ul>
			</div>
		</div>

	</body>
</html>
