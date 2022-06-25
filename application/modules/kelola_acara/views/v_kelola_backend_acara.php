<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mt-4 mb-4 text-gray-800">Kelola Acara</h1>
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
              <th>Nama Acara</th>
              <th>Gambar </th>
              <th>Deskripsi</th>
              <th>Tanggal</th>
              <th>Aksi</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($view->result() as $res) : ?>
              <tr>
                <td><?= $res->nama_acara ?></td>
                <td align="center">
                  <img style="height: 80%; width: 80%;" src="<?= base_url('assets/imgs/foto_acara/') . $res->gambar ?>">
                </td>
                <td class="text-justify"><?= $res->deskripsi_acara ?></td>
                <td><?= $res->tanggal ?></td>
                <td><span>
                    <?php if ($res->status_acara == 'Aktif') : ?>
                      <a class="badge badge-success">Aktif</a>
                    <?php elseif ($res->status_acara == 'Tidak Aktif') : ?>
                      <a class="badge badge-secondary">Tidak Aktif</a>
                    <?php endif; ?>
                  </span>
                </td>
                <td align="center">
                  <button type="button" data-toggle="modal" data-target="#statusModal<?= $res->id_acara ?>" class="btn btn-success btn-sm">
                    <i class="fab fa-stripe-s"></i>
                  </button>
                  <button type="button" data-toggle="modal" data-target="#ubahModal<?= $res->id_acara ?>" class="btn btn-warning btn-sm">
                    <i class="fas fa-edit"></i>
                  </button>
                  <button type="button" data-toggle="modal" data-target="#hapusModal<?= $res->id_acara ?>" class="btn btn-danger btn-sm">
                    <i class="fas fa-trash"></i>
                  </button>
                </td>
              </tr>
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
          <h5 class="modal-title" id="exampleModalCenterTitle">Tambah Data Acara</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <?= form_open_multipart('kelola_acara/tambahDataAcara') ?>

        <div class="modal-body">

          <div class="form-group">
            <label for="nama_acara">Nama Acara</label>
            <input type="text" class="form-control" id="nama_acara" name="nama_acara" required>
          </div>

          <div class="form-group">
            <label for="deskrikpsi_acara">Deskripsi Acara</label>
            <textarea class="form-control" name="deskripsi_acara" id="deskripsi_acara" cols="30" rows="10" required></textarea>
          </div>

          <div class="form-group">
            <label for="tanggal">Tanggal Acara</label>
            <input type="date" class="form-control" id="tanggal" name="tanggal" required>
          </div>

          <div class="form-group">
            <label for="exampleInputFile">Foto Acara</label>
            <div class="input-group">
              <div class="custom-file">
                <!-- Untuk mengupload gambar -->
                <input type="file" class="custom-fileinput" id="exampleInputFile" name="foto_acara" required>
              </div>
            </div>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary">Tambah</button>
        </div>
      </div>

      <?= form_close() ?>

    </div>
  </div>

  <!-- Ubah Modal -->
  <div class="modal fade" id="ubahModal<?= $res->id_acara ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">Ubah Data Acara</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form class="user" action="<?= base_url('kelola_acara/ubahDataAcara') ?>" method="POST">

          <div class="modal-body">

            <input type="hidden" name="id_acara" id="id_acara" value="<?= $res->id_acara ?>" readonly>

            <input type="hidden" name="gambar" id="gambar" value="<?= $res->gambar ?>" readonly>

            <div class="form-group">
              <label for="nama_acara">Nama acara</label>
              <input type="text" class="form-control" id="nama_acara" name="nama_acara" value="<?= $res->nama_acara ?>" required>
            </div>

            <div class="form-group">
              <label for="deskripsi_acara">Deskripsi acara</label>
              <input type="text" class="form-control" id="deskripsi_acara" name="deskripsi_acara" value="<?= $res->deskripsi_acara ?>" required>
            </div>

            <div class="form-group">
              <label for="tanggal">Tanggal</label>
              <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?= $res->tanggal ?>" required>
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
  <div class="modal fade" id="statusModal<?= $res->id_acara ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">Status Acara</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <form class="user" action="<?= base_url('kelola_acara/ubahDataStatusAcara') ?>" method="POST">
          <div class="modal-body">

            <input type="hidden" class="form-control" id="id_acara" name="id_acara" value="<?= $res->id_acara ?>" readonly>

            <input type="hidden" class="form-control" id="gambar" name="gambar" value="<?= $res->gambar ?>" readonly>

            <input type="hidden" class="form-control" id="nama_acara" name="nama_acara" value="<?= $res->nama_acara ?>" readonly>

            <input type="hidden" class="form-control" id="deskripsi_acara" name="deskripsi_acara" value="<?= $res->deskripsi_acara ?>" readonly>

            <input type="hidden" class="form-control" id="tanggal" name="tanggal" value="<?= $res->tanggal ?>" readonly>

            <div class="form-group">
              <select name="status_acara" id="status_acara" class="form-control">
                <option>--Pilih Status--</option>
                <option value="Aktif">Aktif</option>
                <option value="Tidak Aktif">Tidak Aktif</option>
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
  <div class="modal fade" id="hapusModal<?= $res->id_acara ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
          Apakah Anda yakin ingin menghapus data acara <b> <?= $res->nama_acara ?> </b> ?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          <a href="<?= base_url("kelola_acara/hapusDataAcara/$res->id_acara") ?>" class="btn btn-danger">Hapus</a>
        </div>
      </div>
    </div>
  </div>

<?php endforeach; ?>