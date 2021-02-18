<?php 

class Zero {
    private array $properties = [];

    public function __get($name) {
        return $this->properties[$name];
    }

    public function __set($name, $value) {
        $this->properties[$name] = $value;
    }

    public function __isset($name) {
        isset($this->properties[$name]);
    }

    public function __unset($name) {
        unset($this->properties[$name]);
    }

    public function __call($name, $arguments) {
        $join = join(",", $arguments);
        echo "Call function $name with arguments $join ";
    }

    public static function __callStatic($name, $arguments)
    {        
        $join = join(",", $arguments);
        echo "Call static function $name with arguments $join ";
    }
        

}

$zero = new Zero();

$zero->firstName = 'Jaya';
$zero->middleName = 'Wiguna';
$zero->lastName = 'Andika';

echo "First Name $zero->firstName";
echo "\n";
echo "Middle Name $zero->middleName";
echo "\n";
echo "Last Name $zero->lastName";
echo "\n";

$zero->sayHello("Andika", "Jaya");
$zero->helloWorld("sani", "anrsti");
Zero::sayHello("Andika", "jaya");