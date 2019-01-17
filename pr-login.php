<?php
	session_start();
	include "koneksi.php";

 	$username= $_POST['username'];
 	$password= md5($_POST['password']);

	$sql = mysql_query("SELECT * FROM login WHERE username='$username' AND password='$password'") or die(mysql_error());
	if(mysql_num_rows($sql) == 0){
		echo '<script language="javascript">alert("Username atau Password Salah"); </script>';
	}else{
		$row = mysql_fetch_array($sql);
		if($row['level'] == 'admin'){
			$_SESSION['admin']=$username;
			
		}else{
			$_SESSION['user']=$username;
			echo '<script language="javascript">alert("Anda berhasil Login Pengunjung"); document.location="user/index_user.php";</script>';
		}
	}

?>