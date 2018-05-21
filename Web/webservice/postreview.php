<?php
include_once "koneksinews.php";
	sleep(2);
	$offset = isset($_GET['offset']) && $_GET['offset'] != '' ? $_GET['offset'] : 0;
	$all = mysqli_query($con, "SELECT * FROM review ORDER BY ID_REVIEW DESC");
	$count_all = mysqli_num_rows($all);
	$query = mysqli_query($con, "SELECT * FROM review ORDER BY ID_REVIEW DESC LIMIT $offset,10");
	$count = mysqli_num_rows($query);
	$json_kosong = 0;
	if($count<10){
		if($count==0){
			$json_kosong = 1;
		}else{
			$query = mysqli_query($con, "SELECT * FROM review ORDER BY ID_REVIEW DESC LIMIT $offset,$count");
			$count = mysqli_num_rows($query);
			if(empty($count)){
				$query = mysqli_query($con, "SELECT * FROM review ORDER BY id DESC LIMIT 0,10");
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
		$tgl	= date("d M Y H:i:s", strtotime($row['TANGGAL_REVIEW']));
		$string = substr(strip_tags($row['ISI_REVIEW']), 0, 200);
		$json .= '{
			"no": '.$num.',
			"ID_PREVIEW": "'.str_replace($char,'`',strip_tags($row['ID_REVIEW'])).'", 
				"ID_USER": "'.str_replace($char,'`',strip_tags($row['ID_USER'])).'", 
			"NAMA_USER": "'.str_replace($char,'`',strip_tags($row['NAMA_USER'])).'", 
			"TANGGAL_REVIEW": "'.str_replace($char,'`',strip_tags($tgl)).'", 
			"ISI_REVIEW": "'.str_replace($char,'`', $string." ...").'",
				
			"gambarreview": "'.str_replace($char,'`',strip_tags($row['gambarreview'])).'"},';
	}
	$json = substr($json,0,strlen($json)-1);
	if($json_kosong==1){
		$json = '[{ "no": "", "ID_PREVIEW": "", "ID_USER": "","NAMA_USER": "", "TANGGAL_REVIEW": "", "ISI_REVIEW": "", "gambarreview": ""}]';
	}else{
		$json .= ']';
	}
	echo $json;
	mysqli_close($con);

?>