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