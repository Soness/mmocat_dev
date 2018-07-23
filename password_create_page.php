<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>mmo.cat</title>
	<link rel="stylesheet" href="style/style.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	
	<script src="js/scriptComboBox.js"></script>
	<link rel="stylesheet" href="style/styleComboBox.css">
	
</head>
<body>
	<div id="page">
		<div id="inner_page">
			<?php
				require "pre_header.php";
				require "header.php";
			?>
			<div id="body">
				<div id="inner_body">
						<div class="content">
					
						<?php 
							require_once "password_create_container.php";
						?>
						
						
					</div>	
					
					
			</div>
			</div>
			
			<?php 
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
