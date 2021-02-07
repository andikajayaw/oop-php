<?php 

require_once "data/Person.php";

$person = new Person();
$person->name = "Andika";
$person->address = null;
// $person->country = "Indonesia";


var_dump($person);

?>