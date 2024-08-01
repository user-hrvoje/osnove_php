<?php

 $primeNumbers = array(2, 3, 5, 7, 11);
 var_dump(isset($primeNumbers[2]));
 echo '<br>';
 
 echo "Treći član niza $primeNumbers " . isset($primeNumbers[2]) ? 'postoji' :
 'ne postoji';
 echo '<br>';
 
 if (isset($primeNumbers[2])) {
     echo 'Treci clan arraya primeNumbers postoji';
    } else {
        echo 'Treci clan arraya primeNumbers ne postoji';
    }
echo '<br>';

$a = 5;
$b = 10;
$c = 15;

if (($b > $a && $b > $c) || $b < $a) {
    echo 'Ispisuje se kod unuta IF';
} else {
    echo 'Ispusuje se kod unutar ELSE';    
}
echo '<br>';

$postotakIspita = -50;

if ($postotakIspita >= 90) {
    echo 'ocjena je 5';
} elseif ($postotakIspita >= 80) {
    echo 'ocjena je 4';
} elseif ($postotakIspita >= 70) {
    echo 'ocjena je 3';
} elseif ($postotakIspita >= 60) {
    echo 'ocjena je 2';
} elseif ($postotakIspita < 60 && $postotakIspita >= 0) {
    echo 'pali ste na ispitu';
} else {
    echo 'nismo mogli izračunati vasu ocjenu';
}
echo '<br>';
if (count($primeNumbers) != 5) {
    echo 'duzina je 5';
} else {
    echo 'duzina nije 5';
}

echo '<br>';