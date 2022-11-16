<?php

include "koneksi.php";
$id_barang=$_POST['id_barang'];
$nama_barang=$_POST['nama_barang'];
$jenis_barang=$_POST['jenis_barang'];
$harga_barang=$_POST['harga_barang'];
$stok=$_POST['stok'];
$barang_terjual=$_POST['barang_terjual'];
$tanggal_penjualan=$_POST['tanggal_penjualan'];
$nomor_barang=$_POST['nomor_barang'];

$ubah=$koneksi->query("update barang set nama_barang='$nama_barang', jenis_barang='$jenis_barang', harga_barang='$harga_barang', stok='$stok', barang_terjual='$barang_terjual', tanggal_penjualan='$tanggal_penjualan', nomor_barang='$nomor_barang' where id_barang='$id_barang'");

if($ubah==true){

    header("location:tampil_profil.php?pesan=editBerhasil");
} else{
    echo"Error";
}



?>