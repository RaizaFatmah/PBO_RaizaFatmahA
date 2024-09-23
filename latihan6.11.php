<?php
class BangunRuang {
    private $sisi;
    private $jariJari;
    private $tinggi;
 
    // Setter untuk semua properti
    public function setSisi($sisi) {
        $this->sisi = $sisi;
    }
 
    public function setJariJari($jariJari) {
        $this->jariJari = $jariJari;
    }
 
    public function setTinggi($tinggi) {
        $this->tinggi = $tinggi;
    }
 
    // Getter untuk semua properti
    public function getSisi() {
        return $this->sisi;
    }
 
    public function getJariJari() {
        return $this->jariJari;
    }
 
    public function getTinggi() {
        return $this->tinggi;
    }
 
    // Fungsi untuk menghitung volume bola
    public function volumeBola() {
        return (4/3) * pi() * pow($this->getJariJari(), 3);
    }
 
    // Fungsi untuk menghitung volume kerucut
    public function volumeKerucut() {
        return (1/3) * pi() * pow($this->getJariJari(), 2) * $this->getTinggi();
    }
 
    // Fungsi untuk menghitung volume limas segi empat
    public function volumeLimasSegiEmpat() {
        return (1/3) * pow($this->getSisi(), 2) * $this->getTinggi();
    }
 
    // Fungsi untuk menghitung volume kubus
    public function volumeKubus() {
        return pow($this->getSisi(), 3);
    }
 
    // Fungsi untuk menghitung volume tabung
    public function volumeTabung() {
        return pi() * pow($this->getJariJari(), 2) * $this->getTinggi();
    }
}
 
// Data bangun ruang
$bangunRuangData = [
    ['nama' => 'Bola', 'sisi' => 0, 'jariJari' => 7, 'tinggi' => 0],
    ['nama' => 'Kerucut', 'sisi' => 0, 'jariJari' => 14, 'tinggi' => 10],
    ['nama' => 'Limas Segi Empat', 'sisi' => 8, 'jariJari' => 0, 'tinggi' => 24],
    ['nama' => 'Kubus', 'sisi' => 30, 'jariJari' => 0, 'tinggi' => 0],
    ['nama' => 'Tabung', 'sisi' => 0, 'jariJari' => 7, 'tinggi' => 10]
];
 
// Membuat objek dari kelas BangunRuang
$bangunRuang = new BangunRuang();
 
// Tabel hasil
echo "<table border='1' cellpadding='10'>";
echo "<tr><th>Jenis Bangun Ruang</th><th>Sisi</th><th>Jari-jari</th><th>Tinggi</th><th>Volume</th></tr>";
 
foreach ($bangunRuangData as $data) {
    $bangunRuang->setSisi($data['sisi']);
    $bangunRuang->setJariJari($data['jariJari']);
    $bangunRuang->setTinggi($data['tinggi']);
    
    // Hitung volume berdasarkan jenis bangun ruang
    switch ($data['nama']) {
        case 'Bola':
            $volume = $bangunRuang->volumeBola();
            break;
        case 'Kerucut':
            $volume = $bangunRuang->volumeKerucut();
            break;
        case 'Limas Segi Empat':
            $volume = $bangunRuang->volumeLimasSegiEmpat();
            break;
        case 'Kubus':
            $volume = $bangunRuang->volumeKubus();
            break;
        case 'Tabung':
            $volume = $bangunRuang->volumeTabung();
            break;
    }
    
    // Tampilkan hasil dalam tabel
    echo "<tr>
        <td>{$data['nama']}</td>
        <td>{$data['sisi']}</td>
        <td>{$data['jariJari']}</td>
        <td>{$data['tinggi']}</td>
        <td>" . number_format($volume, 10) . "</td>
    </tr>";
}
 
echo "</table>";
?>