<?php
class database{
    private $host="localhost";
    private $user="root";
    private $pass="";
    private $db="coba";
    
    function koneksi(){
        mysql_connect($this->host,$this->user,$this-pass,$this->db);
        mysql_select_db($this->db) or die ("database tidak ada");
    }
    
    function insert($nama, $alamat, $telp){
        $sql = mysql_query("insert into anggota set nama='$nama',alamat='$alamat', telepon='$telp'");
    }
    
    function tampil(){
        $sql = mysql_query("select * from anggota order by id");
        while ($row=mysql_fetch_array($sql))
            $data[]=$row;
        return $data;
    }
    
    function hapus($id_agt){
        $sql = mysql_query("delete from anggota where id='$id_agt'");
        echo"<p> data anggota dengan ID".$id_agt."sudah di hapus</p>";
    }
    
    function baca($field,$id_agt){
        $sql=mysql_query("select * from anggota where id='$id_agt'");
        $data = mysql_fetch_array($sql);
        if($field == 'nama')
            return $data['nama'];
        else if($field == 'alamat')
            return $data['alamat'];
        else if($field == 'telepon')
            return $data['telepon'];
    }
    
    function update($id_agt,$nama,$alamat,$telepon){
        $sql = mysql_query("update anggota set nama='$nama', alamat='$alamat', telepon='$telp'");
        echo"data sudah di update";
    }
}
?>