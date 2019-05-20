<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
 $nama_barang=$_POST['nama_barang'];
 $unit=$_POST['unit'];
 $harga=$_POST['harga'];
 $jumlah=$_POST['jumlah'];
 $q=mysqli_query($con,"INSERT INTO `pembelian` (`nama_barang`,`unit`,`harga`,`jumlah`) VALUES ('$nama_barang','$unit','$harga','$jumlah')");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>