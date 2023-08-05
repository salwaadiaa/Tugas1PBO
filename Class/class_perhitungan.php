<?php

// Class adalah prototype, atau blueprint, atau rancangan yang mendefinisikan 
// variable dan method-methode pada seluruh objek tertentu. Class berfungsi untuk menampung isi 
// dari program yang akan di jalankan, di dalamnya berisi atribut / type data dan method 
// untuk menjalankan suatu program.


//Membuat Class
class perhitungan{

    //property
    var $sisi;
    var $panjang;
    var $lebar;
    var $alas;
    var $tinggi;
    var $hasil;
    
    // Method merupakan suatu operasi berupa fungsi-fungsi yang dapat dikerjakan 
    // oleh suatu object. Method didefinisikan pada class akan tetapi dipanggil melalui object.
    //method
    function luas_persegi($sisi){
        $hasil=$sisi * $sisi;;
        return "Hasil Luas Persegi : ".$hasil."<br>";
    }
    
    
    // function keliling_persegi($sisi){
    //     $hasil=$sisi+$sisi+$sisi+$sisi;
    //     return "Hasil Keliling Persegi : ".$hasil."<br>";
    // }
    function luas_segitiga ($alas, $tinggi){
        $hasil=1/2 * $alas * $tinggi;
        return "Hasil Luas Segitiga : ".$hasil."<br>";
    }
    
    // function keliling_segitiga($sisi1, $sisi2, $sisi3){
    //     $hasil=$sisi1+$sisi2+$sisi3;
    //     return "Hasil Keliling Segitiga : ".$hasil."<br>";
    // }

    function luas_persegipanjang ($panjang, $lebar){
        $hasil= $panjang * $lebar;
        return "Hasil Luas Persegi Panjang : ".$hasil."<br>";
    }
    
}
?>