
@extends('master')

@section ('title', 'Website Kelurahan')

@section ('body')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.4.3/css/ol.css" type="text/css">
    <script src="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.4.3/build/ol.js"></script>

<!-- page title -->
<section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-breadcrumb">
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="@@page-link">Hubungi Kami</a></li>
          <li class="list-inline-item text-white h3 font-secondary @@nasted"></li>
        </ul>
        <p class="text-lighten">Jika Ada Yang Ingin Anda Tanyakan Silahkan Hubungi Kami Dibawah Ini</p>
      </div>
    </div>
  </div>
</section>
<!-- /page title -->
@section ('body')
<!-- contact -->
<section class="section bg-gray">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h2 class="section-title">Hubungi Kami</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-7 mb-4 mb-lg-0">
        <form action="#">

        <i class="ti-mobile"></i>
        <a href="" class="text-color h5 d-block" >+628 2388 840313</a>
<i class="ti-location-pin"> <p> Jl. Adi Sucipto, Kelurahan Sidomulyo Timur <br>(KKN, Sidomulyo Timur, Marpoyan Damai, Pekanbaru City, Riau 28289) </p> </i> 
       
        </form>
      </div>
     
    </div>
  </div>
</section>
<!-- /contact -->

<!-- gmap -->
<section class="section pt-0"> 
  <!-- Google Map -->
  <div id="map" class="map"></div>
</section>
<!-- /gmap -->
<script type="text/javascript">
    // start
    // untuk variabel penampung data JSON
     
      var map = new ol.Map({
        target: 'map',
        layers: [
          new ol.layer.Tile({
            source: new ol.source.OSM()
          })  // pemanggilan variabel
        ],
        view: new ol.View({ 
          center: ol.proj.fromLonLat([101.42881321821079, 0.4685982618018367]), // titik koordinat awal
          zoom: 15 // zoom pada kamera
        })
         
      });
    </script>
   

<!-- jQuery -->
<script src="plugins/jQuery/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="plugins/bootstrap/bootstrap.min.js"></script>
<!-- slick slider -->
<script src="plugins/slick/slick.min.js"></script>
<!-- aos -->
<script src="plugins/aos/aos.js"></script>
<!-- venobox popup -->
<script src="plugins/venobox/venobox.min.js"></script>
<!-- filter -->
<script src="plugins/filterizr/jquery.filterizr.min.js"></script>
<!-- google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script>
<script src="plugins/google-map/gmap.js"></script>

<!-- Main Script -->
<script src="js/script.js"></script>

@endsection