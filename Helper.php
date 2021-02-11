<?php 

require_once "helper/MathHelper.php";

use Helper\{MathHelper};

echo MathHelper::$name;

MathHelper::$name  = "Andika";

$result = MathHelper::sum(10,10,10,20);

echo "Result: $result";