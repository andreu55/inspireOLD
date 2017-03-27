@extends('layouts.app')

@section('content')
  <header>
    <div class="header-content">
      <div class="inner">
          <h2>
            <span id="titulaco"></span>
          </h2>
          <h5 class="wow fadeIn text-normal wow fadeIn" data-wow-duration="2s">Encuentra la inspiración que buscas</h5>
          <a href="{{ url('register') }}" class="btn btn-default-outline wow fadeInUp" data-wow-duration="2s" data-wow-delay="2s">Regístrate</a>
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

    var a = b = c = d = e = 0;
    var personajes = ["Tom", "Jerry", "Mafalda"];
    var lugares = ["una taberna", "una montaña", "unas ruinas"];
    var objetos = ["una flauta", "un pintalabios", "un libro"];
    var situaciones = ["una aventura", "un crimen", "una persecución"];
    // var temas = ["el bien", "el mal", "la felicidad"];

    $(function(){
        $("#titulaco").typed({
          strings: [
            @foreach ($frases as $frase)
              "{!! $frase !!}",
            @endforeach
            "^1000"
          ],
          // contentType: 'html',
          backDelay: 5500,
          typeSpeed: 1, // 29
          callback: function() {
            $('.typed-cursor').slideUp(); // .fadeOut()
          },
          onStringTyped: function() {

            animaInput(1, personajes, "[Personaje]");
            animaInput(2, situaciones, "[situación]");
            animaInput(3, objetos, "[objeto]");
            animaInput(4, lugares, "[lugar]");
            // animaInput(5, temas, "[tema]");

          }
        });
    });

    function animaInput(tipo, arr, original) {

      switch (tipo) {
        case 1: var i = window.a; break;
        case 2: var i = window.b; break;
        case 3: var i = window.c; break;
        case 4: var i = window.d; break;
        case 5: var i = window.e; break;
      }

      setTimeout(function() {
        $('.input_' + tipo).hide().text(arr[i]).fadeIn();
        i = i + 1;
        setTimeout(function() {
          $('.input_' + tipo).hide().text(arr[i]).fadeIn();
          i = i + 1;
          setTimeout(function() {
            $('.input_' + tipo).hide().text(arr[i]).fadeIn();
            i = i + 1;
            setTimeout(function() {
              $('.input_' + tipo).hide().text(original).fadeIn();
              i = i + 1;
            }, 1100);
          }, 1100);
        }, 1100);
      }, 600);


      switch (tipo) {
        case 1: window.a = 0; break;
        case 2: window.b = 0; break;
        case 3: window.c = 0; break;
        case 4: window.d = 0; break;
        case 5: window.e = 0; break;
      }


    }

    function cambiaInput(tipo, valor) {

    }

    function randBet(min, max) { return Math.floor(Math.random()*(max-min+1)+min); }

  </script>
@endsection
