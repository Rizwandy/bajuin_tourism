  <!-- Page Header -->
  <header class="header">
    <div class="overlay">
      <img src="<?= base_url('assets/imgs/') ?>logo.png" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, Pigga Landing page" class="logo">
      <h1 class="subtitle">Menu</h1>
      <h1 class="title">TENTANG</h1>
    </div>
  </header>
  <!-- End Of Page Header -->

  <!-- Tentang Section -->
  <section id="tentang">
    <div class="container">
      <h6 class="section-subtitle text-center">Developer</h6>
      <h3 class="section-title mb-5 text-center">Pembuat</h3>
      <div class="row">

        <div class="col">
          <div class="team-wrapper text-center">
            <img src="<?= base_url('assets/imgs/') ?>developer.png" class="circle-120 rounded-circle mb-3 shadow" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, Pigga Landing page">
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
  <!-- End of Tentang Section -->

  <!-- Join Section -->
  <section id="join" class="pattern-style-3">
    <div class="container">
      <h6 class="section-subtitle text-center">Join Us</h6>
      <h3 class="section-title mb-5 text-center">Bergabung bersama kami</h3>

      <div class="row">

        <div class="col">
          <div class="card">
            <div class="card-body">
              <div class="media align-items-center mb-3">
              </div>
              <p class="text-center">Anda dapat mendaftarkan wisata yang anda ketahui khususnya daerah Kecamatan Bajuin dengan cara mengisi formulir dibawah ini</p>
              <div class="row align-items-center">
                <div class="col-md-6 d-none d-md-block">
                  <img src="<?= base_url('assets/imgs/') ?>join.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, Pigga Landing page" class="w-100 rounded shadow">
                </div>
                <div class="col-md-6">
                  <form class="user" action="<?= base_url('beranda/tambahDataPengajuanWisata') ?>" method="POST">

                    <div class="form-group">
                      <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" placeholder="Nama Lengkap" required>
                    </div>

                    <div class="form-group">
                      <input type="number" class="form-control" id="nomer_wa" name="nomer_wa" placeholder="Nomer Wa" required>
                    </div>

                    <div class="form-group">
                      <input type="text" class="form-control" id="nomer_wa" name="nomer_wa" placeholder="Nama Wisata" required>
                    </div>

                    <div class="form-group">
                      <textarea class="form-control" name="deskripsi_wisata" id="" cols="30" rows="5" placeholder="Deskripsi" required></textarea>
                    </div>

                    <div class="form-group">
                      <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" required>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputFile">Masukan Foto Obyek</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <!-- Untuk mengupload gambar -->
                          <input type="file" class="custom-fileinput" id="exampleInputFile" name="foto">
                        </div>
                      </div>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block">Daftar</button>
                    <small class="form-text text-muted mt-3">Data pengelola aman tersimpan <a href="#">Privacy Policy</a></small>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- End of Tentang Section -->