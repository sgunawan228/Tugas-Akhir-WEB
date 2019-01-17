<!DOCTYPE html>
<html>
<head>
<title>Web</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="container">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="news.php">News <span class="sr-only">(current)</span></a>
      </li>
	        <li class="nav-item">
        <a class="nav-link" href="form.php">Buy</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Member
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="login.php">Log In</a>
          <a class="dropdown-item" href="#">Sign Up</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
<br />
<div class="table-responsive"> 
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/Untitled-3.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/cover2.jpg" alt="Second slide">
    </div>
	<div class="carousel-item">
      <img class="d-block w-100" src="img/cover3.png" alt="Second slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<br />
<div class="table-responsive">
<div class="container">
  <h2>Laporan </h2> 
  <table class="table">
      <tr>
        <th>No.</th>
        <th>Nama Depan</th>
        <th>Nama Belakang</th>
        <th>Email</th>
        <th>Alamat</th>
        <th>No Identitas</th>
        <th>Kota</th>
        <th>Provinsi</th>
        <th>Kode Pos</th>
        <th>Opsi</th>
      </tr>
			
			<?php
		include('koneksi.php');
		$query = mysql_query("SELECT * FROM form ORDER BY no DESC") or die (mysql_error());
		if(mysql_num_rows($query)==0){
		echo '<tr><td colspan="4">Tidak ada data!</td></tr>';
	}else{
		$no = 1;
		while($data = mysql_fetch_assoc($query)){

		echo '<td>'.$no.'</td>';
		echo '<td>'.$data['nama_depan'].'</td>';
		echo '<td>'.$data['nama_belakang'].'</td>';
		echo '<td>'.$data['email'].'</td>';
		echo '<td>'.$data['alamat'].'</td>';
		echo '<td>'.$data['no_identitas'].'</td>';
		echo '<td>'.$data['kota'].'</td>';
		echo '<td>'.$data['provinsi'].'</td>';
		echo '<td>'.$data['kode_pos'].'</td>';
		
echo '<td><a href="#?id='.$data['no'].'">Edit</a> / <a href="hapus.php?id='.$data['no'].'"
	onclick="return confirm(\'Yakin?\')"> Hapus</a></td>';
		echo '</tr>';
		
			$no++;
		}
	}
	?>


</div>
</div>

</body>
</html>
