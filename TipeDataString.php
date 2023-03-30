<?php

echo 'Nama : ';
echo 'Teuku Muhammad Hafidh Rafif';
echo "\n";

echo "Nama :";
echo "Teuku\t Muahammad\t Hafidh\t Rafif\n";

echo <<<BEBAS
Jadi ini text untuk multi enter
bisa kebawah
enter lagi kebawah 
menggunakan heredoc

BEBAS;

echo <<<'BEBAS'
Jadi ini text untuk multi enter
bisa kebawah
enter lagi kebawah 
menggunakan nowdoc
BEBAS;
