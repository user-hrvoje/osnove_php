<?php
$users = [
    [
        "id" => 1,
        "name" => "John Doe",
        "email" => "john@example.com",
        "age" => 30
    ],
    [
        "id" => 2,
        "name" => "Jane Smith",
        "email" => "jane@example.com",
        "age" => 25
    ],
    [
        "id" => 3,
        "name" => "Mike Johnson",
        "email" => "mike@example.com",
        "age" => 35
    ],
    [
        "id" => 4,
        "name" => "Emily Davis",
        "email" => "emily@example.com",
        "age" => 28
    ],
    [
        "id" => 5,
        "name" => "chris Brown",
        "email" => "mike@example.com",
        "age" => 40
    ],

];

foreach ($users as $key => $user) {
    echo "$key--$user--";
    foreach ($user as $key1 => $value) {
        echo "$key1 - $value : ";
    }
    echo "<br>";
}

?>