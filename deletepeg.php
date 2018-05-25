<?php
  include "koneksi.php";  
  $query="delete from pegawai where nip = '$_GET[nip]'";
    if($conn->query($query))  {
      header("location:menutampilkaryawan.php");
    } else {
      echo "data tidak terhapus";
    }
  $mysqli->close();
?>