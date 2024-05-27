<?php include "header.php"; ?>

<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" ntegrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
<script src="https://unpkg.com/esri-leaflet@3.0.12/dist/esri-leaflet.js" integrity="sha512-G4+fuKc1B96F0sUG7eKtgiJr0JM3iQC4bfc8WtYvmm7msHES0Hst2mLWASPb8zZk91tqMG86AjP0tgXIEFPPUA==" crossorigin=""></script>

<!-- start banner Area -->
<section class="banner-area relative">
  <div class="overlay overlay-bg"></div>
  <div class="container">
    <div class="row fullscreen align-items-center justify-content-left">
      <div class="col-lg-12 banner-center">
        <h6 class="text-white">SISTEM INFORMASI GEOGRAFIS PEMETAAN</h6>
        <h1 class="text-white">PERSEBARAN SAWAH DI PROVINSI BANTEN</h1>
        <p class="text-white">
          Selamat datang di sistem informasi geografis pemetaan persebaran sawah di Provinsi Banten. Website ini memuat informasi dan lokasi dari persebaran sawah di Provinsi Banten.
        </p>
        <a href="data_peta.php" class="primary-btn text-uppercase">Selengkapnya</a>
      </div>
    </div>
  </div>
  </div>
</section>
<!-- End banner Area -->

<main id="main">

  <!--start Info-->
  <section class="price-area section-gap">
    <section id="peta_wisata" class="about-info-area section-gap">
      <div class="container">

        <div class="title text-center">
          <h1 class="mb-5">Peta Provinsi Banten</h1>
          <br>
        </div>

        <div id="map" class="row align-items-center">
          <style>
            #map { height: 600px; }
          </style>
          
          <script>
            var map = L.map('map').setView([-6.4543385,106.1562541], 9);
            L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {maxZoom: 19, attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'}).addTo(map);
            L.marker([-5.9919235,106.0342306]).addTo(map).bindPopup("Kota Cilegon");
            L.marker([-6.6050494,106.1862641]).addTo(map).bindPopup("Kabupaten Lebak");
            L.marker([-6.1147484,106.1535254]).addTo(map).bindPopup("Kota Serang");
            L.marker([-6.1726694,106.6268317]).addTo(map).bindPopup("Kota Tangerang");
            L.marker([-6.1900469,106.4427998]).addTo(map).bindPopup("Kabupaten Tangerang");
            L.marker([-6.2831386,106.7002452]).addTo(map).bindPopup("Kota Tangerang Selatan");
            L.marker([-6.3343136,106.1024518]).addTo(map).bindPopup("Kabupaten Pandeglang");
            L.marker([-6.2283891,106.0749499]).addTo(map).bindPopup("Kabupaten Serang");
          </script>
        </div>

      </div>
    </section>
  </section>
  <!--End Info-->

    <!-- Start price Area -->
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="menu-content pb-70 col-lg-10">
          <div class="title text-center">
            <h1 class="mb-15">Persebaran Sawah di Provinsi Banten</h1>
            <p>
              Provinsi Banten merupakan salah satu daerah penghasil pertanian terbesar nomor 8 di Indonesia. Adapun hasil pertanian terbesar yang dihasilkan oleh Provinsi Banten berupa padi. Menurut Badan Pusat Statistik (BPS) Provinsi Banten pada tahun 2022 luas panen padi yang dihasilkan dapat mencapai 337.024 hektar. Dan jumlah luas lahan baku sawah (LBS) di Provinsi Banten mencapai 204.335 hektar dan menempati urutan ke-12 luas lahan sawah terbesar di Indonesia. Sehingga dengan potensi yang ada tersebut membuat sistem informasi geografis (GIS) sangat dibutuhkan dalam memberikan informasi secara detail dan lengkap tentang persebaran lahan sawah yang ada di Provinsi Banten.
            </p>
          </div>
        </div>
        <div class="menu-content pb-70 col-lg-15">
          <div class="title text-center">
            <h1 class="mb-15">Sustainable Development Goals (SDG’s)</h1>
            <p>
            SDG's adalah singkatan dari Sustainable Development Goals atau dalam bahasa Indonesia diartikan menjadi Tujuan Pembangunan Berkelanjutan. SDG's adalah program pembangunan berkelanjutan yang disusun oleh Perserikatan Bangsa - Bangsa (PBB) dan disepakati negara - negara anggota pada 2015. SDG's bertujuan untuk mendorong berbagai perubahan berdasarkan hak asasi manusia dan kesetaraan pembangunan sosial, ekonomi, dan lingkungan hidup. Di dalam SDGs terdapat 17 tujuan dengan 169 target yang diharapkan dapat tercapai pada 2030. Adapun pada Sistem Informasi Geografis (GIS) pemetaan persebaran sawah di Provinsi Banten merujuk pada poin dari SDG's nomor 2 yaitu Tanpa Kelaparan. Di mana pada poin ini memiliki tujuan untuk menghilangkan kelaparan, mencapai ketahanan pangan dan gizi yang baik serta meningkatkan pertanian berkelanjutan. Target dari SDG's nomor 2 ini diantaranya yaitu akses universal terhadap makanan yang aman dan bergizi, mengakhiri segala bentuk malnutrisi, meningkatkan produktivitas dan pendapatan produsen makanan skala kecil, produksi pangan berkelanjutan dan praktik pertanian tangguh, menjaga keragaman genetik dalam produksi pangan, berinvestasi dalam infrastruktur pedesaan, penelitan pertanian, teknologi, & memperbaiki dan mencegah pembatasan dan distorsi dalam pasar pertanian dunia termasuk melalui penghapusan secara bersamaan segala bentuk subsidi ekspor pertanian dan semua tindakan ekspor dengan efek setara, sesuai dengan amanat The Doha Development Round, serta memastikan pasar komoditas pangan yang stabil dan akses informasi yang tepat waktu.
            </P>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End other-issue Area -->

  <!-- ======= Counts Section ======= -->
  <!-- End testimonial Area -->

  <?php include "footer.php"; ?>