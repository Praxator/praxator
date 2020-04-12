<!DOCTYPE HTML>
<html lang="de">
  <head>
    @include('partials.mainlayout.head')
  </head>
  <body>
    @include('partials.mainlayout.main-navigation')
    <main id="content">
      @yield('content')
      <noscript>
        <div class="container">
            <p class="pt-5 text-center lead">Please enable javascript to view this content.</p>
        </div>
      </noscript>
    </main>
    <footer>
      <div class="container py-5">
        Icons made by <a href="https://www.flaticon.com/authors/freepik" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon"> www.flaticon.com</a>
      </div>
    </footer>
    @include('partials.mainlayout.footer-scripts')
    <div class="d-block d-sm-none mt-5"></div>
    <div class="d-block d-sm-none fixed-bottom">
      <div class="card card-body rounded-0 py-2 d-flex align-items-middle box-shadow" style="border-top:1px solid #F1F5F8">
        <ul class="nav nav-pills nav-fill">
          <li class="nav-item">
            <a class="nav-link text-lighter" href="/"><i class="fas fa-home fa-lg"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-lighter disabled" href="#"><i class="fas fa-mortar-pestle fa-lg"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="/recipes"><i class="fas fa-book fa-lg"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-lighter disabled" href="#"><i class="fa fa-calculator fa-lg"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-lighter disabled" href="#"><i class="far fa-user fa-lg"></i></a>
          </li>
        </ul>
      </div>
    </div>
  </body>
</html>
