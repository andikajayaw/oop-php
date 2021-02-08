<?php 

class Manager {
    var string $name;
    var string $title;

    public function __construct(string $name = '', string $title = 'Manager') 
    {
        $this->name = $name;
        $this->title = $title;
    }

    function sayHello(string $name) :void {
        echo "Hi $name, Manager name is $this->name" . PHP_EOL;
    }
}

class VicePresident extends Manager {
    public function __construct(string $name = '')
    {
        // Tidak wajib, tapi direkomendasikan
        parent::__construct($name, 'VP');
    }

    function sayHello(string $name) :void {
        echo "Hi $name, VP name is $this->name" . PHP_EOL;
    }
}

?>