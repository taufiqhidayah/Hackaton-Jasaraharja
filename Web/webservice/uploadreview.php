<?php
	include_once "koneksiupload.php";
	
	class emp{}
	date_default_timezone_set('Asia/Jakarta');
	$image = $_POST['image'];

	$nama = $_POST['username'];
		$id = $_POST['id'];
			$keterangan = $_POST['keterangan'];

	
	

	if (empty($nama)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Mohon diisi."; 
		die(json_encode($response));
	} else {
		$random = date("Ymdhisa");
		$tanggal = date("Y-m-d H:i:s");
		
		$path = "gambar/".$random.".jpg";
		$gbr=$random.".jpg";
		
		// sesuiakan ip address laptop/pc atau URL server
	$actualpath = "https://ristahandani75.000webhostapp.com/$path";
		
		$query = mysqli_query($con, "INSERT INTO review(NAMA_USER,ID_USER,gambarreview,ISI_REVIEW,TANGGAL_REVIEW) VALUES ('$nama','$id','$actualpath ','$keterangan','$tanggal')");

		
		if ($query){
			file_put_contents($path,base64_decode($image));
			
			$response = new emp();
			$response->success = 1;
			$response->message = "Berhasil";
			die(json_encode($response));
			echo "<script>setTimeout(function () {window.location.href='parsing.php';},1);</script>";
		} else{ 
			$response = new emp();
			$response->success = 0;
			$response->message = "Error Upload image";
			die(json_encode($response)); 
		}
	}	
	
	// fungsi random string pada gambar untuk menghindari nama file yang sama
	function random_word($id = 20){
		$pool = '1234567890abcdefghijkmnpqrstuvwxyz';
		
		$word = '';
		for ($i = 0; $i < $id; $i++){
			$word .= substr($pool, mt_rand(0, strlen($pool) -1), 1);
		}
		return $word; 
	}


	mysqli_close($con);
	
?>