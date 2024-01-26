<!DOCTYPE html>
<html>
<head>
	<title>Halaman Dokter</title>
	<link rel="stylesheet" href="style_sheet.css">
	<link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" type="image/png" href="assets/logo-udinus.png">
</head>
<body>
	<?php 
	session_start();

	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}

	?>
	<!--
	<h1>Halaman Admin</h1>

	<p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>
	<a href="logout.php">LOGOUT</a>

	<br/>
	<br/>

	<a><a href="https://www.malasngoding.com/membuat-login-multi-user-level-dengan-php-dan-mysqli">Membuat Login Multi Level Dengan PHP</a> - www.malasngoding.com</a>
	-->
	
	    <div class="top-left">
        <img src="./assets/logo-udinus.png" alt="logo-udinus">
        <p class="title">
            POLY
        </p>
        <p class="define">
            Clinic Universitas Dian Nuswantoro
        </p>
        
    </div>
    <div class="top-right">
        <p class="page-title">
      <p> 
			<b>Halaman Dokter</b>
			<br>
			Halo : <b><?php echo $_SESSION['username']; 
			 			$username = $_SESSION["username"];
						 function GetNama($username)
        					{
            					print $username;
        					}
			          ?></b>
			<br>
			</b> Anda telah login sebagai <b><?php echo $_SESSION['level']; 
						 $level = $_SESSION["level"];
						 function GetLevel($level)
        					{
            					print $level;
        					}
			          ?></b>.
	  </p>
        </p>
				
        <div class="logout-button">
            <a href="logout.php"> 
                <b> Logout </b>
            </a>
        </div>
    </div>
	<div class="horizontal-menu">
        <img src="./assets/logo-udinus.png" alt="profile">
        <div class="nama">
            <h2><?php getNama($username) ?></h2>
            <h6><?php getLevel($level) ?></h6>
        </div>
        <ul>
            <li><a href="halaman_dokter.php">Home</a></li>
            <li><a href="perbaikan_manage_data_dokter.php">Manage Dokter</a></li>
        </ul>
    </div>
	<?php
// Display selected user data based on id
// Getting id from url
include "koneksi.php";
$id_dokter = $_GET['id_dokter'];
 
// Fetech user data based on id
$query="SELECT * FROM dokter WHERE id_dokter='$id_dokter'";
$sql = mysqli_query($connect,$query);
 
while($data = mysqli_fetch_array($sql))
{
    $id_dokter = $data['id_dokter'];
	$nama_dokter = $data['nama_dokter'];
    $alamat_dokter = $data['alamat_dokter'];
	$nohp_dokter = $data['nohp_dokter'];
	$id_poli = $data['id_poli'];
	$foto = $data['foto'];	
}
?>

	    <div class="main-menu">
        <div class="antrian-container">

		<form action="perbaikan_update_data_dokter.php" method="post">
			<label>Identitas Dokter</label>	
			<input type="text" name="id_dokter" class="form_login" placeholder="Identitas Dokter.." required="required" value="<?php echo $id_dokter;?>">
		
			<label>Nama Dokter</label>
			<input type="text" name="nama_dokter" class="form_login" placeholder="Nama Dokter.." required="required" value="<?php echo $nama_dokter;?>">
			
			<label>Alamat Dokter</label>
			<input type="text" name="alamat_dokter" class="form_login" placeholder="Alamat Dokter .." required="required" value="<?php echo $alamat_dokter;?>">
 			
			<label>Nomor HP Dokter</label>
			<input type="text" name="nohp_dokter" class="form_login" placeholder="Nomor HP Dokter .." required="required" value="<?php echo $nohp_dokter;?>">
			
			<label>Identitas Poli</label>
			<input type="text" name="id_poli" class="form_login" placeholder="1 Poli Umum 2 Poli Gigi .." required="required" value="<?php echo $id_poli;?>">
			
			<label>Foto Profile</label>
			<input type="file" name="foto" class="form_login" placeholder="Unggah Foto .." required="required">
			
			<input type="submit" class="tombol_login_baru" value="UPDATE"style="background-color: #04AA6D";style="background: #2aa7e2";>
 
			<br/>

		</form>
		
	</div>
</div>


</body>
</html>