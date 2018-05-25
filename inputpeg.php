   <?php
	
 if (isset($_POST['submit'])) {
  require_once("koneksi.php");
  $sql = $conn->prepare("INSERT INTO pegawai (nip,nm_pegawai,jk,tpt_lhr,tgl_lhr,agama,no_hp,email,alamat,tgl_msk) VALUES (?, ?, ?)"); 
  $nip=$_POST['nip'];
  $nm_pegawai=$_POST['nm_pegawai'];
  $jk= $_POST['jk'];
  $tpt_lhr= $_POST['tpt_lhr'];
  $tgl_lhr= $_POST['tgl_lhr'];
  $agama= $_POST['agama'];
  $no_hp= $_POST['no_hp'];
  $email= $_POST['email'];
  $tgl_msk= $_POST['tgl_msk'];
  $sql->bind_param("sss", $nip, $nm_pegawai, $jk , $tpt_lhr , $tgl_lhr , $agama , $no_hp , $email , $alamat , $tgl_msk); 
  if($sql->execute()) {
   $success_message = "Input Data Berhasil";
  } else {
   $error_message = "Ada masalah dengan Penginputan";
  }
  $sql->close();   
  $conn->close();
 } 
 
?>
<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css" />
 
<style>
.tbl-qa{border-spacing:0px;border-radius:4px;border:#6ab5b9 1px solid;}
</style>
  <title>Input Data Pegawai</title>  
</head>
<body>
<?php if(!empty($success_message)) { ?>
<div class="success message"><?php echo $success_message; ?></div>
<?php } if(!empty($error_message)) { ?>
<div class="error message"><?php echo $error_message; ?></div>
<?php } ?>
<form id="frmUser" method="post" action="">
<div class="button_link"><a href="tampilkaryawan.php"> List Pegawai </a></div>
<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tbl-qa">
 <thead>
  <tr>
   <th colspan="2" class="table-header">Input Data Pegawai</th>
  </tr>
 </thead>
 <tbody>
  <tr class="table-row">
   <td><label>nip</label></td>
   <td><input type="text" name="nip" class="txtField"></td>
  </tr>
  <tr class="table-row">
   <td><label>nm_pegawai</label></td>
   <td><input type="text" name="np_pegawai" class="txtField"></td>
  </tr>
  <tr class="table-row">
   <td><label>jk</label></td>
   <td><input type="text" name="jk" class="txtField"></td>
  </tr><tr class="table-row">
   <td><label>tpt_lhr</label></td>
   <td><input type="text" name="tpt_lhr" class="txtField"></td>
  </tr>
  <tr class="table-row">
   <td><label>tgl_lhr</label></td>
   <td><input type="text" name="tgl_lhr" class="txtField"></td>
  </tr><tr class="table-row">
   <td><label>agama</label></td>
   <td><input type="text" name="agama" class="txtField"></td>
  </tr><tr class="table-row">
   <td><label>no_hp</label></td>
   <td><input type="text" name="no_hp" class="txtField"></td>
   <tr class="table-row">
   <td><label>email</label></td>
   <td><input type="text" name="email" class="txtField"></td>
   <tr class="table-row">
   <td><label>alamat</label></td>
   <td><input type="text" name="alamat" class="txtField"></td>
  </tr><tr class="table-row">
   <td><label>tgl_msk</label></td>
   <td><input type="text" name="tgl_msk" class="txtField"></td>
  </tr>
  </tr>
  </tr>

  <tr class="table-row">
   <td colspan="2"><input type="submit" name="submit" value="Submit" class="demo-form-submit"></td>
  </tr>
 </tbody>
</table>
</form>
</body>
</html>
  
