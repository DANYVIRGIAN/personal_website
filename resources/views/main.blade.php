<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
   
    {{--Font Awesome CSS--}}
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<script src="https://kit.fontawesome.com/637be06f27.js" crossorigin="anonymous"></script>

  <!-- My Css -->
  <link rel="stylesheet" href="style.css" />

  <title>My Portfolio | Dany Achmad Virgian</title>
</head>

<body id="home">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark shadow fixed-top" style="background-color: black">
    <div class="container">
      <a class="navbar-brand">My Portofolio</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About Me</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#portofolio">Portofolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#footer">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->

  <!-- Hero Section -->
  <section class="jumbotron text-center">
    <img src="img/WhatsApp Image 2022-02-17 at 17.07.27 Cropped.jpg" alt="Dany" width="200px"
      class="rounded-circle img-thumbnail" />
    <h1 class="display-4">Dany Achmad Virgian </h1>
    <p class="lead">Software Developer | Back End Developer.</p>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#ffffff" fill-opacity="1"
        d="M0,0L48,16C96,32,192,64,288,90.7C384,117,480,139,576,133.3C672,128,768,96,864,122.7C960,149,1056,235,1152,234.7C1248,235,1344,149,1392,106.7L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
      </path>
    </svg>
  </section>
  <!-- End Hero -->

  <!-- About Us -->
  <section id="about">
    <div class="container">
      <div class="row mb-3">
        <div class="col text-center">
          <h2>About Me</h2>
        </div>
      </div>
      <div class="row justify-content-center fs-5 text-center">
        <div class="col-md-4">
          <p>Saya merupakan lulusan SMK Telkom Malang jurusan
            Rekayasa Perangkat Lunak dengan fokus materi Framework
            Laravel dan Vue</p>
        </div>
        <div class="col-md-4">
          <p>Saat ini saya mendalami materi Bahasa
            Pemrograman PHP Native, PHP Laravel, HTML, CSS, JavaScript
            dan Database MySQL. Keahlian saya yang lain yaitu saya
            mampu untuk mengedit video dan foto</p>
        </div>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#979797" fill-opacity="1"
        d="M0,224L48,229.3C96,235,192,245,288,229.3C384,213,480,171,576,128C672,85,768,43,864,48C960,53,1056,107,1152,160C1248,213,1344,267,1392,293.3L1440,320L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
      </path>
    </svg>
  </section>
  <!-- End About -->

  <!-- Portofolio -->
  <section id="portofolio">
    <div class="container">
      <div class="row text-center mb-3">
        <div class="col">
          <h2>My Portofolio</h2>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-4 mb-3">
          <div class="card" style="height: 4.3in;">
            <img src="img/bakulpanen.jpeg" class="card-img-top" alt="Project 1">
            <div class="card-body">
              <p class="text-center fw-bold">BAKUL PANEN</p>
              <p class="card-text">Aplikasi Framework Laravel dan Vuejs. CRUD. Sebuah
                Marketplace yang menghubungkan antara petani dan
                pembeli</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card">
            <img src="img/pengaduan.png" class="card-img-top" alt="Project 2">
            <div class="card-body">
              <p class="text-center fw-bold">Pengaduan Masyarakat</p> 
              <p class="card-text">Aplikasi Framework Laravel dan Vuejs. CRUD untuk mengelola
                data pengaduan masyarakat yang terconnect melalui
                database MySQL. Terdapat pengatur petugas yang bertugas
                untuk memperoses setiap aduan yang terkoneksi antara satu
                tabel dengan tabel yang lain</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card" style="height: 4.3in;">
            <img src="img/kelolart.png" class="card-img-top" alt="Project 3">
            <div class="card-body">
              <p class="text-center fw-bold">Kelola Warga RT</p>
              <p class="card-text">Aplikasi Framework Laravel CRUD untuk mengelola data
                warga dalam suatu lingkungan rt, yang terconnect melalui
                database MySQL. Juga dapat mengelola data rumah , dan
                data iuran yang terkoneksi satu sama lain.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card" style="height: 4.3in;">
            <img src="img/Inventroey.png" class="card-img-top" alt="Project 3">
            <div class="card-body">
              <p class="text-center fw-bold">Kelola Inventory</p>
              <p class="card-text">Aplikasi yang dibuat untuk memasukkan sebuah produk atau barang menggunakan CRUD
                  yang terkoneksi melalui database MySQL
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card" style="height: 4.3in;">
            <img src="img/ppm.png" class="card-img-top" alt="Project 3">
            <div class="card-body">
              <p class="fw-bold">Company Profile PT Pilar Putra Mahakam</p>
              <p class="card-text">Sebuah Company profile website yang menggunakan
                HTML dan CSS untuk perusahaan PT Pilar Putra Mahakam</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,192L48,186.7C96,181,192,171,288,160C384,149,480,139,576,144C672,149,768,171,864,170.7C960,171,1056,149,1152,160C1248,171,1344,213,1392,234.7L1440,256L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>  </section>
  <!-- End Portofolio -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row justifi-content-center">

                <div class="col-lg-6 col-md-6 footer-links">
                    <h4>My Contact</h4>
                    <ul>
                        <li><i class="fa-brands fa-instagram"></i> <a href="https://www.instagram.com/danyav.7/">danyav.7</a></li>
                        <li><i class="fa-brands fa-facebook-square"></i> <a href="https://www.facebook.com/profile.php?id=100010647246534&viewas=&show_switched_toast=false&show_switched_tooltip=false&is_tour_dismissed=false&is_tour_completed=false&show_podcast_settings=false&show_invite_to_follow=false&show_community_transition=false&show_community_review_changes=false&should_open_composer=false&badge_type=NEW_MEMBER&show_community_rollback_toast=false">Dany Achmad Virgian</a></li>
                        <li><i class="fa-brands fa-github-square"></i> <a href="https://github.com/DANYVIRGIAN">DANYVIRGIAN</a></li>
                        <li><i class="fa-brands fa-linkedin"></i> <a href="https://www.linkedin.com/in/dany-achmad-virgian-b1b436216/">Dany Achmad Virgian</a></li>
                    </ul>
                </div>

                <div class="col-lg-6 col-md-6 footer-contact">
                    <h4>My Address</h4>
                    <p>
                        Indonesia. <br>
                        Jawa Timur, Kota Malang, Kecamatan Kedungkandang,
                        Kelurahan Kotalama, Jl Laks Martadinata VI/19 <br><br>
                        <!-- <strong><i class="bi bi-envelope-fill"></i></strong> +1 5589 55488 55<br> -->
                        <strong><i class="fa-solid fa-envelope"></i></strong> danyav41@gmail.com<br>
                    </p>

                </div>

            </div>
        </div>
    </div>
</footer>
<!-- End Footer -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>