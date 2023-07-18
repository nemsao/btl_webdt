<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./css/responsive.css">
</head>
<body>
	<?php
		include("pages/menu.php");
	?>
	<div class="grid wide contain">
		    <div class="row">
				<div class="col c-12 m-12 l-12">
						<?php 
							include("pages/header.php");
							include("pages/main.php");
							include("pages/footer.php");
						?>
				</div>
			</div>
	</div>
	
		
</body>
</html>