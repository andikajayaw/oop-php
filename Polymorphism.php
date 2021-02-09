<?php 

require_once "data/Programmer.php";

$company = new Company();

$company->programmer = new Programmer("Andika");
var_dump($company);

$company->programmer = new BackendProgrammer("Jaya");
var_dump($company);

$company->programmer = new FrontendProgrammer("Wiguna");
var_dump($company);

sayHelloProgrammer(new Programmer("Andika"));
sayHelloProgrammer(new BackendProgrammer("Jaya"));
sayHelloProgrammer(new FrontendProgrammer("Wiguna"));

?>