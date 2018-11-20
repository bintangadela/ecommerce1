<?php
session_start();

//cek apakah user sudah login

if($_SESSION['login']== false){
	header('location: index.php');
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
.bin {
	font-weight: bold;
	color: #FFF;
	font-size: 24px;
	font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
	
}
</style>
</head>

<body bgcolor="#FF6666">
 
   <a href="index.php"> <input type="submit" name="login" id="button" value="LOGIN" /></a>
    <a href="keluar.php"><input type="submit" name="button2" id="button2" value="KELUAR" />
    <a href="registrasi.php"> <input type="submit" name="mas" id="mas" value="Master User" />
  </p>
  <p align="center"><label class="bin">APLIKASI PENERIMAAN MAHASISWA BARU</label>&nbsp;</p>
  <p>&nbsp;</p>
  <p><label></label>&nbsp;</p>
  <p>&nbsp;</p>

</body>
</html>