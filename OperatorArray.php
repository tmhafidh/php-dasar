<?php

$first = [
    "first_name" => "Hafidh"
];

$last = [
    "first_name" => "Budi",
    "last_name" => "Rafif"
];

$full = $first + $last;

var_dump($full);

$a = [
    "first_name" => "Hafidh",
    "last_name" => "Rafif"
];

$b = [
    "last_name" => "Rafif",
    "first_name" => "Hafidh"
];

var_dump($a == $b);
var_dump($a === $b);
