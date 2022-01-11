<!-- Menghubungkan dengan view template -->
@extends('layouts/template')

<!-- Judul Halaman -->
@section('judul_halaman', 'Visi & Misi')

@section('content')

	<!-- section -->
	<section class="wrapper bg-light">
      <div class="container py-14 py-md-17">
        <div class="row gy-10 gy-sm-13 gx-lg-3 align-items-center mb-14 mb-md-19">
        <!-- Card Content -->
        <div class="card">
        <div class="card-body">
            <h5 class="card-title mb-3"><span class="text-primary">@yield('judul_halaman')</span></h5>
            <p class="card-text">Visi :</p>
			<p>"Menjadi Penegak Supremasi dan Harmonisasi Hukum dan HAM di Lingkungan Pemerintah Provinsi Jawa Barat."</p>
            <p class="mt-1">Misi :</p>
			<ol>
				<li>Mewujudkan Tertib Hukum dan HAM di Lingkungan Pemerintahkan Provinsi Jawa Barat dan Kabupaten/ Kota.</li>
				<li>Meningkatkan Kapasitas Sumber Daya Pelayanan.</li>
			</ol>
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