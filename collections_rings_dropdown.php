<style>

.container {
	margin:0 auto;
	width:400px;
}
h2.acc_trigger {
	padding: 0;	margin: 0 0 5px 0;
	background: url(images/h2_trigger_a.gif) no-repeat;
	height: 46px;	line-height: 46px;
	width: 500px;
	font-size: 2em;
	font-weight: normal;
	float: left;
}
h2.acc_trigger a {
	color: #fff;
	text-decoration: none;
	display: block;
	padding: 0 0 0 50px;
}
h2.acc_trigger a:hover {
	color: #ccc;
}
h2.active {background-position: left bottom;}
.acc_container {
	margin: 0 0 5px; padding: 0;
	overflow: hidden;
	font-size: 1.2em;
	width: 500px;
	clear: both;
	background: #f0f0f0;
	border: 1px solid #d6d6d6;
	-webkit-border-bottom-right-radius: 5px;
	-webkit-border-bottom-left-radius: 5px;
	-moz-border-radius-bottomright: 5px;
	-moz-border-radius-bottomleft: 5px;
	border-bottom-right-radius: 5px;
	border-bottom-left-radius: 5px;
}
.acc_container .block {
	padding: 20px;
}
</style>

<script type="text/javascript"
src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
	//Set default open/close settings
$('.acc_container').hide(); //Hide/close all containers
$('.acc_trigger:first').addClass('active').next().show(); //Add "active" class to first trigger, then show/open the immediate next container

//On Click
$('.acc_trigger').hover(function(){
	if( $(this).next().is(':hidden') ) { //If immediate next container is closed...
		$('.acc_trigger').removeClass('active').next().slideUp(); //Remove all "active" state and slide up the immediate next container
		$(this).toggleClass('active').next().slideDown(); //Add "active" state to clicked trigger and slide down the immediate next container
	}
	return false; //Prevent the browser jump to the link anchor
});

});
</script>



<body>
<div class="container">
          <h2 class="acc_trigger"><a href="#">For Her</a></h2>
            <div class="acc_container">
              <div class="block">
              Content
              </div>
            </div>
            
            <h2 class="acc_trigger"><a href="#">For Him</a></h2>
            <div class="acc_container">
              <div class="block">
              <!--Content Goes Here-->
              </div>
            </div>
         </div>

</body>
</html>
