<?php
class mobil {
//ini adalah atribut/properties dari mobilvar
var $jumlahRoda=4;
var $warna="Merah";
var $bahanBakar="Pertamax";
var $harga=120000000;
var $merek='A';


//deklarasi method
public function statusHarga()
{
    if ($this->harga > 50000000) $status = 'Mahal';
    else $status = 'Murah';
    return $status;
}
} 