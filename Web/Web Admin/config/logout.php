<?php
	session_start();
	session_unset('AusfG-IV');
	session_destroy();
	header("location:../index.php");
?>