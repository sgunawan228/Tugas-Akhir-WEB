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
          member
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Log In</a>
          <a class="dropdown-item" href="#">Sign Up</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
<br />

<div class="container">
  <div class="row">
    <div class="col-md-6 offset-md-3 ">
        <form action="pr-login.php" method="POST">
  <div class="form-group">
    <label for="inputemail">Username</label>
    <input type="username" name="username" class="form-control" aria-describedby="emailHelp" placeholder="Enter username">
  </div>
  <div class="form-group">
    <label for="inputpassword">Password</label>
    <input type="password" name="password" class="form-control" placeholder="Password">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Log in</button>
  <button type="submit" class="btn btn-primary">Sign Up</button>
</form>
    </div>
  </div>
</div>
<!-- Footer -->
<footer class="page-footer font-small mdb-color pt-4">

    <!-- Footer Links -->
    <div class="container text-center text-md-left">

      <!-- Footer links -->
      <div class="row text-center text-md-left mt-3 pb-3">

        <!-- Grid column -->
        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
          <h6 class="text-uppercase mb-4 font-weight-bold">Ketahui Lebih Lanjut</h6>
          <p>Banyak orang mengatakan bahwa kamu tidak bisa meningkatkan kesempurnaan. Namun dengan Produk kami yang baru ini, 
		  kami telah membuktikan bahwa mereka salah karena kami berhasil melakukan peningkatan signifikan dan membuatnya jauh lebih baik dari generasi sebelumnya.</p>
        </div>
        <!-- Grid column -->

        <hr class="w-100 clearfix d-md-none">


        <hr class="w-100 clearfix d-md-none">

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
          <h6 class="text-uppercase mb-4 font-weight-bold">Butuh Bantuan</h6>
          <p>
            <a href="#!">Hubungi Kami</a>
          </p>
          <p>
            <a href="#!">Registrasi Produk</a>
          </p>
          <p>
            <a href="#!">Download Product Guide</a>
          </p>
          <p>
            <a href="#!">Help</a>
          </p>
        </div>

        <!-- Grid column -->
        <hr class="w-100 clearfix d-md-none">

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
          <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
          <p>
            <i class="fa fa-home mr-3"></i> Semarang, Jawa Tengah</p>
          <p>
            <i class="fa fa-envelope mr-3"></i> info@gmail.com</p>
          <p>
            <i class="fa fa-phone mr-3"></i> +62 8968 880 9038</p>
        </div>
        <!-- Grid column -->

      </div>
      <!-- Footer links -->

      <hr>

      <!-- Grid row -->
      <div class="row d-flex align-items-center">

        <!-- Grid column -->
        <div class="col-md-7 col-lg-8">

          <!--Copyright-->
          <p class="text-center text-md-left">© 2018 Copyright:
            <a href="#">
              <strong>Pemrograman Berbasis Web</strong>
            </a>
          </p>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-5 col-lg-4 ml-lg-0">

          <!-- Social buttons -->
          <div class="text-center text-md-right">
            <ul class="list-unstyled list-inline">
              <li class="list-inline-item">
                <a class="btn-floating btn-sm rgba-white-slight mx-1">
                  <i class="fa fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn-floating btn-sm rgba-white-slight mx-1">
                  <i class="fa fa-instagram"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn-floating btn-sm rgba-white-slight mx-1">
                  <i class="fa fa-google-plus"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn-floating btn-sm rgba-white-slight mx-1">
                  <i class="fa fa-twitter"></i>
                </a>
              </li>
            </ul>
          </div>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Links -->

  </footer>
  <!-- Footer -->
</html>