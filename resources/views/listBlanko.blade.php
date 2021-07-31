@extends('master')
@section('title', 'Website Kelurahan')

@section('body')
<!-- page title -->

<section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-breadcrumb">
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" >List Blanko</a></li>
          <li class="list-inline-item text-white h3 font-secondary nasted">Download File</li>
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
      <div class="mb-3">
        <table class="table table-striped">
                <tr>
                    <th>Judul</th>
                    <th>Aksi</th>
                    
                </tr>
              
                <tr>
                    <td>Blanko formulir permohonan KK baru WNI</td>
                    <td> <a href="{{ URL::asset('file/Blanko formulir permohonan KK baru WNI.pdf') }}" class="btn btn-primary">Download</a></td>
                </tr>
                <tr>
                    <td>Blanko formulir permohonan pindah datang WNI antar kab_kota atau antar provinsi</td>
                    <td> <a href="{{ URL::asset('file/Blanko formulir permohonan pindah datang WNI antar kab_kota atau antar provinsi.pdf') }}" class="btn btn-primary">Download</a></td>
                </tr>
                <tr>
                    <td>Blanko formulir permohonan pindah datang wni antar kecamatan dalam satu kab_kota</td>
                    <td> <a href="{{ URL::asset('file/Blanko formulir permohonan pindah datang wni antar kecamatan dalam satu kab_kota.pdf') }}" class="btn btn-primary">Download</a></td>
                </tr>
                <tr>
                    <td>Blanko formulir permohonan pindah WNI antar kab_kota atau antar provinsi</td>
                    <td> <a href="{{ URL::asset('file/Blanko formulir permohonan pindah WNI antar kab_kota atau antar provinsi.pdf') }}" class="btn btn-primary">Download</a></td>
                </tr>
                <tr>
                    <td>Blanko formulir permohonan pindah WNI antar kecamatan dalam satu kab_kota</td>
                    <td> <a href="{{ URL::asset('file/Blanko formulir permohonan pindah WNI antar kecamatan dalam satu kab_kota.pdf') }}" class="btn btn-primary">Download</a></td>
                </tr>
                <tr>
                    <td>Blanko formulir pindah WNI antar desa_kelurahan dalam satu kecamatan</td>
                    <td> <a href="{{ URL::asset('file/Blanko formulir pindah WNI antar desa_kelurahan dalam satu kecamatan.pdf') }}" class="btn btn-primary">Download</a></td>
                </tr>
                <tr>
                    <td>Blanko suket kelahiran</td>
                    <td> <a href="{{ URL::asset('file/Blanko suket kelahiran.pdf') }}" class="btn btn-primary">Download</a></td>
                </tr>
                <tr>
                    <td>Blanko surat kematian</td>
                    <td> <a href="{{ URL::asset('file/Blanko surat kematian.pdf') }}" class="btn btn-primary">Download</a></td>
                </tr>
                <tr>
                    <td>BlankosuratpengantarRTRW</td>
                    <td> <a href="{{ URL::asset('file/BlankosuratpengantarRTRW.pdf') }}" class="btn btn-primary">Download</a></td>
                </tr>

        
            </table>
        </div>
</div>
</div>
    
      </div>


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