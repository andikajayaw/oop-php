<?php 

$array = [
    "firstName" => "Andika",
    "middleName" => "Jaya",
    "lastName" => "Wiguna ",
];

$object = (object)$array;

var_dump($object);

echo "First Name $object->firstName";
echo "Middle Name $object->middleName";
echo "Last Name $object->lastName";

$arrayLagi = (array) $object;
var_dump($arrayLagi);