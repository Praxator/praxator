{{ $recipes->count() }} {{ __('recipes.list.count_text') }}
<table class="table table-hover">
  @if ($agent->isDesktop())
  <thead>
    <tr>
      <th scope="col">&nbsp;</th>
      <th scope="col">Name</th>
      <th scope="col">Bierstil</th>
      <th scope="col">Brauer</th>
      <th scope="col">IBU</th>
    </tr>
  </thead>
  @endif
  <tbody>
    @forelse ($recipes as $recipe)
    <tr>
      @if (!$agent->isDesktop())
      <th scope="row" class="media">
        {{ svg_image('svgrepo/beer-mug')->class('icon icon-media align-self-center mr-3 ibu-20') }}
        <div class="media-body">
          <h5 class="mt-0 mb-1"><a href="{{ route('recipes.show', $recipe->id) }}">{{ $recipe->name }}</a></h5>
          <h6 class="mb-0">BierstilXY {{ __('recipes.list.from') }} BrauerXY</h6>
          <small class="text-muted">{{ $recipe->original_gravity }} {{ __('fieldvalues.specific_gravity_units.'.$recipe->original_gravity_unit) }} | {{ $recipe->ibu }} {{ __('recipes.ibu') }} | {{ $recipe->color }} {{ __('fieldvalues.color_units_abbr.'.$recipe->color_unit) }}</small>
        </div>
        {{ svg_image('solid/angle-right')->class('icon align-self-center text-grey') }}
      </th>
      @else
      <th scope="row">
        {{ svg_image('svgrepo/beer-mug')->class('icon icon-media align-self-center mr-3 ibu-20') }}
      </th>
      <td>
        {{ $recipe->name }}
      </td>
      <td>
        BierstilXY
      </td>
      <td>
        BrauerXY
      </td>
      <td>
        {{ $recipe->ibu }}
      </td>
      @endif
    </tr>
    @empty
      {{ __('recipes.list.no_recipes') }}
    @endforelse
  </tbody>
</table>
