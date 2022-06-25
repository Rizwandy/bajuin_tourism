<!-- Page Header -->
<header class="header">
  <div class="overlay">
    <img src="<?= base_url('assets/imgs/') ?>logo.png" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, Pigga Landing page" class="logo">
    <h1 class="subtitle">Menu</h1>
    <h1 class="title">ACARA</h1>
  </div>
</header>
<!-- End Of Page Header -->

<!-- Acara Section -->
<section id="acara" class="" has-img-bg>
  <div class="container">
    <?php
    foreach ($view->result() as $res) :
    ?>
      <?php if ($res->status_acara == "Aktif") : ?>
        <div class="row-2 align-items-center">
          <div class="col-md">
            <center>
              <h6 class="section-subtitle">Acara</h6>
              <h3 class="section-title"><?= $res->nama_acara ?></h3>
              <div class="embed-responsive embed-responsive-1by2 align-items-center">
                <a href="<?= base_url('kelola_acara/detailAcara/') ?><?= $res->id_acara ?>">
                  <img style="height: 40%; width: 40%;" src="<?= base_url('assets/imgs/foto_acara/') . $res->gambar ?>">
                </a>
              </div>
          </div>
        </div>
        </center>
        <div class="section-devider my-4 transparent"></div>
      <?php endif; ?>
    <?php endforeach; ?>

  </div>
  </div>
</section>
<!-- End OF Acara Section -->

</body>
<!-- core  -->
<script src="<?= base_url('assets/vendors/jquery/') ?>jquery-3.4.1.js"></script>
<script src="<?= base_url('assets/vendors/bootstrap/') ?>bootstrap.bundle.js"></script>

<!-- bootstrap affix -->
<script src="<?= base_url('assets/vendors/bootstrap/') ?>bootstrap.affix.js"></script>

<!-- Pigga js -->
<script src="<?= base_url('assets/js/') ?>pigga.js"></script>

</html>