<?php
// include database connection file
include("koneksi.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
	$id_poli = $_POST["id_poli"];
	$nama_poli = $_POST["nama_poli"];
	$keterangan_poli = $_POST["keterangan_poli"];
		      
    // update user data
	$query="UPDATE poli SET nama_poli='$nama_poli', keterangan_poli='$keterangan_poli' WHERE id_poli='$id_poli'";
    $result = mysqli_query($connect,$query);
    
    // Redirect to homepage to display updated user in list
   	header("Location:manage_poli.php");
?>