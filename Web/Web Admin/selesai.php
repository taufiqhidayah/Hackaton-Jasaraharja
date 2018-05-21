<?php
include_once "koneksinews.php";
	sleep(2);
	$offset = isset($_GET['offset']) && $_GET['offset'] != '' ? $_GET['offset'] : 0;
	$all = mysqli_query($con, "SELECT * FROM gbr WHERE status='selesai' ORDER BY id DESC");
	$count_all = mysqli_num_rows($all);
	$query = mysqli_query($con, "SELECT * FROM gbr WHERE status='selesai' ORDER BY id DESC LIMIT $offset,10");
	$count = mysqli_num_rows($query);
	$json_kosong = 0;
	if($count<10){
		if($count==0){
			$json_kosong = 1;
		}else{
			$query = mysqli_query($con, "SELECT * FROM gbr WHERE status='selesai' ORDER BY id DESC LIMIT $offset,$count");
			$count = mysqli_num_rows($query);
			if(empty($count)){
				$query = mysqli_query($con, "SELECT * FROM gbr WHERE status='selesai' ORDER BY id DESC LIMIT 0,10");
				$num = 0;
			}else{
				$num = $offset;
			}
		}
	} else{
		$num = $offset;
	}
	$json = '[';
	while ($row = mysqli_fetch_array($query)){
		$num++;
		$char ='"';
		$tgl	= date("d M Y H:i:s", strtotime($row['tgl']));
		$string = substr(strip_tags($row['keterangan']), 0, 200);
		$json .= '{
			"no": '.$num.',
			"id": "'.str_replace($char,'`',strip_tags($row['id'])).'", 
				"iduser": "'.str_replace($char,'`',strip_tags($row['iduser'])).'", 
			"nama": "'.str_replace($char,'`',strip_tags($row['nama'])).'", 
			"tgl": "'.str_replace($char,'`',strip_tags($tgl)).'", 
			"isi": "'.str_replace($char,'`', $string." ...").'",
					"alamat": "'.str_replace($char,'`',strip_tags($row['alamat'])).'",
					"status": "'.str_replace($char,'`',strip_tags($row['status'])).'",
			"gambar": "'.str_replace($char,'`',strip_tags($row['path'])).'"},';
	}
	$json = substr($json,0,strlen($json)-1);
	if($json_kosong==1){
		$json = '[{ "no": "", "id": "", "iduser": "","status": "","nama": "", "tgl": "", "isi": "","alamat": "", "gambar": ""}]';
	}else{
		$json .= ']';
	}
	echo $json;
	mysqli_close($con);

?>