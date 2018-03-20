<?php 
	$host 		= "127.0.0.1"; //umumnya menggunakan local host
	$username 	= "root";		// isikan dengan username sql
	$pass 		= "";
	$db			= "Biodata";

	$conn = mysqli_connect($host,$username,$pass,$db);

	if($conn){
		echo "sukses login";
	}
	else{
		echo "gagal login";
	}


	$cekdatabase = mysqli_select_db($conn,$db);

	if ($cekdatabase) {
		echo "database terdeteksi";
	}else{
		echo "database tidak ada";
	}
?>