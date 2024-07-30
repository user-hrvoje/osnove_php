<?php

$integer = 10;
$float = 3.5;
$string = '10\'000,50';
$bool = true;
$prazanString = "";
echo $integer;
echo "<br>";
echo $float;
echo "<br>";
echo $string;
echo "<br>";
echo $prazanString . "  <-- prazan";
echo "<br>";
echo $bool . "  <-- bool";
echo "<br>";
var_dump($bool);
echo "<br>";
echo $bool ? "Da" : "Ne";
echo "<br>";

// Konstante
define("PITAGORA", 1.41);
const TEODOR = 1.73;
echo PITAGORA;
echo "<br>";
print TEODOR;
echo "<br>";

// Reference
$a = 5;
$b = &$a;
print $b;
echo "<br>";
$a = 10;
print $b;
echo "<br>";
