<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Cetak Laporan</title>
   <link rel="stylesheet" href="<?= base_url('assets/vendors/css/laporan.css') ?>">
</head>

<body>

   <!-- Header -->
   <table>
      <tr>
         <td><img src="<?= base_url('assets/img/logo_kas.jpg') ?>" width="90" height="100"></td>
         <td>
            <p class="ml-auto" align="center">
               <font size="5"><b>PT. KELOLA ALAM SUBUR</b></font><br>
               <font size="4"><b>AMANAH BORNEO PARK</b></font><br>
               <font size="2"><i>Jl. Taruna Bhakti, RT.12/RW.04, Palam, Cempaka, Kota Banjar Baru, Kalimantan Selatan 70731</i></font>
            </p>
         </td>
      </tr>
   </table>

   <br>

   <div id="title">
      Data Buku Tamu
   </div>

   <br>

   <p>
      Dari tanggal <?= $tgl_awal ?> <br>
      Sampai Tanggal <?= $tgl_akhir ?>
   </p>

   <br>

   <div id="isi">
      <!-- Tabel/Main -->
      <table width="100%" border="0.3" cellpadding="0" cellspacing="0">
         <thead style="background:#e8ecee">
            <tr class="tr-title">
               <th height="20" align="center" valign="middle">NO.</th>
               <th height="20" align="center" valign="middle">NAMA</th>
               <th height="20" align="center" valign="middle">ALAMAT</th>
               <th height="20" align="center" valign="middle">NO TELPON</th>
               <th height="20" align="center" valign="middle">KEPERLUAN</th>
               <th height="20" align="center" valign="middle">JUMLAH</th>
               <th height="20" align="center" valign="middle">JAM MASUK</th>
               <th height="20" align="center" valign="middle">JAM KELUAR</th>
            </tr>
         </thead>
         <tbody>
            <?php
            $no = 1;
            foreach ($view->result() as $res) :
            ?>
               <tr>
                  <td>
                     <center><?= $no++ ?><center>
                  </td>
                  <td><?= $res->nama_tamu ?></td>
                  <td><?= $res->alamat ?></td>
                  <td><?= $res->no_telp ?></td>
                  <td><?= $res->keperluan ?></td>
                  <td>
                     <center><?= $res->jumlah ?><center>
                  </td>
                  <td><?= $res->jam_masuk ?></td>
                  <td><?= $res->jam_keluar ?></td>
               </tr>
            <?php endforeach; ?>
         </tbody>
      </table>

      <!-- Footer -->
      <div>
         <div class="ml-auto" height="20" align="right">
            <div id="footer-tanggal">
               Banjarbaru, <?= date('d-M-Y') ?>
            </div>
            <div id="footer-jabatan">
               Komandan Regu 1,
            </div>
            <div id="footer-nama">
               SARKANI AGUS
            </div>
         </div>
      </div>

   </div>

   <script>
      window.print();
   </script>

</body>

</html>