<?php

$counter = 1;

while (true) {
    echo "Ini adalah While loop Ke-$counter" . PHP_EOL;
    $counter++;

    if ($counter > 10) {
        break;
    }
}
