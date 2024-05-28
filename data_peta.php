<?php include "header2.php"; ?>

    <link rel="stylesheet" href="qgis2-web/css/leaflet.css">
    <link rel="stylesheet" href="qgis2-web/css/L.Control.Layers.Tree.css">
    <link rel="stylesheet" href="qgis2-web/css/L.Control.Locate.min.css">
    <link rel="stylesheet" href="qgis2-web/css/qgis2web.css">
    <link rel="stylesheet" href="qgis2-web/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="qgis2-web/css/leaflet-search.css">
    <link rel="stylesheet" href="qgis2-web/css/leaflet-measure.css">
    <style>
    html, body, #map {
        width: 100%;
        height: 100%;
        padding: 0;
        margin: 0;
    }
    </style>

    <body>
        <div id="map">
        </div>
        <script src="qgis2-web/js/qgis2web_expressions.js"></script>
        <script src="qgis2-web/js/leaflet.js"></script>
        <script src="qgis2-web/js/L.Control.Layers.Tree.min.js"></script>
        <script src="qgis2-web/js/L.Control.Locate.min.js"></script>
        <script src="qgis2-web/js/leaflet.rotatedMarker.js"></script>
        <script src="qgis2-web/js/leaflet.pattern.js"></script>
        <script src="qgis2-web/js/leaflet-hash.js"></script>
        <script src="qgis2-web/js/Autolinker.min.js"></script>
        <script src="qgis2-web/js/rbush.min.js"></script>
        <script src="qgis2-web/js/labelgun.min.js"></script>
        <script src="qgis2-web/js/labels.js"></script>
        <script src="qgis2-web/js/leaflet-measure.js"></script>
        <script src="qgis2-web/js/leaflet-search.js"></script>
        <script src="qgis2-web/data/Daerah_Provinsi_Banten_1.js"></script>
        <script src="qgis2-web/data/KotaCilegonAgrisawah_2.js"></script>
        <script src="qgis2-web/data/TangerangAgrisawah_3.js"></script>
        <script src="qgis2-web/data/SerangAgrisawah_4.js"></script>
        <script src="qgis2-web/data/PandeglangAgrisawah_5.js"></script>
        <script src="qgis2-web/data/LebakAgrisawah_6.js"></script>
        <script src="qgis2-web/data/KotaTangerangSelatanAgrisawah_7.js"></script>
        <script src="qgis2-web/data/KotaTangerangAgrisawah_8.js"></script>
        <script src="qgis2-web/data/KotaSerangAgrisawah_9.js"></script>
        <script>
        var highlightLayer;
        function highlightFeature(e) {
            highlightLayer = e.target;

            if (e.target.feature.geometry.type === 'LineString' || e.target.feature.geometry.type === 'MultiLineString') {
              highlightLayer.setStyle({
                color: '#ffff00',
              });
            } else {
              highlightLayer.setStyle({
                fillColor: '#ffff00',
                fillOpacity: 1
              });
            }
        }
        var map = L.map('map', {
            zoomControl:true, maxZoom:28, minZoom:1
        }).fitBounds([[-6.904048214168931,105.98421557728643],[-6.042880896378016,107.72095635758969]]);
        var hash = new L.Hash(map);
        map.attributionControl.setPrefix('<a href="https://github.com/tomchadwin/qgis2web" target="_blank">qgis2web</a> &middot; <a href="https://leafletjs.com" title="A JS library for interactive maps">Leaflet</a> &middot; <a href="https://qgis.org">QGIS</a>');
        var autolinker = new Autolinker({truncate: {length: 30, location: 'smart'}});
        function removeEmptyRowsFromPopupContent(content, feature) {
         var tempDiv = document.createElement('div');
         tempDiv.innerHTML = content;
         var rows = tempDiv.querySelectorAll('tr');
         for (var i = 0; i < rows.length; i++) {
             var td = rows[i].querySelector('td.visible-with-data');
             var key = td ? td.id : '';
             if (td && td.classList.contains('visible-with-data') && feature.properties[key] == null) {
                 rows[i].parentNode.removeChild(rows[i]);
             }
         }
         return tempDiv.innerHTML;
        }
        document.querySelector(".leaflet-popup-pane").addEventListener("load", function(event) {
          var tagName = event.target.tagName,
            popup = map._popup;
          // Also check if flag is already set.
          if (tagName === "IMG" && popup && !popup._updated) {
            popup._updated = true; // Set flag to prevent looping.
            popup.update();
          }
        }, true);
        L.control.locate({locateOptions: {maxZoom: 19}}).addTo(map);
        var measureControl = new L.Control.Measure({
            position: 'topleft',
            primaryLengthUnit: 'meters',
            secondaryLengthUnit: 'kilometers',
            primaryAreaUnit: 'sqmeters',
            secondaryAreaUnit: 'hectares'
        });
        measureControl.addTo(map);
        document.getElementsByClassName('leaflet-control-measure-toggle')[0]
        .innerHTML = '';
        document.getElementsByClassName('leaflet-control-measure-toggle')[0]
        .className += ' fas fa-ruler';
        var bounds_group = new L.featureGroup([]);
        function setBounds() {
        }
        map.createPane('pane_OSMStandard_0');
        map.getPane('pane_OSMStandard_0').style.zIndex = 400;
        var layer_OSMStandard_0 = L.tileLayer('http://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            pane: 'pane_OSMStandard_0',
            opacity: 1.0,
            attribution: '<a href="https://www.openstreetmap.org/copyright">© OpenStreetMap contributors, CC-BY-SA</a>',
            minZoom: 1,
            maxZoom: 28,
            minNativeZoom: 0,
            maxNativeZoom: 19
        });
        layer_OSMStandard_0;
        map.addLayer(layer_OSMStandard_0);
        function pop_Daerah_Provinsi_Banten_1(feature, layer) {
            layer.on({
                mouseout: function(e) {
                    for (var i in e.target._eventParents) {
                        if (typeof e.target._eventParents[i].resetStyle === 'function') {
                            e.target._eventParents[i].resetStyle(e.target);
                        }
                    }
                },
                mouseover: highlightFeature,
            });
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['NAMOBJ'] !== null ? autolinker.link(feature.properties['NAMOBJ'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['WADMKC'] !== null ? autolinker.link(feature.properties['WADMKC'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['WADMKK'] !== null ? autolinker.link(feature.properties['WADMKK'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['WADMPR'] !== null ? autolinker.link(feature.properties['WADMPR'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
            var popup = layer.getPopup();
            var content = popup.getContent();
            var updatedContent = removeEmptyRowsFromPopupContent(content, feature);
            popup.setContent(updatedContent);
        }

        function style_Daerah_Provinsi_Banten_1_0(feature) {
            switch(String(feature.properties['NAMOBJ'])) {
                case 'Administrasi Kepulauan Seribu':
                    return {
                pane: 'pane_Daerah_Provinsi_Banten_1',
                opacity: 1,
                color: 'rgba(35,35,35,0.703)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(218,39,93,0.703)',
                interactive: true,
            }
                    break;
                case 'Babakan':
                    return {
                pane: 'pane_Daerah_Provinsi_Banten_1',
                opacity: 1,
                color: 'rgba(35,35,35,0.703)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(210,203,99,0.703)',
                interactive: true,
            }
                    break;
                case 'Baktijaya':
                    return {
                pane: 'pane_Daerah_Provinsi_Banten_1',
                opacity: 1,
                color: 'rgba(35,35,35,0.703)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(59,150,203,0.703)',
                interactive: true,
            }
                    break;
                case 'Bambuapus':
                    return {
                pane: 'pane_Daerah_Provinsi_Banten_1',
                opacity: 1,
                color: 'rgba(35,35,35,0.703)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(110,27,204,0.703)',
                interactive: true,
            }
                    break;
                case 'Banten':
                    return {
                pane: 'pane_Daerah_Provinsi_Banten_1',
                opacity: 1,
                color: 'rgba(35,35,35,0.703)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(51,160,238,0.703)',
                interactive: true,
            }
                    break;
                case 'Bendabaru':
                    return {
                pane: 'pane_Daerah_Provinsi_Banten_1',
                opacity: 1,
                color: 'rgba(35,35,35,0.703)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(152,123,206,0.703)',
                interactive: true,
            }
                    break;
                case 'Bintaro':
                    return {
                pane: 'pane_Daerah_Provinsi_Banten_1',
                opacity: 1,
                color: 'rgba(35,35,35,0.703)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(228,95,62,0.703)',
                interactive: true,
            }
                    break;
                case 'Bogor':
                    return {
                pane: 'pane_Daerah_Provinsi_Banten_1',
                opacity: 1,
                color: 'rgba(35,35,35,0.703)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(235,139,185,0.703)',
                interactive: true,
            }
                    break;
                case 'Buaran':
                    return {
                pane: 'pane_Daerah_Provinsi_Banten_1',
                opacity: 1,
                color: 'rgba(35,35,35,0.703)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(54,49,208,0.703)',
                interactive: true,
            }
                    break;
                case 'Cempakaputih':
                    return {
                pane: 'pane_Daerah_Provinsi_Banten_1',
                opacity: 1,
                color: 'rgba(35,35,35,0.703)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(211,97,215,0.703)',
                interactive: true,
            }
                    break;
                case 'Ciater':
                    return {
                pane: 'pane_Daerah_Provinsi_Banten_1',
                opacity: 1,
                color: 'rgba(35,35,35,0.703)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(201,39,147,0.703)',
                interactive: true,
            }
                    break;
                case 'Cibogo':
                    return {
                pane: 'pane_Daerah_Provinsi_Banten_1',
                opacity: 1,
                color: 'rgba(35,35,35,0.703)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(138,217,93,0.703)',
                interactive: true,
            }
                    break;
                case 'Cihuni':
                    return {
                pane: 'pane_Daerah_Provinsi_Banten_1',
                opacity: 1,
                color: 'rgba(35,35,35,0.703)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(52,204,146,0.703)',
                interactive: true,
            }
                    break;
                case 'Cilenggang':
                    return {
                pane: 'pane_Daerah_Provinsi_Banten_1',
                opacity: 1,
                color: 'rgba(35,35,35,0.703)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(196,207,72,0.703)',
                interactive: true,
            }
                    break;
                case 'Cinangka':
                    return {
                pane: 'pane_Daerah_Provinsi_Banten_1',
                opacity: 1,
                color: 'rgba(35,35,35,0.703)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(72,83,210,0.703)',
                interactive: true,
            }
                    break;
                case 'Cinere':
                    return {
                pane: 'pane_Daerah_Provinsi_Banten_1',
                opacity: 1,
                color: 'rgba(35,35,35,0.703)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(215,215,57,0.703)',
                interactive: true,
            }
                    break;
                case 'Cipadujaya':
                    return {
                pane: 'pane_Daerah_Provinsi_Banten_1',
                opacity: 1,
                color: 'rgba(35,35,35,0.703)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(224,97,190,0.703)',
                interactive: true,
            }
                    break;
                case 'Cipayung':
                    return {
                pane: 'pane_Daerah_Provinsi_Banten_1',
                opacity: 1,
                color: 'rgba(35,35,35,0.703)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(184,44,223,0.703)',
                interactive: true,
            }
                    break;
                case 'Ciputat':
                    return {
                pane: 'pane_Daerah_Provinsi_Banten_1',
                opacity: 1,
                color: 'rgba(35,35,35,0.703)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(139,46,220,0.703)',
                interactive: true,
            }
                    break;
                case 'Cireundeu':
                    return {
                pane: 'pane_Daerah_Provinsi_Banten_1',
                opacity: 1,
                color: 'rgba(35,35,35,0.703)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(216,107,70,0.703)',
                interactive: true,
            }
                    break;
                case 'Jelupang':
                    return {
                pane: 'pane_Daerah_Provinsi_Banten_1',
                opacity: 1,
                color: 'rgba(35,35,35,0.703)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(212,27,58,0.703)',
                interactive: true,
            }
                    break;
                case 'Jombang':
                    return {
                pane: 'pane_Daerah_Provinsi_Banten_1',
                opacity: 1,
                color: 'rgba(35,35,35,0.703)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(49,214,140,0.703)',
                interactive: true,
            }
                    break;
                case 'Jurangmangu Barat':
                    return {
                pane: 'pane_Daerah_Provinsi_Banten_1',
                opacity: 1,
                color: 'rgba(35,35,35,0.703)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(100,161,218,0.703)',
                interactive: true,
            }
                    break;
                case 'Jurangmangu Timur':
                    return {
                pane: 'pane_Daerah_Provinsi_Banten_1',
                opacity: 1,
                color: 'rgba(35,35,35,0.703)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(238,124,229,0.703)',
                interactive: true,
            }
                    break;
                case 'Kademangan':
                    return {
                pane: 'pane_Daerah_Provinsi_Banten_1',
                opacity: 1,
                color: 'rgba(35,35,35,0.703)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(60,45,200,0.703)',
                interactive: true,
            }
                    break;
                case 'Kedaung':
                    return {
                pane: 'pane_Daerah_Provinsi_Banten_1',
                opacity: 1,
                color: 'rgba(35,35,35,0.703)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(208,32,73,0.703)',
                interactive: true,
            }
                    break;
                case 'Keranggan':
                    return {
                pane: 'pane_Daerah_Provinsi_Banten_1',
                opacity: 1,
                color: 'rgba(35,35,35,0.703)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(84,124,204,0.703)',
                interactive: true,
            }
                    break;
                case 'Kota Administrasi Jakarta Barat':
                    return {
                pane: 'pane_Daerah_Provinsi_Banten_1',
                opacity: 1,
                color: 'rgba(35,35,35,0.703)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(28,233,230,0.703)',
                interactive: true,
            }
                    break;
                case 'Kota Administrasi Jakarta Selatan':
                    return {
                pane: 'pane_Daerah_Provinsi_Banten_1',
                opacity: 1,
                color: 'rgba(35,35,35,0.703)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(147,239,77,0.703)',
                interactive: true,
            }
                    break;
                case 'Kota Administrasi Jakarta Utara':
                    return {
                pane: 'pane_Daerah_Provinsi_Banten_1',
                opacity: 1,
                color: 'rgba(35,35,35,0.703)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(118,198,209,0.703)',
                interactive: true,
            }
                    break;
                case 'Kota Cilegon':
                    return {
                pane: 'pane_Daerah_Provinsi_Banten_1',
                opacity: 1,
                color: 'rgba(35,35,35,0.703)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(96,205,130,0.703)',
                interactive: true,
            }
                    break;
                case 'Kota Depok':
                    return {
                pane: 'pane_Daerah_Provinsi_Banten_1',
                opacity: 1,
                color: 'rgba(35,35,35,0.703)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(204,172,30,0.703)',
                interactive: true,
            }
                    break;
                case 'Kota Serang':
                    return {
                pane: 'pane_Daerah_Provinsi_Banten_1',
                opacity: 1,
                color: 'rgba(35,35,35,0.703)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(120,235,81,0.703)',
                interactive: true,
            }
                    break;
                case 'Kota Tangerang':
                    return {
                pane: 'pane_Daerah_Provinsi_Banten_1',
                opacity: 1,
                color: 'rgba(35,35,35,0.703)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(207,122,169,0.703)',
                interactive: true,
            }
                    break;
                case 'Kota Tangerang Selatan':
                    return {
                pane: 'pane_Daerah_Provinsi_Banten_1',
                opacity: 1,
                color: 'rgba(35,35,35,0.703)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(168,215,94,0.703)',
                interactive: true,
            }
                    break;
                case 'Kunciran':
                    return {
                pane: 'pane_Daerah_Provinsi_Banten_1',
                opacity: 1,
                color: 'rgba(35,35,35,0.703)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(214,111,26,0.703)',
                interactive: true,
            }
                    break;
                case 'Lampung Selatan':
                    return {
                pane: 'pane_Daerah_Provinsi_Banten_1',
                opacity: 1,
                color: 'rgba(35,35,35,0.703)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(216,43,52,0.703)',
                interactive: true,
            }
                    break;
                case 'Larangan Selatan':
                    return {
                pane: 'pane_Daerah_Provinsi_Banten_1',
                opacity: 1,
                color: 'rgba(35,35,35,0.703)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(207,144,37,0.703)',
                interactive: true,
            }
                    break;
                case 'Lebak':
                    return {
                pane: 'pane_Daerah_Provinsi_Banten_1',
                opacity: 1,
                color: 'rgba(35,35,35,0.703)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(207,134,38,0.703)',
                interactive: true,
            }
                    break;
                case 'Lebakbulus':
                    return {
                pane: 'pane_Daerah_Provinsi_Banten_1',
                opacity: 1,
                color: 'rgba(35,35,35,0.703)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(75,37,212,0.703)',
                interactive: true,
            }
                    break;
                case 'Lengkong Karya':
                    return {
                pane: 'pane_Daerah_Provinsi_Banten_1',
                opacity: 1,
                color: 'rgba(35,35,35,0.703)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(76,202,21,0.703)',
                interactive: true,
            }
                    break;
                case 'Lengkong Kulon':
                    return {
                pane: 'pane_Daerah_Provinsi_Banten_1',
                opacity: 1,
                color: 'rgba(35,35,35,0.703)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(152,66,210,0.703)',
                interactive: true,
            }
                    break;
                case 'Lengkong Wetan':
                    return {
                pane: 'pane_Daerah_Provinsi_Banten_1',
                opacity: 1,
                color: 'rgba(35,35,35,0.703)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(218,43,238,0.703)',
                interactive: true,
            }
                    break;
                case 'Lengkonggudang':
                    return {
                pane: 'pane_Daerah_Provinsi_Banten_1',
                opacity: 1,
                color: 'rgba(35,35,35,0.703)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(184,227,67,0.703)',
                interactive: true,
            }
                    break;
                case 'Lengkonggudang Timur':
                    return {
                pane: 'pane_Daerah_Provinsi_Banten_1',
                opacity: 1,
                color: 'rgba(35,35,35,0.703)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(239,125,123,0.703)',
                interactive: true,
            }
                    break;
                case 'Limo':
                    return {
                pane: 'pane_Daerah_Provinsi_Banten_1',
                opacity: 1,
                color: 'rgba(35,35,35,0.703)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(238,131,24,0.703)',
                interactive: true,
            }
                    break;
                case 'Muncul':
                    return {
                pane: 'pane_Daerah_Provinsi_Banten_1',
                opacity: 1,
                color: 'rgba(35,35,35,0.703)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(104,206,226,0.703)',
                interactive: true,
            }
                    break;
                case 'Pabuaran':
                    return {
                pane: 'pane_Daerah_Provinsi_Banten_1',
                opacity: 1,
                color: 'rgba(35,35,35,0.703)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(219,119,161,0.703)',
                interactive: true,
            }
                    break;
                case 'Pakualam':
                    return {
                pane: 'pane_Daerah_Provinsi_Banten_1',
                opacity: 1,
                color: 'rgba(35,35,35,0.703)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(148,234,62,0.703)',
                interactive: true,
            }
                    break;
                case 'Pakulonan':
                    return {
                pane: 'pane_Daerah_Provinsi_Banten_1',
                opacity: 1,
                color: 'rgba(35,35,35,0.703)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(206,67,46,0.703)',
                interactive: true,
            }
                    break;
                case 'Pakulonan Barat':
                    return {
                pane: 'pane_Daerah_Provinsi_Banten_1',
                opacity: 1,
                color: 'rgba(35,35,35,0.703)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(220,15,138,0.703)',
                interactive: true,
            }
                    break;
                case 'Pamulang Barat':
                    return {
                pane: 'pane_Daerah_Provinsi_Banten_1',
                opacity: 1,
                color: 'rgba(35,35,35,0.703)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(166,138,235,0.703)',
                interactive: true,
            }
                    break;
                case 'Pamulang Timur':
                    return {
                pane: 'pane_Daerah_Provinsi_Banten_1',
                opacity: 1,
                color: 'rgba(35,35,35,0.703)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(17,225,31,0.703)',
                interactive: true,
            }
                    break;
                case 'Pandeglang':
                    return {
                pane: 'pane_Daerah_Provinsi_Banten_1',
                opacity: 1,
                color: 'rgba(35,35,35,0.703)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(38,206,38,0.703)',
                interactive: true,
            }
                    break;
                case 'Pangkalanjati':
                    return {
                pane: 'pane_Daerah_Provinsi_Banten_1',
                opacity: 1,
                color: 'rgba(35,35,35,0.703)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(210,125,72,0.703)',
                interactive: true,
            }
                    break;
                case 'Paninggilan':
                    return {
                pane: 'pane_Daerah_Provinsi_Banten_1',
                opacity: 1,
                color: 'rgba(35,35,35,0.703)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(103,206,115,0.703)',
                interactive: true,
            }
                    break;
                case 'Panunggangan':
                    return {
                pane: 'pane_Daerah_Provinsi_Banten_1',
                opacity: 1,
                color: 'rgba(35,35,35,0.703)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(18,21,203,0.703)',
                interactive: true,
            }
                    break;
                case 'Parigi':
                    return {
                pane: 'pane_Daerah_Provinsi_Banten_1',
                opacity: 1,
                color: 'rgba(35,35,35,0.703)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(130,212,237,0.703)',
                interactive: true,
            }
                    break;
                case 'Parigibaru':
                    return {
                pane: 'pane_Daerah_Provinsi_Banten_1',
                opacity: 1,
                color: 'rgba(35,35,35,0.703)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(170,48,235,0.703)',
                interactive: true,
            }
                    break;
                case 'Parungserab':
                    return {
                pane: 'pane_Daerah_Provinsi_Banten_1',
                opacity: 1,
                color: 'rgba(35,35,35,0.703)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(109,214,148,0.703)',
                interactive: true,
            }
                    break;
                case 'Pengasinan':
                    return {
                pane: 'pane_Daerah_Provinsi_Banten_1',
                opacity: 1,
                color: 'rgba(35,35,35,0.703)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(106,226,218,0.703)',
                interactive: true,
            }
                    break;
                case 'Pesanggrahan':
                    return {
                pane: 'pane_Daerah_Provinsi_Banten_1',
                opacity: 1,
                color: 'rgba(35,35,35,0.703)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(107,20,238,0.703)',
                interactive: true,
            }
                    break;
                case 'Petukangan Selatan':
                    return {
                pane: 'pane_Daerah_Provinsi_Banten_1',
                opacity: 1,
                color: 'rgba(35,35,35,0.703)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(222,83,134,0.703)',
                interactive: true,
            }
                    break;
                case 'Pinang':
                    return {
                pane: 'pane_Daerah_Provinsi_Banten_1',
                opacity: 1,
                color: 'rgba(35,35,35,0.703)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(118,138,208,0.703)',
                interactive: true,
            }
                    break;
                case 'Pisangan':
                    return {
                pane: 'pane_Daerah_Provinsi_Banten_1',
                opacity: 1,
                color: 'rgba(35,35,35,0.703)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(219,177,52,0.703)',
                interactive: true,
            }
                    break;
                case 'Pondok Jagung':
                    return {
                pane: 'pane_Daerah_Provinsi_Banten_1',
                opacity: 1,
                color: 'rgba(35,35,35,0.703)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(226,65,53,0.703)',
                interactive: true,
            }
                    break;
                case 'Pondokaren':
                    return {
                pane: 'pane_Daerah_Provinsi_Banten_1',
                opacity: 1,
                color: 'rgba(35,35,35,0.703)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(180,121,203,0.703)',
                interactive: true,
            }
                    break;
                case 'Pondokbenda':
                    return {
                pane: 'pane_Daerah_Provinsi_Banten_1',
                opacity: 1,
                color: 'rgba(35,35,35,0.703)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(18,206,52,0.703)',
                interactive: true,
            }
                    break;
                case 'Pondokbetung':
                    return {
                pane: 'pane_Daerah_Provinsi_Banten_1',
                opacity: 1,
                color: 'rgba(35,35,35,0.703)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(86,234,214,0.703)',
                interactive: true,
            }
                    break;
                case 'Pondokcabeilir':
                    return {
                pane: 'pane_Daerah_Provinsi_Banten_1',
                opacity: 1,
                color: 'rgba(35,35,35,0.703)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(240,103,219,0.703)',
                interactive: true,
            }
                    break;
                case 'Pondokjagung':
                    return {
                pane: 'pane_Daerah_Provinsi_Banten_1',
                opacity: 1,
                color: 'rgba(35,35,35,0.703)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(41,192,200,0.703)',
                interactive: true,
            }
                    break;
                case 'Pondokjaya':
                    return {
                pane: 'pane_Daerah_Provinsi_Banten_1',
                opacity: 1,
                color: 'rgba(35,35,35,0.703)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(227,64,192,0.703)',
                interactive: true,
            }
                    break;
                case 'Pondokkacang Barat':
                    return {
                pane: 'pane_Daerah_Provinsi_Banten_1',
                opacity: 1,
                color: 'rgba(35,35,35,0.703)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(169,229,95,0.703)',
                interactive: true,
            }
                    break;
                case 'Pondokkacang Timur':
                    return {
                pane: 'pane_Daerah_Provinsi_Banten_1',
                opacity: 1,
                color: 'rgba(35,35,35,0.703)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(92,109,209,0.703)',
                interactive: true,
            }
                    break;
                case 'Pondokkarya':
                    return {
                pane: 'pane_Daerah_Provinsi_Banten_1',
                opacity: 1,
                color: 'rgba(35,35,35,0.703)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(96,224,128,0.703)',
                interactive: true,
            }
                    break;
                case 'Pondokpetir':
                    return {
                pane: 'pane_Daerah_Provinsi_Banten_1',
                opacity: 1,
                color: 'rgba(35,35,35,0.703)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(75,113,218,0.703)',
                interactive: true,
            }
                    break;
                case 'Pondokpinang':
                    return {
                pane: 'pane_Daerah_Provinsi_Banten_1',
                opacity: 1,
                color: 'rgba(35,35,35,0.703)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(38,204,16,0.703)',
                interactive: true,
            }
                    break;
                case 'Pondokpucung':
                    return {
                pane: 'pane_Daerah_Provinsi_Banten_1',
                opacity: 1,
                color: 'rgba(35,35,35,0.703)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(191,213,51,0.703)',
                interactive: true,
            }
                    break;
                case 'Pondokranji':
                    return {
                pane: 'pane_Daerah_Provinsi_Banten_1',
                opacity: 1,
                color: 'rgba(35,35,35,0.703)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(166,222,46,0.703)',
                interactive: true,
            }
                    break;
                case 'Rawabuntu':
                    return {
                pane: 'pane_Daerah_Provinsi_Banten_1',
                opacity: 1,
                color: 'rgba(35,35,35,0.703)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(198,123,213,0.703)',
                interactive: true,
            }
                    break;
                case 'Rawakalong':
                    return {
                pane: 'pane_Daerah_Provinsi_Banten_1',
                opacity: 1,
                color: 'rgba(35,35,35,0.703)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(143,219,125,0.703)',
                interactive: true,
            }
                    break;
                case 'Rawamekarjaya':
                    return {
                pane: 'pane_Daerah_Provinsi_Banten_1',
                opacity: 1,
                color: 'rgba(35,35,35,0.703)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(104,232,206,0.703)',
                interactive: true,
            }
                    break;
                case 'Rempoa':
                    return {
                pane: 'pane_Daerah_Provinsi_Banten_1',
                opacity: 1,
                color: 'rgba(35,35,35,0.703)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(54,231,143,0.703)',
                interactive: true,
            }
                    break;
                case 'Rengas':
                    return {
                pane: 'pane_Daerah_Provinsi_Banten_1',
                opacity: 1,
                color: 'rgba(35,35,35,0.703)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(225,74,222,0.703)',
                interactive: true,
            }
                    break;
                case 'Sampora':
                    return {
                pane: 'pane_Daerah_Provinsi_Banten_1',
                opacity: 1,
                color: 'rgba(35,35,35,0.703)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(76,219,183,0.703)',
                interactive: true,
            }
                    break;
                case 'Sawah':
                    return {
                pane: 'pane_Daerah_Provinsi_Banten_1',
                opacity: 1,
                color: 'rgba(35,35,35,0.703)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(210,192,78,0.703)',
                interactive: true,
            }
                    break;
                case 'Sawahbaru':
                    return {
                pane: 'pane_Daerah_Provinsi_Banten_1',
                opacity: 1,
                color: 'rgba(35,35,35,0.703)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(59,26,225,0.703)',
                interactive: true,
            }
                    break;
                case 'Serang':
                    return {
                pane: 'pane_Daerah_Provinsi_Banten_1',
                opacity: 1,
                color: 'rgba(35,35,35,0.703)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(213,59,77,0.703)',
                interactive: true,
            }
                    break;
                case 'Serpong':
                    return {
                pane: 'pane_Daerah_Provinsi_Banten_1',
                opacity: 1,
                color: 'rgba(35,35,35,0.703)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(184,221,34,0.703)',
                interactive: true,
            }
                    break;
                case 'Serua':
                    return {
                pane: 'pane_Daerah_Provinsi_Banten_1',
                opacity: 1,
                color: 'rgba(35,35,35,0.703)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(104,180,213,0.703)',
                interactive: true,
            }
                    break;
                case 'Seruaindah':
                    return {
                pane: 'pane_Daerah_Provinsi_Banten_1',
                opacity: 1,
                color: 'rgba(35,35,35,0.703)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(228,180,76,0.703)',
                interactive: true,
            }
                    break;
                case 'Setu':
                    return {
                pane: 'pane_Daerah_Provinsi_Banten_1',
                opacity: 1,
                color: 'rgba(35,35,35,0.703)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(16,235,166,0.703)',
                interactive: true,
            }
                    break;
                case 'Sukabumi':
                    return {
                pane: 'pane_Daerah_Provinsi_Banten_1',
                opacity: 1,
                color: 'rgba(35,35,35,0.703)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(129,168,226,0.703)',
                interactive: true,
            }
                    break;
                case 'Suradita':
                    return {
                pane: 'pane_Daerah_Provinsi_Banten_1',
                opacity: 1,
                color: 'rgba(35,35,35,0.703)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(67,136,221,0.703)',
                interactive: true,
            }
                    break;
                case 'Tajur':
                    return {
                pane: 'pane_Daerah_Provinsi_Banten_1',
                opacity: 1,
                color: 'rgba(35,35,35,0.703)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(215,150,120,0.703)',
                interactive: true,
            }
                    break;
                case 'Tangerang':
                    return {
                pane: 'pane_Daerah_Provinsi_Banten_1',
                opacity: 1,
                color: 'rgba(35,35,35,0.703)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(108,216,155,0.703)',
                interactive: true,
            }
                    break;
                default:
                    return {
                pane: 'pane_Daerah_Provinsi_Banten_1',
                opacity: 1,
                color: 'rgba(35,35,35,0.703)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(95,226,86,0.703)',
                interactive: true,
            }
                    break;
            }
        }
        map.createPane('pane_Daerah_Provinsi_Banten_1');
        map.getPane('pane_Daerah_Provinsi_Banten_1').style.zIndex = 401;
        map.getPane('pane_Daerah_Provinsi_Banten_1').style['mix-blend-mode'] = 'normal';
        var layer_Daerah_Provinsi_Banten_1 = new L.geoJson(json_Daerah_Provinsi_Banten_1, {
            attribution: '',
            interactive: true,
            dataVar: 'json_Daerah_Provinsi_Banten_1',
            layerName: 'layer_Daerah_Provinsi_Banten_1',
            pane: 'pane_Daerah_Provinsi_Banten_1',
            onEachFeature: pop_Daerah_Provinsi_Banten_1,
            style: style_Daerah_Provinsi_Banten_1_0,
        });
        bounds_group.addLayer(layer_Daerah_Provinsi_Banten_1);
        map.addLayer(layer_Daerah_Provinsi_Banten_1);
        function pop_KotaCilegonAgrisawah_2(feature, layer) {
            layer.on({
                mouseout: function(e) {
                    for (var i in e.target._eventParents) {
                        if (typeof e.target._eventParents[i].resetStyle === 'function') {
                            e.target._eventParents[i].resetStyle(e.target);
                        }
                    }
                },
                mouseover: highlightFeature,
            });
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['gid'] !== null ? autolinker.link(feature.properties['gid'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['namobj'] !== null ? autolinker.link(feature.properties['namobj'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['jnsswh'] !== null ? autolinker.link(feature.properties['jnsswh'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['fcode'] !== null ? autolinker.link(feature.properties['fcode'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['aqdate'] !== null ? autolinker.link(feature.properties['aqdate'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['pudate'] !== null ? autolinker.link(feature.properties['pudate'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['remark'] !== null ? autolinker.link(feature.properties['remark'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['kodlco'] !== null ? autolinker.link(feature.properties['kodlco'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['srs_id'] !== null ? autolinker.link(feature.properties['srs_id'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['lcode'] !== null ? autolinker.link(feature.properties['lcode'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['metadata'] !== null ? autolinker.link(feature.properties['metadata'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['tnmswh'] !== null ? autolinker.link(feature.properties['tnmswh'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['shape_leng'] !== null ? autolinker.link(feature.properties['shape_leng'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['shape_area'] !== null ? autolinker.link(feature.properties['shape_area'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
            var popup = layer.getPopup();
            var content = popup.getContent();
            var updatedContent = removeEmptyRowsFromPopupContent(content, feature);
            popup.setContent(updatedContent);
        }

        function style_KotaCilegonAgrisawah_2_0() {
            return {
                pane: 'pane_KotaCilegonAgrisawah_2',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(114,155,111,1.0)',
                interactive: true,
            }
        }
        map.createPane('pane_KotaCilegonAgrisawah_2');
        map.getPane('pane_KotaCilegonAgrisawah_2').style.zIndex = 402;
        map.getPane('pane_KotaCilegonAgrisawah_2').style['mix-blend-mode'] = 'normal';
        var layer_KotaCilegonAgrisawah_2 = new L.geoJson(json_KotaCilegonAgrisawah_2, {
            attribution: '',
            interactive: true,
            dataVar: 'json_KotaCilegonAgrisawah_2',
            layerName: 'layer_KotaCilegonAgrisawah_2',
            pane: 'pane_KotaCilegonAgrisawah_2',
            onEachFeature: pop_KotaCilegonAgrisawah_2,
            style: style_KotaCilegonAgrisawah_2_0,
        });
        bounds_group.addLayer(layer_KotaCilegonAgrisawah_2);
        map.addLayer(layer_KotaCilegonAgrisawah_2);
        function pop_TangerangAgrisawah_3(feature, layer) {
            layer.on({
                mouseout: function(e) {
                    for (var i in e.target._eventParents) {
                        if (typeof e.target._eventParents[i].resetStyle === 'function') {
                            e.target._eventParents[i].resetStyle(e.target);
                        }
                    }
                },
                mouseover: highlightFeature,
            });
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['gid'] !== null ? autolinker.link(feature.properties['gid'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['namobj'] !== null ? autolinker.link(feature.properties['namobj'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['jnsswh'] !== null ? autolinker.link(feature.properties['jnsswh'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['fcode'] !== null ? autolinker.link(feature.properties['fcode'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['aqdate'] !== null ? autolinker.link(feature.properties['aqdate'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['pudate'] !== null ? autolinker.link(feature.properties['pudate'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['remark'] !== null ? autolinker.link(feature.properties['remark'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['kodlco'] !== null ? autolinker.link(feature.properties['kodlco'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['srs_id'] !== null ? autolinker.link(feature.properties['srs_id'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['lcode'] !== null ? autolinker.link(feature.properties['lcode'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['metadata'] !== null ? autolinker.link(feature.properties['metadata'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['tnmswh'] !== null ? autolinker.link(feature.properties['tnmswh'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['shape_leng'] !== null ? autolinker.link(feature.properties['shape_leng'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['shape_area'] !== null ? autolinker.link(feature.properties['shape_area'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
            var popup = layer.getPopup();
            var content = popup.getContent();
            var updatedContent = removeEmptyRowsFromPopupContent(content, feature);
            popup.setContent(updatedContent);
        }

        function style_TangerangAgrisawah_3_0() {
            return {
                pane: 'pane_TangerangAgrisawah_3',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(114,155,111,1.0)',
                interactive: true,
            }
        }
        map.createPane('pane_TangerangAgrisawah_3');
        map.getPane('pane_TangerangAgrisawah_3').style.zIndex = 403;
        map.getPane('pane_TangerangAgrisawah_3').style['mix-blend-mode'] = 'normal';
        var layer_TangerangAgrisawah_3 = new L.geoJson(json_TangerangAgrisawah_3, {
            attribution: '',
            interactive: true,
            dataVar: 'json_TangerangAgrisawah_3',
            layerName: 'layer_TangerangAgrisawah_3',
            pane: 'pane_TangerangAgrisawah_3',
            onEachFeature: pop_TangerangAgrisawah_3,
            style: style_TangerangAgrisawah_3_0,
        });
        bounds_group.addLayer(layer_TangerangAgrisawah_3);
        map.addLayer(layer_TangerangAgrisawah_3);
        function pop_SerangAgrisawah_4(feature, layer) {
            layer.on({
                mouseout: function(e) {
                    for (var i in e.target._eventParents) {
                        if (typeof e.target._eventParents[i].resetStyle === 'function') {
                            e.target._eventParents[i].resetStyle(e.target);
                        }
                    }
                },
                mouseover: highlightFeature,
            });
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['gid'] !== null ? autolinker.link(feature.properties['gid'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['namobj'] !== null ? autolinker.link(feature.properties['namobj'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['jnsswh'] !== null ? autolinker.link(feature.properties['jnsswh'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['fcode'] !== null ? autolinker.link(feature.properties['fcode'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['aqdate'] !== null ? autolinker.link(feature.properties['aqdate'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['pudate'] !== null ? autolinker.link(feature.properties['pudate'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['remark'] !== null ? autolinker.link(feature.properties['remark'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['kodlco'] !== null ? autolinker.link(feature.properties['kodlco'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['srs_id'] !== null ? autolinker.link(feature.properties['srs_id'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['lcode'] !== null ? autolinker.link(feature.properties['lcode'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['metadata'] !== null ? autolinker.link(feature.properties['metadata'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['tnmswh'] !== null ? autolinker.link(feature.properties['tnmswh'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['shape_leng'] !== null ? autolinker.link(feature.properties['shape_leng'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['shape_area'] !== null ? autolinker.link(feature.properties['shape_area'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
            var popup = layer.getPopup();
            var content = popup.getContent();
            var updatedContent = removeEmptyRowsFromPopupContent(content, feature);
            popup.setContent(updatedContent);
        }

        function style_SerangAgrisawah_4_0() {
            return {
                pane: 'pane_SerangAgrisawah_4',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(114,155,111,1.0)',
                interactive: true,
            }
        }
        map.createPane('pane_SerangAgrisawah_4');
        map.getPane('pane_SerangAgrisawah_4').style.zIndex = 404;
        map.getPane('pane_SerangAgrisawah_4').style['mix-blend-mode'] = 'normal';
        var layer_SerangAgrisawah_4 = new L.geoJson(json_SerangAgrisawah_4, {
            attribution: '',
            interactive: true,
            dataVar: 'json_SerangAgrisawah_4',
            layerName: 'layer_SerangAgrisawah_4',
            pane: 'pane_SerangAgrisawah_4',
            onEachFeature: pop_SerangAgrisawah_4,
            style: style_SerangAgrisawah_4_0,
        });
        bounds_group.addLayer(layer_SerangAgrisawah_4);
        map.addLayer(layer_SerangAgrisawah_4);
        function pop_PandeglangAgrisawah_5(feature, layer) {
            layer.on({
                mouseout: function(e) {
                    for (var i in e.target._eventParents) {
                        if (typeof e.target._eventParents[i].resetStyle === 'function') {
                            e.target._eventParents[i].resetStyle(e.target);
                        }
                    }
                },
                mouseover: highlightFeature,
            });
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['gid'] !== null ? autolinker.link(feature.properties['gid'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['namobj'] !== null ? autolinker.link(feature.properties['namobj'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['jnsswh'] !== null ? autolinker.link(feature.properties['jnsswh'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['fcode'] !== null ? autolinker.link(feature.properties['fcode'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['aqdate'] !== null ? autolinker.link(feature.properties['aqdate'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['pudate'] !== null ? autolinker.link(feature.properties['pudate'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['remark'] !== null ? autolinker.link(feature.properties['remark'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['kodlco'] !== null ? autolinker.link(feature.properties['kodlco'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['srs_id'] !== null ? autolinker.link(feature.properties['srs_id'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['lcode'] !== null ? autolinker.link(feature.properties['lcode'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['metadata'] !== null ? autolinker.link(feature.properties['metadata'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['tnmswh'] !== null ? autolinker.link(feature.properties['tnmswh'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['shape_leng'] !== null ? autolinker.link(feature.properties['shape_leng'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['shape_area'] !== null ? autolinker.link(feature.properties['shape_area'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
            var popup = layer.getPopup();
            var content = popup.getContent();
            var updatedContent = removeEmptyRowsFromPopupContent(content, feature);
            popup.setContent(updatedContent);
        }

        function style_PandeglangAgrisawah_5_0() {
            return {
                pane: 'pane_PandeglangAgrisawah_5',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(114,155,111,1.0)',
                interactive: true,
            }
        }
        map.createPane('pane_PandeglangAgrisawah_5');
        map.getPane('pane_PandeglangAgrisawah_5').style.zIndex = 405;
        map.getPane('pane_PandeglangAgrisawah_5').style['mix-blend-mode'] = 'normal';
        var layer_PandeglangAgrisawah_5 = new L.geoJson(json_PandeglangAgrisawah_5, {
            attribution: '',
            interactive: true,
            dataVar: 'json_PandeglangAgrisawah_5',
            layerName: 'layer_PandeglangAgrisawah_5',
            pane: 'pane_PandeglangAgrisawah_5',
            onEachFeature: pop_PandeglangAgrisawah_5,
            style: style_PandeglangAgrisawah_5_0,
        });
        bounds_group.addLayer(layer_PandeglangAgrisawah_5);
        map.addLayer(layer_PandeglangAgrisawah_5);
        function pop_LebakAgrisawah_6(feature, layer) {
            layer.on({
                mouseout: function(e) {
                    for (var i in e.target._eventParents) {
                        if (typeof e.target._eventParents[i].resetStyle === 'function') {
                            e.target._eventParents[i].resetStyle(e.target);
                        }
                    }
                },
                mouseover: highlightFeature,
            });
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['gid'] !== null ? autolinker.link(feature.properties['gid'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['namobj'] !== null ? autolinker.link(feature.properties['namobj'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['jnsswh'] !== null ? autolinker.link(feature.properties['jnsswh'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['fcode'] !== null ? autolinker.link(feature.properties['fcode'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['aqdate'] !== null ? autolinker.link(feature.properties['aqdate'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['pudate'] !== null ? autolinker.link(feature.properties['pudate'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['remark'] !== null ? autolinker.link(feature.properties['remark'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['kodlco'] !== null ? autolinker.link(feature.properties['kodlco'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['srs_id'] !== null ? autolinker.link(feature.properties['srs_id'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['lcode'] !== null ? autolinker.link(feature.properties['lcode'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['metadata'] !== null ? autolinker.link(feature.properties['metadata'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['tnmswh'] !== null ? autolinker.link(feature.properties['tnmswh'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['shape_leng'] !== null ? autolinker.link(feature.properties['shape_leng'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['shape_area'] !== null ? autolinker.link(feature.properties['shape_area'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
            var popup = layer.getPopup();
            var content = popup.getContent();
            var updatedContent = removeEmptyRowsFromPopupContent(content, feature);
            popup.setContent(updatedContent);
        }

        function style_LebakAgrisawah_6_0() {
            return {
                pane: 'pane_LebakAgrisawah_6',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(114,155,111,1.0)',
                interactive: true,
            }
        }
        map.createPane('pane_LebakAgrisawah_6');
        map.getPane('pane_LebakAgrisawah_6').style.zIndex = 406;
        map.getPane('pane_LebakAgrisawah_6').style['mix-blend-mode'] = 'normal';
        var layer_LebakAgrisawah_6 = new L.geoJson(json_LebakAgrisawah_6, {
            attribution: '',
            interactive: true,
            dataVar: 'json_LebakAgrisawah_6',
            layerName: 'layer_LebakAgrisawah_6',
            pane: 'pane_LebakAgrisawah_6',
            onEachFeature: pop_LebakAgrisawah_6,
            style: style_LebakAgrisawah_6_0,
        });
        bounds_group.addLayer(layer_LebakAgrisawah_6);
        map.addLayer(layer_LebakAgrisawah_6);
        function pop_KotaTangerangSelatanAgrisawah_7(feature, layer) {
            layer.on({
                mouseout: function(e) {
                    for (var i in e.target._eventParents) {
                        if (typeof e.target._eventParents[i].resetStyle === 'function') {
                            e.target._eventParents[i].resetStyle(e.target);
                        }
                    }
                },
                mouseover: highlightFeature,
            });
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['gid'] !== null ? autolinker.link(feature.properties['gid'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['namobj'] !== null ? autolinker.link(feature.properties['namobj'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['jnsswh'] !== null ? autolinker.link(feature.properties['jnsswh'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['fcode'] !== null ? autolinker.link(feature.properties['fcode'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['aqdate'] !== null ? autolinker.link(feature.properties['aqdate'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['pudate'] !== null ? autolinker.link(feature.properties['pudate'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['remark'] !== null ? autolinker.link(feature.properties['remark'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['kodlco'] !== null ? autolinker.link(feature.properties['kodlco'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['srs_id'] !== null ? autolinker.link(feature.properties['srs_id'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['lcode'] !== null ? autolinker.link(feature.properties['lcode'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['metadata'] !== null ? autolinker.link(feature.properties['metadata'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['tnmswh'] !== null ? autolinker.link(feature.properties['tnmswh'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['shape_leng'] !== null ? autolinker.link(feature.properties['shape_leng'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['shape_area'] !== null ? autolinker.link(feature.properties['shape_area'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
            var popup = layer.getPopup();
            var content = popup.getContent();
            var updatedContent = removeEmptyRowsFromPopupContent(content, feature);
            popup.setContent(updatedContent);
        }

        function style_KotaTangerangSelatanAgrisawah_7_0() {
            return {
                pane: 'pane_KotaTangerangSelatanAgrisawah_7',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(114,155,111,1.0)',
                interactive: true,
            }
        }
        map.createPane('pane_KotaTangerangSelatanAgrisawah_7');
        map.getPane('pane_KotaTangerangSelatanAgrisawah_7').style.zIndex = 407;
        map.getPane('pane_KotaTangerangSelatanAgrisawah_7').style['mix-blend-mode'] = 'normal';
        var layer_KotaTangerangSelatanAgrisawah_7 = new L.geoJson(json_KotaTangerangSelatanAgrisawah_7, {
            attribution: '',
            interactive: true,
            dataVar: 'json_KotaTangerangSelatanAgrisawah_7',
            layerName: 'layer_KotaTangerangSelatanAgrisawah_7',
            pane: 'pane_KotaTangerangSelatanAgrisawah_7',
            onEachFeature: pop_KotaTangerangSelatanAgrisawah_7,
            style: style_KotaTangerangSelatanAgrisawah_7_0,
        });
        bounds_group.addLayer(layer_KotaTangerangSelatanAgrisawah_7);
        map.addLayer(layer_KotaTangerangSelatanAgrisawah_7);
        function pop_KotaTangerangAgrisawah_8(feature, layer) {
            layer.on({
                mouseout: function(e) {
                    for (var i in e.target._eventParents) {
                        if (typeof e.target._eventParents[i].resetStyle === 'function') {
                            e.target._eventParents[i].resetStyle(e.target);
                        }
                    }
                },
                mouseover: highlightFeature,
            });
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['gid'] !== null ? autolinker.link(feature.properties['gid'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['namobj'] !== null ? autolinker.link(feature.properties['namobj'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['jnsswh'] !== null ? autolinker.link(feature.properties['jnsswh'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['fcode'] !== null ? autolinker.link(feature.properties['fcode'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['aqdate'] !== null ? autolinker.link(feature.properties['aqdate'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['pudate'] !== null ? autolinker.link(feature.properties['pudate'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['remark'] !== null ? autolinker.link(feature.properties['remark'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['kodlco'] !== null ? autolinker.link(feature.properties['kodlco'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['srs_id'] !== null ? autolinker.link(feature.properties['srs_id'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['lcode'] !== null ? autolinker.link(feature.properties['lcode'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['metadata'] !== null ? autolinker.link(feature.properties['metadata'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['tnmswh'] !== null ? autolinker.link(feature.properties['tnmswh'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['shape_leng'] !== null ? autolinker.link(feature.properties['shape_leng'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['shape_area'] !== null ? autolinker.link(feature.properties['shape_area'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
            var popup = layer.getPopup();
            var content = popup.getContent();
            var updatedContent = removeEmptyRowsFromPopupContent(content, feature);
            popup.setContent(updatedContent);
        }

        function style_KotaTangerangAgrisawah_8_0() {
            return {
                pane: 'pane_KotaTangerangAgrisawah_8',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(114,155,111,1.0)',
                interactive: true,
            }
        }
        map.createPane('pane_KotaTangerangAgrisawah_8');
        map.getPane('pane_KotaTangerangAgrisawah_8').style.zIndex = 408;
        map.getPane('pane_KotaTangerangAgrisawah_8').style['mix-blend-mode'] = 'normal';
        var layer_KotaTangerangAgrisawah_8 = new L.geoJson(json_KotaTangerangAgrisawah_8, {
            attribution: '',
            interactive: true,
            dataVar: 'json_KotaTangerangAgrisawah_8',
            layerName: 'layer_KotaTangerangAgrisawah_8',
            pane: 'pane_KotaTangerangAgrisawah_8',
            onEachFeature: pop_KotaTangerangAgrisawah_8,
            style: style_KotaTangerangAgrisawah_8_0,
        });
        bounds_group.addLayer(layer_KotaTangerangAgrisawah_8);
        map.addLayer(layer_KotaTangerangAgrisawah_8);
        function pop_KotaSerangAgrisawah_9(feature, layer) {
            layer.on({
                mouseout: function(e) {
                    for (var i in e.target._eventParents) {
                        if (typeof e.target._eventParents[i].resetStyle === 'function') {
                            e.target._eventParents[i].resetStyle(e.target);
                        }
                    }
                },
                mouseover: highlightFeature,
            });
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['gid'] !== null ? autolinker.link(feature.properties['gid'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['namobj'] !== null ? autolinker.link(feature.properties['namobj'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['jnsswh'] !== null ? autolinker.link(feature.properties['jnsswh'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['fcode'] !== null ? autolinker.link(feature.properties['fcode'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['aqdate'] !== null ? autolinker.link(feature.properties['aqdate'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['pudate'] !== null ? autolinker.link(feature.properties['pudate'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['remark'] !== null ? autolinker.link(feature.properties['remark'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['kodlco'] !== null ? autolinker.link(feature.properties['kodlco'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['srs_id'] !== null ? autolinker.link(feature.properties['srs_id'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['lcode'] !== null ? autolinker.link(feature.properties['lcode'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['metadata'] !== null ? autolinker.link(feature.properties['metadata'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['tnmswh'] !== null ? autolinker.link(feature.properties['tnmswh'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['shape_leng'] !== null ? autolinker.link(feature.properties['shape_leng'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['shape_area'] !== null ? autolinker.link(feature.properties['shape_area'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
            var popup = layer.getPopup();
            var content = popup.getContent();
            var updatedContent = removeEmptyRowsFromPopupContent(content, feature);
            popup.setContent(updatedContent);
        }

        function style_KotaSerangAgrisawah_9_0() {
            return {
                pane: 'pane_KotaSerangAgrisawah_9',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(114,155,111,1.0)',
                interactive: true,
            }
        }
        map.createPane('pane_KotaSerangAgrisawah_9');
        map.getPane('pane_KotaSerangAgrisawah_9').style.zIndex = 409;
        map.getPane('pane_KotaSerangAgrisawah_9').style['mix-blend-mode'] = 'normal';
        var layer_KotaSerangAgrisawah_9 = new L.geoJson(json_KotaSerangAgrisawah_9, {
            attribution: '',
            interactive: true,
            dataVar: 'json_KotaSerangAgrisawah_9',
            layerName: 'layer_KotaSerangAgrisawah_9',
            pane: 'pane_KotaSerangAgrisawah_9',
            onEachFeature: pop_KotaSerangAgrisawah_9,
            style: style_KotaSerangAgrisawah_9_0,
        });
        bounds_group.addLayer(layer_KotaSerangAgrisawah_9);
        map.addLayer(layer_KotaSerangAgrisawah_9);
        var baseMaps = {};
        var overlaysTree = [
            {label: '<img src="qgis2-web/legend/KotaSerangAgrisawah_9.png" /> Kota Serang Agrisawah', layer: layer_KotaSerangAgrisawah_9},
            {label: '<img src="qgis2-web/legend/KotaTangerangAgrisawah_8.png" /> Kota Tangerang Agrisawah', layer: layer_KotaTangerangAgrisawah_8},
            {label: '<img src="qgis2-web/legend/KotaTangerangSelatanAgrisawah_7.png" /> Kota Tangerang Selatan Agrisawah', layer: layer_KotaTangerangSelatanAgrisawah_7},
            {label: '<img src="qgis2-web/legend/LebakAgrisawah_6.png" /> Lebak Agrisawah', layer: layer_LebakAgrisawah_6},
            {label: '<img src="qgis2-web/legend/PandeglangAgrisawah_5.png" /> Pandeglang Agrisawah', layer: layer_PandeglangAgrisawah_5},
            {label: '<img src="qgis2-web/legend/SerangAgrisawah_4.png" /> Serang Agrisawah', layer: layer_SerangAgrisawah_4},
            {label: '<img src="qgis2-web/legend/TangerangAgrisawah_3.png" /> Tangerang Agrisawah', layer: layer_TangerangAgrisawah_3},
            {label: '<img src="qgis2-web/legend/KotaCilegonAgrisawah_2.png" /> Kota Cilegon Agrisawah', layer: layer_KotaCilegonAgrisawah_2},
            {label: 'Daerah_Provinsi_Banten<br /><table><tr><td style="text-align: center;"><img src="qgis2-web/legend/Daerah_Provinsi_Banten_1_AdministrasiKepulauanSeribu0.png" /></td><td>Administrasi Kepulauan Seribu</td></tr><tr><td style="text-align: center;"><img src="qgis2-web/legend/Daerah_Provinsi_Banten_1_Babakan1.png" /></td><td>Babakan</td></tr><tr><td style="text-align: center;"><img src="qgis2-web/legend/Daerah_Provinsi_Banten_1_Baktijaya2.png" /></td><td>Baktijaya</td></tr><tr><td style="text-align: center;"><img src="qgis2-web/legend/Daerah_Provinsi_Banten_1_Bambuapus3.png" /></td><td>Bambuapus</td></tr><tr><td style="text-align: center;"><img src="qgis2-web/legend/Daerah_Provinsi_Banten_1_Banten4.png" /></td><td>Banten</td></tr><tr><td style="text-align: center;"><img src="qgis2-web/legend/Daerah_Provinsi_Banten_1_Bendabaru5.png" /></td><td>Bendabaru</td></tr><tr><td style="text-align: center;"><img src="qgis2-web/legend/Daerah_Provinsi_Banten_1_Bintaro6.png" /></td><td>Bintaro</td></tr><tr><td style="text-align: center;"><img src="qgis2-web/legend/Daerah_Provinsi_Banten_1_Bogor7.png" /></td><td>Bogor</td></tr><tr><td style="text-align: center;"><img src="qgis2-web/legend/Daerah_Provinsi_Banten_1_Buaran8.png" /></td><td>Buaran</td></tr><tr><td style="text-align: center;"><img src="qgis2-web/legend/Daerah_Provinsi_Banten_1_Cempakaputih9.png" /></td><td>Cempakaputih</td></tr><tr><td style="text-align: center;"><img src="qgis2-web/legend/Daerah_Provinsi_Banten_1_Ciater10.png" /></td><td>Ciater</td></tr><tr><td style="text-align: center;"><img src="qgis2-web/legend/Daerah_Provinsi_Banten_1_Cibogo11.png" /></td><td>Cibogo</td></tr><tr><td style="text-align: center;"><img src="qgis2-web/legend/Daerah_Provinsi_Banten_1_Cihuni12.png" /></td><td>Cihuni</td></tr><tr><td style="text-align: center;"><img src="qgis2-web/legend/Daerah_Provinsi_Banten_1_Cilenggang13.png" /></td><td>Cilenggang</td></tr><tr><td style="text-align: center;"><img src="qgis2-web/legend/Daerah_Provinsi_Banten_1_Cinangka14.png" /></td><td>Cinangka</td></tr><tr><td style="text-align: center;"><img src="qgis2-web/legend/Daerah_Provinsi_Banten_1_Cinere15.png" /></td><td>Cinere</td></tr><tr><td style="text-align: center;"><img src="qgis2-web/legend/Daerah_Provinsi_Banten_1_Cipadujaya16.png" /></td><td>Cipadujaya</td></tr><tr><td style="text-align: center;"><img src="qgis2-web/legend/Daerah_Provinsi_Banten_1_Cipayung17.png" /></td><td>Cipayung</td></tr><tr><td style="text-align: center;"><img src="qgis2-web/legend/Daerah_Provinsi_Banten_1_Ciputat18.png" /></td><td>Ciputat</td></tr><tr><td style="text-align: center;"><img src="qgis2-web/legend/Daerah_Provinsi_Banten_1_Cireundeu19.png" /></td><td>Cireundeu</td></tr><tr><td style="text-align: center;"><img src="qgis2-web/legend/Daerah_Provinsi_Banten_1_Jelupang20.png" /></td><td>Jelupang</td></tr><tr><td style="text-align: center;"><img src="qgis2-web/legend/Daerah_Provinsi_Banten_1_Jombang21.png" /></td><td>Jombang</td></tr><tr><td style="text-align: center;"><img src="qgis2-web/legend/Daerah_Provinsi_Banten_1_JurangmanguBarat22.png" /></td><td>Jurangmangu Barat</td></tr><tr><td style="text-align: center;"><img src="qgis2-web/legend/Daerah_Provinsi_Banten_1_JurangmanguTimur23.png" /></td><td>Jurangmangu Timur</td></tr><tr><td style="text-align: center;"><img src="qgis2-web/legend/Daerah_Provinsi_Banten_1_Kademangan24.png" /></td><td>Kademangan</td></tr><tr><td style="text-align: center;"><img src="qgis2-web/legend/Daerah_Provinsi_Banten_1_Kedaung25.png" /></td><td>Kedaung</td></tr><tr><td style="text-align: center;"><img src="qgis2-web/legend/Daerah_Provinsi_Banten_1_Keranggan26.png" /></td><td>Keranggan</td></tr><tr><td style="text-align: center;"><img src="qgis2-web/legend/Daerah_Provinsi_Banten_1_KotaAdministrasiJakartaBarat27.png" /></td><td>Kota Administrasi Jakarta Barat</td></tr><tr><td style="text-align: center;"><img src="qgis2-web/legend/Daerah_Provinsi_Banten_1_KotaAdministrasiJakartaSelatan28.png" /></td><td>Kota Administrasi Jakarta Selatan</td></tr><tr><td style="text-align: center;"><img src="qgis2-web/legend/Daerah_Provinsi_Banten_1_KotaAdministrasiJakartaUtara29.png" /></td><td>Kota Administrasi Jakarta Utara</td></tr><tr><td style="text-align: center;"><img src="qgis2-web/legend/Daerah_Provinsi_Banten_1_KotaCilegon30.png" /></td><td>Kota Cilegon</td></tr><tr><td style="text-align: center;"><img src="qgis2-web/legend/Daerah_Provinsi_Banten_1_KotaDepok31.png" /></td><td>Kota Depok</td></tr><tr><td style="text-align: center;"><img src="qgis2-web/legend/Daerah_Provinsi_Banten_1_KotaSerang32.png" /></td><td>Kota Serang</td></tr><tr><td style="text-align: center;"><img src="qgis2-web/legend/Daerah_Provinsi_Banten_1_KotaTangerang33.png" /></td><td>Kota Tangerang</td></tr><tr><td style="text-align: center;"><img src="qgis2-web/legend/Daerah_Provinsi_Banten_1_KotaTangerangSelatan34.png" /></td><td>Kota Tangerang Selatan</td></tr><tr><td style="text-align: center;"><img src="qgis2-web/legend/Daerah_Provinsi_Banten_1_Kunciran35.png" /></td><td>Kunciran</td></tr><tr><td style="text-align: center;"><img src="qgis2-web/legend/Daerah_Provinsi_Banten_1_LampungSelatan36.png" /></td><td>Lampung Selatan</td></tr><tr><td style="text-align: center;"><img src="qgis2-web/legend/Daerah_Provinsi_Banten_1_LaranganSelatan37.png" /></td><td>Larangan Selatan</td></tr><tr><td style="text-align: center;"><img src="qgis2-web/legend/Daerah_Provinsi_Banten_1_Lebak38.png" /></td><td>Lebak</td></tr><tr><td style="text-align: center;"><img src="qgis2-web/legend/Daerah_Provinsi_Banten_1_Lebakbulus39.png" /></td><td>Lebakbulus</td></tr><tr><td style="text-align: center;"><img src="qgis2-web/legend/Daerah_Provinsi_Banten_1_LengkongKarya40.png" /></td><td>Lengkong Karya</td></tr><tr><td style="text-align: center;"><img src="qgis2-web/legend/Daerah_Provinsi_Banten_1_LengkongKulon41.png" /></td><td>Lengkong Kulon</td></tr><tr><td style="text-align: center;"><img src="qgis2-web/legend/Daerah_Provinsi_Banten_1_LengkongWetan42.png" /></td><td>Lengkong Wetan</td></tr><tr><td style="text-align: center;"><img src="qgis2-web/legend/Daerah_Provinsi_Banten_1_Lengkonggudang43.png" /></td><td>Lengkonggudang</td></tr><tr><td style="text-align: center;"><img src="qgis2-web/legend/Daerah_Provinsi_Banten_1_LengkonggudangTimur44.png" /></td><td>Lengkonggudang Timur</td></tr><tr><td style="text-align: center;"><img src="qgis2-web/legend/Daerah_Provinsi_Banten_1_Limo45.png" /></td><td>Limo</td></tr><tr><td style="text-align: center;"><img src="qgis2-web/legend/Daerah_Provinsi_Banten_1_Muncul46.png" /></td><td>Muncul</td></tr><tr><td style="text-align: center;"><img src="qgis2-web/legend/Daerah_Provinsi_Banten_1_Pabuaran47.png" /></td><td>Pabuaran</td></tr><tr><td style="text-align: center;"><img src="qgis2-web/legend/Daerah_Provinsi_Banten_1_Pakualam48.png" /></td><td>Pakualam</td></tr><tr><td style="text-align: center;"><img src="qgis2-web/legend/Daerah_Provinsi_Banten_1_Pakulonan49.png" /></td><td>Pakulonan</td></tr><tr><td style="text-align: center;"><img src="qgis2-web/legend/Daerah_Provinsi_Banten_1_PakulonanBarat50.png" /></td><td>Pakulonan Barat</td></tr><tr><td style="text-align: center;"><img src="qgis2-web/legend/Daerah_Provinsi_Banten_1_PamulangBarat51.png" /></td><td>Pamulang Barat</td></tr><tr><td style="text-align: center;"><img src="qgis2-web/legend/Daerah_Provinsi_Banten_1_PamulangTimur52.png" /></td><td>Pamulang Timur</td></tr><tr><td style="text-align: center;"><img src="qgis2-web/legend/Daerah_Provinsi_Banten_1_Pandeglang53.png" /></td><td>Pandeglang</td></tr><tr><td style="text-align: center;"><img src="qgis2-web/legend/Daerah_Provinsi_Banten_1_Pangkalanjati54.png" /></td><td>Pangkalanjati</td></tr><tr><td style="text-align: center;"><img src="qgis2-web/legend/Daerah_Provinsi_Banten_1_Paninggilan55.png" /></td><td>Paninggilan</td></tr><tr><td style="text-align: center;"><img src="qgis2-web/legend/Daerah_Provinsi_Banten_1_Panunggangan56.png" /></td><td>Panunggangan</td></tr><tr><td style="text-align: center;"><img src="qgis2-web/legend/Daerah_Provinsi_Banten_1_Parigi57.png" /></td><td>Parigi</td></tr><tr><td style="text-align: center;"><img src="qgis2-web/legend/Daerah_Provinsi_Banten_1_Parigibaru58.png" /></td><td>Parigibaru</td></tr><tr><td style="text-align: center;"><img src="qgis2-web/legend/Daerah_Provinsi_Banten_1_Parungserab59.png" /></td><td>Parungserab</td></tr><tr><td style="text-align: center;"><img src="qgis2-web/legend/Daerah_Provinsi_Banten_1_Pengasinan60.png" /></td><td>Pengasinan</td></tr><tr><td style="text-align: center;"><img src="qgis2-web/legend/Daerah_Provinsi_Banten_1_Pesanggrahan61.png" /></td><td>Pesanggrahan</td></tr><tr><td style="text-align: center;"><img src="qgis2-web/legend/Daerah_Provinsi_Banten_1_PetukanganSelatan62.png" /></td><td>Petukangan Selatan</td></tr><tr><td style="text-align: center;"><img src="qgis2-web/legend/Daerah_Provinsi_Banten_1_Pinang63.png" /></td><td>Pinang</td></tr><tr><td style="text-align: center;"><img src="qgis2-web/legend/Daerah_Provinsi_Banten_1_Pisangan64.png" /></td><td>Pisangan</td></tr><tr><td style="text-align: center;"><img src="qgis2-web/legend/Daerah_Provinsi_Banten_1_PondokJagung65.png" /></td><td>Pondok Jagung</td></tr><tr><td style="text-align: center;"><img src="qgis2-web/legend/Daerah_Provinsi_Banten_1_Pondokaren66.png" /></td><td>Pondokaren</td></tr><tr><td style="text-align: center;"><img src="qgis2-web/legend/Daerah_Provinsi_Banten_1_Pondokbenda67.png" /></td><td>Pondokbenda</td></tr><tr><td style="text-align: center;"><img src="qgis2-web/legend/Daerah_Provinsi_Banten_1_Pondokbetung68.png" /></td><td>Pondokbetung</td></tr><tr><td style="text-align: center;"><img src="qgis2-web/legend/Daerah_Provinsi_Banten_1_Pondokcabeilir69.png" /></td><td>Pondokcabeilir</td></tr><tr><td style="text-align: center;"><img src="qgis2-web/legend/Daerah_Provinsi_Banten_1_Pondokjagung70.png" /></td><td>Pondokjagung</td></tr><tr><td style="text-align: center;"><img src="qgis2-web/legend/Daerah_Provinsi_Banten_1_Pondokjaya71.png" /></td><td>Pondokjaya</td></tr><tr><td style="text-align: center;"><img src="qgis2-web/legend/Daerah_Provinsi_Banten_1_PondokkacangBarat72.png" /></td><td>Pondokkacang Barat</td></tr><tr><td style="text-align: center;"><img src="qgis2-web/legend/Daerah_Provinsi_Banten_1_PondokkacangTimur73.png" /></td><td>Pondokkacang Timur</td></tr><tr><td style="text-align: center;"><img src="qgis2-web/legend/Daerah_Provinsi_Banten_1_Pondokkarya74.png" /></td><td>Pondokkarya</td></tr><tr><td style="text-align: center;"><img src="qgis2-web/legend/Daerah_Provinsi_Banten_1_Pondokpetir75.png" /></td><td>Pondokpetir</td></tr><tr><td style="text-align: center;"><img src="qgis2-web/legend/Daerah_Provinsi_Banten_1_Pondokpinang76.png" /></td><td>Pondokpinang</td></tr><tr><td style="text-align: center;"><img src="qgis2-web/legend/Daerah_Provinsi_Banten_1_Pondokpucung77.png" /></td><td>Pondokpucung</td></tr><tr><td style="text-align: center;"><img src="qgis2-web/legend/Daerah_Provinsi_Banten_1_Pondokranji78.png" /></td><td>Pondokranji</td></tr><tr><td style="text-align: center;"><img src="qgis2-web/legend/Daerah_Provinsi_Banten_1_Rawabuntu79.png" /></td><td>Rawabuntu</td></tr><tr><td style="text-align: center;"><img src="qgis2-web/legend/Daerah_Provinsi_Banten_1_Rawakalong80.png" /></td><td>Rawakalong</td></tr><tr><td style="text-align: center;"><img src="qgis2-web/legend/Daerah_Provinsi_Banten_1_Rawamekarjaya81.png" /></td><td>Rawamekarjaya</td></tr><tr><td style="text-align: center;"><img src="qgis2-web/legend/Daerah_Provinsi_Banten_1_Rempoa82.png" /></td><td>Rempoa</td></tr><tr><td style="text-align: center;"><img src="qgis2-web/legend/Daerah_Provinsi_Banten_1_Rengas83.png" /></td><td>Rengas</td></tr><tr><td style="text-align: center;"><img src="qgis2-web/legend/Daerah_Provinsi_Banten_1_Sampora84.png" /></td><td>Sampora</td></tr><tr><td style="text-align: center;"><img src="qgis2-web/legend/Daerah_Provinsi_Banten_1_Sawah85.png" /></td><td>Sawah</td></tr><tr><td style="text-align: center;"><img src="qgis2-web/legend/Daerah_Provinsi_Banten_1_Sawahbaru86.png" /></td><td>Sawahbaru</td></tr><tr><td style="text-align: center;"><img src="qgis2-web/legend/Daerah_Provinsi_Banten_1_Serang87.png" /></td><td>Serang</td></tr><tr><td style="text-align: center;"><img src="qgis2-web/legend/Daerah_Provinsi_Banten_1_Serpong88.png" /></td><td>Serpong</td></tr><tr><td style="text-align: center;"><img src="qgis2-web/legend/Daerah_Provinsi_Banten_1_Serua89.png" /></td><td>Serua</td></tr><tr><td style="text-align: center;"><img src="qgis2-web/legend/Daerah_Provinsi_Banten_1_Seruaindah90.png" /></td><td>Seruaindah</td></tr><tr><td style="text-align: center;"><img src="qgis2-web/legend/Daerah_Provinsi_Banten_1_Setu91.png" /></td><td>Setu</td></tr><tr><td style="text-align: center;"><img src="qgis2-web/legend/Daerah_Provinsi_Banten_1_Sukabumi92.png" /></td><td>Sukabumi</td></tr><tr><td style="text-align: center;"><img src="qgis2-web/legend/Daerah_Provinsi_Banten_1_Suradita93.png" /></td><td>Suradita</td></tr><tr><td style="text-align: center;"><img src="qgis2-web/legend/Daerah_Provinsi_Banten_1_Tajur94.png" /></td><td>Tajur</td></tr><tr><td style="text-align: center;"><img src="qgis2-web/legend/Daerah_Provinsi_Banten_1_Tangerang95.png" /></td><td>Tangerang</td></tr><tr><td style="text-align: center;"><img src="qgis2-web/legend/Daerah_Provinsi_Banten_1_96.png" /></td><td></td></tr></table>', layer: layer_Daerah_Provinsi_Banten_1},
            {label: "OSM Standard", layer: layer_OSMStandard_0},]
        var lay = L.control.layers.tree(null, overlaysTree,{
            //namedToggle: true,
            //selectorBack: false,
            //closedSymbol: '&#8862; &#x1f5c0;',
            //openedSymbol: '&#8863; &#x1f5c1;',
            //collapseAll: 'Collapse all',
            //expandAll: 'Expand all',
            collapsed: true,
        });
        lay.addTo(map);
        setBounds();
        map.addControl(new L.Control.Search({
            layer: layer_Daerah_Provinsi_Banten_1,
            initial: false,
            hideMarkerOnCollapse: true,
            propertyName: 'layer'}));
        document.getElementsByClassName('search-button')[0].className +=
         ' fa fa-binoculars';
        resetLabels([layer_Daerah_Provinsi_Banten_1]);
        map.on("zoomend", function(){
            resetLabels([layer_Daerah_Provinsi_Banten_1]);
        });
        map.on("layeradd", function(){
            resetLabels([layer_Daerah_Provinsi_Banten_1]);
        });
        map.on("layerremove", function(){
            resetLabels([layer_Daerah_Provinsi_Banten_1]);
        });
        </script>
    </body>
</html>