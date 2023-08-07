<?php

require('../Class/class_perhitungan.php');

// Object adalah instance dari class. Jika class secara umum mepresentasikan (template) 
// sebuah object, sebuah instance adalah representasi nyata dari class itu sendiri.
//instansiasi class persegi
$hitung = new perhitungan();
 

//memanggil method luas dari luas persegi
// echo $hitung->luas_persegi(4);
 
//memanggil method warna_kulit dari luas segitiga
echo $hitung->luas_segitiga(12, 5);

//memanggil method warna_kulit dari luas persegi panjang
// echo $hitung->luas_persegipanjang(6, 9);

?>




