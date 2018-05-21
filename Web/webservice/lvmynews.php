<?php

 
	//Mendapatkan Nilai Dari Variable ID Pegawai yang ingin ditampilkan
	$id = $_GET['iduser'];

	//Importing database
	require_once('koneksi.php');

	//Membuat SQL Query dengan pegawai yang ditentukan secara spesifik sesuai ID
	$sql = "SELECT * FROM gbr WHERE iduser=$id ORDER BY id DESC";

	//Mendapatkan Hasil
	$r = mysqli_query($con,$sql);

	//Memasukkan Hasil Kedalam Array
	$result = array();
	while($row = mysqli_fetch_array($r)){
	array_push($result,array(
			"id"=>$row['id'],
			"tgl"=>$row['tgl'],
			"status"=>$row['status'],
			"alamat"=>$row['alamat']
		));
}
	//Menampilkan dalam format JSON
	echo json_encode(array('result'=>$result));

	mysqli_close($con);
?>
