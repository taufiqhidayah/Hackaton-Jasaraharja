<?php




require_once('koneksi.php');

	//Membuat SQL Query
	$sql = "SELECT * FROM suka";

	//Mendapatkan Hasil
	$r = mysqli_query($con,$sql);

	//Membuat Array Kosong
	$result = array();

	while($row = mysqli_fetch_array($r)){

		//Memasukkan Nama dan ID kedalam Array Kosong yang telah dibuat
		array_push($result,array(
			$idn=$row['idberita'],
			$idu=$row['iduser']
		));
	}

	//Menampilkan Array dalam Format JSON



	if($_SERVER['REQUEST_METHOD']=='POST'){

		//Mendapatkan Nilai Variable
		$id = $_POST['id'];
		$iduser = $_POST['iduser'];
		$like = "sudah menyukai";
		
		if($id==$idn && $iduser==$idu){
		    	echo 'Anda Sudah Menyukai';
		    
		}
		else{
		    			$sql = "SELECT * FROM gbr";

	//Mendapatkan Hasil
	$q = mysqli_query($con,$sql);

	//Membuat Array Kosong
	$result = array();

	while($row = mysqli_fetch_array($q)){

		//Memasukkan Nama dan ID kedalam Array Kosong yang telah dibuat
		array_push($result,array(
			"suka"=>$row['suka']
			 
		));
		$jml=$row['suka']+1;
	}

		//Pembuatan Syntax SQL
		$sql = "INSERT INTO suka (idberita,iduser,suka) VALUES ('$id','$iduser','$like')";
				$sqll = "UPDATE gbr SET suka = '$jml' WHERE id = $id;";


		//Import File Koneksi database
		require_once('koneksi.php');

		//Eksekusi Query database
		if(mysqli_query($con,$sql)){
			echo 'Berhasil ';}
			if(mysqli_query($con,$sqll)){
			echo 'Anda Menyukai Post ini';
		}else{
			echo 'Gagal Menambahkan Pegawai';
		}

		mysqli_close($con);
		}
	}
	
?>
