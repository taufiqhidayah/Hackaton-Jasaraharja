
<?php
	$id = $_GET['id'];
	//Import File Koneksi Database
	require_once('koneksi.php');

	//Membuat SQL Query
	$sql = "SELECT * FROM komentar WHERE ID_BERITA=$id";

	//Mendapatkan Hasil
	$r = mysqli_query($con,$sql);

	//Membuat Array Kosong
	$result = array();

	while($row = mysqli_fetch_array($r)){

		//Memasukkan Nama dan ID kedalam Array Kosong yang telah dibuat
		array_push($result,array(
			"id"=>$row['ID_KOMENTAR'],
			"name"=>$row['NAMA_KOMENTAR'],
			"tglkomen"=>$row['TANGGAL_KOMENTAR'],
				"gbr"=>$row['gbr'],
			"isi"=>$row['ISI_KOMENTAR']
		));
	}

	//Menampilkan Array dalam Format JSON
	echo json_encode(array('result'=>$result));

	mysqli_close($con);
?>
