<?php
include("login1.php");
session_start();
$nim =($_POST['nim']);
$pass = md5($_POST['pass']);

$sql="select nim,pass from tblmhs1 where nim='$nim'";
$tabel = $mysql->query($sql);
$row = $tabel->fetch_assoc();
 
 //mengecek nilai user dan pass
 
 if(!empty($nim) and !empty($pass)){
	 if(($nim == $row['nim']) && ($pass == $row['pass']))
	 {
		 $_SESSION['login'] =true;
		 $_SESSION['nim'] =$nim;
		 
		 
	 header('location: home.php');
	 }else{
		 header('location: index.php?p=username dan password anda salah');}
 }else{
			header('location: index.php?p=username dan password tidak boleh kosong');}
 
			
				 
			 
	
?>