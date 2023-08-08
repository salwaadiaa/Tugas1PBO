<?php

// Class adalah prototype, atau blueprint, atau rancangan yang mendefinisikan 
// variable dan method-methode pada seluruh objek tertentu. Class berfungsi untuk menampung isi 
// dari program yang akan di jalankan, di dalamnya berisi atribut / type data dan method 
// untuk menjalankan suatu program.


//Membuat Class
class perhitungan{

    //property
   var $bil1, $bil2, $bil3;

    function luas_persegi($bil1){
        $sisi=$bil1;
        $luas=$sisi*$sisi;
        return "sisi =" .$sisi. "<br> Luas =" .$sisi." x ".$sisi." <br> Hasil = ".$luas;
    }

    function luas_persegipanjang($bil1,$bil2){
        $panjang=$bil1;
        $lebar=$bil2;
        $luas=$panjang*$lebar;
        return "Panjang =" .$panjang."<br> Lebar =" .$lebar."<br> Luas =".$panjang." x ".$lebar." <br> Hasil =".$luas;
    }

    function luas_segitiga($bil1,$bil2){
        $alas=$bil1;
        $tinggi=$bil2;
        $luas=$alas*$tinggi/2;
        return "Alas =" .$alas."<br> Tinggi =" .$tinggi."<br> Luas =".$alas." x ".$tinggi.":2 <br> Hasil =".$luas;    
    }
    
}
?>