<nav class="navbar navbar-expand navbar-light navbar-laravel shadow-none border-bottom sticky-top py-1">
  <div class="container">
    <a class="navbar-brand d-flex align-items-center" href="/" title="Logo">
      <img src="/svg/hop.svg" height="30px" class="px-2" loading="eager">
      <span class="font-weight-bold mb-0 d-none d-sm-block" style="font-size:20px;">Praxator</span>
    </a>

    <div class="collapse navbar-collapse">
      <ul class="navbar-nav d-none d-md-block mx-auto">
        <form class="form-inline search-bar" method="get" action="/i/results">
          <input class="form-control form-control-sm" name="q" placeholder="Suche" aria-label="search" autocomplete="off" required style="line-height: 0.6;width:200px">
        </form>
      </ul>

      <div class="ml-auto">
        <ul class="navbar-nav">
          <div class="d-none d-md-block">
            <li class="nav-item px-md-2">
              <a class="nav-link font-weight-bold text-muted" href="/recipes" title="Rezepte" data-toggle="tooltip" data-placement="bottom">
                <i class="fa fa-book fa-lg"></i>
                <span class="d-none d-md-inline-block small pl-1">REZEPTE</span>
              </a>
            </li>
          </div>
          <div class="d-none d-md-block">
            <li class="nav-item px-md-2">
              <a class="nav-link font-weight-bold text-lightgrey disabled" href="#" title="Zutaten" data-toggle="tooltip" data-placement="bottom">
                <i class="fas fa-mortar-pestle fa-lg"></i>
                <span class="d-none d-md-inline-block small pl-1">ZUTATEN</span>
              </a>
            </li>
          </div>
          <div class="d-none d-md-block">
            <li class="nav-item px-md-2">
              <a class="nav-link font-weight-bold text-lightgrey disabled" href="#" title="Werkzeuge" data-toggle="tooltip" data-placement="bottom">
                <i class="fa fa-calculator fa-lg"></i>
                <span class="d-none d-md-inline-block small pl-1">WERKZEUGE</span>
              </a>
            </li>
          </div>

          <li class="nav-item dropdown ml-2">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="User Menu" data-toggle="tooltip" data-placement="bottom">
              <i class="far fa-user fa-lg text-muted"></i>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item font-weight-bold disabled" href="#">
                <span class="fas fa-plus pr-2 text-lighter"></span>
                Neues Rezept erstellen
              </a>
              <a class="dropdown-item font-weight-bold disabled" href="#">
                <span class="fas fa-plus pr-2 text-lighter"></span>
                Mit Brauen starten
              </a>

              <div class="dropdown-divider"></div>
              <a class="dropdown-item font-weight-bold" href="/">
                <span class="fas fa-home pr-2 text-lighter"></span>
                Home
              </a>

              <div class="dropdown-divider"></div>
              <a class="dropdown-item font-weight-bold disabled" href="#">
                <span class="far fa-user pr-2 text-lighter"></span>
                Mein Profil
              </a>
              <a class="d-block d-md-none dropdown-item font-weight-bold disabled" href="#">
                <span class="fa fa-book pr-2 text-lighter"></span>
                Meine Rezepte
              </a>
              <a class="d-block d-md-none dropdown-item font-weight-bold disabled" href="#">
                <span class="fa fa-clipboard-list pr-2 text-lighter"></span>
                Meine Logs
              </a>
              <a class="d-block d-md-none dropdown-item font-weight-bold disabled" href="#">
                <span class="fa fa-boxes pr-2 text-lighter"></span>
                Mein Inventar
              </a>
              <a class="dropdown-item font-weight-bold disabled" href="#">
                <span class="fas fa-cog pr-2 text-lighter"></span>
                Einstellungen
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item font-weight-bold disabled" href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                <span class="fas fa-sign-out-alt pr-2"></span>
                Abmelden
              </a>

              <form id="logout-form" action="https://pixelfed.de/logout" method="POST" style="display: none;">
                <input type="hidden" name="_token" value="yYopOZRYwueeQF590XnZQl1wm5FNLkIXczlZM3WE">
              </form>
            </div>
          </li>
        </ul>
    </div>
  </div>
</nav>
