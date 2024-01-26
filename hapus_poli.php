<?php
// include database connection file
include("koneksi.php");
 // Get id from URL to delete that user
$id_poli = $_GET['id_poli'];
 // Delete user row from table based on given id
$query="DELETE FROM poli WHERE id_poli=$id_poli";
$result = mysqli_query($connect,$query);
 // After delete redirect to Home, so that latest user list will be displayed.
header("Location:manage_poli.php");
?>
