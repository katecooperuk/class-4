<?php

	$contestants["Sam"] = "Winner";
	$contestants["Bob"] = "Winner";
	$contestants["Jill"] = "Loser";
	$contestants["Eliot"] = "Loser";

?>

<?php
	$shopping_lists['supermarket'] = array('Apples', 'Oranges', 'Milk');
	$shopping_lists['hardware_store'] = array('Hammer', 'Nails', 'Paint');
	$shopping_lists['pharmacy'] = array('Bandaids', 'Tylenol');
?>

<?php
	$shopping_list = Array(
	'supermarket' => Array('Apples', 'Oranges', 'Milk'),
	'hardware_store' => Array('Hammer', 'Nails', 'Paint'),
	'pharmacy' => Array('Bandaids', 'Tylenol', 'shampoo'),
	);
	
	$rows = count($shopping_list,0);
	$cols = (count($shopping_list,1)/count($shopping_list,0))-1;
?>