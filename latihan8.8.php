<?php
class manusia{
    protected $nama="Raiza";
    var $kelas = "SI 2A";
 
    private function nama(){
        return "nama : ".$this->nama;
    }
    public function tampilkan_nama(){
        return $this->nama();
    }
    protected function tampilkan_kelas(){
        return "kelas: ".$this->kelas;
    }
 
}
$manusia = new manusia();
echo "nama :".$manusia->tampilkan_nama()."<br/>";
echo "Kelas: ".$manusia->tampilkan_kelas()."<br/>";
?>