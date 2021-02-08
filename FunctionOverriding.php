<?php 
require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "Andika";
$manager->sayHello("Wiguna");

$vp = new VicePresident();
$vp->name = "Jaya";
$vp->sayHello("Wiguna");

?>