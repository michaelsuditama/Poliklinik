<?php
// include database connection file
include("koneksi.php");
 // Get id from URL to delete that user
$id_pasien = $_GET['id_pasien'];
 // Delete user row from table based on given id
$query="DELETE FROM pasien WHERE id_pasien=$id_pasien";
$result = mysqli_query($connect,$query);
 // After delete redirect to Home, so that latest user list will be displayed.
header("Location:manage_pasien.php");
?>
