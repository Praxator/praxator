@extends('layouts.mainlayout')

  @section('content')

  <div>

    <!-- page title -->
    <div class="container">

      <div class="d-flex align-item-center pt-3">
        <div class="sitetitle">
          <h2>
            Rezeptesammlung
          </h2>
        </div>
      </div>

      <!-- recipes stats -->
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

      <!-- helper icons for recipes list -->
      <div class="row">
        <div class="col-12 col-md-3 d-sm-block">
        </div>
        <div class="col-12 col-md-9">
          <ul class="nav nav-topbar d-flex justify-content-center">
            <li class="nav-item px-0">
              <a href="#" class="nav-link">
                <i class="fas fa-th-list text-grey"></i>
                <span class="d-none small pl1">Alle</span>
              </a>
            </li>
            <li class="nav-item px-0 d-sm-none">
              <button class=" btn btn-link text-grey collapsed" type="button" data-toggle="collapse" data-target="#filter-section" aria-expanded="false" aria-controls="#filter-section" name="button">
                <i class="fas fa-filter text-grey"></i> <!-- <ion-icon name="funnel-outline"></ion-icon> -->
                <span class="d-none small pl1">Filter</span>
              </button>
            </li>
          </ul>
        </div>
      </div>

      <!--list of all recipes -->
      <div class="row">
        <div id="filter-section" class="col-12 col-md-3 d-sm-block collapse">
          Filterbereich
        </div>
        <div class="col-12 col-md-9">
            @include('partials.recipes.list')
        </div>
      </div>
    </div>
    
  </div>

@endsection
