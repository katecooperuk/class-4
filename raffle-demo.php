<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">

<title>Class 4 - Raffle Exercise</title>
	
	<?php
	require_once('raffle-logic.php');
	?>

	<link rel='stylesheet' href='arrays.css' type='text/css'>

</head>
	
<body>


<!----- Form ----->
	<form action='raffle-demo.php' method='POST'>
		<input type='text' name='contestant1'><br>
		<input type='text' name='contestant2'><br>
		<input type='text' name='contestant3'><br>
		<input type='text' name='contestant4'><br>
		<input type='submit'>
	</form>
<!----- End Form ----->


<!----- Example of above PHP in a table ----->

	<table>
		<?php foreach($contestants as $name => $winner_or_loser): ?>
			<tr>
				<td><?=$name?></td>
				<td><?=$winner_or_loser?></td>
			</tr>
		<?php endforeach; ?>
	</table>
	
<!----- End Example of above PHP in a table ----->

</body>
</html>