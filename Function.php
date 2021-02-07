<?php 

require_once "data/Person.php";

$person = new Person("Andika", "Denpasar");
$person->name = "Andika";
// $person->address = null;
// $person->country = "Indonesia";

$person->sayHello("Jaya");

$person->info();

?>