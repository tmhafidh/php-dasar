<?php

goto a;
echo "Hello Word!" . PHP_EOL;


a:
echo "Hello A" . PHP_EOL;


// goto complex

$counter = 1;

while (true) {
    echo "Ini adalah While loop Ke-$counter" . PHP_EOL;
    $counter++;

    if ($counter > 10) {
        goto end;
    }
}

end:
echo "End Loop";
