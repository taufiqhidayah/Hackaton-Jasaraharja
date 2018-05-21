<?php
error_reporting(0);
include "koneksi/koneksi.php";
if(isset($_POST['login'])){
function antiinjection($data){
 $filter_sql = mysql_real_escape_string(stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES))));
 return $filter_sql;
}
 
$username = antiinjection($_POST['username']);
$pass = antiinjection($_POST['password']);
 
$login = mysql_query("SELECT * FROM admin WHERE USERNAME_ADMIN='$username' AND PASSWORD_ADMIN='$pass'");
$ketemu= mysql_num_rows($login);
$r = mysql_fetch_array($login);
 $folder=$r['folder'];
// Apabila username dan password ditemukan
if ($ketemu>0){
 session_start();
 $_SESSION['username'] = $r['USERNAME_ADMIN'];
 $_SESSION['password'] = $r['PASSWORD_ADMIN'];
echo" 
<meta http-equiv='refresh' content='0; modul/$folder'>
 ";
}
else{
 echo "
 <script>
 alert('Username atau Password Anda tidak berlaku !');
 </script>
 <meta http-equiv='refresh' content='0;'>
 ";
}
}else{
	
}
?>