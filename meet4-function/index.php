<?php    
    // Funtion untuk Waktu
    // date() atur Waktu    
    // time() ambil waktu sejak 1 Januari 1970 ke waktu sekarang dalam bentuk detik
    // mktime() buat waktu sejak 1 Januari 1970 ke waktu yang ditentukan dalam bentuk detik
    // strotime() ambil waktu dari string

    echo date('l', mktime(0, 0, 0, 7, 5, 2003)) . '<br/>';            
    echo date('Y', strtotime('12 august 2003')) . '<br/>';

    // Function untuk String
    // strlen() menghitung panjang dari string
    // strcomp() membandingkan string
    // explode()

    $sentence = 'codeigniter';
    $lengthSentence = strlen($sentence);
    echo $lengthSentence . '<br/>';

    $word1 = 'yee9';
    $word2 = 'they';
    $compareWord = strcmp($word1, $word2);
    echo $compareWord . "<br/>";

    $sentence = "learn codeigniter with my friends";
    $result = explode(" ", $sentence);    
    foreach($result as $val){
        echo $val . "<br/>";
    }

    function day($name = "Anonymous",  $age = 12){
        return date('l', time()) . " $name" . " $age";
    }


    // Function untuk Utility = function bantuan    
    // var_dump() mengetahui isi dalam sebuah variabel'
    // isset() mengecek apakah suatu variabel telah dibuat atau belum
    // empty() mengecek apakah suatu variabel kosong atau tidak
    // die() memberhentikan program, code-code dibawah die() tidak akan berjalan
    // sleep() memberikan tenggang waktu pada program     
    
?>

<!-- 
    Urutan parameter bisa dibaca
    di documentasinya, tinggal hover saja
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
</head>
<body>
    <h1><?=  day("Hevin") ?></h1>
</body>
</html>
