<?php
// Inicijalizacija praznog niza
$empty1 = [];
$empty2 = array();

// Inicijalizacija niza (lista) s podacima -> Indexed array

$names1 = ['Ivo', 'Pavo', 'Marija', 'Ana'];
$names2 = array('Ivo', 'Pavo', 'Marija', 'Ana');

echo '<pre>';

print_r($names1);
echo '</pre>';
echo $names2[1];

// Inicijalizacija niza (mapa) s podacima -> Associative array

$status = ["name" => "Banana",
           "cijena" => "12 €",
           "klasa" => "Prva"
        ];
echo '<pre>';
print_r($status);
echo '</pre>';
echo $status['name'];


