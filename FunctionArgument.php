<?php

// function sayHello($name)
// {
//     echo "Hello $name" . PHP_EOL;
// }

// sayHello("Hafidh");
// sayHello("Azman");

// Defaul Value

function sayHello($name = "Anonymous")
{
    echo "Hello $name" . PHP_EOL;
}

sayHello("Hafidh");
sayHello("Azman");
sayHello("");


function sum(int $first, int $last)
{
    $total = $first + $last;
    echo "Total $first + $last = $total" . PHP_EOL;
}

sum(100, 100);
sum("100", "100");
sum(true, false);


function sumAll(...$values)
{
    $total = 0;
    foreach ($values as $value) {
        $total += $value;
    }
    echo "Total" . implode(",", $values) . " = Total" . PHP_EOL;
}

$values = [1, 2, 3, 4, 5];

sumAll(1, 2, 3, 4, 5);
sumAll(...$values);
