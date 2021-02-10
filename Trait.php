<?php 

require_once "data/sayGoodbye.php";

use Data\Traits\{Person, sayHello, sayGoodbye, HasName, CanRun};

$person = new Person();
$person->goodBye("Andika");
$person->hello("Jaya");
$person->name = "Wiguna";
var_dump($person);

$person->run();