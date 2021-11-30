<?php

/* how usage this
    ex: php sortedNumbers.php
*/

$sortedNumbers = [];

for ($x = 1; $x <= 20; $x++) {
	$sortedNumbers[] = rand(1, 10);
}

print_r($sortedNumbers);

$arr = array_count_values($sortedNumbers);
$maxOcurrence = max($arr);

$repeated = [];
foreach($arr as $key => $value){
    if($value == $maxOcurrence){
    	print_r('valor repetido: '. $key .'\n');
    	print_r('Ele se repete: '. $maxOcurrence .'\n');
    }
}