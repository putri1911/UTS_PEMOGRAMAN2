<!doctype html>
<html>
<head>
    <tittle> </tittle>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="DataTables/datatables.min.css" rel="stylesheet">

</head>
    <body>
        <div class="container">
        <div class="row">
        <div clas="col-md-12">
        <h1> Data Barang</h1>
<?php

if(@$_GET['pesan']=="inputBerhasil"){


?>
<div class="alert alert-success">
    Penyimpanan Berhasil!
</div>

<?php
}
?>
        <?php

        if(@$_GET['pesan']=="hapusBerhasil"){


        ?>
        <div class="alert alert-success">
            Data Berhasil DiHapus!
        </div>

        <?php
        }
        ?>
        
                <?php

                if(@$_GET['pesan']=="editBerhasil"){


                ?>
                <div class="alert alert-success">
                    Perubahan Berhasil!
                </div>

                <?php
                }
                ?>

<table id="datatables" class="table table-bordered">
    <thead>
    <tr> 
        <td><center><b>id barang</center></td>
        <td> <center><b> nama barang</center></td> <td> <center><b>jenis barang</center></td>
        <td><center><b>harga barang</center></td> <td> <center><b>stok</center></td>
            <td><center><b>barang terjual</center></td> <td> <center><b>tanggal penjualan</center></td><td> <center><b>nomor barang</center></td>

        <th> 
            <a href="input.php">
                <button class="btn btn-info glyphicon glyphicon-plus"></button>
            </a>
        </th>
    </tr>
</thead>
<tbody>
<?php  
   include "koneksi.php";
   $sql=$koneksi->query("select * from barang order by id_barang  ASC");

   while($row= $sql->fetch_assoc()){
?>
   <tr>
         <td> <center> <?php echo $row['id_barang'] ?> </center> </td>
         <td> <center> <?php echo $row['nama_barang'] ?> </center> </td>
         <td> <center> <?php echo $row['jenis_barang'] ?> </center> </td>
         <td> <center> <?php echo $row['harga_barang'] ?> </center> </td>
         <td> <center> <?php echo $row['stok'] ?> </center> </td>
         <td> <center> <?php echo $row['barang_terjual'] ?> </center> </td>
         <td> <center> <?php echo $row['tanggal_penjualan'] ?> </center> </td>
         <td> <center> <?php echo $row['nomor_barang'] ?> </center> </td>
         <td>

         <a href="edit-profil.php?id=<?php echo $row['id_barang']?>">
                <button class="btn btn-xs btn-danger glyphicon glyphicon-edit"></button>
            </a>
        <a href="hapus.php?id=<?php echo $row['id_barang']?>" onclick="return confirm('anda yakin ingin menghapus data?')">
        <button class="btn btn-xs btn-warning glyphicon glyphicon-remove"></button>
            </a>

   </td>
   </tr>
<?php
 }
?>
</tbody>
</table>
</div> </div></div>
        <script src="bootstrap/js/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>

        <script src="DataTables/datatables.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function(){
                $('#datatables').DataTable();
            });
        </script>
        <a href="index.php" class="btn btn-primary">back </a>


</body>
</html>