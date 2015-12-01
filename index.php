<?php include 'config.php'; ?>
<!DOCTYPE html>
<html>
	<head>
		<title>phpPing</title>
	</head>
	<body>
		<?php
			for ($row = 0; $row < sizeof($hosts); $row++) {
			    if(!ping($hosts[$row][1], $hosts[$row][2])){
			    	echo $hosts[$row][0] . " is offline<br />";
			    	echo "Adress: " . $hosts[$row][1] . ":" . $hosts[$row][2] ."<br />";
			    	echo "<hr />";
				}else{
					echo $hosts[$row][0] . " is online<br />";
			    	echo "Adress: " . $hosts[$row][1] . ":" . $hosts[$row][2] ."<br />";
			    	echo "<hr />";
				}
			}
		?>				    
</body>
</html>