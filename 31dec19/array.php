<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>switch statement</title>
</head>
<body>
	<h1>KITCHEN FOOD</h1>
	<form action="" method="post">
		Day:
		<br>
		<input type="text" name="day" placeholder="enter the day.....">
		<br><br>
		<input type="submit" name="submit">
	</form>
	<p>
		Menu Is:
	</p>
	<?php
	if (isset($_POST['submit'])) {
		switch ($_POST['day']) {
			case 'monday':
				echo "mondays meal is kabab";
				break;
				case 'tuesday':
				echo "today meal is kabab";
				break;
				case 'wednesday':
				echo "wednesday meal is kabab";
				break;
				case 'thursday':
				echo "today meal is kabab";
				break;
				case 'friday':
				echo "friday meal is kabab";
				break;
				case 'saturday':
				echo "saturday meal is kabab";
				break;
			
				case 'sunday':
				echo "sunday meal is kabab";
				break;
			default:
				echo "enter valid day";
				break;
		}
	}
	?>
	
</body>
</html>