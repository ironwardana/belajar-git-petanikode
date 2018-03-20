	<?php 
	include(databse.php);
		$nama=isset($_get["nama"])? $_get["nama"]:"";
echo "<br>";
		$alamat =isset($_get["alamat"])? $_get["alamat"]:"";
echo "<br>";
		$jk=isset($_get["jeniskelamin"])? $_get["jeniskelamin"]:"";
echo "<br>";
 		$_hobi=isset($_get["hobi"])? $_get["hobi"]:"";
echo "<br>";
 	 	$_Programstudi=isset($_get["Programstudi"])? $_get["Programstudi"]:"";


 	 	$input = mysql_query($host,$username,$pass,$db) or die(mysql_error());

 	 	if ($input) {
 	 		header("latihan1.php");
 	 	}else{
 	 		echo "gagal";
 	 	}
 	  ?>