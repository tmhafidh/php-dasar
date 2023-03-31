<?php

$nama = "Hafidh";
$nama = null;

$age = null;


echo "Nama : ";
echo $nama;
echo "\n";

echo "Age : ";
echo $age;
echo "\n";

//cek apalah data kosong
echo "Is Name Null: :";
var_dump(is_null($nama));

//cek apakah ada variabel

$contoh = "Hafidh";
unset($contoh); //unset untuk menghapus variable

$contoh = "siapa";

var_dump(isset($contoh)); //isset untuk mengecek variabel ada atau tidak
