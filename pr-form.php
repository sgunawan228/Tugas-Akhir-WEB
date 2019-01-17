<?php
include ('koneksi.php');

$nama_depan = $_POST['nama_depan'];
$nama_belakang = $_POST['nama_belakang'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$no_identitas = $_POST['no_identitas'];
$kota = $_POST['kota'];
$provinsi = $_POST['provinsi'];
$kode_pos = $_POST['kode_pos'];


$input= mysql_query("INSERT INTO form VALUES ('NULL','$nama_depan','$nama_belakang','$email','$alamat','$no_identitas','$kota','$provinsi','$kode_pos')") or die (mysql_error());
if ($input) {
	

} else {
	
	echo 'Gagal menambahkan data!';
	echo '<a href="form.php">Kembali</a>';
	
}
?>
	<script>
		document.location ="berhasil.php";
	</script>