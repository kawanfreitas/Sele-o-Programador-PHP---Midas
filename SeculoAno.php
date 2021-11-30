<?php
/* how usage this
    ex: php SeculoAno.php --num=2021 
*/

$ano = getopt(null, ["num:"]);

SeculoAno($ano['num']);

function SeculoAno($ano) 
{
    $primeiroNum = substr($ano, 0, 2);

    $ultimoNum = substr($ano, -2);

    if ($ultimoNum == 00) {
        echo "seculo: $primeiroNum";
        return;
    }
    if ($ultimoNum != 00) {
        echo "seculo: " .$primeiroNum + 1;
        return;
    }
    
}