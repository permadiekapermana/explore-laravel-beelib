<!-- Menghubungkan dengan view template -->
@extends('layouts/template')

<!-- Judul Halaman -->
@section('judul_halaman', 'Kontak')

{{-- Content --}}
@section('content')

	<!-- section -->
    <section class="wrapper bg-light wrapper-border">
      <div class="container py-14 py-md-16">
        <h5 class="display-4 mb-3 text-center mb-5">Galeri</h5>
        <div class="carousel owl-carousel blog grid-view" data-margin="30" data-dots="true" data-autoplay="true" data-autoplay-timeout="5000" data-responsive='{"0":{"items": "1"}, "768":{"items": "2"}, "992":{"items": "2"}, "1200":{"items": "4"}}'>
          <div class="item">
            <article>
              <figure class="overlay overlay1 hover-scale rounded mb-5"><a class="pop" href="#"> <img src="img/Rectangle-97.png" alt="" /></a>
              </figure>
              <div class="post-header">
                <!-- /.post-category -->
                <h5 class="mt-1 mb-3">JDIHN Awards Nasional Tahun 2020</h5>
              </div>
            </article>
            <!-- /article -->
          </div>
          <!-- /.item -->
          <div class="item">
            <article>
              <figure class="overlay overlay1 hover-scale rounded mb-5"><a class="pop" href="#"> <img src="img/Rectangle-97-1.png" alt="" /></a>
              </figure>
              <div class="post-header">
                <!-- /.post-category -->
                <h5 class="mt-1 mb-3">Penghargaan JDIH</h5>
              </div>
            </article>
            <!-- /article -->
          </div>
          <!-- /.item -->
          <div class="item">
            <article>
              <figure class="overlay overlay1 hover-scale rounded mb-5"><a class="pop" href="#"> <img src="img/Rectangle-97-2.png" alt="" /></a>
              </figure>
              <div class="post-header">
                <!-- /.post-category -->
                <h5 class="mt-1 mb-3">Pengelola JDIH Provinsi Jawa Barat</h5>
              </div>
            </article>
            <!-- /article -->
          </div>
          <!-- /.item -->
          <div class="item">
            <article>
              <figure class="overlay overlay1 hover-scale rounded mb-5"><a class="pop" href="#"> <img src="img/Rectangle-98.png" alt="" /></a>
              </figure>
              <div class="post-header">
                <!-- /.post-category -->
                <h5 class="mt-1 mb-3">Koordinasi Penetapan Desa / Kelurahan Sadar Hukum</h5>
              </div>
            </article>
            <!-- /article -->
          </div>
          <!-- /.item -->
          <div class="item">
            <article>
              <figure class="overlay overlay1 hover-scale rounded mb-5"><a class="pop" href="#"> <img src="img/Rectangle-98-1.png" alt="" /></a>
              </figure>
              <div class="post-header">
                <!-- /.post-category -->
                <h5 class="mt-1 mb-3">Pembinaan JDIH Kabupaten Majalengka</h5>
              </div>
            </article>
            <!-- /article -->
          </div>
          <!-- /.item -->
          <div class="item">
            <article>
              <figure class="overlay overlay1 hover-scale rounded mb-5"><a class="pop" href="#"> <img src="img/Rectangle-99.png" alt="" /></a>
              </figure>
              <div class="post-header">
                <!-- /.post-category -->
                <h5 class="mt-1 mb-3">Koordinasi dan Konsultasi dengan Kepala Pusat Jaringan</h5>
              </div>
            </article>
            <!-- /article -->
          </div>
          <!-- /.item -->
          <div class="item">
            <article>
              <figure class="overlay overlay1 hover-scale rounded mb-5"><a class="pop" href="#"> <img src="img/Rectangle-99-1.png" alt="" /></a>
              </figure>
              <div class="post-header">
                <!-- /.post-category -->
                <h5 class="mt-1 mb-3">Bimtek Peraturan Desa</h5>
              </div>
            </article>
            <!-- /article -->
          </div>
          <!-- /.item -->
          <div class="item">
            <article>
              <figure class="overlay overlay1 hover-scale rounded mb-5"><a class="pop" href="#"> <img src="img/Rectangle-100.png" alt="" /></a>
              </figure>
              <div class="post-header">
                <!-- /.post-category -->
                <h5 class="mt-1 mb-3">Halal Bi Halal</h5>
              </div>
            </article>
            <!-- /article -->
          </div>
          <!-- /.item -->
          <div class="item">
            <article>
              <figure class="overlay overlay1 hover-scale rounded mb-5"><a class="pop" href="#"> <img src="img/Rectangle-100-1.png" alt="" /></a>
              </figure>
              <div class="post-header">
                <!-- /.post-category -->
                <h5 class="mt-1 mb-3">Rakor Peningkatan Pengelolaan JDIH se-Jawa Barat</h5>
              </div>
            </article>
            <!-- /article -->
          </div>
          <!-- /.item -->
        </div>
        <!-- /.owl-carousel -->
      </div>
      <!-- /.container -->
    </section>
    {{-- End Section --}}

    {{-- Modal --}}
    <div class="modal fade" id="imagemodal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">              
          {{-- <div class="modal-body"> --}}
            {{-- <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button> --}}
              <div class="offcanvas-header d-lg-none d-xl-none">
                  <a href="start.html"><img src="{{ asset('img/logo-light.png') }}" srcset="{{ asset('img/logo-light@2x.png') }} 2x" alt="" /></a>
                </div>
            <img src="" class="imagepreview" style="width: 100%;" >
          {{-- </div> --}}
        </div>
      </div>
    </div>
    {{-- End Modal --}}

@endsection