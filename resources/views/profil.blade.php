@extends('master')

@section('title','Website Kelurahan')

<body>
  <!-- preloader start -->
  <div class="preloader">
    <img src="images/preloader.gif" alt="preloader">
  </div>
  <!-- preloader end -->





<!-- page title -->
<section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-breadcrumb">
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="@@page-link">Profil Kelurahan Sidomulyo</a></li>
          <li class="list-inline-item text-white h3 font-secondary @@nasted"></li>
        </ul>
        
      </div>
    </div>
  </div>
</section>
<!-- /page title -->

<!-- about -->
<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <img class="img-fluid w-100 mb-4" src="images/about/abouut.jpg" alt="about image">
      

       
      </div>
    </div>
  </div>
</section>
<!-- /about -->

<!-- funfacts -->
<section class="section-sm bg-primary">
  <div class="container">
    <div class="row">
  
       <!-- funfacts item -->
      <div class="col-md-3 col-sm-6 mb-4 mb-md-0">
        <div class="text-center">
          <h2 class="count text-white" >64/15</h2> 
          <h5 class="text-white">RT/RW</h5>
        </div>
      </div>
      <!-- funfacts item -->
      <div class="col-md-3 col-sm-6 mb-4 mb-md-0">
        <div class="text-center">
          <h2 class="count text-white" data-count="9847">0</h2>
          <h5 class="text-white">LAKI-LAKI</h5>
        </div>
      </div>
      <!-- funfacts item -->
      <div class="col-md-3 col-sm-6 mb-4 mb-md-0">
        <div class="text-center">
          <h2 class="count text-white" data-count="11336">0</h2>
          <h5 class="text-white">PEREMPUAN</h5>
        </div>
      </div>
      <!-- funfacts item -->
     <div class="col-md-3 col-sm-6 mb-4 mb-md-0">
        <div class="text-center">
          <h2 class="count text-white" data-count="21183">0</h2>
          <h5 class="text-white">TOTAL PENDUDUK </h5>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /funfacts -->



<!-- events -->
<section class="section bg-gray">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="d-flex align-items-center section-title justify-content-between">
          <h2 class="mb-0 text-nowrap mr-3">BATAS WILAYAH DAN LUAS WILAYAH</h2>
          <div class="border-top w-100 border-primary d-none d-sm-block"></div>
          
        </div>
      </div>
    </div>
    <div class="row justify-content-center">
  <!-- event -->
  <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
    <div class="card border-0 rounded-0 hover-shadow">
    
      <div class="card-body">
        <!-- location -->
        <h4>Batas Wilayah</h4>
        <a href="event-single.html"><p class="card-title">Utara : Tangkerang Barat</p>  <p class="card-title">Timur : Maharatu </p>  <p class="card-title">Selatan : Perhentian Marpoyan </p>  <p class="card-title">Barat : Sidomulyo Barat </p></a>
      </div>
    </div>
  </div>
  <!-- event -->
  <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
    <div class="card border-0 rounded-0 hover-shadow">
     
      <div class="card-body">
        <!-- location -->
        <h4>Luas Wilayah</h4>
        <a href="event-single.html"><p class="card-title">Luas : 3583HA</p>  <p class="card-title">Perkiraan Jumlah Penduduk Laki-laki : 9847 Jiwa </p>  <p class="card-title">Perkiraan Jumlah Penduduk Perempuan : 11336 Jiwa </p>  <p class="card-title">Perkiraan Total Penduduk : 21183 Jiwa </p></a>
      </div>
    </div>
  </div>
  <!-- event -->
  <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
    <div class="card border-0 rounded-0 hover-shadow">
      
      <div class="card-body">
        <!-- location -->
        <h4>Jumlah RT/RW</h4>
        <div class="row">
        <div class="col-6">
        <p class="card-title">RW:1 RT:7 <br>
          RW:2 RT:5 <br> RW:3 RT:6 <br> RW:4 RT:4 <br> RW:5 RT:3 <br> RW:6 RT:10 <br> RW:7 RT:3 <br> RW:8 RT:5 </p></div>
          <div class="col-lg-6">
        <p class="card-title">

         RW:9 RT:3 <br> RW:10 RT:3 <br> RW:11 RT:5 <br> RW:12 RT:3 <br> RW:13 RT:3 <br> RW:14 RT:3 <br> RW:15 RT:3 </p>  </div>
        </div>
      </div>
    </div>
  </div>
</div>
    <!-- mobile see all button -->
    <div class="row">
      <div class="col-12 text-center">
        <a href="course.html" class="btn btn-sm btn-primary-outline d-sm-none d-inline-block">sell all</a>
      </div>
    </div>
  </div>
</section>
<!-- /events -->



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

</body>
</html>