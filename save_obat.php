<?php
	// Load file koneksi.php
	include "koneksi.php";
	
	// Ambil Data yang Dikirim dari Form
	$id_obat = $_POST['id_obat'];
	$nama_obat = $_POST['nama_obat'];
	$jumlah_obat = $_POST['jumlah_obat'];
	$harga_obat = $_POST['harga_obat'];
	// Proses simpan ke Database
	$query = "INSERT INTO obat VALUES( '".$id_obat."', '".$nama_obat."', '.$jumlah_obat.', '.$harga_obat.')";
	$sql = mysqli_query($connect,$query); // Eksekusi/ Jalankan query dari variabel $query
	
	if($sql){ // Cek jika proses simpan ke database sukses atau tidak
	// Jika Sukses, Lakukan :
	header("location: manage_obat.php"); // Redirect ke halaman index.php
	}else{
	// Jika Gagal, Lakukan :
	echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
	echo "<br><a href='manage_obat.php'>Kembali Ke Form</a>";
	}
	?>