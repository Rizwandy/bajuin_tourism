<!-- Page Header -->
<header class="header">
  <div class="overlay">
    <img src="assets/imgs/logo.png" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, Pigga Landing page" class="logo">
    <h1 class="subtitle">Selamat Datang di</h1>
    <h1 class="title">BAJUIN TOURISM</h1>
    <p>Bajuin Tourism merupakan sebuah media penyedia informasi terlengkap tentang wisata yang ada di kecamatan Bajuin</p>
    <a class="btn btn-primary mt-3" href="<?= base_url('beranda/wisata') ?>">JELAJAHI</a>
  </div>
</header>
<!-- End Of Page Header -->

<!-- Lokasi Section -->
<section id="lokasi">
  <div class="container">
    <h1 class="subtitle">
      <center>Kecamatan Bajuin</center>
    </h1>

    <br>

    <div class="embed-responsive embed-responsive-1by2">
      <div id="mapid"></div>
    </div>
    <br>
    <!-- Make sure you put this AFTER Leaflet's CSS -->

  </div>
</section>
<!-- End OF Lokasi Section -->

<!-- Wisata Section -->
<section id="wisata">
  <div class="container">
    <?php
    foreach ($view->result() as $res) :
    ?>
      <div class="row align-items-center">
        <div class="col-md-6">

          <h6 class="section-subtitle">Wisata</h6>
          <h3 class="section-title">Air Terjun Bajuin</h3>
          <p class="mb-1 font-weight-bold">Senin - Kamis : <span class="font-weight-normal pl-2 text-muted">09:00 - 15:00 WITA</span></p>
          <p class="mb-1 font-weight-bold">Jum'at : <span class="font-weight-normal pl-2 text-muted">02:00 - 16:00 WITA</span></p>
          <p class="mb-1 font-weight-bold">Sabtu - Minggu : <span class="font-weight-normal pl-2 text-muted">09:00 - 17:00 WITA</span></p>
          <a href="#book-table" class="btn btn-primary btn-sm w-md mt-4">Selengkapnya</a>
        </div>
        <div class="col-md-6">
          <img alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, Pigga Landing page" src="<?= base_url('assets/imgs/') ?>arter1.jpg" class="w-100 rounded shadow">
        </div>
      </div>
      <div class="section-devider my-6 transparent"></div>
    <?php endforeach; ?>

  </div>
  </div>
</section>
<!-- End OF Wisata Section -->

<!-- Menu Section -->
<section id="acara" class="has-img-bg">
  <div class="container">
    <h6 class="section-subtitle text-center">Event</h6>
    <h3 class="section-title mb-6 text-center">Acara</h3>
    <div class="card bg-light">
      <div class="card-body px-4 pb-4 text-center">

        <div class="row justify-content-center">
          <div class="col-10 video">
            <div class="row">

              <div class="col-lg">
                <iframe height="200px" width="200px" src="https://www.youtube.com/embed/Obnk7ZXZrOA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
              <div class="col-lg">
                <iframe height="200px" width="200px" src="https://www.youtube.com/embed/zye-gLJpiok" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
              <div class="col-lg">
                <iframe height="200px" width="200px" src="https://www.youtube.com/embed/gaoL36GfIbA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
            </div>
          </div>
        </div>
        <a href="https://www.youtube.com/channel/UC0FOg4GOkhSWp8PADYpNPow" target="_blank" class="btn btn-primary mt-4">Selengkapnya</a>
      </div>
    </div>
  </div>
</section>
<!-- End of Menu Section -->

<!-- Tentang Section -->
<section id="tentang">
  <div class="container">
    <h6 class="section-subtitle text-center">Developer</h6>
    <h3 class="section-title mb-5 text-center">Pembuat</h3>
    <div class="row">

      <div class="col">
        <div class="team-wrapper text-center">
          <img src="assets/imgs/developer.png" class="circle-120 rounded-circle mb-3 shadow" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, Pigga Landing page">
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
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
<!-- End of Join Section -->


<!-- Book Table Section -->
<section id="formulir" class="bg-white">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 d-none d-md-block">
        <img src="assets/imgs/join.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, Pigga Landing page" class="w-100 rounded shadow">
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
</section>
<!-- End OF Book Table Section -->

<!-- Prefooter Section  -->
<div class="py-4 border border-lighter border-bottom-0 border-left-0 border-right-0 bg-dark">
  <div class="container">
    <div class="row justify-content-between align-items-center text-center">
      <div class="col-md-3 text-md-left mb-3 mb-md-0">
        <img src="assets/imgs/navbar-brand.png" width="100" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, Pigga Landing page" class="mb-0">
      </div>
      <div class="col-md-9 text-md-right">
        <a href="#" class="px-3"><small class="font-weight-bold">About</small></a>
        <a href="#" class="px-3"><small class="font-weight-bold">Contact</small></a>
        <a href="components.html" class="pl-3"><small class="font-weight-bold">Components</small></a>
      </div>
    </div>
  </div>
</div>
<!-- End of PreFooter Section -->



</body>
<!-- core  -->
<script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
<script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>

<!-- bootstrap affix -->
<script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>

<!-- Pigga js -->
<script src="assets/js/pigga.js"></script>

<script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js" integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew==" crossorigin=""></script>

<script type="text/javascript">
  var mymap = L.map('mapid').setView([-3.703877, 114.884904], 11);

  L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 20,
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1,
    accessToken: 'pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw'
  }).addTo(mymap);

  var iconMarker = L.icon({
    iconUrl: "assets/imgs/icon_kamera.png",
    iconSize: [44, 44],
    iconAnchor: [22, 44],
    tooltipAnchor: [22, -20]
  });

  //Wisata'
  <?php
  foreach ($view->result() as $res) :
  ?>
    var titik = L.marker([<?= $res->longitude ?>, <?= $res->latitude ?>], {
      icon: iconMarker
    }).addTo(mymap).bindTooltip("<?= $res->nama_wisata ?>").openPopup();
    titik.url = "buki/puskesmas_buki.php";
    titik.on('click', function() {
      window.location = (this.url);
    });
  <?php endforeach; ?>

  // ? Kecamatan Bajuin
  var bajuin = L.polygon([
    [
      [-3.58514288877931886, 114.92036171427776026],
      [-3.58776498968191593, 114.92161033375519708],
      [-3.59275946759162546, 114.92098602401648577],
      [-3.59837825524004806, 114.92048657622551389],
      [-3.60524566236589861, 114.91811419921839388],
      [-3.60749317742526765, 114.91748988947968257],
      [-3.60936610664140867, 114.91836392311388693],
      [-3.61036500222335066, 114.92048657622551389],
      [-3.60999041638012219, 114.93134956567912752],
      [-3.61086445001432121, 114.93584459579786028],
      [-3.61136389780529221, 114.9407142117598255],
      [-3.61198820754400618, 114.94371089850565681],
      [-3.61273737923046223, 114.9472070330424458],
      [-3.6133616889691762, 114.95082802952698842],
      [-3.61411086065563225, 114.95120261537022088],
      [-3.61461030844660325, 114.95657167912315799],
      [-3.61473517039434622, 114.9578202986005806],
      [-3.62247661115439534, 114.96556173936063772],
      [-3.62934401828024589, 114.9690578738974267],
      [-3.63802192364836463, 114.96949489071452888],
      [-3.63833407851772161, 114.96890179646274532],
      [-3.6407532787552368, 114.96830870221099019],
      [-3.66697428778121104, 114.94608327551277682],
      [-3.68707706136779123, 114.93646890553657158],
      [-3.68807595694973278, 114.93571973385012086],
      [-3.70530690573822996, 114.93484570021591651],
      [-3.71117541728213851, 114.93559487190238144],
      [-3.71454668987119252, 114.93696835332754347],
      [-3.72291244036995606, 114.93734293917076172],
      [-3.72728260854095206, 114.94146338344626201],
      [-3.74198510288765851, 114.94190040026339261],
      [-3.74585582326768307, 114.94115122857692768],
      [-3.74885251001350861, 114.93990260909950507],
      [-3.76339892692553679, 114.92754127627294736],
      [-3.76839340483524632, 114.92441972757937663],
      [-3.7733878827449554, 114.91436834078608342],
      [-3.77738346507272293, 114.90288104159375848],
      [-3.78200335713920399, 114.88265340605943265],
      [-3.78961993595151103, 114.87266445024000916],
      [-3.7973613767115606, 114.86367439000252944],
      [-3.8039790599419252, 114.85843018819734596],
      [-3.80922326174712023, 114.85430974392183145],
      [-3.82039840607009484, 114.84981471380308449],
      [-3.83126139552371248, 114.8463185792662955],
      [-3.82539288397980393, 114.83345779864879432],
      [-3.81490448036941432, 114.82496718620228648],
      [-3.81777630516749733, 114.81959812244934938],
      [-3.81540392816038532, 114.81647657375577865],
      [-3.81265696531004528, 114.80811082325702444],
      [-3.81040945025067623, 114.79737269575115022],
      [-3.81003486440744776, 114.79300252758014267],
      [-3.8059144201319377, 114.79237821784143136],
      [-3.80466580065451021, 114.79512518069176963],
      [-3.80379176702031119, 114.80011965860148848],
      [-3.80104480416997115, 114.80374065508601689],
      [-3.79642491210349009, 114.80286662145182675],
      [-3.79754866963317461, 114.80124341613117167],
      [-3.79754866963317461, 114.79525004263952326],
      [-3.7971740837899457, 114.78963125499110731],
      [-3.7890580571866681, 114.78863235940916354],
      [-3.78924535010828212, 114.79537490458727689],
      [-3.7871226969966556, 114.80242960463473878],
      [-3.78687297310117055, 114.80742408254444342],
      [-3.78038015181854847, 114.80868830976531569],
      [-3.77020390307751541, 114.81393251157051338],
      [-3.76508456322006335, 114.81830267974150672],
      [-3.76171329063100979, 114.82267284791250006],
      [-3.76040224017971081, 114.82535737978896861],
      [-3.75312903172369694, 114.82673086121415906],
      [-3.74513786706816187, 114.83085130548965935],
      [-3.73945664844586778, 114.83266180373193777],
      [-3.73471189443164375, 114.83372313028775125],
      [-3.73037294174758394, 114.83790600553712125],
      [-3.72881216740079946, 114.83572092145162458],
      [-3.72862487447918545, 114.82754246387447949],
      [-3.7273762550017584, 114.82585682757995471],
      [-3.7271265311062729, 114.82023803993152455],
      [-3.72487901604690341, 114.81430709741374585],
      [-3.72038398592816533, 114.82186124525217963],
      [-3.70817873053631297, 114.83497174976517385],
      [-3.69928231675964359, 114.83765628164164241],
      [-3.68935579191409602, 114.8405905374135898],
      [-3.68273810868373142, 114.84358722415942111],
      [-3.68005357680726197, 114.84389937902878387],
      [-3.67505909889755289, 114.84514799850620648],
      [-3.661542793054402, 114.85095407907624576],
      [-3.66091848331568803, 114.85151595784108736],
      [-3.65773450364824848, 114.85126623394560852],
      [-3.65698533196179199, 114.85482479945626721],
      [-3.64871322792383612, 114.86506347917118376],
      [-3.63760051457473299, 114.87399110843477956],
      [-3.62380326934916086, 114.88167011822096697],
      [-3.61693586222331032, 114.88554083860098842],
      [-3.60442625583383336, 114.89363345358906088],
      [-3.60299034343479141, 114.8943201943016561],
      [-3.59418757611892792, 114.90231135895719206],
      [-3.59243950885052943, 114.9049334598597909],
      [-3.58514288877931886, 114.92036171427776026]
    ]
  ], {
    color: "brown"
  }).addTo(mymap);
</script>

</html>