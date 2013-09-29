<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">

<title>Class 4 - Arrays</title>
	
	<?php
	require_once("arrays-logic.php");
	?>

	<link rel="stylesheet" href="arrays.css" type="text/css">
</head>
	
	

<body>

	<pre>
	<?php
	print_r($contestants);
	?>
	</pre>
	
	Jill is a <?=$contestants["Jill"]?>
	Sam is a <?=$contestants["Sam"]?>

</body>
</html>