<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mt-4 mb-4 text-gray-800">Kelola Pengguna</h1>
  <div class="card shadow mb-4">
    <div class="card-body">

      <!-- Header -->
      <?php if ($user["id_level_user"] == 1) : ?>
        <div class="text-right">
          <button type="button" data-toggle="modal" data-target="#tambahModal" class="btn btn-success btn-icon-split mb-3">
            <span class="icon text-white-50">
              <i class="fas fa-plus"></i>
            </span>
            <span class="text">Tambah</span>
          </button>
        </div>
      <?php endif; ?>

      <!-- Alert -->
      <?= $this->session->flashdata('message'); ?>

      <!-- Tabel -->
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Gambar</th>
              <th>Username</th>
              <th>Nama</th>
              <th>Nomor WA</th>
              <th>Jenis Kelamin</th>
              <th>Status</th>
              <?php if ($user["id_level_user"] == 1) : ?>
                <th>
                  Aksi
                </th>
              <?php endif; ?>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($view->result() as $res) : ?>
              <?php if ($res->id_level_user != 1) : ?>
                <tr>
                  <td align="center"><img style="height: 30px;" class="img-profile rounded-circle" src="<?= base_url('assets/img/profile/') . $res->gambar ?>"></td>
                  <td><?= $res->username ?></td>
                  <td><?= $res->nama_user ?></td>
                  <td><?= $res->nomor_wa ?></td>
                  <td><?= $res->jenis_kelamin ?></td>
                  <td><span>
                      <?php if ($res->id_status_user == 1) : ?>
                        <a class="badge badge-success">Aktif</a>
                      <?php elseif ($res->id_status_user == 2) : ?>
                        <a class="badge badge-secondary">Tidak Aktif</a>
                      <?php endif; ?>
                    </span>
                  </td>
                  <?php if ($user["id_level_user"] == 1) : ?>
                    <td align="center">
                      <button type="button" data-toggle="modal" data-target="#statusModal<?= $res->id_user ?>" class="btn btn-success btn-sm">
                        <i class="fab fa-stripe-s"></i>
                      </button>
                      <button type="button" data-toggle="modal" data-target="#ubahModal<?= $res->id_user ?>" class="btn btn-warning btn-sm">
                        <i class="fas fa-edit"></i>
                      </button>
                      <button type="button" data-toggle="modal" data-target="#hapusModal<?= $res->id_user ?>" class="btn btn-danger btn-sm">
                        <i class="fas fa-trash"></i>
                      </button>
                      <button type="button" data-toggle="modal" data-target="#ubahPassModal<?= $res->id_user ?>" class="btn btn-info btn-sm">
                        <i class="fas fa-key"></i>
                      </button>
                    </td>
                  <?php endif; ?>
                </tr>
              <?php endif; ?>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>

    </div>
  </div>

</div>
<!-- /.container-fluid -->

<?php foreach ($view->result() as $res) : ?>

  <!-- Tambah Modal -->
  <div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">Tambah Data pengguna</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form class="user" action="<?= base_url('kelola_pengguna/tambahDataPengguna') ?>" method="POST">
          <div class="modal-body">
            <div class="form-group">
              <label for="nama_user">Nama</label>
              <input type="text" class="form-control" id="nama_user" name="nama_user" required>
            </div>
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="form-group">
              <label for="nomor_wa">Nomor WA</label>
              <input type="number" class="form-control" id="nomor_wa" name="nomor_wa" required>
            </div>
            <div class="form-group">
              <label>Jenis Kelamin</label>
              <div class="form-check ml-2">
                <label class="form-check-label" for="jenisKelamin1">
                  <input class="form-check-input" type="radio" name="jenisKelamin" id="jenisKelamin1" value="Laki-Laki" required>
                  Laki-Laki
                </label>
              </div>
              <div class="form-check ml-2">
                <label class="form-check-label" for="jenisKelamin2">
                  <input class="form-check-input" type="radio" name="jenisKelamin" id="jenisKelamin2" value="Perempuan">
                  Perempuan
                </label>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            <button type="submit" class="btn btn-primary">Tambah</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Ubah Modal -->
  <div class="modal fade" id="ubahModal<?= $res->id_user ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">Ubah Data pengguna</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form class="user" action="<?= base_url('kelola_pengguna/ubahDataPengguna') ?>" method="POST">

          <div class="modal-body">
            <input type="hidden" name="iduser" id="iduser" value="<?= $res->id_user ?>">

            <div class="form-group">
              <label for="nama_user">Nama</label>
              <input type="text" class="form-control" id="nama_user" name="nama_user" value="<?= $res->nama_user ?>" required>
            </div>

            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" class="form-control" id="username" name="username" value="<?= $res->username ?>" required>
            </div>

            <div class="form-group">
              <label for="nomor_wa">Nomor WA</label>
              <input type="number" class="form-control" id="nomor_wa" name="nomor_wa" value="<?= $res->nomor_wa ?>" required>
            </div>

            <div class="form-group">
              <label>Jenis Kelamin</label>
              <div class="form-check ml-2">
                <label class="form-check-label" for="jenisKelamin1">
                  <input class="form-check-input" type="radio" name="jenisKelamin" id="jenisKelamin1" value="Laki-Laki" checked required>
                  Laki-Laki
                </label>
              </div>
              <div class="form-check ml-2">
                <label class="form-check-label" for="jenisKelamin2">
                  <?php if ($res->jenis_kelamin == "Perempuan") : ?>
                    <input class="form-check-input" type="radio" name="jenisKelamin" id="jenisKelamin2" value="Perempuan" checked>
                  <?php else : ?>
                    <input class="form-check-input" type="radio" name="jenisKelamin" id="jenisKelamin2" value="Perempuan">
                  <?php endif; ?>
                  Perempuan
                </label>
              </div>
            </div>

          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            <button type="submit" class="btn btn-primary">Ubah</button>
          </div>

        </form>
      </div>
    </div>
  </div>

  <!-- Status Modal -->
  <div class="modal fade" id="statusModal<?= $res->id_user ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">Status Data User</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <form class="user" action="<?= base_url('kelola_pengguna/ubahDataStatusPengguna') ?>" method="POST">
          <div class="modal-body">

            <input type="hidden" name="iduser" id="iduser" value="<?= $res->id_user ?>" readonly>


            <div class="form-group">
              <label for="kategori_status_user">Status</label>
              <select name="kategori_status_user" id="kategori_status_user" class="form-control" required>
                <?php foreach ($kategori_status_user->result() as $status) : ?>
                  <?php if ($status->id_status_user == $res->id_status_user) : ?>
                    <option value="<?= $status->id_status_user; ?>" selected="selected">
                      <?= $status->status_user; ?>
                    </option>
                  <?php else : ?>
                    <option value="<?= $status->id_status_user; ?>">
                      <?= $status->status_user; ?>
                    </option>
                  <?php endif; ?>
                <?php endforeach; ?>
              </select>
            </div>

          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            <button type="submit" class="btn btn-primary">Ubah</button>
          </div>

        </form>
      </div>
    </div>
  </div>

  <!-- Hapus Modal-->
  <div class="modal fade" id="hapusModal<?= $res->id_user ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <span style="font-size: 20px;">
            <i class="fas fa-exclamation-circle mr-2"></i>
          </span>
          <h5 class="modal-title" id="exampleModalCenterTitle">Peringatan!</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Apakah Anda yakin ingin menghapus pengguna <b> <?= $res->nama_user ?> </b> ?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          <a href="<?= base_url("kelola_pengguna/hapusDataPengguna/$res->id_user") ?>" class="btn btn-danger">Hapus</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Ubah Password Modal -->
  <div class="modal fade" id="ubahPassModal<?= $res->id_user ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">Ubah Password Pengguna</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form class="user" action="<?= base_url('kelola_pengguna/ubahPassPengguna') ?>" method="POST">
          <input type="hidden" name="iduser" id="iduser" value="<?= $res->id_user ?>">
          <div class="modal-body">
            <div class="form-group">
              <label for="nama">Password</label>
              <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="form-group">
              <label for="username">Ulangi Password</label>
              <input type="password" class="form-control" id="ulangiPassword" name="ulangiPassword">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            <button type="submit" class="btn btn-primary">Ubah</button>
          </div>
        </form>
      </div>
    </div>
  </div>
<?php endforeach; ?>