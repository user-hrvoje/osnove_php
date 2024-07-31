<?php

$names = ["Alex", "Filip", "Marko"];
$names[3] = "Robert";
$names[] = 'Angelo';

echo '<pre>';
print_r($names);
echo '</pre>';

$fruits = [
    'name' => 'Banana',
    'cijena' => '12 €',
    'klasa' => 1,
    'masa' => 12.5
];

$fruits['masa'] = 12.3;

echo '<pre>';
print_r($fruits);
echo '</pre>';