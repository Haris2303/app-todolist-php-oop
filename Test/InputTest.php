<?php

require_once '../Helper/input.php';

$name = input("Input Name: ");
$age = input("Input Age: ");
$hobbies = input("Input Hobbies: ");

echo "Nama: $name" . PHP_EOL;
echo "Umur: $age" . PHP_EOL;
echo "Hobi: $hobbies" . PHP_EOL;
