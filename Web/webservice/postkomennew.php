<?php

require_once('koneksi.php');
	if($_SERVER['REQUEST_METHOD']=='POST'){
	date_default_timezone_set('Asia/Jakarta');
		//Mendapatkan Nilai Variable
		$nama = $_POST['name'];
		$isikoment = $_POST['isi'];
	
		$tanggal = date("Y-m-d H:i:s");
$idnews=$_POST['idnews'];

		//Pembuatan Syntax SQL
		$sql = "INSERT INTO komentar (NAMA_KOMENTAR,TANGGAL_KOMENTAR,ISI_KOMENTAR,ID_BERITA) VALUES ('$nama','$tanggal','$isikoment','$idnews')";

		//Import File Koneksi database
		require_once('koneksi.php');

		//Eksekusi Query database
		if(mysqli_query($con,$sql)){
			echo 'Komentar Terkirim';
		}else{
			echo 'Gagal';
		}

		mysqli_close($con);
	}
?>
