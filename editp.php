<?php
 require_once("koneksi.php");
 if (isset($_POST['submit'])) {  
  $sql = $conn->prepare("UPDATE pegawai SET nip=? , nm_pegawai=? , jk=? , tpt_lhr=? , tgl_lhr=? , agama=? , no_hp=? email=? , alamat=? tgl_msk=?   WHERE nip=?");
  $nip=$_POST['nip'];
  $nm_pegawai= $_POST['nm_pegawai'];
  $jk= $_POST['jk'];
  $tpt_lhr= $_POST['tpt_lhr'];
  $tgl_lhr=$_POST['tgl_lhr'];
  $agama=$_POST['agama'];
  $no_hp=$_POST['no_hp'];
  $email=$_POST['email'];
  $alamat=$_POST['alamat'];
  $tgl_msk=$_POST['tgl_msk'];
  
  $sql->bind_param("ssss",$nip, $nm_pegawai, $jk, $tpt_lhr , $tgl_lhr , $agama , $no_hp , $email , $alamat , $tgl_msk, $_GET["nip"]); 
  if($sql->execute()) {
   $success_message = "Update Data Berhasil";
  } else {
   $error_message = "Ada masalah update data";
  }

 }
 $sql = $conn->prepare("SELECT * FROM pegawai WHERE nip=?");
 $sql->bind_param("s",$_GET["nip"]);   
 $sql->execute();
 $result = $sql->get_result();
 if ($result->num_rows > 0) {  
  $row = $result->fetch_assoc();
 }
 $conn->close();
?>
<html>
<head>

<style>
.tbl-qa{border-spacing:0px;border-radius:4px;border:#6ab5b9 1px solid;}
</style>
<title> edit </title>
</head>
<body>
<?php if(!empty($success_message)) { ?>
<div class="success message"><?php echo $success_message; ?></div>
<?php } if(!empty($error_message)) { ?>
<div class="error message"><?php echo $error_message; ?></div>
<?php } ?>
<form name="frmUser" method="post" action="">
<div class="button_link"></div>
<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tbl-qa">
 <thead>
  
  <tr>
   <th colspan="2" class="table-header">Edit Data Pegawai</th>
  </tr>
 </thead>
 <tbody>
  <tr class="table-row">
   <td><label>nip</label></td>
   <td><input type="text" name="NIP" class="txtField" value="<?php echo $row["nip"]?>"></td>
  </tr>

  <tr class="table-row">
   <td><label>nm_pegawai</label></td>
   <td><input type="text" name="nm_pegawai" class="txtField" value="<?php echo $row["nm_pegawai"]?>"></td>
  </tr>
  <tr class="table-row">
   <td><label>jk</label></td>
   <td><input type="text" name="jk" class="txtField" value="<?php echo $row["jk"]?>"></td>
    <tr class="table-row">
   <td><label>tpt
   </label></td>
   <td><input type="text" name="tpt_lhr" class="txtField" value="<?php echo $row["tpt_lhr"]?>"></td>
  </tr>
  <tr class="table-row">
   <td><label>tgl_lhr</label></td>
   <td><input type="text" name="tpt_lhr" class="txtField" value="<?php echo $row["tpt_lhr"]?>"></td>
  </tr>
  <tr class="table-row">
   <td><label>agama</label></td>
   <td><input type="text" name="agama" class="txtField" value="<?php echo $row["agama"]?>"></td>
    <tr class="table-row">
   <td><label>no_hp</label></td>
   <td><input type="text" name="no_hp" class="txtField" value="<?php echo $row["no_hp"]?>"></td>
  </tr>
  <tr class="table-row">
   <td><label>email</label></td>
   <td><input type="text" name="email" class="txtField" value="<?php echo $row["email"]?>"></td>
  </tr>
  <tr class="table-row">
   <td><label>alamat</label></td>
   <td><input type="text" name="alamat" class="txtField" value="<?php echo $row["alamat"]?>"></td>
    <tr class="table-row">
   <td><label>tgl_msk</label></td>
   <td><input type="text" name="tgl_msk" class="txtField" value="<?php echo $row["tg"]?>"></td>
  </tr>

  <tr>

  </tr>
   

  </tr>
  

  </tr>
  <tr class="table-row">
   <td colspan="2"><input type="submit"  name="submit" value="Submit" class="demo-form-submit"></td>
  </tr>
 </tbody> 
</table>
</form>
</body>
</html>