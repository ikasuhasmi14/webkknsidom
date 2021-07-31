@extends('master')
@section('title', 'Website Kelurahan')

@section('body')
<!-- page title -->

<section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-breadcrumb">
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" >Kelola Persyaratan Pengurusan</a></li>
          <li class="list-inline-item text-white h3 font-secondary nasted">Tambah Syarat</li>
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
      
</div>
      <div class="col-xl-6 order-1 col-sm-6 mb-4 mb-xl-0">
        
        <h2>Tambah Data</h2>

        <form action="/simpanSyarat" method="POST">
        @csrf  

    <div class="mb-3">
      
                    <label for="exampleFormControlInput1" class="form-label">Pilih Layanan</label>
                    <select name="id_layanan" class="form-control" autofocus>
                      @foreach($layanan as $l)
                      <option value="{{ $l->id_layanan}}">{{ $l->id_layanan}}.{{ $l->nama_layanan}}</option>
                      @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput2" class="form-label">Syarat</label>
                    <input type="text" name="syarat" class="form-control" id="exampleFormControlInput1">
                </div>
		<input type="submit" class="btn-primary" value="Simpan Data">
	</form>
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