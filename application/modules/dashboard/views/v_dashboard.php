<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mt-4 mb-4 text-gray-800">Selamat Datang, <b> <?= $user['nama_user'] ?> </b></h1>

  <!-- Content Row -->
  <div class="row">

    <!-- Buku Tamu -->
    <div class="col-xl-4 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-x font-weight-bold text-success text-uppercase mb-1 ">
                WISATA</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
            </div>
            <div class="col-auto">
              <a href="kelola_wisata"><i class="fas fa-book fa-4x text-gray-800 d-md-inline"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Izin Karyawan -->
    <div class="col-xl-4 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-x font-weight-bold text-warning text-uppercase mb-1">
                PENGELOLA</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"> </div>
            </div>
            <div class="col-auto">
              <a href="kelola_pengguna"><i class="fas fa-users fa-4x text-gray-800"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- PETUGAS -->
    <div class="col-xl-4 col-md-6 mb-4">
      <div class="card border-left-secondary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-x font-weight-bold text-secondary text-uppercase mb-1">
                PETUGAS </div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
            </div>
            <div class="col-auto">
              <a href="kelola_petugas"><i class="fas fa-id-card fa-4x text-gray-800"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  <!-- /.Content Row -->

  <!-- Content Row -->
  <div class="row">

    <!-- Bar Chart -->
    <div class="col-xl-12 col-lg-7">
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary"> KUNJUNGAN WISATA PERBULAN </h6>
        </div>
        <div class="card-body">
          <div class="chart-bar">
            <canvas id="myBarChart"></canvas>
          </div>
          <hr>
          <span class="mr-2">
            <i class="fas fa-circle text-primary"></i> Banyak data Buku Tamu per Tahun
          </span>
        </div>
      </div>
    </div>

    <!-- Donut Chart -->
    <div hidden>
      <div class="col-xl-4 col-lg-7">
        <div class="card shadow mb-4">
          <!-- Card Header - Dropdown -->
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">RATA-RATA KARYAWAN KELUAR</h6>
          </div>
          <!-- Card Body -->
          <div class="card-body">
            <div class="chart-pie pt-4">
              <canvas id=""></canvas>
            </div>
            <br>
            <br>
            <hr>
            <div class="mt text-center small">
              <span class="mr-2">
                <i class="fas fa-circle text-success"></i> PAGI
              </span>
              <span class="mr-2">
                <i class="fas fa-circle text-warning"></i> SIANG
              </span>
              <span class="mr-2">
                <i class="fas fa-circle text-danger"></i> SORE
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
  <div class="container my-auto">
    <div class="copyright text-center my-auto">
      <span>Copyright &copy; Sistem Informasi Wisata Kecamatan Bajuin <?= date('Y'); ?> </span>
    </div>
  </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <span style="font-size: 20px;">
          <i class="fas fa-exclamation-circle mr-2"></i>
        </span>
        <h5 class="modal-title" id="exampleModalLabel">Peringatan!</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Apakah Anda yakin ingin keluar? Pilih "Keluar" jika Anda ingin keluar.</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
        <a class="btn btn-danger" href="<?= base_url('login/logout') ?>">Keluar</a>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('assets/vendors/sbadmin2/') ?>vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/vendors/sbadmin2/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url('assets/vendors/sbadmin2/') ?>vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('assets/vendors/sbadmin2/') ?>js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="<?= base_url('assets/vendors/sbadmin2/') ?>vendor/chart.js/Chart.min.js"></script>
<script src="<?= base_url('assets/vendors/sbadmin2/') ?>vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/vendors/sbadmin2/') ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<!-- <script>
  // Set new default font family and font color to mimic Bootstrap's default styling
  Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
  Chart.defaults.global.defaultFontColor = '#858796';

  function number_format(number, decimals, dec_point, thousands_sep) {
    // *     example: number_format(1234.56, 2, ',', ' ');
    // *     return: '1 234,56'
    number = (number + '').replace(',', '').replace(' ', '');
    var n = !isFinite(+number) ? 0 : +number,
      prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
      sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
      dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
      s = '',
      toFixedFix = function(n, prec) {
        var k = Math.pow(10, prec);
        return '' + Math.round(n * k) / k;
      };
    // Fix for IE parseFloat(0.55).toFixed(0) = 0;
    s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
    if (s[0].length > 3) {
      s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
    }
    if ((s[1] || '').length < prec) {
      s[1] = s[1] || '';
      s[1] += new Array(prec - s[1].length + 1).join('0');
    }
    return s.join(dec);
  }

  // Bar Chart Example
  var ctx = document.getElementById("myBarChart");
  var myBarChart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "November", "Desember"],
      //UBAH
      datasets: [{
        label: "",
        backgroundColor: "#4e73df",
        hoverBackgroundColor: "#2e59d9",
        borderColor: "#4e73df",
        data: [
          <?php
          foreach ($jumlah_tamu as $data) {
            if ($data['jumlah_tamu'] == NULL) {
              $data['jumlah_tamu'] = 0;
            }
            echo $data['jumlah_tamu'] . ',';
          }
          ?>
        ],
      }],
    },
    options: {
      maintainAspectRatio: false,
      layout: {
        padding: {
          left: 10,
          right: 25,
          top: 25,
          bottom: 0
        }
      },
      scales: {
        xAxes: [{
          time: {
            unit: 'month'
          },
          gridLines: {
            display: false,
            drawBorder: false
          },
          ticks: {
            maxTicksLimit: 12
          },
          maxBarThickness: 25,
        }],
        yAxes: [{
          ticks: {
            min: 0,
            max: 100,
            maxTicksLimit: 8,
            padding: 10,
            // Include a dollar sign in the ticks
            callback: function(value, index, values) {
              return '' + number_format(value);
            }
          },
          gridLines: {
            color: "rgb(234, 236, 244)",
            zeroLineColor: "rgb(234, 236, 244)",
            drawBorder: false,
            borderDash: [2],
            zeroLineBorderDash: [2]
          }
        }],
      },
      legend: {
        display: false
      },
      tooltips: {
        titleMarginBottom: 10,
        titleFontColor: '#6e707e',
        titleFontSize: 14,
        backgroundColor: "rgb(255,255,255)",
        bodyFontColor: "#858796",
        borderColor: '#dddfeb',
        borderWidth: 1,
        xPadding: 15,
        yPadding: 15,
        displayColors: false,
        caretPadding: 10,
        callbacks: {
          label: function(tooltipItem, chart) {
            var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
            return datasetLabel + number_format(tooltipItem.yLabel) + ': Tamu';
          }
        }
      },
    }
  });
</script> -->

<!-- sweetalert2 -->
<script src="<?= base_url('assets/vendors/sweetalert2/') ?>sweetalert2.all.min.js"></script>
</body>

</html>