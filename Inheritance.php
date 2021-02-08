<?php 

require_once "data/Manager.php";

$manager = new Manager();
$manager->name = 'Andika';
$manager->sayHello("Wiguna");

$vp = new VicePresident();
$vp->name = 'Andika';
$vp->sayHello("Wiguna");

?>