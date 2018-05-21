<?php
	$id = $_POST['idnews'];
	require_once('koneksi.php');
	if($_SERVER['REQUEST_METHOD']=='POST'){
		//MEndapatkan Nilai Dari Variable
		
			$sql = "SELECT * FROM gbr";

	//Mendapatkan Hasil
	$r = mysqli_query($con,$sql);

	//Membuat Array Kosong
	$result = array();

	while($row = mysqli_fetch_array($r)){

		//Memasukkan Nama dan ID kedalam Array Kosong yang telah dibuat
		array_push($result,array(
			"suka"=>$row['suka']
			 
		));
		$jml=$row['suka']+1;
	}
	   
		//import file koneksi database
		require_once('koneksi.php');

		//Membuat SQL Query
		$sql = "UPDATE gbr SET suka = '$jml' WHERE id = $id;";

		//Meng-update Database
		if(mysqli_query($con,$sql)){
			echo 'Berhasil';
		}else{
			echo 'Gagal';
		}

		mysqli_close($con);
	}
?>
