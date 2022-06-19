<!-- Slick CSS -->
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

<!-- Detai Wisata Section -->
<section class="has-img-bg">
    <div class="container">
        <?php
        foreach ($view->result() as $res) :
        ?>
            <h6 class="section-subtitle text-center">Wisata</h6>
            <h3 class="section-title mb-6 text-center"><?= $res->nama_wisata ?></h3>
        <?php endforeach; ?>
        <div class="card bg-light">
            <div class="card-body px-4 pb-4 text-center">
                <div class="row text-left ">

                    <?php
                    foreach ($view->result() as $res) :
                    ?>
                        <div class="col-md-11 pb-3 mx-3 text-decoration-none border border-left-0 border-top-0 border-right-0 my-4">
                            <h5 class="text-dark text-center">Deskripsi</h5>
                            <p class="text-dark text-justify"><?= $res->deskripsi_wisata ?></span></p>
                        </div>
                    <?php endforeach; ?>

                    <div class="col-md-10 pb-3 mx-3 d-block text-dark text-decoration-none border border-left-0 border-top-0 border-right-0 my-4">
                        <h5 class="text-dark">Jam Operasional</h5>
                        <p class="text-dark">Sabtu & Minggu : <span class="font-weight-normal text-dark">09:00 - 7:00 WITA</span></p>
                    </div>

                    <div class="col-md-10 pb-3 mx-3 d-block text-dark text-decoration-none border border-left-0 border-top-0 border-right-0 my-4">
                        <h5 class="text-dark">Fasilitas</h5>
                        <p class="text-dark">Sabtu & Minggu : <span class="font-weight-normal text-dark">09:00 - 7:00 WITA</span></p>
                    </div>

                    <div class="col-md-10 pb-3 mx-3 d-block text-dark text-decoration-none border border-left-0 border-top-0 border-right-0 my-4">
                        <h5 class="text-dark text-center">Galeri</h5>
                        <div class="slider">
                            <div>
                                <a href="#">
                                    <img src="<?= base_url('assets/imgs/') ?>chef-1.jpg" alt="Image 1">
                                </a>
                            </div>
                            <div>
                                <a href="#">
                                    <img src="<?= base_url('assets/imgs/') ?>chef-2.jpg" alt="Image 2">
                                </a>
                            </div>
                            <div>
                                <a href="#">
                                    <img src="<?= base_url('assets/imgs/') ?>chef-3.jpg" alt="Image 3">
                                </a>
                            </div>
                        </div>
                    </div>


                </div>
                <a href="#book-table" class="btn btn-primary mt-4">Book A Table</a>
            </div>
        </div>
    </div>
</section>
<!-- End of Detail Wisata Section -->

</body>
<!-- core  -->
<script src="<?= base_url('assets/vendors/jquery/') ?>jquery-3.4.1.js"></script>
<script src="<?= base_url('assets/vendors/bootstrap/') ?>bootstrap.bundle.js"></script>

<!-- bootstrap affix -->
<script src="<?= base_url('assets/vendors/bootstrap/') ?>bootstrap.affix.js"></script>

<!-- Pigga js -->
<script src="<?= base_url('assets/js/') ?>pigga.js"></script>

<!-- SLIDER -->
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Slick JS -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<!-- Our Script -->
<script>
    $(document).ready(function() {
        $('.slider').slick({
            autoplay: true,
            autoplaySpeed: 2500,
            dots: true
        });
    });
</script>
<!-- SLIDER -->

</html>