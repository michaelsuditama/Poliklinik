<!DOCTYPE html>
<html>
<head>
	<title>Halaman Dokter</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="style_sheet.css">
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
			<b>Halaman Admin</b>
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

    <div style="margin-top:300px;margin-left:300px">
        <table width="1027" style=" padding: 15px;">
            <tr style="background-color: #04AA6D;
                color: white;">
				<th width="202">
                    Id                </th>
                <th width="202">
                    Nama                </th>
                <th width="471">
                    Alamat                </th>
                <th width="127">
                    No. HP                </th>
                <th width="90">
                    Id Poli                </th>
				<th width="90">
                    Foto                </th>
                <th width="113">
                    Action                </th>
            </tr>
            
                
                <?php 
				include "koneksi.php";
                $query = mysqli_query($connect ,"select * from dokter");
                    while($data=mysqli_fetch_array($query))
                        {
                            ?>
                            <tr>
									<td>
                                        <?php echo $data['id_dokter'];?>
                                    </td>
                                    <td>
                                        <?php echo $data['nama_dokter'];?>
                                    </td>
                                    <td>
                                        <?php echo $data['alamat_dokter'];?>
                                    </td>
                                    <td>
                                        <?php echo $data['nohp_dokter']?>
                                    </td>
                                    <td>
                                        <?php echo $data['id_poli']?>
                                    </td>
									<td>
                                        <?php 
										echo "<img src='assets/".$data['foto']."' width='100' height='100'>";
										?>
                                    </td>
                                     <td>
                                        <?php 
										echo "<a href='perbaikan_edit_data_dokter.php?id_dokter=".$data['id_dokter']."'>Edit||</a>";
										echo "<a href='perbaikan_hapus_dokter.php?id_dokter=".$data['id_dokter']."'>Hapus</a>";

										?>
                                    </td>
                            </tr>
                            <?php
                        }
                ?>
            
      </table>
    </div>

</body>
</html>