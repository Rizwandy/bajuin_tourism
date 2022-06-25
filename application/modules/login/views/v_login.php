<body class="bg-gradient-warning">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-lg-7">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg">
                <div class="p-5">

                  <div class="text-center">
                    <!-- <h1 class="h4 text-gray-900 mb-3"><b>SISTEM INFORMASI user ABP</b></h1> -->
                    <span style="font-size: 72px; color: #2fa3b4;">
                      <img src="<?= base_url('assets/imgs/logo.png') ?>" width="420" height="190">
                    </span>
                    <?= $this->session->flashdata('message'); ?>
                  </div>

                  <form class="user" action="<?= base_url('login') ?>" method="POST">

                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Masukkan Username..." value="<?= set_value('username') ?>">
                      <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>

                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Masukkan Kata Sandi...">
                      <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>

                    <button type="submit" class="btn btn-warning btn-user btn-block">
                      LOGIN
                    </button>

                    <div class="text-center">
                      <a href="<?= base_url('beranda') ?>" class="text-white">
                        <div class="btn btn-secondary btn-user btn-block text-center mt-3">
                          BACK
                        </div>
                      </a>
                    </div>

                  </form>

                  <hr>

                  <div class="text-center">
                    <a class="small" href="<?= base_url('auth/forgotpassword'); ?>">Lupa Password?</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="<?= base_url('login/registration'); ?>">Buat akun baru!</a>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>