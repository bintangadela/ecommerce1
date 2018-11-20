<?php
//memulai penggunaan session
session_start();

//set session
$_SESSION['login'] =false;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
#form1 table tr td label b {
	font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
	font-size: 24px;
	font-weight: bold;
	text-align: center;
	color: #FFF;
}
#form1 table tr td #login {
	font-weight: bold;
	font-size: 16px;
	color: #F03;
}
#form1 table tr td #textfield {
	color: #CCC;
	font-size: 16px;
	text-align: center;
}
#form1 table tr td #textfield2 {
	font-size: 16px;
	text-align: center;
}
</style>
</head>

<body bgcolor="#FF6699" topmargin="60%" >
<form id="form1" name="form1" method="post" action="ceklogin.php">
<label></label>
  <table width="621" height="218" border="3" align="center" cellpadding="3" cellspacing="3" bgcolor="#FFFFFF">
    <tr>
      <td width="232" align="center" bgcolor="#999999" ><label ><b>LOGIN TO SYSTEM</b></label></td>
    </tr>
    <tr>
      <td align"center"><input type="text" name="nim" id="nim" placeholder="NIM" size="100"  /> </td>
    </tr>
    <tr>
      <td><input type="password" name="pass" id="pass" placeholder="Masukkan Password" size="100"/></td>
    </tr>
    <tr>
      <td align="center" bgcolor="#999999"><input type="submit" name="Login" id="Login" value="LOGIN"  /></td>
     </tr>
     <tr>
      <td align="center" bgcolor="#999999"><button name="regis" type="submit" ><a href="registrasi.php"> REGISTRASI </a></button> </td>
     </tr>
     
  <?php  
  //jika mendapatkan parameter $_GET['p']
   if(isset($_GET['p'])){ 
  ?>
  <div class="pesan">
  <?php echo $_GET['p'];?>
  </div>
  <?php } ?>
 </table>
  
</form>
</body>
</html>
