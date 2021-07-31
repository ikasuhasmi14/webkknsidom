@extends('master')
@section('title', 'Website Kelurahan')

@section('body')
<!-- page title -->
<section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-breadcrumb">
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" >Persyaratan Pengurusan</a></li>
          <li class="list-inline-item text-white h3 font-secondary nasted">Surat Pengurusan KTP-elektronik</li>
        </ul>
        
      </div>
    </div>
  </div>
</section>
<!-- /page title -->

<!-- section -->
<section class="section-sm">
  <div class="container">
   
    <!-- course info -->
    <div class="row align-items-center mb-5">
      <div class="col-xl-6 order-1 col-sm-6 mb-4 mb-xl-0">
        <h2>Surat Pengurusan KTP-elektronik</h2>
      </div>
      <div class="col-xl-3 order-sm-3 order-xl-2 col-12 order-2">
        <ul class="list-inline text-xl-center">
          
          
          <li class="list-inline-item mr-4 mb-3 mb-sm-0">
            <div class="d-flex align-items-center">
              <i class="ti-wallet text-primary icon-md mr-2"></i>
              <div class="text-left">
                <h6 class="mb-0">Blanko Surat Pengantar RT/RW</h6>
                <p class="mb-0">Klik Download..</p>
              </div>
            </div>
          </li>
        </ul>
      </div>
      <div class="col-xl-3 text-sm-right text-left order-sm-2 order-3 order-xl-3 col-sm-6 mb-4 mb-xl-0">
        <a href="/file-download2" class="btn btn-primary">Download</a>
      </div>
      <!-- border -->
      <div class="col-12 mt-4 order-4">
        <div class="border-bottom border-primary"></div>
      </div>
    </div>
    <!-- course details -->
    <div class="row">
    
      <div class="col-12 mb-4">
        <h3 class="mb-3">Bagi Warga Negara Asing</h3>
        <div class="col-12 px-0">
          <div class="row">
            <div class="col-md-6">
              <ul class="list-styled">
                <li>PENGANTAR RT RW</li>
                <li>KK ASLI DAN FOTO COPY </li>
                <li>BUKTI LUNAS PBB THN TERAKHIR</li>
                <li>IJAZAH/AKTE KELAHIRAN</li>
              </ul>
            </div>
            <div class="col-md-6">
              <ul class="list-styled">
                <li>KTP LAMA /KTP RUSAK</li>
                <li>SURAT KETERANGAN KEHILANGAN DARI KEPOLISIAN (JIKA KTP HILANG)</li>
                 </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 mb-4">
        <h3 class="mb-3">KTP-el Bagi Warga Negara Asing</h3>
        <ul class="list-styled">
          <li>PASPOR</li>
          <li>IZIN TINGAL TETAP</li>
          <li>SURAT KETERANGAN CATATAN KEPOLISIAN</li>
          <li>MELAKUKAN PEREKAMAN KTP el DI UPT KEPENDUDUKAN KECAMATAN SETEMPAT</li>
          
        </ul>
      </div>
     
    
    </div>
  </div>
</section>
<!-- /section -->

<!-- related course -->
<section class="section pt-0">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="section-title">Persyaratan Terkait</h2>
      </div>
    </div>
    <div class="row justify-content-center">
      <!-- course item -->
 <div class="col-lg-4 col-sm-6 mb-5">
    <div class="card p-0 border-primary rounded-0 hover-shadow">
      <img class="card-img-top rounded-0" src="images/courses/course-2.jpg" alt="course thumb">
      <div class="card-body">
        
        <a href="course-single.html">
          <h6 class="card-title">PENGURUSAN KARTU KELUARGA</h6>
        </a>
        
        <a href="/syaratkk" class="btn btn-primary btn-sm">Persyaratan</a>
      </div>
    </div>
  </div>
      <!-- course item -->
      <div class="col-lg-4 col-sm-6 mb-5">
    <div class="card p-0 border-primary rounded-0 hover-shadow">
      <img class="card-img-top rounded-0" src="images/courses/course-3.jpg" alt="course thumb">
      <div class="card-body">
        
        <a href="course-single.html">
          <h6 class="card-title">PENGURUSAN AKTA KEMATIAN</h6>
        </a>
        
        <a href="course-single.html" class="btn btn-primary btn-sm">Persyaratan</a>
      </div>
    </div>
  </div>
      <!-- course item -->
     <div class="col-lg-4 col-sm-6 mb-5">
    <div class="card p-0 border-primary rounded-0 hover-shadow">
      <img class="card-img-top rounded-0" src="images/courses/course-4.jpg" alt="course thumb">
      <div class="card-body">
        
        <a href="course-single.html">
          <h4 class="card-title">PENGURUSAN NIKAH</h4>
        </a>
        
        <a href="course-single.html" class="btn btn-primary btn-sm">Persyaratan</a>
      </div>
    </div>
  </div>
    </div>
  </div>
</section>
<!-- /related course -->



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