<!doctype html>
<html>
<head>
        <tittle> </tittle>

<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
    <body>
        <div class="container">
        <div class="row">
        <div class="col-md-12">

         <form action="proses-edit.php" method="post">
             <?php
             $id=$_GET['id'];
                include "koneksi.php";
                $tampil=$koneksi->query("select * from barang where id_barang='$id'");
                $row=$tampil->fetch_assoc();
             ?>
            <div class="form-group">
                 <label for="Id_Barang"><b>Id Barang</b></label>
                <Input type="text" name="id_barang" value="<?php echo$row['id_barang']?>"class="form-control">
            </div>
            <div class="form-group">
                <label for="Nama_Barang"><b>Nama Barang</b></label>
                <Input type="text" name="nama_barang" value="<?php echo$row['nama_barang']?>"class="form-control">
            </div>
            <div class="form-group">
                <label for="Jenis_Barang"><b>Jenis Barang</b></label>
                <Input type="text" name="jenis_barang" value="<?php echo$row['jenis_barang']?>"class="form-control">
            </div>
            <div class="form-group">
                <label for="Harga_Barang"><b>Harga Barang</b></label>
                <Input type="text" name="harga_barang" value="<?php echo$row['harga_barang']?>"class="form-control">
            </div>
            <div class="form-group">
                <label for="Stok"><b>Stok Barang</b></label>
                <Input type="text" name="stok" value="<?php echo$row['stok']?>"class="form-control">
            </div>
            <div class="form-group">
                <label for="Barang_Terjual"><b>Barang Terjual</b></label>
                <Input type="text" name="barang_terjual" value="<?php echo$row['barang_terjual']?>"class="form-control">
            </div>
            <div class="form-group">
                <label for="Tanggal_Penjualan"><b>Tanggal Penjualan</b></label>
                <Input type="date" name="tanggal_penjualan" value="<?php echo$row['tanggal_penjualan']?>"class="form-control">
            </div>
            <div class="form-group">
                <label for="nomor_barang"><b>Nomor barang</b></label>
                <Input type="text" name="nomor_barang" value="<?php echo$row['nomor_barang']?>"class="form-control">
            </div>

            <input type="submit" name="kirim" value="UBAH" class="btn btn-info">
            <input type="reset" name="kosongkan" value="KOSONGKAN"class="btn btn-danger">
            
        </form>
</div></div></div>
<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>