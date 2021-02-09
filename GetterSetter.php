<?php 

require_once "data/Category.php";

$category = new Category();
$category->setName("Handphone");
$category->setExpensive(true);

$category->setName('');
echo "Name : {$category->getName()}";
echo "Expensive : {$category->isExpensive()}";