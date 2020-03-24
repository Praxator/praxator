
@if ($agent->isDesktop())
  <div id="recipe-nav" class="container-fluid">
@else
  <div id="recipe-nav" class="container-fluid mobile">
@endif
    <div class="row">
      <div class="col" style="background-color: #eeeeee;">
        <div class="row">
          <div class="col border box rounded" style="background-color: white; margin:1em;">
            <div class="row" style="padding: 1em;">
                  Rezeptseiten Navigation (Suchen und Filter)<br/>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>






  <ul class="list-unstyled">
    @forelse ($recipes as $recipe)
      <li class="media py-2 border-bottom">
      <!-- TODO: entsprechend der IBU soll die Bierfarbe im Glass angepasst werden -->
      {{ svg_image('svgrepo/beer-mug')->class('icon icon-media align-self-center mr-3 ibu-20') }}
      <div class="media-body">
        <h5 class="mt-0 mb-1"><a href="/recipes/{{ $recipe->id }}">{{ $recipe->name }}</a></h5>
        <h6 class="mb-0">{{ $recipe->style }} von Brew Buddy Beer</h6>
        <small class="text-muted">15% Stammwürze | {{ $recipe->ibu }} IBU | 24 EBU</small>
      </div>
      {{ svg_image('solid/angle-right')->class('icon align-self-center text-grey') }}
    </li>
    @empty
      Keine Rezepte gefunden
    @endforelse
  </ul>
