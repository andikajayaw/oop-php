<?php 

require_once "data/Animal.php";
require_once "data/AnimalShelter.php";
require_once "data/Food.php";

$catShelter = new \Data\CatShelter();
$cat = $catShelter->adopt("Blacky");
$cat->eat(new Data\AnimalFood("Pindang"));

$dogShelter = new \Data\DogShelter();
$dog = $dogShelter->adopt("White"); 
$dog->eat(new Data\Food("Royal chain"));

