<?php

$a = 10;
$b = 5;
$c = "10";
$d = 10;

var_dump($a > $b); // true
echo "<br>";
var_dump($a < $b); // false
echo "<br>";
var_dump($a == $b);  // false
echo "<br>";
var_dump($a == $d);  // true
echo "<br>";

// tip i vrijednost iste

var_dump($a === $c);  // false
echo "<br>";
var_dump($a === $d);  // true
echo "<br>";