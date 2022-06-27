<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mt-4 mb-4 text-gray-800">Kelola Pengajuan Wisata</h1>
  <div class="card shadow mb-4">
    <div class="card-body">

      <!-- Header -->
      <div class="text-right">
        <button type="button" data-toggle="modal" data-target="#tambahModal" class="btn btn-success btn-icon-split mb-3">
          <span class="icon text-white-50">
            <i class="fas fa-plus"></i>
          </span>
          <span class="text">Tambah</span>
        </button>
      </div>

      <!-- Alert -->
      <?= $this->session->flashdata('message'); ?>

      <!-- Tabel -->
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

          <thead>
            <tr class="text-center">
              <th>Nama Pengelola</th>
              <th>Nama Wisata </th>
              <th>Deskripsi</th>
              <th>Alamat</th>
              <th>Foto Sampul</th>
              <th>Status</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($view->result() as $res) : ?>
              <?php if ($res->id_status_wisata == 2 || $res->id_status_wisata == 3) : ?>
                <tr>
                  <td><?= $res->nama_user ?></td>
                  <td><?= $res->nama_wisata ?></td>
                  <td><?= $res->deskripsi_wisata ?></td>
                  <td><?= $res->alamat ?></td>
                  <td align="center">
                    <img style="height: 130px; width: 200px;" src="<?= base_url('assets/imgs/foto_wisata/sampul/') . $res->foto_sampul ?>">
                  </td>
                  <td><span>
                      <?php if ($res->id_status_wisata == 2) : ?>
                        <a class="badge badge-warning">Pengajuan</a>
                      <?php elseif ($res->id_status_wisata == 3) : ?>
                        <a class="badge badge-danger">Tolak</a>
                      <?php endif; ?>
                    </span>
                  </td>
                  <td align="center">
                    <button type="button" data-toggle="modal" data-target="#statusModal<?= $res->id_wisata ?>" class="btn btn-success btn-sm">
                      <i class="fab fa-stripe-s"></i>
                    </button>
                    <button type="button" data-toggle="modal" data-target="#ubahModal<?= $res->id_wisata ?>" class="btn btn-warning btn-sm">
                      <i class="fas fa-edit"></i>
                    </button>
                    <button type="button" data-toggle="modal" data-target="#hapusModal<?= $res->id_wisata ?>" class="btn btn-danger btn-sm">
                      <i class="fas fa-trash"></i>
                    </button>
                  </td>
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
          <h5 class="modal-title" id="exampleModalCenterTitle">Tambah Data wisata</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form class="user" action="<?= base_url('kelola_wisata/tambahDatawisata') ?>" method="POST">
          <div class="modal-body">

            <div class="form-group">
              <label for="nama_wisata">Nama Wisata</label>
              <input type="text" class="form-control" id="nama_wisata" name="nama_wisata" required>
            </div>

            <div class="form-group">
              <label for="deskrikpsi_wisata">Deskripsi Wisata</label>
              <textarea class="form-control" name="deskripsi_wisata" id="" cols="30" rows="10" required></textarea>
            </div>

            <div class="form-group">
              <label for="alamat">Alamat</label>
              <input type="text" class="form-control" id="alamat" name="alamat" required>
            </div>

            <div class="form-group">
              <label for="foto_sampul">Foto Sampul</label>
              <div class="input-group">
                <div class="custom-file">
                  <!-- Untuk mengupload gambar -->
                  <input type="file" class="custom-fileinput" id="foto_sampul" name="foto">
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="longitude">Longitude</label>
              <input type="text" class="form-control" id="longitude" name="longitude" required>
            </div>

            <div class="form-group">
              <label for="latitude">Latitude</label>
              <input type="text" class="form-control" id="latitude" name="latitude" required>
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
  <div class="modal fade" id="ubahModal<?= $res->id_wisata ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">Ubah Data wisata</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form class="user" action="<?= base_url('kelola_wisata/ubahDatawisata') ?>" method="POST">

          <div class="modal-body">
            <input type="hidden" name="id_wisata" id="id_wisata" value="<?= $res->id_wisata ?>" readonly>

            <div class="form-group">
              <label for="nama_wisata">Nama wisata</label>
              <input type="text" class="form-control" id="nama_wisata" name="nama_wisata" value="<?= $res->nama_wisata ?>" required>
            </div>

            <div class="form-group">
              <label for="deskrikpsi_wisata">Deskripsi Wisata</label>
              <textarea class="form-control" name="deskripsi_wisata" id="" cols="30" rows="10" value="<?= $res->deskripsi_wisata ?>" required></textarea>
            </div>

            <div class="form-group">
              <label for="alamat">Alamat</label>
              <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $res->alamat ?>" required>
            </div>

            <div class="form-group">
              <label for="longitude">Longitude</label>
              <input type="text" class="form-control" id="longitude" name="longitude" value="<?= $res->longitude ?>" required>
            </div>

            <div class="form-group">
              <label for="latitude">Latitude</label>
              <input type="text" class="form-control" id="latitude" name="latitude" value="<?= $res->latitude ?>" required>
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
  <div class="modal fade" id="statusModal<?= $res->id_wisata ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">Status Wisata</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <form class="user" action="<?= base_url('kelola_wisata/ubahDataStatus_wisata') ?>" method="POST">
          <div class="modal-body">

            <div class="form-group">
              <label for="kategori_status_wisata">Status</label>
              <select name="kategori_status_wisata" id="kategori_status_wisata" class="form-control" required>
                <?php foreach ($kategori_status_wisata->result() as $status) : ?>
                  <?php if ($status->id_status_wisata == $res->id_status_wisata) : ?>
                    <option value="<?= $status->id_status_wisata; ?>" selected="selected">
                      <?= $status->status_wisata; ?>
                    </option>
                  <?php else : ?>
                    <option value="<?= $status->id_status_wisata; ?>">
                      <?= $status->status_wisata; ?>
                    </option>
                  <?php endif; ?>
                <?php endforeach; ?>
              </select>
            </div>

            <div class="form-group">
              <input type="hidden" class="form-control" id="id_wisata" name="id_wisata" value="<?= $res->id_wisata ?>" readonly>
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
  <div class="modal fade" id="hapusModal<?= $res->id_wisata ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
          Apakah Anda yakin ingin menghapus data wisata <b> <?= $res->nama_wisata ?> </b> ?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          <a href="<?= base_url("kelola_wisata/hapusDatawisata/$res->id_wisata") ?>" class="btn btn-danger">Hapus</a>
        </div>
      </div>
    </div>
  </div>

<?php endforeach; ?>