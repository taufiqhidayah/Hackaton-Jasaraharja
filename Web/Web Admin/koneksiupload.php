<?php
	
	 define('HOST','localhost');
 define('USER','noer1596_kamak');
 define('PASS','kamak0@');
 define('DB','noer1596_hackaton');

 //membuat koneksi dengan database

$con = mysqli_connect(HOST,USER,PASS,DB);
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
?>