<?php
	include "koneksi.php";
	$id_reg_penbur = $_REQUEST['id_reg_penbur']; 
	$SQL = "UPDATE pencari_buruh SET log_session = NOW() WHERE id_reg_penbur = '$id_reg_penbur' ";
	$query = mysql_query($SQL);
	session_start();
	session_unset('AusfG-IV');
	session_destroy();
	if($query){
		header("location:../index.php");	
	} else{
		echo $id_reg_penbur;
	}	
?>