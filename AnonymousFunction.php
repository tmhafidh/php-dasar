<?php


$sayHello = function (string $name) {
    echo "Hello $name" . PHP_EOL;
};

$sayHello("Hafidh");
$sayHello("Azman");


function sayGoodBye(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Good bye $finalName" . PHP_EOL;
}

sayGoodBye("Hafidh", function (string $name): string {
    return strtoupper($name);
});

echo "=================" . PHP_EOL;

$filterFunction = function (string $name): string {
    return strtoupper($name);
};

sayGoodBye("Hafidh", $filterFunction);


$firstName = "Hafidh";
$LastName = "Rafif";

$sayHelloHafidh = function () use ($firstName,  $LastName) {
    echo "Hello $firstName $LastName" . PHP_EOL;
};

$sayHelloHafidh();
