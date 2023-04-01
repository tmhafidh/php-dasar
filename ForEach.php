<?php


// Array biasa

$names = ["Hafidh", "Azman", "Fatah"];

for ($i = 0; $i < count($names); $i++) {
    echo "Data ke $i = $names[$i]" . PHP_EOL;
}


// for each loop

$names = ["Hafidh", "Azman", "Fatah"];

foreach ($names as $name) {
    echo "Data $name" . PHP_EOL;
}

// for each map

$person = [
    "first_name" => "Hafidh",
    "middle_name" => "Rafif",
    "last_name" => "udah"
];

foreach ($person as $key => $value) {
    echo "$key : $value" . PHP_EOL;
}
