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
            <div class="card-body px-4 pb-4 ">
                <div class="row ">

                    <div class="col-md-12 text-decoration-none border border-left-0 border-top-0 border-right-0 my-4">
                        <h5 class="text-dark text-center">Deskripsi</h5>
                        <p class="text-dark text-justify"><?= $res->deskripsi_wisata ?></span></p>
                    </div>

                    <div class="col-md-12 d-block text-dark text-decoration-none border border-left-0 border-top-0 border-right-0 my-4">
                        <h5 class="text-dark">Jam Operasional</h5>
                        <p class="text-dark">Sabtu & Minggu : <span class="font-weight-normal text-dark">09:00 - 7:00 WITA</span></p>
                    </div>

                    <div class="col-md-12 d-block text-dark text-decoration-none border border-left-0 border-top-0 border-right-0 my-4">
                        <h5 class="text-dark">Fasilitas</h5>
                        <p class="text-dark">Sabtu & Minggu : <span class="font-weight-normal text-dark">09:00 - 7:00 WITA</span></p>
                    </div>

                    <div class="swiper mySwiper">

                        <div class="swiper-wrapper text-center">
                            <div class="swiper-slide">
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>
                                <img style="height: 300px; width: 300px;" src="<?= base_url('assets/imgs/') ?>chef-1.jpg">
                                <p class="text-dark my-3">CHEF 1</p>
                            </div>
                            <div class="swiper-slide">
                                <img style="height: 300px; width: 300px;" src="<?= base_url('assets/imgs/') ?>chef-2.jpg">
                                <p class="text-dark my-3">CHEF 2</p>
                            </div>
                            <div class="swiper-slide">
                                <img style="height: 300px; width: 300px;" src="<?= base_url('assets/imgs/') ?>chef-3.jpg">
                                <p class="text-dark my-3">CHEF 3</p>
                            </div>
                        </div>
                    </div>



                </div>
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

<!-- swiperjs slide -->
<script src="<?= base_url('assets/js/') ?>swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".mySwiper", {
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
</script>

</html>