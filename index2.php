<!DOCTYPE html>
<html>
<head>
	<title>Задание 17</title>
</head>
<body>
	<?php

	$items = ['where','is','my','money'];
	$sum = 0;
	for ($i=0; $i < 100; $i++) { 
		if ($i % 3 == 0) echo "hey<br/> ";
		if ($i % 5 == 0) $sum += $i;
		if ($i % 3 == 0 and $i % 5 == 0) shuffle($items);
	}
	foreach ($items as $value) {
		echo "$value ";
	}

	?>
</body>
</html>