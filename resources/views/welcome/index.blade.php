<!doctype html>
<html lang="de">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Praxator</title>

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: Arial, sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <?php
          \Debugbar::info(Session::get('applocale'));
        ?>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Praxator
                </div>
                <p><strong>{{ __('welcome.subtitle') }}</strong></p>
                <p>{{ __('welcome.description') }}</p>
            </div>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  {{ Config::get('languages')[App::getLocale()] }}
              </a>
              <ul class="dropdown-menu">
                  @foreach (Config::get('languages') as $lang => $language)
                      @if ($lang != App::getLocale())
                          <li>
                              <a href="{{ route('lang.switch', $lang) }}">{{$language}}</a>
                          </li>
                      @endif
                  @endforeach
              </ul>
            </li>
        </div>
    </body>
</html>
