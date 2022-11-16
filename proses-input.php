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

$simpan=$koneksi->query("insert into barang(id_barang,nama_barang,jenis_barang,harga_barang,stok,barang_terjual,tanggal_penjualan) 
                        values('$id_barang','$nama_barang','$jenis_barang','$harga_barang','$stok','$barang_terjual','$tanggal_penjualan','$nomor_barang')");



if($simpan==true){

    header("location:tampil_profil.php?pesan=inputBerhasil");
} else {
    echo "Error";
}


?>