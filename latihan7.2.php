<?php
class Manusia {
    public $nama;
    public $umur;
    public $gender;

    function bicara() {
        echo "Selamat Datang<br/>";
    }

    function getInfo() {
        echo "Nama = " . $this->nama . "<br/>";
        echo "Umur = " . $this->umur . "<br/>";
        echo "JK = " . $this->gender . "<br/>";
    }
}

class Ayah extends Manusia {
    function pekerjaan() {
        echo "Pekerjaan = Pegawai Negeri Sipil<br/>";
    }
}

class Ibu extends Manusia {
    function pekerjaan() {
        echo "Pekerjaan = Ibu Rumah Tangga<br/>";
    }
}

class Anak extends Manusia {
    function pekerjaan() {
        echo "Pekerjaan = Pelajar<br/>";
    }
}

$objekAyah = new Ayah();
$objekAyah->nama = "Budi";
$objekAyah->gender = "Laki-Laki";
$objekAyah->umur = "45";
echo "<b>Info Ayah</b><br/>";
$objekAyah->getInfo();
$objekAyah->pekerjaan();

$objekIbu = new Ibu();
$objekIbu->nama = "Dini";
$objekIbu->gender = "Perempuan";
$objekIbu->umur = "38";
echo "<b>Info Ibu</b><br/>";
$objekIbu->getInfo();
$objekIbu->pekerjaan();

$objekAnak = new Anak();
$objekAnak->nama = "Ardi";
$objekAnak->gender = "Laki-Laki";
$objekAnak->umur = "15";
echo "<b>Info Anak</b><br/>";
$objekAnak->getInfo();
$objekAnak->pekerjaan();
?>
