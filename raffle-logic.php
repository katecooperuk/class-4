<?php

$contestants['Sam'] = '';
$contestants['Bob'] = '';
$contestants['Jill'] = '';
$contestants['Eliot'] = '';

$winning_number = rand(0,4);
	
foreach($contestants as $key => $value) {

	$contestants_random_number = rand(0,4);
	
	//Winner!
	if($winning_number == $contestants_random_number) {
		$contestants[$key] = 'Winner';
	}
	//Loser :(
	else {
		$contestants[$key] = 'Loser';
	}		
		
}

?>
