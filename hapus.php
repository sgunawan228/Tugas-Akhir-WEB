<?php
if (isset($_GET['id'])){
    include('koneksi.php');
	
	$id = $_GET['id'];
	$cek = mysql_query("SELECT * FROM form WHERE no='$id'");
	if(mysql_num_rows($cek) ==0){
	   echo '<sceript>window.history.back()</script>';
	}else{
	   $del = mysql_query ("DELETE FROM form WHERE no='$id'");
	   if($del){
		  	       		}else{
		    echo 'Gagal menghapus data! ';
			echo '<a href="laporan.php">Kembali</a>';
		}}
	} 
	
?>
<script>
	document.location ="laporan.php";
	</script>

