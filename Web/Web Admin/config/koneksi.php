<?php
  error_reporting(0);
  $dbuser = "root";
  $dbpass = "";
  $dbhost = "127.0.0.1";
  $dbname = "sipaud";
  $Koneksi = mysql_connect($dbhost, $dbuser, $dbpass);
  if ($Koneksi){$StatusServer = "Connect";} else {$StatusServer = "Disconnect";}  
  $Database = mysql_select_db("$dbname", $Koneksi);
  if ($Database){$StatusDB = "Connect";} else {$StatusDB = "Error";}
?>

