<!--start Info-->
<section class="price-area section-gap">
    <section id="peta_wisata" class="about-info-area section-gap">
      <div class="container">

        <div class="title text-center">
          <h1 class="mb-5">Peta Lokasi Persebaran</h1>
          <br>
        </div>

        <div id="map" class="row align-items-center">
          <style>
            #map { height: 600px; }
          </style>
          
          <script>
            var map = L.map('map').setView([-6.4543385,106.1562541], 10);
            L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {maxZoom: 19, attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'}).addTo(map);
          </script>

        </div>
      </div>
    </section>
  </section>
  <!--End Info-->

<!-- Start about-info Area -->
<section class="price-area section-gap">

<section id="peta_wisata" class="about-info-area section-gap">
  <div class="container">

    <div class="title text-center">
      <h1 class="mb-5">Peta Lokasi Persebaran</h1>
      <br>
    </div>

    <div class="row align-items-center">

      <div id="map" style="width:100%;height:480px;"></div>
      <script src="https://maps.googleapis.com/maps/api/js?key=&callback=initMap "></script>

      <script type="text/javascript">
        function initialize() {

          var mapOptions = {
            zoom: 10.2,
            center: new google.maps.LatLng(-7.4302745, 109.199404),
            disableDefaultUI: false
          };

          var mapElement = document.getElementById('map');

          var map = new google.maps.Map(mapElement, mapOptions);

          setMarkers(map, officeLocations);

        }

        var officeLocations = [
          <?php
          $data = file_get_contents('http://localhost/sig-sawah-banten/ambildata.php');
          $no = 1;
          if (json_decode($data, true)) {
            $obj = json_decode($data);
            foreach ($obj->results as $item) {
          ?>[<?php echo $item->id_wisata ?>, '<?php echo $item->nama_wisata ?>', '<?php echo $item->alamat ?>', <?php echo $item->longitude ?>, <?php echo $item->latitude ?>],
          <?php
            }
          }
          ?>
        ];

        function setMarkers(map, locations) {
          var globalPin = 'img/marker.png';

          for (var i = 0; i < locations.length; i++) {

            var office = locations[i];
            var myLatLng = new google.maps.LatLng(office[4], office[3]);
            var infowindow = new google.maps.InfoWindow({
              content: contentString
            });

            var contentString =
              '<div id="content">' +
              '<div id="siteNotice">' +
              '</div>' +
              '<h5 id="firstHeading" class="firstHeading">' + office[1] + '</h5>' +
              '<div id="bodyContent">' +
              '<a href=detail.php?id_wisata=' + office[0] + '>Info Detail</a>' +
              '</div>' +
              '</div>';

            var marker = new google.maps.Marker({
              position: myLatLng,
              map: map,
              title: office[1],
              icon: 'img/markermap.png'
            });

            google.maps.event.addListener(marker, 'click', getInfoCallback(map, contentString));
          }
        }

        function getInfoCallback(map, content) {
          var infowindow = new google.maps.InfoWindow({
            content: content
          });
          return function() {
            infowindow.setContent(content);
            infowindow.open(map, this);
          };
        }
        initialize();
      </script>
    </div>
  </div>
</section>
<!-- End about-info Area -->

    <!--Start-->
    <section id="counts">
      <div class="container">
        <div class="title text-center">
          <h1 class="mb-10">Jumlah Persebaran Sawah</h1>
          <br>
        </div>

        <div class="row d-flex justify-content-center">
          <?php
          include_once "countsma.php";
          $obj = json_decode($data);
          $sman = "";
          foreach ($obj->results as $item) {
            $sman .= $item->sma;
          }
          ?>

          <div class="text-center">
            <h1><span data-toggle="counter-up"><?php echo $sman; ?></span></h1>
            <br>
          </div>
          <?php
          include_once "countsmk.php";
          $obj2 = json_decode($data);
          $smkn = "";
          foreach ($obj2->results as $item2) {
            $smkn .= $item2->smk;
          }
          ?>
        </div>
        </div>
    </section>
  </section>
    <!--End-->

    <script src="https://maps.googleapis.com/maps/api/js?sensor=false&callback=initMap"></script>

<script>
  function initialize() {
    var myLatlng = new google.maps.LatLng(<?php echo $lat ?>, <?php echo $long ?>);
    var mapOptions = {
      zoom: 13,
      center: myLatlng
    };

    var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

    var contentString = '<div id="content">' +
      '<div id="siteNotice">' +
      '</div>' +
      '<h1 id="firstHeading" class="firstHeading"><?php echo $nama_wisata ?></h1>' +
      '<div id="bodyContent">' +
      '<p><?php echo $alamat ?></p>' +
      '</div>' +
      '</div>';

    var infowindow = new google.maps.InfoWindow({
      content: contentString
    });

    var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      title: 'Maps Info',
      icon: 'img/markermap.png'
    });
    google.maps.event.addListener(marker, 'click', function() {
      infowindow.open(map, marker);
    });
  }

  google.maps.event.addDomListener(window, 'load', initialize);
</script>