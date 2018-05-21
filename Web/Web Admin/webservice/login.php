<?php
	include "kon.php";
	//include "../setting/encrypt.php";
	$con = mysql_connect($databasehost, $databaseusername, $databasepassword) or die(mysql_error());
	mysql_select_db($databasename) or die(mysql_error());
	mysql_query("SET CHARACTER SET utf8");
	//$query = file_get_contents("php://input");
	$idlogin = $_REQUEST["idlogin"];
	$passlogin = $_REQUEST["passlogin"];
	$query = "SELECT a.*,b.id_kelas,c.id_wali FROM siswa as a LEFT JOIN reg_siswa as b ON a.nis = b.nis JOIN reg_wali_kelas as c ON b.id_kelas = c.id_kelas WHERE a.username='$idlogin' AND a.password='$passlogin'";
	$sth = mysql_query($query);
	if (mysql_errno()) {
	    header("HTTP/1.1 500 Internal Server Error");
	    echo $query.'\n';
	    echo mysql_error();
	} else {
	    $rows = array();
	    while($r = mysql_fetch_assoc($sth)) {
	        $rows[] = $r;
	    }
	    print json_encode($rows);
	}
?>