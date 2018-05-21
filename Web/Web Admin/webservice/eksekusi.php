<?php
	include "kon.php";
	$con = mysql_connect($databasehost, $databaseusername, $databasepassword) or die(mysql_error());
	mysql_select_db($databasename) or die(mysql_error());
	mysql_query("SET CHARACTER SET utf8");
	$query = file_get_contents("php://input");
	$sth = mysql_query($query);
?>