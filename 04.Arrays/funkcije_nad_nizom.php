<?php

$empty_array = [null];
$names = ["Marko", "Alex", "Filip"];

$is_variable_empty = empty($names);
var_dump($is_variable_empty);
echo '<br>';
var_dump(isset($empty_array));

// in_array and array_search funkcije

echo '<br>';
var_dump(in_array('Alex', $names));

echo '<br>';
var_dump(array_search('Marko', $names));

//sortiranje

//sort($names);  // po abecedi
//rsort($names);   // obrnuto
//asort($names);  // ključevi ostaju value se složi po abecedi
ksort($names);

echo '<pre>';
print_r($names);
echo '</pre>';

