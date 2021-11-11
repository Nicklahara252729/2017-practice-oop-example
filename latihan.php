<?php
class nilai{
    private $tugas;
    private $uts;
    private $uas;
function __construct(){
        $this->tugas=0;
        $this->uts=0;
        $this->uas=0;
        echo"Construct : nilai properti tugas, uts, dan uas diset 0 <br> <br>";
    }
    function settugas($nilai){
        if(($nilai<=100)&&($nilai>=0))
            $this->tugas=$nilai;
    }
    function setuts($nilai){
        if(($nilai<=100)&&($nilai>=0))
            $this->uts=$nilai;
    }
    function setuas($nilai){
        if(($nilai<=100)&&($nilai>=0))
            $this->uas=$nilai;
    }
    function gettugas(){
        return $this->tugas;
    }
    function getuts(){
        return $this->uts;
    }
    function getuas(){
        return $this->uas;
    }
    function getna(){
        $nilaiakhir=0.2*$this->tugas+0.3*$this->uts+0.5*$this->uas;
        if(($nilaiakhir>=91)&&($nilaiakhir<=100))
            echo"nilai anda A <br>";
        if(($nilaiakhir>=81)&&($nilaiakhir<=90))
            echo"nilai anda B <br>";
        if(($nilaiakhir>=71)&&($nilaiakhir<=80))
            echo"nilai anda C <br>";
        if(($nilaiakhir>=61)&&($nilaiakhir<=70))
            echo"nilai anda D <br>";
        if(($nilaiakhir>=0)&&($nilaiakhir<=60))
            echo"nilai anda E <br>";
        return $nilaiakhir;
    }
    
    function tampil(){
        echo"nilai tugas :".$this->tugas.
            "<br>nilai uts :".$this->uts.
            "<br>nilai uas :".$this->uas.
            "<br>nilai akhir :".$this->getna()."<br>";
    }
    function __destruct(){
        echo"<br><br> Destructor : nilai tugas, uts, dan uas dihapus dari memory<br>";
    }
}

$nilai=new nilai();
$nilai->settugas(74);
//echo"nilai tugas sekarang :".$nilai->gettugas()."<br>";
$nilai->setuts(50);
$nilai->setuas(100);
$nilai->tampil();

/*$nilai->setuas(110);
$nilai->tampil();
echo"nilai akhir :".$nilai->getna();*/
?>