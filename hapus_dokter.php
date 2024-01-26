<?php
// include database connection file
include("koneksi.php");
 // Get id from URL to delete that user
$id_dokter = $_GET['id_dokter'];
 // Delete user row from table based on given id
$query="DELETE FROM dokter WHERE id_dokter=$id_dokter";
$result = mysqli_query($connect,$query);
 // After delete redirect to Home, so that latest user list will be displayed.
header("Location:manage_dokter.php");
?>
