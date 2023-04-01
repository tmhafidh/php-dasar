<?php

$counter = 1;

while ($counter <= 10) {
    echo "Ini adalah While loop Ke-$counter" . PHP_EOL;
    $counter++;
}

$counter = 1;
while ($counter <= 10) :
    echo "Ini adalah While loop Ke-$counter" . PHP_EOL;
    $counter++;
endwhile;
