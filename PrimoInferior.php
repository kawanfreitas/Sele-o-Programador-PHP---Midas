<?php

/* how usage this
    ex: php PrimoInferior.php --num=50 
*/

$val = getopt(null, ["num:"]);

if (!empty($val['num'])) {
    if ($val['num'] < 0) {
        echo 0;
        return;
    }
    showMaxValue($val['num']);
}


function showMaxValue(int $val): void
{
    $primesFound = [];

    for ($x = 1; $x <= $val; $x++) {
        if (testarPrimo($x)) {
            $primesFound[] = $x;
        }
    }

    echo max($primesFound);
}


function testarPrimo(int $numero): bool
{
    switch ($numero) {
        case $numero % 2 == 0:
        case $numero == 1:
            return false;
        case $numero == 2:
            return true;
        default:
            $ceil = ceil(sqrt($numero));
            for ($i = 3; $i <= $ceil; $i = $i + 2) {
                if ($numero % $i == 0) {
                    return false;
                }
            }
            return true;
    }
}