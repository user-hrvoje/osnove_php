<?php

$i = 1;
while ($i <= 10) {
    echo  ($i == 1 ? "$i" : ", $i");
    $i++;
}

echo '<br><br>';

for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0) {
        echo  ($i == 3 ? "$i" : ", $i");
    }
}

echo '<br><br>';

for ($i = 1; $i <= 10; $i++) {
    if ($i === 5) {
        continue;
    }
    echo "$i      ,";
}

echo '<br><br>';
// tablica 10 * 10

for ($i = 1; $i <= 10; $i++) {
    echo "$i - ";
    for ($j = 1;$j <= 10; $j++) {
        $broj = $i * $j;
        echo $broj . "&nbsp&nbsp&nbsp";
    }
    echo '<br>';
}
echo '<br><br>';

$names = ["Ivo", "Marija", "Petra", "Jura", "Božo"];

for ($i=0; $i < count($names) ; $i++) { 
    if ($i == 0) {
        echo $names[$i];
    } else {
        echo ', ' . $names[$i];
    }
}
echo '<br><br>';

foreach ($names as $name) {
    echo "$name, ";
}
echo '<br><br>';
foreach ($names as $key => $name) {
    echo ++$key. "    -- $name<br>";
}