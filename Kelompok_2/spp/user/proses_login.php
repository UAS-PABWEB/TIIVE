<?php
error_reporting(0);
include("conn.php");
//form login
$username = $_POST['username'];
$password = $_POST['password'];



//untuk mencegah sql injection
//kita gunakan mysql_real_escape_string
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);


//cek data yang dikirim
if  (empty($username) && empty ($password)) {
	//jika username dan password kosong
	?><script language="javascript">alert("Login belum di isi !"); location.href="index.php";</script><?php
} else if (empty($username)) {
	//jika username saja yang kosong
	?><script language="javascript">alert("Username belum di isi !"); location.href="index.php";</script><?php
} else if (empty($password)) {
	//jika password saja yang kosong
	?><script language="javascript">alert("Password belum di isi !"); location.href="index.php";</script><?php
}



$query = mysql_query("select * from admin where username='$username' and password='$password'");
$cek=mysql_num_rows($query);
$row=mysql_fetch_array($query);


	if ($cek)  {
	$_SESSION['username'] = $username;
	$_SESSION['password'] = MD5($password);
	
	
	?><script language="javascript">alert("Login Success!"); location.href="admin/index.php";</script><?php
	}
	else
	{
	?><script language="javascript">alert("Username atau Password anda Salah!"); location.href="index.php";</script><?php
	}
	
	
?>
