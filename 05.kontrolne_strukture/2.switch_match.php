<?php

$variable = date('N');
var_dump($variable);
switch ($variable) {
    case 1:
        echo 'Ponedjeljak';
        break;
    case 2:
        echo 'Utorak';
        break;
    case 3:
        echo 'Srijeda';
        break;
    case 4:
        echo 'Četvrtak';
        break;
    
    default:
        echo 'Ne znam koji je dan';
        break;
}
echo '<br><br>';

$dan = match ($variable) {
     '1' => 'Ponedjeljak',
     '2' => 'Utorak',
     '3' => 'Srijeda',
     '4' => 'Četvrtak',
     '5' => 'Petak',
     default => 'Ne znam koji je dan'
};
