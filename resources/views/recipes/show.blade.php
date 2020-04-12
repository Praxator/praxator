@extends('layouts.mainlayout')

@section('content')

  @include(
    'partials.recipes.header', [
      'title' => $recipe->name,
      'actionIconLeft' => 'solid/angle-left',
      'actionButtonLeft' => "form=recipesList",
      'actionIconRight' => 'solid/ellipsis-v',
      'actionButtonRight' => "form=recipesList"
    ]
  )

  <div class="bg-white p-3 border-bottom">
    <div class="d-flex justify-content-between align-items-center">
      <div class="curser-pointer">
        <i class="fas fa-chevron-left fa-lg"></i>
      </div>
      <div class="font-weight-hold">Rezeptliste</div>
      <div>
        <i class="fas fa-ellipsis-v fa-lg text-muted text-decoration-none"></i>
      </div>
    </div>
  </div>

  <form action="/recipes" id="recipesList">
  </form>

  <main class="container-fluid">
    <div class="container">
      @include('flash::message')
    </div>
    <h1>
      {{ $recipe->name }}</br>
      <small class="text-muted">{{ $recipe->notes }}</small>
    </h1>
    <p>
      {{ __('recipes.show.origin') }}<a href="{{ $recipe->origin }}">{{ $recipe->origin }}</a> <br/ >
      {{ __('recipes.show.original_gravity') }}{{ $recipe->original_gravity }} {{ __('fieldvalues.specific_gravity_units_abbr.'.$recipe->original_gravity_unit) }}<br/ >
      {{ __('recipes.show.bitternes') }}{{ $recipe->ibu }} {{ __('recipes.ibu') }}<br/ >
      {{ __('recipes.show.color') }}{{ $recipe->color }} {{ __('fieldvalues.color_units_abbr.'.$recipe->color_unit) }}<br/ >
      {{ __('recipes.show.alcohol') }}{{ $recipe->alcohol_by_volume_percentage }} %<br/ >
      {{ __('recipes.show.batch_size') }}{{ $recipe->batch_size }} {{ __('fieldvalues.volume_units_abbr.'.$recipe->batch_size_unit) }}<br/ >
      {{ __('recipes.show.efficiency') }}{{ $recipe->efficiency_percentage }} %<br/ >
      {{ __('recipes.show.boil_time') }}{{ $recipe->boil_time }} {{ __('fieldvalues.time_units_abbr.'.$recipe->boil_time_unit) }}<br/ >
      {{ __('recipes.show.carbonation') }}{{ $recipe->carbonation }} {{ $recipe->carbonation_unit }}<br/ >
    </p>
  </main>
@endsection
