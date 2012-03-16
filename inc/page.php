<!DOCTYPE html>
<!--[if IE]><![endif]-->
<html lang="en">
	<head>
		<?php include Z::getFile('head'); ?>
	</head>
<!--[if IE 8]>    <body class="ie ie8"><![endif]-->
<!--[if IE 7]>    <body class="ie ie7"><![endif]-->
<!--[if IE 6]>    <body class="ie ie6"><![endif]-->
<!--[if !IE]>-->  <body>               <!--<![endif]-->
		<script type="text/javascript" src="../js/init.min.js"        ></script>
		<div id="page" class="<?php echo Z::getPageName();?>">
<?php include Z::getFile('body'); ?>
		</div>
		<script type="text/javascript" src="../js/jquery.min.js"      ></script>
		<script type="text/javascript" src="../js/behaviours.js"      ></script>

		<!-- remove for production -->
		<script type="text/javascript" src="../js/hashgrid.custom.js" ></script>
	</body>
</html>