<?php



	if($_SERVER['REQUEST_METHOD']=='POST'){

		//Mendapatkan Nilai Variable
		$name = $_POST['name'];
	
		$alamat= $_POST['alamat'];
		$nohp= $_POST['notlp'];
		$password= $_POST['password'];
		$random =rand(0,1000);
		
		//Pembuatan Syntax SQL
					$sql = "INSERT INTO user (ID_USER,USERNAME,PASSWORD_USER,NO_HP,TGL_DAFTAR,ALAMAT_USER) VALUES ('$random','$name','$password','$nohp',NOW(),'$alamat')";
		//Import File Koneksi database
		require_once('koneksi.php');

		//Eksekusi Query database
		if(mysqli_query($con,$sql)){
			echo 'Pendaftaran Berhasil';
		}else{
						echo 'Data Gagal Dikirim';
		}
		
		function randomString($length = 10) {
    $str = "";
    $characters = array_merge(range('A','Z'), range('a','z'), range('0','9'));
    $max = count($characters) - 1;
    for ($i = 0; $i < $length; $i++) {
        $rand = mt_rand(0, $max);
        $str  .= $characters[$rand];
    }
    return $str;
}



		mysqli_close($con);
	}
	
	
	
?>
