<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    
    
</head>
  <body>
    <br>
    <H1>Sistem Informasi Wisata Kota Depok - SIWIKODE  </H1>
    <br>
  <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="home.html"><b>Home</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link active"  href="halaman_rekreasi.html"><b>Wisata Rekreasi</b></a>
          </li>
         
          <li class="nav-item">
            <a class="nav-link active" href="halaman_kuliner.html"><b>Wisata Kuliner </b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="registrasi_rekreasi.html"><b>Registrasi </b></a>
          </li>
        </ul>
        <form class="d-flex">
          <a class="btn btn-outline-success" href="<?php base_url()?>index.php/login/login">Login</a>
        </form>
      </div>
    </div>
  </nav>
  <br>
      <br>
      <div class="container">
        <h2>Wisata dan Rekreasi Unggulan Kota Depok</h2>
        <div class="row row-cols-1 row-cols-md-3 g-4">
          <div class="col">
            <div class="card h-100">
              <div class="card-body">
                <h5 class="card-title">Wisata Alam 99 Pepohonan</h5>
                <br>
                <p class="text">
                  <img src="img/99.jpg" alt="wisata" class="gambar">
                  Nama tempat wisata yang pertama ini memang unik. Cocok untuk mereka yang mencari suasana tenang, damai dan terasa sejuk setelah beraktivitas cukup padat dalam satu minggu penuh..</p>
              </div>
              <a href="detail_kampung.html" class="card-text">Detail</a>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <div class="card-body">
                <h5 class="card-title">Kubah Emas</h5>
                <br>
                <p class="text">
                  <img src="img/kubah.jpg" class="gambar" alt="Kubah">
                  Lebih tepatnya, mereka yang datang ke Masjid Kubah Emas ini tak hanya untuk beribadah tetapi juga wisata religi. Namanya adalah Masjid Kubah Emas atau Masjid Dian Al Mahri yang menjadi masjid kebanggaan kota Depok.</p>
              </div>
              <a href="detail_kubah.html" class="card-text">Detail</a>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <div class="card-body">
                <h5 class="card-title">Soto Bu Tjondro</h5>
                <br>
                <p class="text">
                  <img src="img/soto.jpg" class="gambar" alt="soto">
                  Setiap harinya, Soto Bu Tjondro buka pukul 10:00 – 22:00 dan biasanya akan ramai saat jam makan siang. Jadi, pastikan kamu datang lebih awal jika tidak ingin kehabisan tempat duduk ya.</p>
              </div>
              <a href="detail_soto.html" class="card-text">Detail</a>
            </div>
          </div>
        </div>
      </div>
      <br><br>
      <footer>
        <h6>Develope By Mahasiswa STT-NF | 2020</h6>
      </footer>
  </body>
  <style>
    h1 {
    text-align: center;
    font-family: cursive;
  }

  footer {
  bottom: 0;
  padding: 20px 15px;
  width: 100%;
background-color: black;
  color: white;
  }

  .gambar {
    width: 130px; 
    height: 100px;
    float: left;
    margin-right: 10px;
  }

  .card-text {
    margin-left: 160px;
    text-align: justify;
  }

  .detail {
    padding-left: 160px;
  }

  .text {
    text-align: justify;
  }
  </style>
</html>