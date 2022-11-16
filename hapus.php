<?php
$id=$_GET['id'];

include "koneksi.php";
$hapus=$koneksi->query("delete from barang where id_barang='$id'");

if($hapus==true){

    header("location:tampil_profil.php?pesan=hapusBerhasil");

}else{
    echo"Error"; 
}


?>