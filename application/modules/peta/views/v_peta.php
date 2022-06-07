<!-- ISI DARI BODYYYYYYYYYYY -->
<div class="wrapper">

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 mb-3"><?=$title?></h1>
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Isi dari pelajaran -->

    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan');?>"></div>    


    <div class="card">        
    <!-- /.card-header -->
    <div class="card-body">

        <a class="btn btn-primary mb-3" href="<?php echo base_url('Materi')?>"><i class="fas fa-book-reader"></i> Lihat Materi</i></a>
    <!-- modal tambah data -->
    <!-- <a class="btn btn-danger" href="<?php echo base_url('Kursus/print')?>"><i class="fa fa-print">Print</i></a> -->
    <!-- <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalpelajaran" href=""><i class="fas fa-book">Tambah pelajaran</i></a> -->
    <!-- akhir modal tambah data -->

        <table id="example" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama </th>
                <th>Action</th>
            </tr>
        </thead>
            <?php $no = 1;
            foreach($pelajaran as $PJ) : ?>
        <tbody>
            <tr>
            <td><?= $no++?></td>
            <td><?= $PJ->title?></td>
            <td>
                <a href="<?=$PJ->url_admin?>" class="btn btn-warning btn-sm"><i class="fas fa-eye"></i></a>
                <a class="btn btn-success btn-sm" data-toggle="modal" data-target="#modalupload<?=$PJ->id?>" class="btn btn-success btn-sm"><i class="fas fa-file-upload"></i></a>
                <!-- <a href="<?=base_url('Pelajaran/delete/' .$PJ->id)?>" class="btn btn-danger btn-sm tombol-hapus"><i class="fas fa-trash"></i></a> -->

            </td>
            </tr>
        </tbody>
        <?php endforeach ?>
        </table>
    </div>
    </div>

    <!-- akhir dari kursus -->

    <!-- modal tambah pelajaran -->
        <?php foreach($pelajaran as $PJ) {?>
            <div class="modal fade" id="modalupload<?=$PJ->id?>" role="dialog" aria-labelledby="modal" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Upload File Materi</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <?php echo form_open_multipart('Pelajaran/tambah_file/' .$PJ->id);?>
                            <div class="from-group">
                                <label>Upload Materi</label>
                                    <input type="file" name="materi" class="form-control">
                                <?= form_error('file', '<div class="text-small text-danger">','</div>');?>                        
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Upload Materi</button>
                            </div>
                        <?php echo form_close();?>
                    </div>
                    </div>
                </div>
        </div>
        <?php } ?>
        <!-- akhir modal menambah pelajaran -->













































</div>
  <!-- /.content-wrapper ///// Bagian Dari Body jangan di hapus-->

</div>
<!-- ./wrapper ///AKHIR DARI BODY-->

