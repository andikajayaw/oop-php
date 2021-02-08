<?php 

class Manager {
    var string $name;

    function sayHello(string $name) {
        echo "Hi $name, Manager name is $this->name" . PHP_EOL;
    }
}

class VicePresident extends Manager {
    function sayHello(string $name) {
        echo "Hi $name, VP name is $this->name" . PHP_EOL;
    }
}

?>