<?php
// include database connection file
include("koneksi.php");
 // Get id from URL to delete that user
$id_obat = $_GET['id_obat'];
 // Delete user row from table based on given id
$query="DELETE FROM obat WHERE id_obat=$id_obat";
$result = mysqli_query($connect,$query);
 // After delete redirect to Home, so that latest user list will be displayed.
header("Location:manage_obat.php");
?>
