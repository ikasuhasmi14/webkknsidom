@extends('master')

@section('title','Website Kelurahan')

<body>
  <!-- preloader start -->
  <div class="preloader">
    <img src="images/loader.gif" alt="preloader">
  </div>
  <!-- preloader end -->
  <!-- hero slider -->
<section class="hero-section overlay bg-cover" data-background="images/banner/test.png">
  <div class="container">
  
      <!-- slider item -->
      <div class="hero-slider-item">
        <div class="row">
          <div class="col-md-8">
            <h1 class="text-white" data-animation-out="fadeOutRight" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".1">Selamat Datang di Website Kelurahan Sidomulyo Timur</h1>
            
            <a href="/contact" class="btn btn-primary" data-animation-out="fadeOutRight" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".7">Hubungi Kami</a>
          </div>
        </div>
      </div>
    
   
  </div>
</section>
<!-- /hero slider -->

@section('body')






<!-- about us -->
<section class="section">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 order-2 order-md-1">
        <h2 class="section-title">Tentang Kelurahan Sidomulyo Timur</h2>
        <p><b>"Bulat Air Karena Pembuluh, Bulat Kata Karena Mufakat"</b> </p>

<p>ADALAH SEMBOYAN KAMI DALAM MENSUKSESKAN KOTA PEKANBARU MENUJU METROPOLITAN YANG MADANI </p>

<p>Sidomulyo Timur adalah salah satu kelurahan di Kecamatan Marpoyan Damai, Pekanbaru, Riau, Indonesia. Kelurahan ini memiliki kode wilayah 14.71.09.1003 dan kode pos 28125. </p>
        
        
      </div>
      <div class="col-md-6 order-1 order-md-2 mb-4 mb-md-0">
        <img class="img-fluid w-100" src="images/about/about-uss.png" alt="about image">
      </div>
    </div>
  </div>
</section>
<!-- /about us -->

<!-- courses -->
<section class="section-sm">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="d-flex align-items-center section-title justify-content-between">
          <h2 class="mb-0 text-nowrap mr-3">Layanan Kelurahan Sidomulyo Timur</h2>
          <div class="border-top w-100 border-primary d-none d-sm-block"></div>
          <div>
            <a href="/listBlanko" class="btn btn-sm btn-primary-outline ml-sm-3 d-none d-sm-block">Download Blanko</a>
          </div>
        </div>
      </div>
    </div>
    <!-- course list -->
<div class="row justify-content-center">
  <!-- course item -->
  @foreach($layanan as $l)
  <div class="col-lg-4 col-sm-6 mb-5">
    <div class="card p-0 border-primary rounded-0 hover-shadow">
      <img class="card-img-top rounded-0" src="{{ url('/file/images/'.$l->nama_file) }}" alt="course thumb">
      <div class="card-body">
      
        <a href="/detail/{{ $l->id_layanan }}">
          <h5 class="card-title">{{ $l->nama_layanan }}</h5>
        </a>
        <a href="/detail/{{ $l->id_layanan }}" class="btn btn-primary btn-sm">Persyaratan</a>
      </div>
    </div>
  </div>
  @endforeach
  
<!-- /course list -->
    <!-- mobile see all button -->
    <div class="row">
      <div class="col-12 text-center">
        <a href="courses.html" class="btn btn-sm btn-primary-outline d-sm-none d-inline-block">sell all</a>
      </div>
    </div>
  </div>
</section>
<!-- /courses -->





@endsection



<!-- footer -->


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
