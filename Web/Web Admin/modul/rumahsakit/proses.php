<?php

$conn = mysqli_connect('localhost', 'root', '', 'sipaud');

$nis = mysqli_real_escape_string($conn, $_POST['nis']);
$sql = "select * from siswa where nis = '$nis'";
$process = mysqli_query($conn, $sql);
$num = mysqli_num_rows($process);
if($num == 0){
	echo " &#10060; NIS Sudah Terpakai";
}else{
	echo " &#10004; NIS tersedia";
}
?>