<!DOCTYPE html>
<html>
<head>
	<title>Halaman Dokter</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="style_sheet.css">
    <link rel="icon" type="image/png" href="assets/ipb-logo.png">
</head>
<body>
	<?php
// Display selected user data based on id
// Getting id from url
include "koneksi.php";
$id_poli = $_GET['id_poli'];
 
// Fetech user data based on id
$query="SELECT * FROM poli WHERE id_poli='$id_poli'";
$sql = mysqli_query($connect,$query);
 
while($data = mysqli_fetch_array($sql))
{
    $id_poli = $data['id_poli'];
	$nama_poli = $data['nama_poli'];
    $keterangan_poli = $data['keterangan_poli'];
}
?>
<div style="margin-top:300px;margin-left:300px">
<table width="755" border="0">
<form action="update_poli.php" method="post">
  <tr> 
    <td width="30%">Id</td>
    <td width="47%"><input type="text" name="id_poli" size="10" value="<?php echo $id_poli;?>"></td>
  </tr>
  <tr>
    <td>Nama</td>
	<td><input type="text" name="nama_poli" size="75" value="<?php echo $nama_poli;?>"></td>
  </tr>
    <tr>
    <td>Keterangan</td>
    <td><input type="text" name="keterangan_poli" size="100" value="<?php echo $keterangan_poli;?>"></td>
  </tr>
  <tr>
    <td colspan="2"><input type="submit" value="UPDATE"></td>
    </tr>
</form>
</table>
</div>


</body>
</html>