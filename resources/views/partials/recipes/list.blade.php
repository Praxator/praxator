@forelse ($recipes as $recipe)
<div class=""> <!-- einzelnes Rezept -->
  <div class="card mb-sm-4 status-card card-md-rounded-0 shadow-none border">
    <div class="card-header d-inline-flex align-items-center bg-white">
      @svg('ionicons/beer-outline', 'icon-media align-self-center ibu-20')
      <!-- ('svgrepo/beer-mug')  -->

      <div class="pl-2">
        <span>
          <a href="#" class="font-weight-bold text-dark text-decoration-none">{{ $recipe->name }}</a>
          <p class="mb-0 text-muted small">Bierstil {{ __('recipes.list.from') }} BrauerXY</p>
          <!-- <p class="mb-0 text-muted small"><span class="font-weight-bold text-dark">12.4</span> °P <span class="font-weight-bold text-dark">15</span> EBC <span class="font-weight-bold text-dark">45</span> IBU <span class="font-weight-bold text-dark">4.5</span> %</p>  -->
        </span>
      </div>
      <div class="text-right" style="flex-grow:1;">
        <button class="btn btn-link text-grey py-0 pr-0 no-caret dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="Rezept Optionen">
          <span class="fas fa-ellipsis-v"></span> <!-- <ion-icon name="ellipsis-vertical-outline"></ion-icon> -->
        </button>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
          <a href="{{ route('recipes.show', $recipe->id) }}" class="dropdown-item">Rezept anzeigen</a>
          <a href="#" class="dropdown-item disabled">Rezept brauen</a>
          <a href="#" class="dropdown-item disabled">Rezept ausdrucken</a>
          <a href="#" class="dropdown-item disabled">Rezept exportieren</a>
        </div>
        <button class="btn btn-link text-grey py-0 pr-0 d-sm-none" type="button" data-toggle="collapse" data-target="#show-{{ $recipe->id }}" aria-expanded="false" aria-controls="show-{{ $recipe->id }}">
          <span class="fas fa-chevron-down"></span> <!-- <ion-icon class="size20" name="chevron-down-outline"></ion-icon> -->
        </button>
      </div>

    </div>
    <div class="card-body pt-0 d-md-block collapse" id="show-{{ $recipe->id }}">
      <div class="row pt-2 align-item-center">
        <div class="col-6">
            <!-- <ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star-half-outline"></ion-icon><ion-icon name="star-outline"></ion-icon><ion-icon name="star-outline"></ion-icon> -->
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i><i class="far fa-star"></i>
        </div>
        <div class="col-6 text-right">
          <button class="btn btn-link text-grey py-0" type="button">
            <span class="far fa-heart"></span> <!-- <ion-icon name="heart-outline"></ion-icon> -->
          </button>
          <button class="btn btn-link text-grey py-0 pr-0" type="button">
            <span class="far fa-share-square"></span> <!-- <ion-icon name="share-outline"></ion-icon> -->
          </button>
        </div>
      </div>
      <div class="text-muted small border-bottom pb-2">
        <span>
          13. Dezember 2019
        </span>
        <span class="float-right">
          566 mal gebraut
        </span>
      </div>
      <div class="d-block pt-3">
        <div class="row">
          <div class="col-3">
            <div class="font-weight-light">
              <span class="text-dark text-center">
                <p class="font-weight-bold mb-0">{{ $recipe->original_gravity }}</p>
                <p class="text-muted text-uppercase mb-0 small">{{ __('fieldvalues.specific_gravity_units_abbr.'.$recipe->original_gravity_unit) }}</p>
              </span>
            </div>
          </div>
          <div class="col-3">
            <div class="font-weight-light">
              <span class="text-dark text-center">
                <p class="font-weight-bold mb-0">{{ $recipe->color }}</p>
                <p class="text-muted text-uppercase mb-0 small">{{ __('fieldvalues.color_units_abbr.'.$recipe->color_unit) }}</p>
              </span>
            </div>
          </div>
          <div class="col-3">
            <div class="font-weight-light">
              <span class="text-dark text-center">
                <p class="font-weight-bold mb-0">{{ $recipe->ibu }}</p>
                <p class="text-muted text-uppercase mb-0 small">{{ __('recipes.ibu') }}</p>
              </span>
            </div>
          </div>
          <div class="col-3">
            <div class="font-weight-light">
              <span class="text-dark text-center">
                <p class="font-weight-bold mb-0">{{ $recipe->alcohol_by_volume_percentage }}</p>
                <p class="text-muted text-uppercase mb-0 small">vol %</p>
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@empty
  {{ __('recipes.list.no_recipes') }}
@endforelse
