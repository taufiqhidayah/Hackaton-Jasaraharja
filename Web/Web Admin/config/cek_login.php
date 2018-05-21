<?php
	include "encrypt.php";
	include "koneksi.php";
	session_start();
	if (ISSET($_SESSION["AusfG-IV"])){
		$decrypt = simple_decrypt($_SESSION["AusfG-IV"], $Kunci);
		$arr =  explode("|", $decrypt);
		$SQL = "SELECT * FROM admin WHERE username = '".$arr[0]."' AND password = '".$arr[1]."'";
		$Proses = mysql_query($SQL);
	    $jml = mysql_num_rows($Proses);
	    if ($jml > 0){
	    	while ($z = mysql_fetch_array($Proses)) { 
	    		//cek keberadaan data dalam database
	    	 	$username = $z["username"];
	    	 	$password = $z["password"];	    	 	
	    	 	$folder = $z["folder"];
	    	}
	    } else {echo "<meta http-equiv='refresh' content='0; ../home'>";}
	} else {echo "<meta http-equiv='refresh' content='0; ../home'>";}
?>