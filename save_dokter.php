<?php
	// Load file koneksi.php
	include "koneksi.php";
	
	// Ambil Data yang Dikirim dari Form
	$id_dokter = $_POST['id_dokter'];
	$nama_dokter = $_POST['nama_dokter'];
	$alamat_dokter = $_POST['alamat_dokter'];
	$nohp_dokter = $_POST['nohp_dokter'];
	$id_poli = $_POST['id_poli'];
	// Proses simpan ke Database
	$query = "INSERT INTO dokter VALUES( '".$id_dokter."', '".$nama_dokter."', '".$alamat_dokter."', '".$nohp_dokter."', '".$id_poli."','')";
	$sql = mysqli_query($connect,$query); // Eksekusi/ Jalankan query dari variabel $query
	
	if($sql){ // Cek jika proses simpan ke database sukses atau tidak
	// Jika Sukses, Lakukan :
	header("location: manage_dokter.php"); // Redirect ke halaman index.php
	}else{
	// Jika Gagal, Lakukan :
	echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
	echo "<br><a href='manage_dokter.php'>Kembali Ke Form</a>";
	}
	?>