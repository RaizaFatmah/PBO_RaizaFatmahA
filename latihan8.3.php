<?php
class manusia{
    //property
    var $nama;
    var $warna;
    //method construct di jalankan pertama kali
    function __construct(){
        echo "ini adalah isi method construct <br/>";
    }
    //method destruct di jalanakan terakhir 
    function __destruct(){
        echo "ini adalah isi method destruct <br/>";
    }
    //method manusia
    function tampilkan_nama(){
        return "Nama saya mahasiswa SI <br/>";
    }
}
//instalasi class manusia 
$manusia = new manusia();

//memanggil method tampilkan_nama dari class manusia
echo $manusia->tampilkan_nama();
?>