<?php

$conn = mysqli_connect('localhost', 'root', '', 'sipaud');

$username = mysqli_real_escape_string($conn, $_POST['nis']);
$sql = "select * from siswa where nis = '$username'";
$process = mysqli_query($conn, $sql);
$num = mysqli_num_rows($process);
if($num == 0){
	echo " &#10004; Username tersedia";
}else{
	echo " &#10060; Username tidak tersedia";
}
?>