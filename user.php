<?php

$array = Array (
    "0" => Array (
        "id" => "1",
        "name" => "Ariana Grande",
        "address" => "Tulungagung",
        "hobby" => "berenang"
    ),
    "1" => Array (
        "id" => "2",
        "nama" => "Billie Eilish",
        "address" => "Pasuruan",
        "hobby" => "bersepeda"

    ),
    "2" => Array (
        "id" => "3",
        "nama" => "Justin Bieber",
        "address" => "Malang",
        "hobby" => "menulis"

    ),
    "3" => Array (
        "id" => "4",
        "nama" => "Camilla Cabello",
        "address" => "malang",
        "hobby" => "olahraga"

    ),
    "4" => Array (
        "id" => "5",
        "nama" => "Shawn Mendes",
        "address" => "Madura",
        "hobby" => "membaca"

    ),
    "5" => Array (
        "id" => "6",
        "nama" => "Park Chanyeol",
        "address" => "Sidoarjo",
        "hobby" => "makan"

    )
);

$json = json_encode(array('siswa' => $array));
 
echo $json;
?>