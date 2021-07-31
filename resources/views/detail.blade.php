@extends('master')
@section('title', 'Website Kelurahan')

@section('body')
<!-- page title -->

@foreach($layanan as $l)
<section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-breadcrumb">
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" >Persyaratan Pengurusan</a></li>
          <li class="list-inline-item text-white h3 font-secondary nasted">{{ $l->nama_layanan }}</li>
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
        
        <h2>{{ $l->nama_layanan }}</h2>
    
      </div>
      <div class="col-xl-3 order-sm-3 order-xl-2 col-12 order-2">
        <ul class="list-inline text-xl-center">
          
          
          <li class="list-inline-item mr-4 mb-3 mb-sm-0">
            <div class="d-flex align-items-center">
              <i class="ti-wallet text-primary icon-md mr-2"></i>
              <div class="text-left">
                <h6 class="mb-0">List Blanko</h6>
                <a href="/listBlanko" class="mb-0">Klik Download..</a>
              </div>
            </div>
          </li>
        </ul>
      </div>
      @endforeach

       <div class="col-xl-3 text-sm-right text-left order-sm-2 order-3 order-xl-3 col-sm-6 mb-4 mb-xl-0">
        <a  href="/listBlanko"  class="btn btn-primary">Download</a>
      </div>
      
      <!-- border -->
      <div class="col-12 mt-4 order-4">
        <div class="border-bottom border-primary"></div>
      </div>
    </div>
    <!-- course details -->
    <div class="row">
    
      <div class="col-12 mb-4">
      
        <div class="col-12 px-0">
          <div class="row">
            <div class="col-md-6">
              <ul class="list-styled">
                @foreach($syarat as $s)
                <li>{{ $s->syarat }}</li>
              @endforeach
              </ul>
            </div>
            
          </div>
        </div>
      </div>
     
    </div>
  </div>
</section>
<!-- /section -->







<!-- jQuery -->
<script src="{{ URL::asset('plugins/jQuery/jquery.min.js') }}"></script>
<!-- Bootstrap JS') }} -->
<script src="{{ URL::asset('plugins/bootstrap/bootstrap.min.js') }}"></script>
<!-- slick slider -->
<script src="{{ URL::asset('plugins/slick/slick.min.js') }}"></script>
<!-- aos -->
<script src="{{ URL::asset('plugins/aos/aos.js') }}"></script>
<!-- venobox popup -->
<script src="{{ URL::asset('plugins/venobox/venobox.min.js') }}"></script>
<!-- filter -->
<script src="{{ URL::asset('plugins/filterizr/jquery.filterizr.min.js') }}"></script>
<!-- google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script>
<script src="{{ URL::asset('plugins/google-map/gmap.js') }}"></script>

<!-- Main Script -->
<script src="{{ URL::asset('js/script.js') }}"></script>
@endsection