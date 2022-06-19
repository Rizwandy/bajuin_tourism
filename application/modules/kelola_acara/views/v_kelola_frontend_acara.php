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
      <div class="row-2 align-items-center">
        <div class="col-md">
          <center>
            <h6 class="section-subtitle">Acara</h6>
            <h3 class="section-title"><?= $res->judul ?></h3>
            <div class="col-md-6">
              <a href="<?= base_url('kelola_acara/detailAcara/') ?><?= $res->id_acara ?>">
                <img alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, Pigga Landing page" src="<?= base_url('assets/imgs/foto_event/') ?>campingceria2020.jpg" class="w-100 rounded shadow">
              </a>
            </div>
        </div>
      </div>
      </center>
      <div class="section-devider my-4 transparent"></div>
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