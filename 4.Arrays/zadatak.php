<?php

$primeNumbers = array(2, 3, 5, 7, 11);

var_dump(isset($primeNumbers[2]));

echo "<br>";

echo "Treći član niza primeNumbers " . isset($primeNumbers[2]) ? 'postoji: ' . $primeNumbers[2] :
    'ne postoji';

echo "<br>";

$primeNumbers[] = 13;

var_dump($primeNumbers[5]);

echo "<br>";

echo count($primeNumbers);

echo "<br>";

//var_dump(rsort($primeNumbers));

rsort($primeNumbers);
$values = array_values($primeNumbers);
var_dump($values);

echo "<br>";

$users = [
    [
        'ime' => 'Ivo',
        'prezime' => 'Ivić',
        'godine' => '19',
        'spol' => 'M'
        ],
        [
        'ime' => 'Pero',
        'prezime' => 'Perić',
        'godine' => '29',
        'spol' => 'M'
        ],
        [
        'ime' => 'Marija',
        'prezime' => 'Marić',
        'godine' => '30',
        'spol' => 'Ž'
        ],
        [
        'ime' => 'Petra',
        'prezime' => 'Petrić',
        'godine' => '18',
        'spol' => 'Ž'
        ]   
    ];
    

    
echo '<pre>';
print_r($users);
echo '</pre>';

unset($users[0]['spol']);
unset($users[1]['spol']);
unset($users[2]['spol']);
unset($users[3]['spol']);

echo '<pre>';
print_r($users);
echo '</pre>';






