<?php include "header.php"; ?>
<?php
$id = $_GET['id_sawah'];
include_once "ambildata_id.php";
$obj = json_decode($data);
$id_sawah = "";
$nama_daerah = "";
$alamat = "";
$deskripsi = "";
$lat = "";
$long = "";
foreach ($obj->results as $item) {
  $id_sawah .= $item->id_sawah;
  $nama_daerah .= $item->nama_daerah;
  $alamat .= $item->alamat;
  $deskripsi .= $item->deskripsi;
  $lat .= $item->latitude;
  $long .= $item->longitude;
}

$title = "Detail dan Lokasi : " . $nama_daerah;
//include_once "header.php"; 
?>

<!-- start banner Area -->
<section class="about-banner relative">
  <div class="overlay overlay-bg"></div>
  <div class="container">
    <div class="row d-flex align-items-center justify-content-center">
      <div class="about-content col-lg-12">
        <h1 class="text-white">
          Detail Informasi Persebaran Sawah
        </h1>
        <p class="text-white link-nav">
          Halaman ini memuat informasi dan lokasi tentang persebaran sawah di Provinsi Banten
        </p>
      </div>
    </div>
  </div>
</section>
<!-- End banner Area -->
<!-- Start about-info Area -->
<section class="about-info-area section-gap">
  <div class="container" style="padding-top: 50px;">
    <div class="row">

      <div class="col-md-7" data-aos="fade-up" data-aos-delay="200">
        <div class="panel panel-info panel-dashboard">
          <div class="panel-heading centered">
            <h2 class="panel-title"><strong>Informasi Daerah Sawah </strong></h4>
          </div>
          <div class="panel-body">
            <table class="table">
              <tr>
                <th></th>
              </tr>
              <tr>
                <td>
                  <h6>Nama Sawah</h6>
                </td>
                <td>
                  <p><?php echo $nama_daerah ?></p>
                </td>
              </tr>
              <tr>
                <td>
                  <h6>Wilayah</h6>
                </td>
                <td>
                  <p><?php echo $alamat ?></p>
                </td>
              </tr>
              <tr>
                <td>
                  <h6>Deskripsi</h6>
                </td>
                <td>
                  <p><?php echo $deskripsi ?></p>
                </td>
              </tr>
            </table>
            <a href="data_peta.php" class="primary-btn text-uppercase">Buka Peta</a>
          </div>
        </div>
      </div>

      <div class="col-md-5" data-aos="zoom-in">
        <div class="panel panel-info panel-dashboard">
          <div class="panel-heading centered"></div>
          <div class="panel-body">
            <img src="img/fotosawah2.png" alt="Gambar Sawah"/>
          </div>
        </div>
      </div>
</section>
<!-- End about-info Area -->
<?php include "footer.php"; ?>