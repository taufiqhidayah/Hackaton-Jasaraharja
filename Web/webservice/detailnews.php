<?php
	include_once "koneksinews.php";
$id = $_POST['id'];
	$query = mysqli_query($con, "SELECT * FROM gbr WHERE id='".$id."'");
	while ($row = mysqli_fetch_array($query)){
		$char = '"';
		$tgl = date("d M Y H:i:s", strtotime($row['tgl']));
		$string = $row['keterangan'];
		$json = '{
				"id": "'.str_replace($char,'`',strip_tags($row['id'])).'", 
					"iduser": "'.str_replace($char,'`',strip_tags($row['iduser'])).'", 
				"nama": "'.str_replace($char,'`',strip_tags($row['nama'])).'",
					"longitude": "'.str_replace($char,'`',strip_tags($row['longitude'])).'",
					"like": "'.str_replace($char,'`',strip_tags($row['suka'])).'",
						"lattitude": "'.str_replace($char,'`',strip_tags($row['lattitude'])).'",
					"status": "'.str_replace($char,'`',strip_tags($row['status'])).'",
				"tgl": "'.str_replace($char,'`',strip_tags($tgl)).'", 
				"keterangan": "'.str_replace($char,'`', $string).'",
					"alamat": "'.str_replace($char,'`',strip_tags($row['alamat'])).'",
				"gambar": "'.$row['path'].'"}';
	}
	echo $json;
	mysqli_close($con);

?>