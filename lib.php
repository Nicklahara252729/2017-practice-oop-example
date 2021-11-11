<?php
class sistem{
    public $host="localhost";
    public $user="root";
    public $pass="satusampe250599";
    public $db="2016_web_native_siswa";
    function koneksi(){
        mysql_connect($this->host, $this->user, $this->pass);
        mysql_select_db($this->db);
    }
    function tampil(){
        $sql=mysql_query("select * from tb_siswa");
        while ($r=mysql_fetch_array){
            $hasil[]=$r;
            return $hasil;
        }
    }
}
?>