<?php
// include database connection file
include("koneksi.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
	$id_dokter = $_POST["id_dokter"];
	$nama_dokter = $_POST["nama_dokter"];
	$alamat_dokter = $_POST["alamat_dokter"];
	$nohp_dokter = $_POST["nohp_dokter"];
	$id_poli = $_POST["id_poli"];
		      
    // update user data
	$query="UPDATE dokter SET nama_dokter='$nama_dokter', alamat_dokter='$alamat_dokter', nohp_dokter='$nohp_dokter', id_poli='$id_poli' WHERE id_dokter='$id_dokter'";
    $result = mysqli_query($connect,$query);
    
    // Redirect to homepage to display updated user in list
   	header("Location:manage_dokter.php");
?>