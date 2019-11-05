<!DOCTYPE html>
<html>
	<head>
	<meta charset = "utf-8">
	</head>
	<body>
		<h1> Variant 5 </h1>
		<!DOCTYPE html>
<html>
	<head>
	<meta charset = "utf-8">
	</head>
	<body>
		<h1< Variant 5 </h1>
		<h2> Zadanie 1 </h2>
		<form action = "">
			<select multiple name = "year[]" size = "3"> 
				<option value = "year"> </option>
			</select>
		</form>
		<?php 
			for ($year = 1900, $year < 2100, $year++);
			echo "Year is $year"
		?>
	</body>
 </html>
		<h2> Zadanie 2 </h2>

		<form action = "">
			<p> <input type = "number" method = "get" name = "a"/> A <br> </p>
			<p> <input type = "number" method = "get" name = "b"/> B <br> </p>
			<p> <input type = "number" method = "get" name = "c"/> C <br> </p>
			<input type = "submit" value = "ok" />
		</form>
		<?php
			$a = $_get["a"];
			$b = $_get["b"];
			$c = $_get["c"];
			$d = (($b)^2)-(4*$a*$c);
			$result1 = ((-$b)+($d)^(0.5))/(2*$a);
			$result2 = ((-$b)-($d)^(0.5))/(2*$a);
			echo "$result1 and $result2";
		?>
	</body>
 </html>
