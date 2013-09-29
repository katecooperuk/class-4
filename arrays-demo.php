<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">

<title>Class 4 - Arrays</title>
	
	<?php
	require_once('arrays-logic.php');
	?>

	<link rel='stylesheet' href='arrays.css' type='text/css'>

</head>
	
<body>

	<?php
	foreach($contestants as $key => $value) {
		echo $key." is ".$value."<br>";
	}
	?>
	
	<?php
	foreach($contestants as $key => $value):
		echo $key." is ".$value."<br>";
	endforeach;
	?>


</body>
</html>