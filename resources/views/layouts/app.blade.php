<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="description" content="One page Bootstrap 4 theme to show What&#39;s new in Bootstrap 4. Discover new features like cards, the xl grid tier, em sizing and how to convert from Bootstrap 3." />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="generator" content="Codeply">

    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" />
    <link href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">

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
        <a class="navbar-brand page-scroll" href="#first">Inspire</a>
        <div class="collapse navbar-collapse" id="collapsingNavbar">
            <ul class="nav navbar-nav ml-auto">
              @if (Auth::guest())
                  <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                  <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
              @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                        {{ Auth::user()->name }}
                    </a>

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
                <h6 class="text-uppercase">Bootstrap 4</h6>
                <ul class="list-unstyled">
                    <li><a href="https://medium.com/@bootply/bootstrap-4-whats-new-visual-guide-c84dd81d8387" target="ext">What's New</a></li>
                    <li><a href="http://codeply.com/tagged/bootstrap-4" target="ext">Examples</a></li>
                    <li><a href="http://getbootstrap.com" target="ext">Official</a></li>
                    <li><a href="http://www.codeply.com/go/p/bootstrap_4.0.alpha" target="ext">Playground</a></li>
                </ul>
            </div>
            <div class="col-6 col-sm-3 column">
                <h6 class="text-uppercase">About</h6>
                <ul class="list-unstyled">
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Delivery Information</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms &amp; Conditions</a></li>
                </ul>
            </div>
            <div class="col-12 col-sm-3 column">
                <h6 class="text-uppercase">Stay Posted</h6>
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" title="No spam, we promise!" placeholder="Tell us your email">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#alertModal" type="button">Subscribe for updates</button>
                    </div>
                </form>
            </div>
            <div class="col-12 col-sm-3 text-right">
                <h6 class="text-uppercase">Follow</h6>
                <ul class="list-inline">
                    <li class="list-inline-item"><a rel="nofollow" href="" title="Twitter"><i class="icon-lg ion-social-twitter-outline"></i></a>&nbsp;</li>
                    <li class="list-inline-item"><a rel="nofollow" href="" title="Facebook"><i class="icon-lg ion-social-facebook-outline"></i></a></li>
                </ul>
            </div>
        </div>
        <br>
        <span class="float-right text-muted small"><a href="http://bootstrap4.guide">Made by Themes.guide</a> ©2015-2017 Company</span>
    </div>
</footer>
<div id="galleryModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body text-center">
                <img src="//placehold.it/1200x700/222?text=..." id="galleryImage" class="center-block img-fluid">
                <p>
                    <br>
                    <button class="btn btn-primary btn-lg" data-dismiss="modal" aria-hidden="true">Close <i class="ion-android-close"></i></button>
                </p>
            </div>
        </div>
    </div>
</div>
<div id="aboutModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body text-center">
                <h2 class="text-center">Bootstrap 4 Theme</h2>
                <h6 class="text-center">A free, responsive template</h6>
                <p class="text-center">
                    This is a customized, single page example template that demonstrates some of the new features to check out in Bootstrap 4. Some of the features include Google Montserrat fonts, animation using Dan Eden's animate.css and the WOW jQuery plugin to watch the scrolling.
                </p>
                <p class="text-center"><a href="http://bootstrap4.guide">Download at Bootstrap4.guide</a></p>
                <br>
                <button class="btn btn-primary btn-lg" data-dismiss="modal" aria-hidden="true"> OK </button>
            </div>
        </div>
    </div>
</div>
<div id="alertModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-body text-center">
                <h2 class="text-center">Nice Job!</h2>
                <p class="text-center">You clicked the button, but it doesn't actually go anywhere because this is only a demo.</p>
                <p class="text-center"><a href="https://medium.com/@bootply/bootstrap-4-whats-new-visual-guide-c84dd81d8387">Learn More</a></p>
                <br>
                <button class="btn btn-primary btn-lg" data-dismiss="modal" aria-hidden="true">OK <i class="ion-android-close"></i></button>
            </div>
        </div>
    </div>
</div>
    <!--scripts loaded here-->


    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>

    @yield('scripts')

  </body>
</html>
