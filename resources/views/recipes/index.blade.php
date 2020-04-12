@extends('layouts.mainlayout')

  @section('content')
  <!--  Dies ist die ganze Sektion innerhalb von <main ="content"></main>
        Sie enthält mehrere verschachtelte div's (je nach Seite).
        - Im äussersten div wird "nur" festgelegt, wenn die Abstände
          unten (zum Footer) und oben (zur Navbar) definiert sein sollen.
          Was machen w-100 und h-100?? Wird das ev. nur gebraucht, wenn die
          Navbar bei pixelfed nicht angezeigt wird und dafür ein alternativer
          Nav-Balken mit zurück-Icon erscheint?
        - Danach kommt ein div-container. Dies ist meistens der erste Container.
          Er ist zwingend und braucht es immer.
        - Danach kommen alle Sektions-Div-Blöcke mit den einzelnen Inhalten.
          Was macht d-flex? d-block?
  -->
  <!-- Seiten-Titelbereich -->
  <div>
    <div class="container">

      <div class="d-flex align-item-center pt-3">
        <div class="sitetitle">
          <h2>
            Rezeptesammlung
          </h2>
        </div>
      </div>

      <div class="pt-3 border-bottom">
        <div class="container px-0">
            <div class="row">
              <div class="col-12">
                <div class="mx-md-auto">
                  <div class="d-block mt-n3 mb-3">
                    <div class="row">
                      <div class="col-12">
                        <div class="d-block">
                          <ul class="nav d-flex justify-content-between">
                            <li class="nav-item">
                              <div class="font-weight-light">
                                <span class="text-dark text-center">
                                  <p class="font-weight-bold mb-0">12</p>
                                  <p class="text-muted text-uppercase mb-0 small">Brauer</p>
                                </span>
                              </div>
                            </li>
                            <li class="nav-item">
                              <div class="font-weight-light">
                                <span class="text-dark text-center">
                                  <p class="font-weight-bold mb-0">{{ $recipes->count() }}</p>
                                  <p class="text-muted text-uppercase mb-0 small">Rezepte</p>
                                </span>
                              </div>
                            </li>
                            <li class="nav-item">
                              <div class="font-weight-light">
                                <span class="text-dark text-center">
                                  <p class="font-weight-bold mb-0">76</p>
                                  <p class="text-muted text-uppercase mb-0 small">Bierstile</p>
                                </span>
                              </div>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>

      <div class="filter-list">
        <ul class="nav nav-topbar d-flex justify-content-center">
          <li class="nav-item px-0">
            <a href="#" class="nav-link">
              <i class="fas fa-th-list text-grey"></i>
              <span class="d-none small pl1">Alle</span>
            </a>
          </li>
          <li class="nav-item px-0 d-sm-none">
            <a href="#" class="nav-link">
              <i class="fas fa-filter text-grey"></i>
              <span class="d-none small pl1">Filter</span>
            </a>
          </li>
        </ul>
      </div>

      <div> <!-- alle REzepte -->

        @include('partials.recipes.list')

      </div>
    </div>
  </div>

@endsection
