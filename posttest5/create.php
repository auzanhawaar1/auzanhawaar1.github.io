<?php 
   include('koneksi.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>CREATE</title>
</head>

<body>
   <a href="read.php">KEMBALI KE READ</a>

   <H1>CREATE</H1>
   <form action="" method="POST">
      <table>
         <tr>
            <th>Nama Barang</th>
            <td><input type="text" name="nama"></td>
         </tr>
         <tr>
            <th>Harga Barang</th>
            <th><input type="text" name="harga"></th>
         </tr>
         <tr>
            <th>Jenis Barang</th>
            <th><input type="text" name="jenis"></th>
         </tr>
         <tr>
            <th>Stock Barang</th>
            <th><input type="text" name="stock"></th>
         </tr>
      </table>
      <input type="submit" name="submit">
   </form>
   <?php 
      if(isset($_POST['submit'])){
         $nama = $_POST['nama'];
         $harga = $_POST['harga'];
         $jenis = $_POST['jenis'];
         $stock = $_POST['stock'];

         $create = mysqli_query($conn,"INSERT INTO basket VALUES(
            null,
            '".$nama."',
            '".$harga."',
            '".$jenis."',
            '".$stock."'
         )");

         if($create){
            ?>
            <script>
            alert("data berhasil ditambahkan");
            window.location=('read.php');
         </script>
            <?php
         } else {
            echo "gagal" . mysqli_error($conn);
         }
      }
   ?>

</body>

</html>