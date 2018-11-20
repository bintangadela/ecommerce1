<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
#form1 p {
	font-family: Tahoma, Geneva, sans-serif;
	font-size: 18px;
	font-weight: bold;
}
#form1 p label {
	color: #FFF;
}
</style>
</head>
<?php
include("login1.php");
?>

<body bgcolor="#FF9999">
<form id="form1" name="form1" method="post" action="">
  <p align="center">&nbsp;</p>
  <p align="center">
    <label >REGISTRASI USER</label>&nbsp;</p>
  <table width="362" border="1" align="center" bgcolor="#FFFFFF">
    <tr>
      <td width="217">NIM</td>
      <td width="48">:</td>
      <td width="75"><input type="text" name="nim" id="nim" /></td>
    </tr>
    <tr>
      <td>PASSWORD</td>
      <td>:</td>
      <td><input type="password" name="pass" id="pass" /></td>
    </tr>
    <tr>
      <td>ULANG PASSWORD</td>
      <td>:</td>
      <td><input type="password" name="ulang" id="ulang" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><input type="submit" name="add" id="add" value="ADD" />
      <input name="cancel" type="submit" id="cancel" value="Cancel" /></td>
    </tr>
  </table>
  <p>&nbsp;</p>
</form>

<?php

if(isset($_POST['add'])){

$nim=$_POST['nim'];
$pass=md5($_POST['pass']);
$ulang=md5($_POST['ulang']);

if($pass==$ulang)
{

$sql="INSERT INTO tblmhs1(NIM,Pass) values('$nim','$pass')";
$mysql->query($sql);
echo"succes save";
header('location:index.php');
}
else{
	echo "password ulang tidak sama dengan password";
}
}

?>
</body>
</html>