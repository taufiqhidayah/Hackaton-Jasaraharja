<?
include("../../koneksi/koneksi.php")

 $username = "";
 
 if(isset($_GET['username'])){
  $username = $_GET['username'];
 }
 
 $q = 'SELECT * FROM demo_check_username WHERE username LIKE :username';

 $query = $dbh->prepare($q);

 $query->execute(array(':username' => $username));

 if($query->rowCount() == 0){
  echo "Available";
 }else{
  echo "Username not available";
 }
 
 ?>