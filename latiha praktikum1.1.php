<?php
class handphone {
    //property untuk class handphone 
    var $pemilik;
    var $merk;
    var $ukuran_layar;

    //method untuk class handphone
    function hidupkan() {
        return "Hidupkan";
    }
    function matikan() {
        return "Matikan";
    }
}

//objek dari class handphone instalasi
$handphone_raiza = new handphone();

//set property
$handphone_raiza->pemilik="Raiza";
$handphone_raiza->merk="Samsung";
$handphone_raiza->ukuran_layar="6,5 inchi";

//tampilkan property
echo $handphone_raiza->pemlik;
echo "<br />";
echo $handphone_raiza->merk;
echo "<br />";
echo $handphone_raiza->ukuran_layar;
echo "<br />";

//tampilkan method
echo $handphone_raiza->hidupkan();
echo "<br />";
echo $handphone_raiza->matikan();
?>