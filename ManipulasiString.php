<?php

$name = "Teuku Muhammad Hafidh Rafif";

echo "Name : " . $name . PHP_EOL;
echo "Value = " . 100 . PHP_EOL;


$valueString = (string)100;
var_dump($valueString);

$valueInt = (int)"100";
var_dump($valueInt);

$valueFloat = (float)"10.10";
var_dump($valueFloat);


$name = "Afi";
echo $name[0] . PHP_EOL;
echo $name[1] . PHP_EOL;
echo $name[2] . PHP_EOL;


echo "Hello $name, Selamat Belajar!" . PHP_EOL;
echo "This is  {$name}'s, Selamat Belajar!" . PHP_EOL;
