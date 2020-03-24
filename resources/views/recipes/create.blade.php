@extends('layouts.mainlayout')

@section('content')
  @include(
    'partials.recipes.header', [
      'title' => __('recipes.create.title'),
      'actionIconLeft' => 'solid/times',
      'actionButtonLeft' => "form=cancelRecipe",
      'actionIconRight' => 'solid/check',
      'actionButtonRight' => "form=newRecipe value=Submit name=action"
    ]
  )

  <form action="/recipes" id="cancelRecipe">
  </form>

  <main class="container-fluid">
    <div class="container">
      @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif
    </div>


    {!! Form::open(['route' => 'recipes.store', 'id' => 'newRecipe', 'class' => 'form']) !!}
      <div class="form-group">
        {!! Form::label('name', __('recipes.create.label_name'), ['class' => 'control-label']) !!}
        {!! Form::text('name', null,
          [
            'class' => 'form-control input-lg',
            'placeholder' => __('recipes.create.placeholder_name')
          ])
        !!}
      </div>
      <div class="form-group">
        {!! Form::label('notes', __('recipes.create.label_notes'), ['class' => 'control-label']) !!}
        {!! Form::textarea('notes', null,
          [
            'class' => 'form-control input-lg'
          ])
        !!}
        <span class="help-block">{{ __('recipes.create.notes_help_text') }}</span>
      </div>
      <div class="form-group">
        {!! Form::label('origin', __('recipes.create.label_origin'), ['class' => 'control-label']) !!}
        {!! Form::text('origin', null,
          [
            'class' => 'form-control input-lg',
            'placeholder' => __('recipes.create.placeholder_origin')
          ])
        !!}
      </div>
      <div class="form-row">
        <div class="form-group">
          {!! Form::label('original_gravity', __('recipes.create.label_original_gravity'), ['class' => 'control-label']) !!}
          {!! Form::number('original_gravity', null,
            [
              'class' => 'form-control input-lg',
              'placeholder' => __('recipes.create.placeholder_original_gravity')
            ])
          !!}
        </div>
        <div class="form-group">
          {!! Form::label('original_gravity_unit', __('recipes.create.label_original_gravity_unit'),['class' => 'control-label']) !!}
          {!! Form::select('original_gravity_unit', ['p' => __('fieldvalues.specific_gravity_units.p'),'og' => __('fieldvalues.specific_gravity_units.og'),'fg' => __('fieldvalues.specific_gravity_units.fg'),'b' => __('fieldvalues.specific_gravity_units.b')], 'p',
            [
              'class' => 'form-control input-lg'
            ])
          !!}
        </div>
      </div>
      <div class="form-group">
        {!! Form::label('ibu', __('recipes.create.label_ibu'), ['class' => 'control-label']) !!}
        {!! Form::text('ibu', null,
          [
            'class' => 'form-control input-lg',
            'placeholder' => __('recipes.create.placeholder_ibu')
          ])
        !!}
      </div>
      <div class="form-row">
        <div class="form-group">
          {!! Form::label('color', __('recipes.create.label_color'), ['class' => 'control-label']) !!}
          {!! Form::text('color', null,
            [
              'class' => 'form-control input-lg',
              'placeholder' => __('recipes.create.placeholder_color')
            ])
          !!}
        </div>
        <div class="form-group">
          {!! Form::label('color_unit', __('recipes.create.label_color_unit'),['class' => 'control-label']) !!}
          {!! Form::select('color_unit', ['ebc' => __('fieldvalues.color_units.ebc'),'srm' => __('fieldvalues.color_units.srm'),'L' => __('fieldvalues.color_units.L')], 'ebc',
            [
              'class' => 'form-control input-lg'
            ])
          !!}
        </div>
      </div>
    {!! Form::close() !!}
  </main>

@endsection
