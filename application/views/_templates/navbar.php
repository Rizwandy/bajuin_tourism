  <!-- First Navigation -->
  <nav class="navbar nav-first navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="<?= base_url('assets/imgs/') ?>navbar-brand.png" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, Pigga Landing page">
        <span class="pl-2 text-muted">BAJUIN TOURISM</span>
      </a>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link text-primary" href="mailto:bajuintourism@gmail.com?subject=Feedback&body=Message"><span class="ti-email"> </span>bajuintourism@gmail.com</span></a>
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
            <a class="nav-link" href="<?= base_url('beranda') ?>">BERANDA</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('beranda/wisata') ?>">DESTINASI</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('beranda/acara') ?>">ACARA</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('beranda/tentang') ?>">TENTANG</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('login') ?>">LOGIN</a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="btn btn-primary btn-sm scroll-to-top rounded" href="<?= base_url('beranda/tentang/#join') ?>">
              JOIN US
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Of Second Navigation -->