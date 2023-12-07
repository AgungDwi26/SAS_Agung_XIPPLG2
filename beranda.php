<!doctype html> 
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

  <style>
    /* body {
      background-image: url('img/bg.jpeg');
      background-position: center; 
      background-size: cover;
      background-repeat: no-repeat;  
      height: 100vh;
    } */

    a {
      color: white; 
    }

    nav h1 {
      color: white;
    }

    .navbar-brand img {
      margin-right: 10px;
    }

    .navbar-brand, .text {
      display: flex;
      align-items: center; 
    }
    
  </style>

  <title>Sumpah Pemuda</title>

</head>

<body>

  <nav class="navbar navbar-light bg-dark justify-content-center">
    <a class="navbar-brand" href="#">
      <img src="img/icon1.png" width="10%" alt="">  
      <h1 class="text"><b>Sumpah Pemuda</b></h1> 
    </a>
  </nav>
  <div>
  <ul class="nav justify-content-center bg-secondary">
    <li class="nav-item">
      <a class="nav-link active" href="beranda.php">Beranda</a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" href="sejarah.php">Sejarah</a> 
    </li>

    <li class="nav-item active">
      <a class="nav-link active" href="tokoh.php">Tokoh</a>
    </li>

    <li class="nav-item active"> 
      <a class="nav-link active" href="buku.php">Buku Tamu</a>
    </li>
  </ul>
  </div>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/bg.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/sum.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </button>
</div>
  


  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</body> 
</html>