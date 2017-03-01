<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Inspire{{ Request::segment(1) ? ' | ' . ucfirst(Request::segment(1)) : '' }}</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('css/materialize.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

    {{-- <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" /> --}}
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    @yield('css')

    <script>
      window.Laravel = {!! json_encode([ 'csrfToken' => csrf_token(), ]) !!};
    </script>
  </head>
  <body class="bg-faded">
    <nav id="topNav" class="navbar fixed-top navbar-toggleable-sm">
    <div class="container">
        <button class="navbar-toggler hidden-md-up float-right" type="button" data-toggle="collapse" data-target="#collapsingNavbar">
            ☰
        </button>
        <a class="navbar-brand" href="{{ url('') }}">Inspire</a>
        <div class="collapse navbar-collapse" id="collapsingNavbar">
            <ul class="nav navbar-nav ml-auto">
              @if (Auth::guest())
                  <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                  <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
              @else
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</a>
                  <div class="dropdown-menu" style="margin-left:-40px;">
                    @if (Auth::user()->id == "1" || Auth::user()->id == "2")
                      <a class="dropdown-item" href="{{ url('admin') }}">Admin</a>
                    @endif
                    <a class="dropdown-item" href="{{ url('home') }}">Home</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                  </div>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                  </form>
                </li>
              @endif
            </ul>
        </div>
    </div>
  </nav>


@yield('content')

<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-6 col-sm-3">
            </div>
            <div class="col-6 col-sm-3 column">
            </div>
            <div class="col-12 col-sm-3 column">
            </div>
            <div class="col-12 col-sm-3 text-right">
              <ul class="list-inline">
                <li class="list-inline-item"><a rel="nofollow" href="" title="Twitter"><i class="icon-lg ion-social-twitter-outline"></i></a>&nbsp;</li>
                <li class="list-inline-item"><a rel="nofollow" href="" title="Facebook"><i class="icon-lg ion-social-facebook-outline"></i></a></li>
              </ul>
            </div>
        </div>
        <br>
        <span class="float-right text-muted small">©{{ date('Y') }} &nbsp; Una idea de <a href="http://writermuse.es">Writermuse</a></span>
    </div>
</footer>

    <!--scripts loaded here-->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>

    <script src="{{ asset('js/materialize.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script>
      new WOW().init();
    </script>

    @yield('scripts')

  </body>
</html>
