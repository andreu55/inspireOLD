@extends('layouts.app')

@section('content')
  <header>
    <div class="header-content">
      <div class="inner">
          <h2>
            <span id="titulaco"></span>
          </h2>
          <h5 class="wow fadeIn text-normal wow fadeIn">Encuentra la inspiración que buscas</h5>
          <a href="{{ url('register') }}" class="btn btn-primary-outline page-scroll wow fadeInUp m-t-3">Regístrate</a>
      </div>
    </div>
  </header>
@endsection

@section('css')
  <style>
      .typed-cursor{
      opacity: 1;
      -webkit-animation: blink 0.7s infinite;
      -moz-animation: blink 0.7s infinite;
      animation: blink 0.7s infinite;
    }
    @keyframes blink{
      0% { opacity:1; }
      50% { opacity:0; }
      100% { opacity:1; }
    }
    @-webkit-keyframes blink{
      0% { opacity:1; }
      50% { opacity:0; }
      100% { opacity:1; }
    }
    @-moz-keyframes blink{
      0% { opacity:1; }
      50% { opacity:0; }
      100% { opacity:1; }
    }
  </style>
@endsection

@section('scripts')
  <script src="{{ asset('js/typed.min.js') }}"></script>
  <script>
    $(function(){
        $("#titulaco").typed({
          strings: [
            @foreach ($frases as $frase)
              "{{ $frase->frase }} ^2000",
            @endforeach
            "^1000"
          ],
          typeSpeed: 29,
          callback: function() {
            $('.typed-cursor').slideUp().fadeOut();
          }
        });
    });
  </script>
@endsection
