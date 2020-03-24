<header class="text-primary container-fluid border-bottom fixed-top bg-white">
  <div class="row h-100 justify-content-center align-items-center">
    <div class="col-2">
        @if ($actionIconLeft<>'none')
          <button type="submit" {{ $actionButtonLeft }}>@svg($actionIconLeft)</button>
        @else
          &nbsp;
        @endif
    </div>
    <div class="col-8">
      <h2>{{ $title }}</h2>
    </div>
    <div class="col-2">
      @if ($actionIconRight<>'none')
        <button type="submit" {{ $actionButtonRight }}>@svg($actionIconRight)</button>
      @else
        &nbsp;
      @endif
    </div>
  </div>
</header>
