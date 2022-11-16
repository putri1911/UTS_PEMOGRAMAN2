<!doctype html>
<html>
<head>
        <tittle><center>ISI DATA DI BAWAH INI</tittle></center>

<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
    <body>
        <div class="container">
        <div class="row">
        <div class="col-md-12">

         <form action="proses-input.php" method="post">
            <div class="form-group">
                 <label for="nim"><b>Id Barang</b></label>
                <Input type="text" name="id_barang" class="form-control">
            </div>
            <div class="form-group">
                <label for="nim"><b>Nama Barang</b></label>
                <Input type="text" name="nama_barang" class="form-control">
            </div>
            <div class="form-group">
                <label for="nama"><b>Jenis Barang</b></label>
                <Input type="text" name="jenis_barang"class="form-control">
            </div>
            <div class="form-group">
                <label for="nama"><b>Harga Barang</b></label>
                <Input type="text" name="harga_barang"class="form-control">
            </div>
            <div class="form-group">
                <label for="nama"><b>Stok Barang</b></label>
                <Input type="text" name="stok"class="form-control">
            </div>
            <div class="form-group">
                <label for="nama"><b>Barang Terjual</b></label>
                <Input type="text" name="barang_terjual"class="form-control">
            </div>
            <div class="form-group">
                <label for="nama"><b>Tanggal Penjualan</b></label>
                <Input type="date" name="tanggal_penjualan"class="form-control">
            </div>
            <div class="form-group">
                <label for="nama"><b>Nomor Barang</b></label>
                <Input type="text" name="nomor_barang"class="form-control">
            </div>

            <input type="submit" name="kirim" value="SIMPAN" class="btn btn-info">
            <input type="reset" name="kosongkan" value="KOSONGKAN"class="btn btn-danger">
          
        </form>
</div></div></div>
<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>