<?php
$a = 5;
$b = 6;

function addTwoNumbers(int $a, int $b): int
{
    return $a + $b;
}

$zbroj = addTwoNumbers($a, $b);
var_dump($zbroj);

