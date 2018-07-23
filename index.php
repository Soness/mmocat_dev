<?
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>mmo.cat</title>
	<link rel="stylesheet" href="style/style.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	
	<script src="toolTip.js"></script>
	
	<script src="js/scriptComboBox.js"></script>
	<script src="js/slider.js"></script>
	<script src="calc_button_ajax.js"></script>
	<script src="js/scriptDropDown.js"></script>
	<link rel="stylesheet" href="style/styleComboBox.css">
	
</head>
<body>
	<div id="page">
		<div id="inner_page">
			<div class="toolTip">
				<div class="triangle">
					
				</div>
				
				
			</div>
			<?php
			
				require "pre_header.php";
				require "header.php";
				require "slider_container.php";
				require "content.php";
			
				require "counters.php";
				require "footer.php";
				require "after_footer.php";
			
			?>
			
			</div>
		</div>
		</div>
	</div>
	<script src="js/animations.js"></script>
</body>
</html>