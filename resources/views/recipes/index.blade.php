@extends('layouts.mainlayout')

@section('content')

  @include(
    'partials.recipes.header', [
      'title' => 'Braurezepte',
      'actionIconLeft' => 'none',
      'actionIconRight' => 'solid/plus',
      'actionButtonRight' => "form=createRecipe value=Submit name=action"
    ]
  )

  <form action="/recipes/create" id="createRecipe">
  </form>

  <main class="container-fluid">
    @include('partials.recipes.list')
  </main>

@endsection
