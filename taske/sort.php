<!DOCTYPE html>
<html>
<body>
	<h1 style="text-align: center;"> SORTING AN ARRAY</h1>
<div style="text-align: center;">
<?php
$cars = array("Volvo", "BMW", "Toyota");
sort($cars);

$clength = count($cars);
for($x = 0; $x < $clength; $x++) {
    echo $cars[$x];
    echo "<br>";
}
?></div>

</body>
</html>
