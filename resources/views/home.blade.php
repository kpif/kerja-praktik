<!DOCTYPE html>
<html lang="en">
<head>
  <title>MTs Hidayatul Faizien</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/bootstrap.js">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
    /*Author Muhamad Syifa Abdul Malik & Adi Abdul Rohim*/
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 100%;
  }
  </style>
</head>
<body>
  <div class="container">
  <!--Navbar-->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark">
    <a href="">
      <img src="asset/logo.png" alt="" height="50px"  href=""> MTs Hidayatul Faizien
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">PSB</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pengumuman</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Profile
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Visi & Misi</a>
            <a class="dropdown-item" href="#">Sejarah</a>
            <a class="dropdown-item" href="#">Selayang Pandang</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Data Prestasi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Galeri</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <a href="#"><button class="btn btn-outline-success my-2 my-sm-0" type="submit">Login</button></a>
      </form>
    </div>
  </nav>
  <br><br><br><br>
  <div class="row">
    <div class="col-sm-8">
    <!--carousel-->
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="/asset/1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/asset/2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/asset/3.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<br>
    <a href="#" class="btn btn-primary btn-block">PSB Tahun 2021</a>
  </div>
    <!-- yang di samping-->
  <div class="col-sm-4">
    <div class="card">
      <div class="card-header">
        Agenda Sekolah
      </div>
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Selengkapnya</a>
      </div>
    </div>
  </div>
</div>
</body>
</html>