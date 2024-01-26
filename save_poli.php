<?php
	// Load file koneksi.php
	include "koneksi.php";
	
	// Ambil Data yang Dikirim dari Form
	$id_poli = $_POST['id_poli'];
	$nama_poli = $_POST['nama_poli'];
	$keterangan_poli = $_POST['keterangan_poli'];
	// Proses simpan ke Database
	$query = "INSERT INTO poli VALUES( '".$id_poli."', '".$nama_poli."', '".$keterangan_poli."')";
	$sql = mysqli_query($connect,$query); // Eksekusi/ Jalankan query dari variabel $query
	
	if($sql){ // Cek jika proses simpan ke database sukses atau tidak
	// Jika Sukses, Lakukan :
	header("location: manage_poli.php"); // Redirect ke halaman index.php
	}else{
	// Jika Gagal, Lakukan :
	echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
	echo "<br><a href='manage_poli.php'>Kembali Ke Form</a>";
	}
	?>