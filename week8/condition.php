<?php
    //switch

    $nilai = 90;

    // switch($nilai)
    // {
    //  case $nilai <=50 : $nilaiHuruf = "E";break;
    //  default            $nilaiHuruf = "A";break;
    // }

    $nilaiHuruf = match(true)
    {
        $nilai >= 85 => 'A',
        $nilai > 70 => 'B',
        $nilai > 60 => 'C',
        $nilai > 60 => 'D',
        $nilai <= 50 => 'E'
    };

    echo $nilaiHuruf;

    $hari = 'Selasa';

    $status = match($hari)
    {
        'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat' => 'Hari Kerja',
        'Sabtu', 'Minggu'                           => 'Weekend',
        default                                     => 'Nice Try'
    };

    echo $status;