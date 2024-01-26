<?php
// include database connection file
include("koneksi.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
$id_obat = $_POST["id_obat"];
$nama_obat = $_POST["nama_obat"];
$jumlah_obat = $_POST["jumlah_obat"];
$harga_obat = $_POST["harga_obat"];

		      
    // update user data
	$query="UPDATE obat SET nama_obat ='$nama_obat', jumlah_obat='$jumlah_obat',harga_obat='$harga_obat' WHERE id_obat=$id_obat";
    $result = mysqli_query($connect,$query);
    
    // Redirect to homepage to display updated user in list
   	header("Location:manage_obat.php");
?>

