<!-- Menghubungkan dengan view template -->
@extends('layouts/template')

<!-- Judul Halaman -->
@section('judul_halaman', 'Struktur Organisasi')

@section('content')

	<!-- section -->
	<section class="wrapper bg-light">
      <div class="container py-14 py-md-17">
        <div class="row gy-10 gy-sm-13 gx-lg-3 align-items-center mb-14 mb-md-19">
        <!-- Card Content -->
        <div class="card">
        <div class="card-body">
			<h5 class="card-title mb-3"><span class="text-primary">@yield('judul_halaman')</span></h5>
			<img class="rounded mx-auto d-block" src="{{ asset('img/struktur-organisasi.png') }}" alt="" />
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