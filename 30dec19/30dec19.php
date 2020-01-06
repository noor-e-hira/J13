<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>food menu</title>
	<style>
		body{
			background:url(pic2.jpg) no-repeat;
			background-size: cover;
			background-opacity: 0.4;
		}
		h1{
			text-align: center;
			color: black;

		}
		

	</style>









</head>
<body>
	<h1>FOOD MENU</h1>
	<form id="day" action="" method="post">
		<h2>
			Enter Day
		</h2>
		<br>
		<input type="text" placeholder="enter the day today meals" name="day">
		<br>
		<br>
		<input type="submit" name="submit">
	</form>
	<p>
		Menu Is:
	</p>
	<?php
		if (isset($_POST['submit'])) {
			$day=$_POST['day'];
		if ($day=="monday") {
			 echo "Today's meals is Pulao";
		}
		elseif ($day=="tuesday") {
			echo "today's meals is chicken balls";
		}
		elseif ($day=="Wednesday") {
			echo "today's meals is soup with rice";
		}
		elseif ($day=="Thursday") {
			echo "today's meal is karahi and halwa";
		}
		elseif ($day=="friday") {
			echo "today's meals is bhujya and karri";
		}
		elseif ($day=="saturday") {
			echo "pizza with afgani rosh";
		}
		elseif ($day=="sunday") {
			echo "todays meals is bakery items";
		}
		else
		{
			echo "please enter the day cearfully";
		}

		}
		?>
</body>
</html>