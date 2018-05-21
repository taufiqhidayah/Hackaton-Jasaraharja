<?php


	if($_SERVER['REQUEST_METHOD']=='POST'){
		//MEndapatkan Nilai Dari Variable
		$id = $_POST['nik'];
		$pswd = $_POST['pswd'];
	

		//import file koneksi database
		require_once('koneksi.php');

		//Membuat SQL Query
		$sql = "UPDATE user SET PASSWORD_USER = '$pswd' WHERE ID_USER = $id;";

		//Meng-update Database
		if(mysqli_query($con,$sql)){
			echo 'Berhasil Update Password';
		}else{
			echo 'Gagal Update';
		}

		mysqli_close($con);
	}
?>
