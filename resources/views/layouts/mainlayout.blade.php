<!DOCTYPE HTML>
<html lang="de">
  <head>
    @include('partials.mainlayout.head')
  </head>
  @if ($agent->isDesktop())
    <body>
  @else
    <body>
  @endif
    @include('partials.mainlayout.main-navigation')
    @yield('content')
    @include('partials.mainlayout.footer-scripts')
  </body>
</html>
