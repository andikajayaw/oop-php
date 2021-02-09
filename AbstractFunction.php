<?php 

require_once "data/Animal.php";

use Data\{Animal, Cat, Dog};

$cat = new Cat();
$cat->name = "Meow";
$cat->run();

$dog = new Dog();
$dog->name = "Rough";
$dog->run();