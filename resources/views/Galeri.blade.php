<!-- Menghubungkan dengan view template -->
@extends('layouts/template')

<!-- Judul Halaman -->
@section('judul_halaman', 'Kontak')

@section('content')

	<!-- section -->
	<section class="wrapper bg-light">
      <div class="container py-14 py-md-17">
        <div class="row gy-10 gy-sm-13 gx-lg-3 align-items-center mb-14 mb-md-19">
        <!-- Card Content -->
        <div class="card">
        <div class="card-body">
			<!-- <h5 class="card-title mb-3"><span class="text-primary">@yield('judul_halaman')</span></h5>
            <p>Biro Hukum dan HAM Provinsi Jawa Barat <br>
            birohukum@jabarprov.go.id <br>
            Telp: (022) 4231385</br>
            Fax: (022) 4231385</p>
			<img class="rounded mx-auto d-block" src="{{ asset('img/maps.png') }}" alt="" /> -->
            <a href="#" class="pop">
    <img src="{{ asset('img/image12.png') }}" style="width: 400px; height: 264px;">
</a>
    
<a href="#" class="pop">
    <img src="{{ asset('img/image12.png') }}" style="width: 400px; height: 264px;">
</a>

<a href="#" class="pop">
    <img src="{{ asset('img/image12.png') }}" style="width: 400px; height: 264px;">
</a>



<div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">              
      <div class="modal-body">
      	<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
          <div class="offcanvas-header d-lg-none d-xl-none">
              <a href="start.html"><img src="{{ asset('img/logo-light.png') }}" srcset="{{ asset('img/logo-light@2x.png') }} 2x" alt="" /></a>
              <button type="button" class="btn-close btn-close-white offcanvas-close offcanvas-nav-close" aria-label="Close"></button>
            </div>
        <img src="" class="imagepreview" style="width: 100%;" >
      </div>
    </div>
  </div>
</div>
        </div>
        </div>
        <!-- End Card Content -->
        </div>
        <!--/.row -->
        <!--/.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->

@endsection