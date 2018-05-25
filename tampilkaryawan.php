<?php 
require_once("koneksi.php");

$sql = "SELECT * FROM Pegawai";
$result = $conn->query($sql); 
$conn->close();  
?>
<html>
<head>
 
<title>Show Pegawai</title>
<script src="../SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="../SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css">
<link href="../SpryAssets/SpryMenuBarVertical.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.style1 {font-size: medium}
-->
</style>
</head>
<body>
 <div class="button_link">
   <p><a href="inputpeg.php"></a></p>
   <p>
   
   </p>
 </div>
 <table width="830" align="center" class="tbl-qa"> 
  <thead>
    <tr>
    <th width="166" height="33" bgcolor="#51e753" class="table-header style1" wnimmhsth="20%"><div align="center">nip</div></th>
    <th width="275" bgcolor="#51e753" class="table-header style1" wnimmhsth="20%"><div align="center">nm_pegawai</div></th>
    <th width="275" bgcolor="#51e753" class="table-header style1" wnimmhsth="20%"> <div align="center">jk </div></th>
    <th width="275" bgcolor="#51e753" class="table-header style1" wnimmhsth="20%"> <div align="center">tpt_lhr </div></th>
    <th width="275" bgcolor="#51e753" class="table-header style1" wnimmhsth="20%"> <div align="center"> tgl_lhr</div></th>
    <th width="275" bgcolor="#51e753" class="table-header style1" wnimmhsth="20%"> <div align="center">agama</div></th>
    <th width="275" bgcolor="#51e753" class="table-header style1" wnimmhsth="20%"> <div align="center">no_hp</div></th>
    <th width="275" bgcolor="#51e753" class="table-header style1" wnimmhsth="20%"> <div align="center">email</div></th>
    <th width="275" bgcolor="#51e753" class="table-header style1" wnimmhsth="20%"> <div align="center">alamat</div></th>
    <th width="275" bgcolor="#51e753" class="table-header style1" wnimmhsth="20%"> <div align="center">tgl_msk</div></th>
    <th width="94" colspan="2" bgcolor="#51e753" class="table-header style1" wnimmhsth="20%"><div align="center">Aksi</div></th>
    </tr>
  </thead>
  <tbody>  
   <?php
    if ($result->num_rows > 0) {  
     while($row = $result->fetch_assoc()) {
   ?>
   <tr class="table-row" id="row-<?php echo $row["nip"]; ?>"> 
    <td bordercolor="#999999" bgcolor="#579c58" class="table-row"><div align="left"><?php echo $row["nip"]; ?></dSiv></td>
    <td bordercolor="#999999" bgcolor="#579c58" class="table-row"><div align="left"><?php echo $row["nm_pegawai"]; ?>
    </div></td>
    <td bordercolor="#999999" bgcolor="#579c58" class="table-row"><div align="left"><?php echo $row["jk"]; ?></div></td>
    <td bordercolor="#999999" bgcolor="#579c58" class="table-row"><div align="left"><?php echo $row["tpt_lhr"]; ?></div></td>
    <td bordercolor="#999999" bgcolor="#579c58" class="table-row"><div align="left"><?php echo $row["tgl_lhr"]; ?>
    </div></td>
    <td bordercolor="#999999" bgcolor="#579c58" class="table-row"><div align="left"><?php echo $row["agama"]; ?></div></td>
    
    <td bordercolor="#999999" bgcolor="#579c58" class="table-row"><div align="left"><?php echo $row["no_hp"]; ?></div></td>
    <td bordercolor="#999999" bgcolor="#579c58" class="table-row"><div align="left"><?php echo $row["email"]; ?></div></td>
    <td bordercolor="#999999" bgcolor="#579c58" class="table-row"><div align="left"><?php echo $row["alamat"]; ?>
    </div></td>
    <td bordercolor="#999999" bgcolor="#579c58" class="table-row"><div align="left"><?php echo $row["tgl_msk"]; ?></div></td>
    


    <td colspan="2" bordercolor="#999999" bgcolor="#579c58" class="table-row"><a href="menuedit.php?nip=<?php echo $row["nip"]; ?>" class="link">edit<a href="deletepeg.php?nip=<?php echo $row["nip"]; ?>" class="link">  hapus<name="delete" width="39" height="31" title="Delete" onClick="return confirm('Yakin akan di Hapus?')" nip="delete"/></a></td>
   </tr>
   <?php
     }
    }
   ?>
  </tbody>
</table>
<p>&nbsp;</p>
 <table width="136" align="center">
   <tr>
     <th width="128" scope="row"><ul id="MenuBar1" class="MenuBarHorizontal">
       <li>
         <div align="center"><a href="menuinputpeg.php">Input data </a> </div>
       </li>
     </ul></th>
   </tr>
 </table>
 <p>&nbsp;</p>
 <script type="text/javascript">
<!--
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"../SpryAssets/SpryMenuBarDownHover.gif", imgRight:"../SpryAssets/SpryMenuBarRightHover.gif"});
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"../SpryAssets/SpryMenuBarDownHover.gif", imgRight:"../SpryAssets/SpryMenuBarRightHover.gif"});
//-->
</script>
</body>
</html>