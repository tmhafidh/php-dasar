<?php

for ($counter = 1; $counter <= 10; $counter++) {
    echo "Ini adalah for loop Ke-$counter" . PHP_EOL;
}

echo "=================" . PHP_EOL;

for ($counter = 10; $counter >= 1; $counter--) {
    echo "Ini adalah for loop Ke-$counter" . PHP_EOL;
}

echo "=================" . PHP_EOL;

for ($counter = 1; $counter <= 10; $counter++) :
    echo "Ini adalah for loop Ke-$counter" . PHP_EOL;
endfor;

echo "=================" . PHP_EOL;

for ($counter = 10; $counter >= 1; $counter--) :
    echo "Ini adalah for loop Ke-$counter" . PHP_EOL;
endfor;
