<?php
//Membuat Koneksi
$server = "localhost";
$username = "noer1596_kamak";
$password = "kamak0@";
$database = "noer1596_hackaton";
// Koneksi dan memilih database di server
mysql_connect($server,$username,$password) or die("Koneksi gagal");
mysql_select_db($database) or die("Database tidak bisa dibuka");
?>