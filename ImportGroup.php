<?php 

require_once "data/Conflict.php";
require_once "data/Helper.php";

use Data\One\{Conflict as Conflict, Dummy as Dummy, Sample as Sample};
use function Helper\{helpMe as help};

$conflict = new Conflict();
$dummy = new Dummy();
$sample = new Sample();

help();