<?php

 require_once('koneksi.php');


	if($_SERVER['REQUEST_METHOD']=='POST'){

		//Mendapatkan Nilai Variable
		$name = $_POST['name'];
		$id = $_POST['nik'];
		$alamat= $_POST['alamat'];
		$nohp= $_POST['notlp'];
		$password= $_POST['password'];
			$sql = "SELECT * FROM user";

	//Mendapatkan Hasil
	$r = mysqli_query($con,$sql);

	//Membuat Array Kosong
	$result = array();

	while($row = mysqli_fetch_array($r)){

		//Memasukkan Nama dan ID kedalam Array Kosong yang telah dibuat
		array_push($result,array(
			"id"=>$row['ID_USER']
		));
	}
		$str=strlen($id);
		if($id==$row['ID_USER']){
			echo'Anda Sudah Terdaftar Silahkan Login';
		}
		else{
			if($str==16){
		    $substr=substr($id,0,4);
		    $nik='3517';
		    if($substr==$nik){

		//Pembuatan Syntax SQL
		$sql = "INSERT INTO user (ID_USER,USERNAME,PASSWORD_USER,NO_HP,TGL_DAFTAR,ALAMAT_USER) VALUES ('$id','$name','$password','$nohp',NOW(),'$alamat')";

		//Import File Koneksi database
		
		//Eksekusi Query database
		if(mysqli_query($con,$sql)){
			echo 'Data Berhasil Dikirim';
		}else{
		echo'Anda Sudah Terdaftar Silahkan Login';
		}

		mysqli_close($con);
	}
		}
		else{
		    echo'NIK anda tidak terdaftar';
		}
		}
			
		
	
	}	
?>