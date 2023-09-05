<?php

class Guru_model
{
    private $guru = [
        [
            "nama" => "Bu Fikrotu",
            "jurusan" => "Rekayasa Perangkat Lunak",
            "pelajaran" => "Pemrograman Web dan Perangkat Bergerak",
        ],
        [
            "nama" => "Pak Labib",
            "jurusan" => "Rekayasa Perangkat Lunak",
            "pelajaran" => "PKWU",
        ],
        [
            "nama" => "Bu Estri",
            "jurusan" => "Rekayasa Perangkat Lunak",
            "pelajaran" => "Pemrograman Berorientasi Object",
        ],
        [
            "nama" => "Pak Ivan",
            "jurusan" => "Rekayasa Perangkat Lunak",
            "pelajaran" => "Basis Data",
        ]
    ];

    public function getDataGuru()
    {
        return $this->guru;
    }
}
