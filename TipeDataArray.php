<?php

$values = array(1, 2, 3, 4, 5);
var_dump($values);

$angka = ["satu", "dua", "tiga"];
var_dump($angka);

var_dump($angka[0]); //ambil data berdasarkan urutan;


$angka[0] = "satu-edit"; //ubah data di array
var_dump($angka);

unset($angka[1]); //hapus data pada array
var_dump($angka);

$angka[] = "empat";
var_dump($angka);


var_dump(count($angka));



//membuat map

$mhs = array(
    "nim" => 180170054,
    "name" => "Hafidh",
    "age" => 23,
    "address" => array(
        "city" => "Lhokseumawe",
        "country" => "Indonesia"
    )
);
var_dump($mhs);


var_dump($mhs["name"]); //ambil data
var_dump($mhs["address"]["city"]); //akses data array dalam array


$data = [
    "nik" => 128202802101,
    "name " => "Cimoy",
    "jenis" => "kucing",
    "address" => [
        "city" => "Lhokseumawe",
        "country" => "Indonesia"
    ]
];
var_dump($data);
