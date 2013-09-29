<?php

$boxes = ' ';
for($i = 0; $i < 50; $i++) {
	$boxes = $boxes."<div class='box'>".$i."</div>";
	$width = rand(20,100)."px";
	$height = rand(20,100)."px";
}

?>