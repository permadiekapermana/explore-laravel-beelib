<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="{{ url('img/jdihn-favicon.png') }}?v={{ date('YmdHis') }}">
  <title>JDIHN | {{ $title }}</title>
  <link rel="stylesheet" href="{{ asset('css/plugins.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="preload" href="{{ asset('css/fonts/dm.css') }}" as="style" onload="this.rel='stylesheet'">
</head>

<body>
  <div class="content-wrapper">
    <header class="wrapper bg-light">
      <nav class="navbar classic transparent navbar-expand-lg navbar-light">
        <div class="container flex-lg-row flex-nowrap align-items-center">
          <div class="navbar-brand w-100"><a href="/"><img src="{{ asset('img/jdihn-logo.png') }}" srcset="{{ asset('img/logo@2x.png') }} 2x" alt="" width="250px" /></a></div>
          <div class="navbar-collapse offcanvas-nav">
            <div class="offcanvas-header d-lg-none d-xl-none">
              <a href="/"><img src="{{ asset('img/logo-light.png') }}" srcset="{{ asset('img/logo-light@2x.png') }} 2x" alt="" /></a>
              <button type="button" class="btn-close btn-close-white offcanvas-close offcanvas-nav-close" aria-label="Close"></button>
            </div>
            <ul class="navbar-nav">
              <li class="nav-item"><a class="nav-link {{ ($title === 'Beranda') ? 'active' : '' }}" href="/">Beranda</a></li>
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle {{ ($title === 'Profil') ? 'active' : '' }}" href="#!">Profil</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="dropdown-item" href="/profil/selayang-pandang">Selayang Pandang</a></li>
                  <li class="nav-item"><a class="dropdown-item" href="/profil/visi-misi">Visi & Misi</a></li>
                  <li class="nav-item"><a class="dropdown-item" href="/profil/struktur-organisasi">Struktur Organisasi</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#!">Dokumen Hukum</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="dropdown-item" href="#">Peraturan Daerah</a></li>
                  <li class="nav-item"><a class="dropdown-item" href="#">Peraturan Gubernur</a></li>
                  <li class="nav-item"><a class="dropdown-item" href="#">Peraturan DPRD</a></li>
                </ul>
              </li>
              <li class="nav-item"><a class="nav-link {{ ($title === 'Galeri') ? 'active' : '' }}" href="/galeri">Galeri</a></li>
              <li class="nav-item"><a class="nav-link {{ ($title === 'Kontak') ? 'active' : '' }}" href="/kontak">Kontak</a></li>
              
            </ul>
            <!-- /.navbar-nav -->
          </div>            
          <!-- /.navbar-collapse -->
          <div class="navbar-other ms-lg-4">
            <ul class="navbar-nav flex-row align-items-center ms-auto" data-sm-skip="true">
              <li class="nav-item"><a class="nav-link" data-toggle="offcanvas-info"><i class="uil uil-info-circle"></i></a></li>
              <li class="nav-item"><a class="nav-link" href="elements.html">Login</a>
                <ul class="dropdown-menu mega-menu">
                  <li class="mega-menu-content">
                    <div class="row gx-0 gx-lg-3">
                      <div class="col-lg-6">
                        <h6 class="dropdown-header">General Elements</h6>
                        <div class="row gx-0">
                          <div class="col-lg-6">
                            <ul class="list-unstyled">
                              <li><a class="dropdown-item scroll" href="elements.html#buttons-badges">Buttons & Badges</a></li>
                              <li><a class="dropdown-item scroll" href="elements.html#counter">Counter</a></li>
                              <li><a class="dropdown-item scroll" href="elements.html#dividers">Dividers</a></li>
                              <li><a class="dropdown-item scroll" href="elements.html#form-elements">Form Elements</a></li>
                              <li><a class="dropdown-item scroll" href="elements.html#icon-box">Icon Box</a></li>
                              <li><a class="dropdown-item scroll" href="elements.html#image-hover">Image Hover</a></li>
                              <li><a class="dropdown-item scroll" href="elements.html#lightbox">Lightbox</a></li>
                              <li><a class="dropdown-item scroll" href="elements.html#modal">Modal</a></li>
                            </ul>
                          </div>
                          <!--/column -->
                          <div class="col-lg-6">
                            <ul class="list-unstyled">
                              <li><a class="dropdown-item scroll" href="elements.html#pricing-table">Pricing Table</a></li>
                              <li><a class="dropdown-item scroll" href="elements.html#process">Process</a></li>
                              <li><a class="dropdown-item scroll" href="elements.html#progressbar">Progressbar</a></li>
                              <li><a class="dropdown-item scroll" href="elements.html#shadows">Shadows</a></li>
                              <li><a class="dropdown-item scroll" href="elements.html#tabs">Tabs</a></li>
                              <li><a class="dropdown-item scroll" href="elements.html#team">Team</a></li>
                              <li><a class="dropdown-item scroll" href="elements.html#testimonials">Testimonials</a></li>
                              <li><a class="dropdown-item scroll" href="elements.html#toggle-accordion">Toggle & Accordion</a></li>
                            </ul>
                          </div>
                          <!--/column -->
                        </div>
                        <!--/.row -->
                      </div>
                      <!--/column -->
                      <div class="col-lg-3">
                        <h6 class="dropdown-header">Misc Elements</h6>
                        <ul class="list-unstyled">
                          <li><a class="dropdown-item" href="carousel.html">Carousel</a></li>
                          <li><a class="dropdown-item" href="icon-concept.html">Icons - Concept</a></li>
                          <li><a class="dropdown-item" href="icon-duotone.html">Icons - Duotone</a></li>
                          <li><a class="dropdown-item" href="icon-unicons.html">Icons - Unicons</a></li>
                          <li><a class="dropdown-item" href="player.html">Media Player</a></li>
                          <li><a class="dropdown-item" href="animations.html">Scroll Animations</a></li>
                          <li><a class="dropdown-item" href="wrappers.html">Wrappers</a></li>
                          <li><a class="dropdown-item" href="wrappers-angled.html">Wrappers - Angled</a></li>
                        </ul>
                      </div>
                      <!--/column -->
                      <div class="col-lg-3">
                        <h6 class="dropdown-header">Typography</h6>
                        <ul class="list-unstyled">
                          <li><a class="dropdown-item scroll" href="typography.html#basic">Basic Typography</a></li>
                          <li><a class="dropdown-item scroll" href="typography.html#alerts">Alerts</a></li>
                          <li><a class="dropdown-item scroll" href="typography.html#animated-text">Animated Text</a></li>
                          <li><a class="dropdown-item scroll" href="typography.html#blockquote">Blockquote</a></li>
                          <li><a class="dropdown-item scroll" href="typography.html#dropcap">Dropcap</a></li>
                          <li><a class="dropdown-item scroll" href="typography.html#lists">Lists</a></li>
                          <li><a class="dropdown-item scroll" href="typography.html#tooltip-popover">Tooltip & Popover</a></li>
                          <li><a class="dropdown-item scroll" href="typography.html#misc">Miscellaneous</a></li>
                        </ul>
                      </div>
                      <!--/column -->
                    </div>
                    <!--/.row -->
                  </li>
                  <!--/.mega-menu-content-->
                </ul>
                <!--/.dropdown-menu -->
              </li>
              <li class="nav-item d-none d-md-block">
                <a href="#" class="btn btn-sm btn-primary rounded" data-bs-toggle="modal" data-bs-target="#modal-01">Register</a>
              </li>
              <li class="nav-item ms-lg-0">
                <div class="navbar-hamburger d-lg-none d-xl-none ms-auto"><button class="hamburger animate plain" data-toggle="offcanvas-nav"><span></span></button></div>
              </li>
            </ul>
            <!-- /.navbar-nav -->
          </div>
          <!-- /.navbar-other -->
        </div>
        <!-- /.container -->
      </nav>
      <!-- /.navbar -->
      
    </header>
    <!-- /header -->
    <!-- start main content -->
    <section class="content">
        @yield('content')
    </section>
    <!-- end main content -->
  </div>
  <!-- /.content-wrapper -->
  <div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
  </div>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
  <script src="{{ asset('js/image.js') }}"></script>
  <script src="{{ asset('js/plugins.js') }}"></script>
  <script src="{{ asset('js/theme.js') }}"></script>
</body>

</html>