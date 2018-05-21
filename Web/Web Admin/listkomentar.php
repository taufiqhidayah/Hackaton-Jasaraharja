<?php
include_once "koneksinews.php";
	sleep(2);
	$id=$_POST['id'];
	$offset = isset($_GET['offset']) && $_GET['offset'] != '' ? $_GET['offset'] : 0;
	$all = mysqli_query($con, "SELECT * FROM komentar WHERE ID_BERITA=$id ORDER BY ID_BERITA DESC");
	$count_all = mysqli_num_rows($all);
	$query = mysqli_query($con, "SELECT * FROM komentar WHERE  ID_BERITA=$id ORDER BY ID_BERITA DESC LIMIT $offset,10");
	$count = mysqli_num_rows($query);
	$json_kosong = 0;
	if($count<10){
		if($count==0){
			$json_kosong = 1;
		}else{
			$query = mysqli_query($con, "SELECT * FROM komentar WHERE  ID_BERITA=$id ORDER BY ID_BERITA  DESC LIMIT $offset,$count");
			$count = mysqli_num_rows($query);
			if(empty($count)){
				$query = mysqli_query($con, "SELECT * FROM komentar WHERE  ID_BERITA=$id ORDER BY ID_BERITA DESC LIMIT 0,10");
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
		$tgl	= date("d M Y H:i:s", strtotime($row['TANGGAL_KOMENTAR']));

		$json .= '{
			"no": '.$num.',
			"ID_KOMENTAR": "'.str_replace($char,'`',strip_tags($row['ID_KOMENTAR'])).'", 

			"nama": "'.str_replace($char,'`',strip_tags($row['NAMA_KOMENTAR'])).'", 
			"tgl": "'.str_replace($char,'`',strip_tags($tgl)).'", 
		
				
			"isi": "'.str_replace($char,'`',strip_tags($row['ISI_KOMENTAR'])).'"},';
	}
	$json = substr($json,0,strlen($json)-1);
	if($json_kosong==1){
		$json = '[{ "no": "", "id": "", "nama": "","tgl": "", "isi": ""}]';
	}else{
		$json .= ']';
	}
	echo $json;
	mysqli_close($con);

?>