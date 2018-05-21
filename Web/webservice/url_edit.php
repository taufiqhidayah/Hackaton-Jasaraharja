<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
		//MEndapatkan Nilai Dari Variable
		$id = $_POST['id'];
		
		$tipe = $_POST['tipe'];
	

		//import file koneksi database
		require_once('koneksi.php');

		//Membuat SQL Query
		$sql = "UPDATE gbr SET kondisi = '$tipe' WHERE id = $id;";

		//Meng-update Database
		if(mysqli_query($con,$sql)){
			echo 'Berhasil Update';
		}else{
			echo 'Gagal Update Data Pegawai';
		}

		mysqli_close($con);
	}
?>