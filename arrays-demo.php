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

<!----- Example of php ----->
	
	<?php
	foreach($contestants as $key => $value) {
		echo $key." is ".$value."<br>";
	}
	?>
	
<!----- End of Example of php ----->	

<br>

<!----- Example of above PHP in a table ----->

	<table>
	<?php
	foreach($contestants as $key => $value) {
		echo "<tr>";
		echo "<td>".$key."</td>";
		echo "<td>".$value."</td>";
		echo "<tr>";
	}
	?>
	</table>
	
<!----- End Example of above PHP in a table ----->

<br>	

<!----- Example of PHP using 'endofforeach' ----->

	<?php
	foreach($contestants as $key => $value):
		echo $key." is ".$value."<br>";
	endforeach;
	?>
	
<!----- End Example of PHP using 'endofforeach' ----->

<br>

<!----- Example of PHP closing each instance of PHP ----->

	<?php foreach($contestants as $key => $value): ?>
		<?=$key?> is a <?=$value?> <br>
	<?php endforeach; ?>
	
<!----- End Example of PHP closing each instance of PHP ----->

<br>

<!----- Example of above PHP in a table ----->

	<table>
		<?php foreach($contestants as $key => $value): ?>
			<tr>
				<td><?=$key?></td>
				<td><?=$value?></td>
			</tr>
		<?php endforeach; ?>
	</table>
	
<!----- End Example of above PHP in a table ----->

<br>

<!----- Count the Shopping Lists ----->

	<?php
		echo count($shopping_lists);
	?>

<!----- End Count the Shopping Lists ----->

<br>

<!----- Count all the rows and columns ----->

	<?php
		print "There are {$rows} rows and {$cols} columns in the table!";
	?>
	
<!----- End Count all the rows and columns ----->

<br>

<!----- Count all the items on the list ----->
	
	<?php	
		echo (count($shopping_list,COUNT_RECURSIVE)-count($shopping_list,0));
	?>

<!----- End Count all the items on the list ----->


</body>
</html>