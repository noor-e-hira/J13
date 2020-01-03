<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>array using loop</title>
</head>
<body>
	<h1>for loop by using array</h1>
	<?php
	$colors = ["red",'green','orange', 'purple'];
	for ($j=0; $j < count($colors) ; $j++) { 
		echo $colors[$j]."<br>";
	}
	?>
</body>
</html>