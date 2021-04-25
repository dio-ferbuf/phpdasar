<?php

    // Function pengelola String
    // substr() sub string
    // strtolower() string to lowercase
    // strtoupper() string to uppercase
    // strlen() string length
    // strpos() string position : cari posisi string
    $sentence = 'Lorem ipsum doloipsum';

    // if (strpos($sentence, 'ipsumfgf')) {
    //     echo 'true';
    // } else {
    //     echo 'false';
    // }

    // Function pengelola mtk
    // round(value, presisi/berapa angka di belakang koma)  : membulatkan angka decimal
    // floor() pembulatan ke bawah
    // ceil() pembulatan ke atass
    // rand() random angka
    
    // Function pengelola array
    // array() ppembuat array
    // array_push() menambahkan array
    // sort()
    // rsort() reverse sort
    // join() dan implode() menggabungkan nilai dari index array menjadi satu kesatuan        
    
    $insects = ['Lebah', 'Nyamuk', 'Kelabang', 'Tawon'];
    $insects['Lebah'];
    echo implode(', ', $insects);
     
    sort($insects);
    // foreach ($insects as $val) {
    //     echo $val . ', ';        
    // }


    //  OOP

    class Human {
        public $name ="";
        public $age = "";       

        public function __construct($name, $age) {
            $this->name = $name;
            $this->age = $age;
        }

        public function checking(int $age){
            return $age;
        }
    }

    $rio = new Human('Mickey Mouse', 12);
    
    // cara akses variabel constanta harus dengan menggunakan (::)
    // Cara ini juga dilakukan untuk mengakses method/property yang static
    class Animal{
        const PI = 3.14;
        public static $name = 'Ant';

        public function introduction(){
            return self::$name;
        }
    }

    $elephant = new Animal();
    echo Animal::PI;

    // Function pemeriksaan
    // is_a() memeriksa apakah objek tersebut merupakan class yang dituju
    // property_exist() memeriksa apakah objek tersebut memiliki propert spt yg dimaksud
    // method_exist() memeriksa apakah objek tersebut memiliki method yang dimaksud

    $arr = [
        "noInduk" => "F123",
        'nama' => "Nazla Dio Hevin",
        "sekolah" => "SMKN 2 Klaten",
        "noData" => []
    ];
    

?>