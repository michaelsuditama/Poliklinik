<?php
	// Load file koneksi.php
	include "koneksi.php";
	
	// Ambil Data yang Dikirim dari Form
	$id_pasien = $_POST["id_pasien"];
	$nama_pasien = $_POST["nama_pasien"];
	$alamat_pasien = $_POST["alamat_pasien"];
	$nktp_pasien = $_POST["nktp_pasien"];
	$nohp_pasien = $_POST["nohp_pasien"];
	$norm_pasien = $_POST["norm_pasien"];
	// Proses simpan ke Database
	$addQuery = "INSERT INTO pasien VALUES ('$id_pasien', '$nama_pasien', '$alamat_pasien', '$nktp_pasien', '$nohp_pasien', '$norm_pasien')";
	// $query = "INSERT INTO pasien VALUES( '".$id_pasien."', '".$nama_pasien."', '".$alamat_pasien."','".$nktp_pasien."','".$nohp_pasien."','".$norm_pasien."',)";
	$sql = mysqli_query($connect,$addQuery); // Eksekusi/ Jalankan query dari variabel $query
	
	if($sql){ // Cek jika proses simpan ke database sukses atau tidak
	// Jika Sukses, Lakukan :
	header("location: manage_pasien.php"); // Redirect ke halaman index.php
	}else{
	// Jika Gagal, Lakukan :
	echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
	echo "<br><a href='manage_pasien.php'>Kembali Ke Form</a>";
	}
	?>