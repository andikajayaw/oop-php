<?php 

function getGenap(int $max): Iterator {
    $array = [];

    for($i = 1; $i <= 100; $i++) {
        if($i % 2 == 0) {
            $array[] = $i;
        }
    }
    return new ArrayIterator($array);
}

foreach(getGenap(100) as $value) {
    echo "\n";
    echo "Genap : $value";
    echo "\n";
}


function getGanjil(int $max): Iterator {

    for($i = 1; $i <= 100; $i++) {
        if($i % 2 == 1) {
            yield $i;
        }
    }
}

foreach(getGanjil(100) as $value) {
    echo "\n";
    echo "Ganjil : $value";
    echo "\n";
}