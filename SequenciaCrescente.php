<?php

/* how usage this
    ex: php script.php --array=1, 3, 2, 1
*/

$arr = getopt(null, ["array:"]);

if (empty($arr)) {
    printf('Please add param --array=1, 3, 2, 1 for continue');
    return;
}

$result = false;
$arr = explode(',', $arr['array']);

foreach ($arr as $key => $value) {
	$temp = $arr;
	unset($temp[$key]);

	if(isCrescent($temp)) {
		$result = true;
		break;
	}
}

var_dump($result);

function isCrescent($arr) {
	$arr = array_values($arr);
	$temp = true;
	for ($i=1; $i < count($arr); $i++) {
		if ($arr[$i - 1] >= $arr[$i]) {
			$temp =  false;
		}
	}
    return $temp;
}