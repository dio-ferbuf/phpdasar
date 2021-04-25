<?php
    // Convert tipe data
    // bisa pake (*) atau casting

    // Casting
    $a = 12;
    $b = "13";
    echo $a + $b . "<br>";
    // Menghapus variabel yg sudah tak terpakai    
    $a = 12;
    $b = "13 tahun";    
    echo $a + (int) $b . "<br>";
    $d = 12.8;
    // Pembulatan di php itu kebawah
    // Jadi kalau nilai 12.8 jadi 12 dan 12.2 jadi 12 juga
    $result = (int) $d;    
    echo "result: " . $result . "<br>"; // Hasil (12)

    // Operator (*)
    // Jadi operator kali (*) adalah operator untuk perkalian
    // sekaligus casting tipe data
    $c = "12";    
    $c *= 2;
    echo $c;
?>