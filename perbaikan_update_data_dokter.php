<?php
// include database connection file
include("koneksi.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
	$id_dokter = $_POST["id_dokter"];
	$nama_dokter = $_POST["nama_dokter"];
	$alamat_dokter = $_POST["alamat_dokter"];
	$nohp_dokter = $_POST["nohp_dokter"];
	$id_poli = $_POST["id_poli"];
	$foto = $_POST["foto"];
	$status = 0;
	//$rand = rand();
	//$ekstensi =  array('png','jpg','jpeg','gif');
	//$foto = $_FILES['foto']['name'];
	$tmp = $_FILES['foto']['tmp_name'];
	$ukuran = $_FILES['foto']['size'];
	
	// Rename nama fotonya dengan menambahkan tanggal dan jam upload
	//$fotobaru = date('dmYHis').$foto;

	// Set path folder tempat menyimpan fotonya
	//$path = "assets/".$fotobaru;
	
	// Proses upload
	//move_uploaded_file($tmp, $path); // Cek apakah gambar berhasil diupload atau tidak
	//move_uploaded_file($_FILES['foto']['tmp'], 'assets/'.$fotobaru);
        
	      
    // update user data
	$query="UPDATE dokter SET nama_dokter='$nama_dokter', alamat_dokter='$alamat_dokter', nohp_dokter='$nohp_dokter', id_poli=$id_poli, foto='$foto'  WHERE id_dokter='$id_dokter'";
    $result = mysqli_query($connect,$query);
    
    // Redirect to homepage to display updated user in list
   	header("Location:perbaikan_manage_data_dokter.php");
	//}
?>