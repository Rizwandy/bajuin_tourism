<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with Pigga landing page.">
  <meta name="author" content="Devcrud">
  <title>BAJUIN TOURISM</title>

  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin="" />

  <style type="text/css">
    #mapid {
      height: 500px;
    }
  </style>

  <!-- font icons -->
  <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">
  <!-- Bootstrap + Pigga main styles -->
  <link rel="stylesheet" href="assets/css/pigga.css">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">


  <!-- First Navigation -->
  <nav class="navbar nav-first navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="assets/imgs/navbar-brand.png" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, Pigga Landing page">
        <span class="pl-2 text-muted">BAJUIN TOURISM</span>
      </a>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link text-primary" href="#home">Website : <span class="pl-2 text-muted">Dinas Pariwisata Tanah Laut</span></a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- End of First Navigation -->
  <!-- Second Navigation -->
  <nav class="nav-second navbar custom-navbar navbar-expand-sm navbar-dark bg-dark sticky-top">
    <div class="container">
      <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="#about">BERANDA</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#service">DESTINASI</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#team">TENTANG</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('login') ?>">LOGIN</a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="btn btn-primary btn-sm scroll-to-top rounded" href="#page-down">
              JOIN US
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Of Second Navigation -->
  <!-- Page Header -->
  <header class="header">
    <div class="overlay">
      <img src="assets/imgs/logo.png" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, Pigga Landing page" class="logo">
      <h1 class="subtitle">Selamat Datang di</h1>
      <h1 class="title">BAJUIN TOURISM</h1>
      <p>Bajuin Tourism merupakan sebuah media penyedia informasi terlengkap tentang wisata yang ada di kecamatan Bajuin</p>
      <a class="btn btn-primary mt-3" href="#book-table">JELAJAHI</a>
    </div>
  </header>
  <!-- End Of Page Header -->

  <!-- Wisata Section -->
  <section id="wisata">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6">
          <h6 class="section-subtitle">Wisata</h6>
          <h3 class="section-title">Air Terjun Bajuin</h3>
          <p class="mb-1 font-weight-bold">Senin - Kamis : <span class="font-weight-normal pl-2 text-muted">09:00 - 15:00 WITA</span></p>
          <p class="mb-1 font-weight-bold">Jum'at : <span class="font-weight-normal pl-2 text-muted">02:00 - 16:00 WITA</span></p>
          <p class="mb-1 font-weight-bold">Sabtu - Minggu : <span class="font-weight-normal pl-2 text-muted">09:00 - 17:00 WITA</span></p>
          <a href="#book-table" class="btn btn-primary btn-sm w-md mt-4">Selengkapnya</a>
        </div>
        <div class="col-md-6">
          <img alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, Pigga Landing page" src="assets/imgs/arter1.jpg" class="w-100 rounded shadow">
        </div>
      </div>
    </div>
  </section>
  <!-- End OF Wisata Section -->

  <!-- Menu Section -->
  <section class="has-img-bg">
    <div class="container">
      <h6 class="section-subtitle text-center">Destination</h6>
      <h3 class="section-title mb-6 text-center">Destinasi</h3>
      <div class="card bg-light">
        <div class="card-body px-4 pb-4 text-center">

          <div class="row justify-content-center">
            <div class="col-10 video">
              <div class="row">
                <div class="col-lg">
                  <iframe height="200px" width="200px" src="https://www.youtube.com/watch?v=Obnk7ZXZrOA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="col-lg">
                  <iframe height="200px" width="200px" src="https://www.youtube.com/watch?v=dOVlpN0qXUw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="col-lg">
                  <iframe height="200px" width="200px" src="https://www.youtube.com/watch?v=zye-gLJpiok" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
              </div>
            </div>
          </div>
          <!-- <div class="col-md-6 my-4">
              <a href="#" class="pb-3 mx-3 d-block text-dark text-decoration-none border border-left-0 border-top-0 border-right-0">
                <div class="d-flex">
                  <div class="flex-grow-1">
                    Dolorem Exmaiores
                    <p class="mt-1 mb-0">Numquam dolor dolores molestiae maiores quidem.</p>
                  </div>
                  <h6 class="float-right text-primary">$12</h6>
                </div>
              </a>
            </div>
            <div class="col-md-6 my-4">
              <a href="#" class="pb-3 mx-3 d-block text-dark text-decoration-none border border-left-0 border-top-0 border-right-0">
                <div class="d-flex">
                  <div class="flex-grow-1">
                    Aperiam incidunt dicta
                    <p class="mt-1 mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  </div>
                  <h6 class="float-right text-primary">$23</h6>
                </div>
              </a>
            </div>
            <div class="col-md-6 my-4">
              <a href="#" class="pb-3 mx-3 d-block text-dark text-decoration-none border border-left-0 border-top-0 border-right-0">
                <div class="d-flex">
                  <div class="flex-grow-1">
                    Animi repellat labore
                    <p class="mt-1 mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  </div>
                  <h6 class="float-right text-primary">$32</h6>
                </div>
              </a>
            </div>
            <div class="col-md-6 my-4">
              <a href="#" class="pb-3 mx-3 d-block text-dark text-decoration-none border border-left-0 border-top-0 border-right-0">
                <div class="d-flex">
                  <div class="flex-grow-1">
                    Quo ipsum similique
                    <p class="mt-2 mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  </div>
                  <h6 class="float-right text-primary">$17</h6>
                </div>
              </a>
            </div>
            <div class="col-md-6 my-4">
              <a href="#" class="pb-3 mx-3 d-block text-dark text-decoration-none border border-left-0 border-top-0 border-right-0">
                <div class="d-flex">
                  <div class="flex-grow-1">
                    Est nam tempore
                    <p class="mt-2 mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  </div>
                  <h6 class="float-right text-primary">$21</h6>
                </div>
              </a>
            </div>
            <div class="col-md-6 my-4">
              <a href="#" class="pb-3 mx-3 d-block text-dark text-decoration-none border border-left-0 border-top-0 border-right-0">
                <div class="d-flex">
                  <div class="flex-grow-1">
                    Nesciunt ab veniam
                    <p class="mt-2 mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  </div>
                  <h6 class="float-right text-primary">$10</h6>
                </div>
              </a>
            </div> -->
          <a href="#book-table" class="btn btn-primary mt-4">Cari Wisata</a>
        </div>
      </div>
    </div>
  </section>
  <!-- End of Menu Section -->

  <!-- Team Section -->
  <section id="team">
    <div class="container">
      <h6 class="section-subtitle text-center">Developer</h6>
      <h3 class="section-title mb-5 text-center">Pembuat</h3>
      <div class="row">

        <div class="col">
          <div class="team-wrapper text-center">
            <img src="assets/imgs/developer.png" class="circle-120 rounded-circle mb-3 shadow" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, Pigga Landing page">
            <h5 class="my-3">Muhammad Rizky Riswandi</h5>
            <p>Hallo gua hanya manusia biasa yang suka mie ayam dan bermain musik</p>
            <h6 class="socials mt-3">
              <a href="javascript:void(0)" class="px-2"><i class="ti-facebook"></i></a>
              <a href="javascript:void(0)" class="px-2"><i class="ti-twitter"></i></a>
              <a href="javascript:void(0)" class="px-2"><i class="ti-instagram"></i></a>
              <a href="javascript:void(0)" class="px-2"><i class="ti-google"></i></a>
            </h6>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- End of Team Section -->

  <!-- Testmonial Section -->
  <section id="testmonial" class="pattern-style-3">
    <div class="container">
      <h6 class="section-subtitle text-center">Join Us</h6>
      <h3 class="section-title mb-5 text-center">Bergabung bersama kami</h3>

      <div class="row">

        <div class="col">
          <div class="card">
            <div class="card-body">
              <div class="media align-items-center mb-3">
              </div>
              <p class="text-center">Anda dapat mendaftarkan wisata yang anda ketahui khususnya daerah Kecamatan Bajuin dengan cara mengisi formulis dibawah ini</p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- End of Testmonial Section -->


  <!-- Book Table Section -->
  <section id="book-table" class="bg-white">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 d-none d-md-block">
          <img src="assets/imgs/join.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, Pigga Landing page" class="w-100 rounded shadow">
        </div>
        <div class="col-md-6">
          <form>
            <div class="form-group">
              <input type="text" class="form-control" id="nama" placeholder="Nama Lengkap">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your Name">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="alamat" placeholder="Alamat">
            </div>
            <div class="form-group">
              <input type="number" class="form-control" name="no_wa" placeholder="Nomor WhatsApp">
            </div>
            <div class="form-group">
              <input type="datetime-local" class="form-control" name="date">
            </div>
            <div class="form-group">
              <input type="number" class="form-control" name="seats" placeholder="Seats">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Book A Table</button>
            <small class="form-text text-muted mt-3">We don't span customers. Check our <a href="#">Privacy Policy</a></small>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- End OF Book Table Section -->

  <!-- Prefooter Section  -->
  <div class="py-4 border border-lighter border-bottom-0 border-left-0 border-right-0 bg-dark">
    <div class="container">
      <div class="row justify-content-between align-items-center text-center">
        <div class="col-md-3 text-md-left mb-3 mb-md-0">
          <img src="assets/imgs/navbar-brand.png" width="100" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, Pigga Landing page" class="mb-0">
        </div>
        <div class="col-md-9 text-md-right">
          <a href="#" class="px-3"><small class="font-weight-bold">About</small></a>
          <a href="#" class="px-3"><small class="font-weight-bold">Contact</small></a>
          <a href="components.html" class="pl-3"><small class="font-weight-bold">Components</small></a>
        </div>
      </div>
    </div>
  </div>
  <!-- End of PreFooter Section -->

  <!-- Page Footer -->
  <footer class="border border-dark border-left-0 border-right-0 border-bottom-0 p-4 bg-dark">
    <div class="container">
      <div class="row align-items-center text-center text-md-left">
        <div class="col">
          <p class="mb-0 small">&copy; <script>
              document.write(new Date().getFullYear())
            </script>, Bajuin Tourism All rights reserved </p>
        </div>
        <div class="d-none d-md-block">
          <h6 class="small mb-0">
            <a href="javascript:void(0)" class="px-2"><i class="ti-facebook"></i></a>
            <a href="javascript:void(0)" class="px-2"><i class="ti-twitter"></i></a>
            <a href="javascript:void(0)" class="px-2"><i class="ti-instagram"></i></a>
            <a href="javascript:void(0)" class="px-2"><i class="ti-google"></i></a>
          </h6>
        </div>
      </div>
    </div>

  </footer>
  <!-- End of Page Footer -->

  <!-- core  -->
  <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
  <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>

  <!-- bootstrap affix -->
  <script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>

  <!-- Pigga js -->
  <script src="assets/js/pigga.js"></script>

</body>

</html>