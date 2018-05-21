<?php
	
	include 'koneksi.php';
	
	//class usr{}
	
	//$nik = $_POST["username"];
	//$password = $_POST["password"];
	
	//if ((empty($nik)) || (empty($password))) { 
		//$response = new usr();
		//$response->success = 0;
		//$response->message = "Kolom tidak boleh kosong"; 
		//die(json_encode($response));
	//}
	
	//$query = mysql_query("SELECT * FROM users WHERE username='$username' AND password='$password'");
	
	//$row = mysql_fetch_array($query);
	
	//if (!empty($row)){
		//$response = new usr();
		//$response->success = 1;
		//$response->message = "Selamat datang ".$row['username'];
		//$response->id = $row['id'];
		//$response->username = $row['username'];
		//die(json_encode($response));
		
	//} else { 
		//$response = new usr();
		//$response->success = 0;
		//$response->message = "Username atau password salah";
		//die(json_encode($response));
	//}
	
	//mysql_close();


	
	 include_once "koneksi.php";

	 class usr{}
	
	 $username = $_POST["username"];

	
	 if ((empty($username))) { 
	 	$response = new usr();
	 	$response->success = 0;
	 	$response->message = "Kolom tidak boleh kosong"; 
	 	die(json_encode($response));
	 }
	 $query = mysqli_query($con, "SELECT * FROM user WHERE USERNAME='$username'");
	
	 $row = mysqli_fetch_array($query);
	
	 if (!empty($row)){
	 	$response = new usr();
	 	$response->success = 1;
	 	$response->message = "Anda Terdaftar Sebagai".$row['USERNAME'];
	 	$response->iduser = $row['ID_USER'];
	 	$response->username = $row['USERNAME'];
	 		$response->nohp = $row['NO_HP'];
	 		$response->pswd = $row['PASSWORD_USER'];
	 			$response->tgldaftar = $row['TGL_DAFTAR'];
	 				$response->alamat = $row['ALAMAT_USER'];
 	die(json_encode($response));
		
	 } else { 
	 	$response = new usr();
	 	$response->success = 0;
	 	$response->message = "Username atau password salah";
	 	die(json_encode($response));
	 }
	
	 mysqli_close($con);

?>