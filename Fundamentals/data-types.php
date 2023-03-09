<?php

$sobrenome = "Santos";
$name1 = 50;
$name2 = 'Jorge $sobrenome';

class Client {
    public function __construct(public string $name) {
        echo $this->name;
    }
}

function execute(mixed $parameter): void {
    
}

$archive = fopen("./variables.php", "a+");

echo gettype($archive);
echo "<br/>";
echo get_debug_type($archive);
