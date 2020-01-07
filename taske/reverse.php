<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1 style="text-align: center;">REVERSE THE STRING</h1>

<div style="text-align: center; font-size:30px ">
<?php
$string = 'zeeshan';
$reverse = '';
$i = 0;
while(!empty($string[$i])){ 
      $reverse = $string[$i].$reverse; 
      $i++;
}
echo $reverse;
?>
</div>
</body>
</html>