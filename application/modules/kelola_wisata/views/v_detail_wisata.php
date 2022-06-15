<!-- Page Header -->
<header class="header">
    <div class="overlay">
        <img src="<?= base_url('assets/imgs/') ?>logo.png" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, Pigga Landing page" class="logo">
        <h1 class="subtitle">Wisata</h1>
        <?php
        foreach ($view->result() as $res) :
        ?>
            <h1 class="title"><?= $res->nama_wisata ?></h1>
        <?php endforeach; ?>
        <p>Bajuin Tourism merupakan sebuah media penyedia informasi terlengkap tentang wisata yang ada di kecamatan Bajuin</p>
        <a class="btn btn-primary mt-3" href="<?= base_url('beranda/wisata') ?>">JELAJAHI</a>
    </div>
</header>
<!-- End Of Page Header -->

<!-- Wisata Section -->
<section id="wisata">
    <div class="container">
        <?php
        foreach ($view->result() as $res) :
        ?>
            <div class="row align-items-center">
                <div class="col-md-6">

                    <h6 class="section-subtitle">Wisata</h6>
                    <h3 class="section-title"><?= $res->nama_wisata ?></h3>
                    <p class="mb-1"><?= $res->deskripsi_wisata ?></span></p>
                    <a href="#book-table" class="btn btn-primary btn-sm w-md mt-4">Selengkapnya</a>
                </div>
                <div class="col-md-6">
                    <img alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, Pigga Landing page" src="<?= base_url('assets/imgs/') ?>arter1.jpg" class="w-100 rounded shadow">
                </div>
            </div>
            <div class="section-devider my-6 transparent"></div>
        <?php endforeach; ?>

    </div>
    </div>
</section>
<!-- End OF Wisata Section -->

<!-- Prefooter Section  -->
<div class="py-4 border border-lighter border-bottom-0 border-left-0 border-right-0 bg-dark">
    <div class="container">
        <div class="row justify-content-between align-items-center text-center">
            <div class="col-md-3 text-md-left mb-3 mb-md-0">
                <img src="<?= base_url('assets/imgs/') ?>navbar-brand.png" width="100" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, Pigga Landing page" class="mb-0">
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



</body>
<!-- core  -->
<script src="<?= base_url('assets/vendors/jquery/') ?>jquery-3.4.1.js"></script>
<script src="<?= base_url('assets/vendors/bootstrap/') ?>bootstrap.bundle.js"></script>

<!-- bootstrap affix -->
<script src="<?= base_url('assets/vendors/bootstrap/') ?>bootstrap.affix.js"></script>

<!-- Pigga js -->
<script src="<?= base_url('assets/js/') ?>pigga.js"></script>

</html>