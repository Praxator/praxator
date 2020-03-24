@if ($agent->isDesktop())
  <nav class="bg-dark fixed-left">
@else
  <nav class="bg-dark fixed-bottom">
@endif
  <!-- <div class="brand">
    <img src="https://www.carsnr1.com/files/ProductBrand/thumb/volkswagen-logo-vector_2.png" alt="...">
  </div> -->
  <ul class="nav flex-column">
    <li class="nav-item">
      <a class="nav-link active" href="https://praxator.test/recipes">
        <i>@svg('svgrepo/recipes')</i>
        <span>Rezepte</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link disabled" href="#">
        <i>@svg('solid/mortar-pestle')</i>
        <span>Stile</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link disabled" href="#">
        <i>@svg('solid/calculator')</i>
        <span>Tools</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">
        <i>@svg('solid/user-alt')</i>
        <span>Brauer</span>
      </a>
    </li>
  </ul>
</nav>
