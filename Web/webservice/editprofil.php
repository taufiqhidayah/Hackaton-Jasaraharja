<?php


	if($_SERVER['REQUEST_METHOD']=='POST'){
		//MEndapatkan Nilai Dari Variable
		$id = $_POST['iduser'];
		$name = $_POST['username'];
		$alamat = $_POST['alamat'];
		$nohp = $_POST['nohp'];
			$pswd = $_POST['pswd'];

		//import file koneksi database
		require_once('koneksi.php');

		//Membuat SQL Query
		$sql = "UPDATE user SET USERNAME = '$name', ALAMAT_USER = '$alamat', NO_HP = '$nohp', PASSWORD_USER = '$pswd' WHERE ID_USER = $id;";

		//Meng-update Database
		if(mysqli_query($con,$sql)){
			echo 'Berhasil Update Profil';
		}else{
			echo 'Berhasil Update Profil';
		}

		mysqli_close($con);
	}
?>
