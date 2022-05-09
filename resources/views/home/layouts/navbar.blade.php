
  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">Finden@gmail.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+62 851 5644 5873</span></i>
      </div>

      <div class="cta d-none d-md-flex align-items-center">
        <a href="#about" class="scrollto">Mulai</a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="/">Finden</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <i class="bi bi-list mobile-nav-toggle"></i>
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
          <li class="dropdown"><a href="#"><span>Kehilangan</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="/kehilangan-orang">Seseorang/Kerabat</a></li>
              <li><a href="/kehilangan-hewan">Hewan Peliharaan</a></li>
            </ul>
          <li><a class="nav-link scrollto" href="#about">Tentang</a></li>
          <li><a class="nav-link scrollto" href="#services">Pelayanan</a></li>
          <li><a class="nav-link scrollto" href="#portfolio">Portfolio</a></li>
          
          
         
          
          <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
          @auth()
          <li class="dropdown"><a class="nav-link scrollto">Halo, {{ auth()->user()->username }}<i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="/dashboard" title="">Dasbor</a></li>
              <li><form action="/logout" method="post">
                @csrf
                {{-- <a href="#" type="button" title="">LOGOUT</a> --}}
                <button type="submit">Logout</button>
                </form>
              </li>                          
          @else
          <li><a class="nav-link scrollto" href="/login">Login</a></li>
          @endauth
          
        </ul>
        
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->