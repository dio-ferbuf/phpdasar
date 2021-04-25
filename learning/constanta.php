<?php
    // Constanta tidak pake simbol dollar ($) didepannya
    // Constanta bisa dideklarasikan dengan:
    // const atau define($nama, $nilai);

    const LEGS = 2;
    define("OS", "Windows");

    // echo "My legs is $LEGS" Tidak bisa pakai ini
    echo "My legs is " .LEGS . "<br>";
    echo "My computer OS is ".OS."<br>";    
    
?>