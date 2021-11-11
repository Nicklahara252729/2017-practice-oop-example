<?php
/*class orang {
    public $nama;
    public $umur;
    function berbicara(){
        echo " hello ! nama saya adalah $this->nama";
    }
    function statususia(){
        if ($this -> umur >=17)
            echo $status ='dewasa';
        else
            echo $status = 'dibawah umur';
        return $status;
    }
}
$objorang= new orang();
$objorang->nama ='nick';
$objorang->umur =1;
$objorang->berbicara();
echo"<br>";
$objorang->statususia();
echo"nama : $objorang->nama<br>";
echo"umur : $objorang->umur Tahun<br> <br>";*/

class nick_kendaraan{
    public $roda;
    public $warna;
    public $bahan_bakar;
    public $merek;
    public $tahun_produksi;
    function nama_kendaraan(){
        echo"nama kendaraan ini adalah $this->nama";
    }
    function jumlah_roda(){
        echo"jumlah rodanya adalah $this->roda";
    }
    function n_color(){
        if($this->roda==2 )
            echo"warnanya adalah : <b>$this->warna</b>";
        else if($this->roda==3 )
            echo"warnanya adalah : <b>$this->warna</b>";
        else if($this->roda==4 )
            echo"warnanya adalah : <b>$this->warna</b>";
        else
            echo"warna : tidak ada";
    }
    function n_merek_kendaraan(){
        if($this -> roda ==2)
            echo"mereknya adalah : <b>$this->merek</b>";
        else if($this -> roda ==3)
            echo"mereknya adalah : <b>$this->merek</b>";
        else if($this -> roda ==4)
            echo"mereknya adalah : <b>$this->merek</b>";
        else
            echo"merek : tidak terdefinisi";
    }
    function n_keluaran(){
        if($this -> roda==2)
            echo"tahun produksi : <b>$this->tahun_produksi</b>";
        else if($this -> roda ==3)
            echo"tahun produksi : <b>$this->tahun_produksi</b>";
        else if($this -> roda ==4)
            echo"tahun produksi : <b>$this->tahun_produksi</b>";
        else 
            echo"tahun produksi : tidak terdefinisi";
    }
    function n_nama(){
        if($this->roda==3)
            echo"ini <b>becak</b>";
        else if($this->roda==2)
            echo"ini <b>sepeda motor</b>";
        else if($this->roda==4)
            echo"ini <b>mobil</b>";
        else
            echo" kendaraan : tidak terdefinisi";
    }
    function n_makanan(){
        if($this -> roda==2)
            echo"bahan bakar yang digunakan : <b>$this->bahan_bakar</b>";
        else if($this -> roda ==3)
            echo"bahan bakar yang digunakan : <b>$this->bahan_bakar</b>";
        else if($this -> roda ==4)
            echo"bahan bakar yang digunakan : <b>$this->bahan_bakar</b>";
        else 
            echo"bahan bakar : tidak ada";
    }
}
$panggil_kendaraan = new nick_kendaraan();

$panggil_kendaraan->roda=7;
$panggil_kendaraan->warna='biru' ;
$panggil_kendaraan->merek='yamaha' ;
$panggil_kendaraan->bahan_bakar='pertalite' ;
$panggil_kendaraan->tahun_produksi='1999' ;
$panggil_kendaraan->bahan_bakar='premium' ;

$panggil_kendaraan->n_nama();
echo"<br>";
$panggil_kendaraan->n_color();
echo"<br>";
$panggil_kendaraan->n_keluaran();
echo"<br>";
echo"jumlah roda : <b>$panggil_kendaraan->roda</b><br>";
//echo"warna kendaraan : $panggil_kendaraan->warna <br>";
$panggil_kendaraan->n_merek_kendaraan();
echo"<br>";
$panggil_kendaraan->n_makanan();
?>