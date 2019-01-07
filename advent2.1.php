<?php

$data = file('input.txt');
//változóban tároljuk az összhosszát a csomagolópapírnak amire szükségünk lesz
$length = 0;
// végig megyünk a presenteken
foreach($data as $key => $row)
{
	
	
	$d = explode('x', $row);
	$d[0] = intval($d[0]);
	$d[1] = intval($d[1]);
	$d[2] = intval($d[2]);
	
	sort($d);
	
	
	$length += 2*$d[0] + 2*$d[1];
	

	$length += $d[0]*$d[1]*$d[2];
	
}

echo 'valasz: '.$length;
?>