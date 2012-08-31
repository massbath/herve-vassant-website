<?php include("includes/php/galleri.php");?>


 <?php
 
createGalleri('./modules/galleri');
?>
 

 
 <script src="/bootstrap/js/bootstrap-carousel.js"></script>
<script src="/bootstrap/js/bootstrap-transition.js"></script>
<script src="includes/javascript/lightbox/js/jquery.lightbox-0.5.js"></script>
<link rel="stylesheet" type="text/css" href="includes/javascript/lightbox/css/jquery.lightbox-0.5.css" media="screen" />
<script>
$(document).ready(function()
{
	$('#lightbox a').lightBox(
		{
			imageLoading: 'includes/javascript/lightbox/images/lightbox-ico-loading.gif',
			imageBtnClose: 'includes/javascript/lightbox/images/lightbox-btn-close.gif',
			imageBtnPrev: 'includes/javascript/lightbox/images/lightbox-btn-prev.gif',
			imageBtnNext: 'includes/javascript/lightbox/images/lightbox-btn-next.gif',
			fixedNavigation:true
		});

});
</script>