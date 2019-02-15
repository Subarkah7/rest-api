<?php

$mahasiswa = [
    [ 
        "nama" => "subarkah",
        "nim"  => "16523221",
        "umur" => 21
    ],
    [ 
        "nama" => "isti",
        "nim"  => "16523221",
        "umur" => 18
    ]
];

$data = json_encode($mahasiswa);
echo $data;

?>