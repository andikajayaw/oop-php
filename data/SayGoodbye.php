<?php 

namespace Data\Traits;

trait sayGoodbye {
    public function goodBye(?string $name) :void
    {
        if(is_null($name)) {
            echo "Good bye ";
        } else {
            echo "Good bye $name ";
        }
    } 
}

trait sayHello {
    public function hello(?string $name) :void
    {
        if(is_null($name)) {
            echo "Hello ";
        } else {
            echo "Hello $name ";
        }
    } 
}

trait HasName{
    public string $name;
}

trait CanRun {
    public abstract function run() :void;
}

trait All {
    use sayGoodbye, sayHello, HasName, CanRun {
        // hello as private;
        // goodBye as private;
    }
}

class ParentPerson {
    public function goodBye(?string $name) :void
    {
        echo "Goodbye in Person ";
    }

    public function hello(?string $name) :void 
    {
        echo "Hello in Person ";
    }
}

class Person extends ParentPerson
{
    use All;
    
    public function run() :void {
        echo "Person $this->name is running ";
    }
}