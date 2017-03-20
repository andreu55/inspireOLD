@extends('layouts.app')

@section('css')
  <link rel="stylesheet" href="{{ asset('bower_components/swiper/dist/css/swiper.min.css') }}">
  <style>
  </style>
@endsection

@section('content')
<header>
  <div class="header-content">
    <div class="inner">

      <!-- Slider main container -->
      <div class="swiper-container">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
              <!-- Slides -->
              <div class="swiper-slide">
                {{-- <h5 id="test"></h5> --}}
                <h1 id="frase"></h1>
                {{-- <h5 class="wow fadeIn text-normal"></h5> --}}
              </div>
              <div class="swiper-slide">Slide 2</div>
              <div class="swiper-slide">Slide 3</div>
          </div>


          <!-- If we need pagination -->
          <div class="swiper-pagination"></div>

          {{-- cambiaFrase() --}}
          <button id="recarga_pag" class="btn btn-info-outline" onclick="location.reload()" style="display:none">Recarga</button>

          <!-- If we need navigation buttons -->
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
      </div>
    </div>
  </div>



  <div class="fixed-action-btn horizontal">
    <a class="btn-floating btn-large btn-input_{{ $tipo->id }}" data-toggle="tooltip" data-placement="top" title="{{ $tipo->name }}">
      <i class="fa fa-{{ $tipo->icon }}"></i>
    </a>
    <ul>
      @foreach ($tipos as $t)
        <li data-toggle="tooltip" data-placement="top" title="{{ $t->name }}">
          <a href="{{ url('tipo/'.$t->id) }}" class="btn-floating btn-input_{{ $t->id }}"><i class="fa fa-fw fa-{{ $t->icon }}"></i></a>
        </li>
      @endforeach
    </ul>
  </div>

</header>

@endsection

@section('scripts')

<script type="text/javascript">

  // i de input y de output
  var iin = 0;
  var iout = 0;

  var u = ["un", "una"];
  var e = ["el", "la"];

  var inputs = [
    @foreach ($inputs as $tipos_input)
      [
        @foreach ($tipos_input as $input)
          "{{ $input->name }}",
        @endforeach
      ],
    @endforeach
  ];

  var sexos = [
    @foreach ($inputs as $tipos_input)
      [
        @foreach ($tipos_input as $input)
          "{{ $input->sexo }}",
        @endforeach
      ],
    @endforeach
  ];

  var outputs = [
    @foreach ($outputs as $output)
    "{{ $output->frase }}",
    @endforeach
  ];

  function cambiaFrase() {
    if (iout >= {{ $cuantas - 1 }} || !outputs[iout + 1]) { location.reload(); }
    else {
      iout = iout + 1;
      muestraFrase();
    }
  }

  function getInput(tipo, articulo) {

    var input = inputs[tipo-1][iin];
    iin = iin + 1;

    while (input == undefined) {
      iin = 0;
      input = inputs[tipo-1][iin];
    }

    // si encuentra articulo en modo #1u o #1e saltamos una posicion más al construir la frase
    if (articulo == "u" || articulo == "e") {
      if (articulo == "u") { articulo = u[sexos[tipo-1][iin]] + " "; }
      if (articulo == "e") { articulo = e[sexos[tipo-1][iin]] + " "; }
    } else { articulo = ""; }

    // TODO: Revisar porque aveces aparece como undefined
    if (articulo == "undefined ") {
      articulo = "";
    }

    input = articulo + input;

    // input = input.toLowerCase();

    return input;
  }

  function muestraFrase() {

    // Cogemos la siguiente frase disponible
    var frase = outputs[iout];
    var pos = frase.search("#");
    var tipo;
    var input;

    // Mientras encontremos simbolos # en la frase
    while(pos != -1) {

      // Sacamos el tipo
      tipo = frase.substring(pos+1, pos+2);
      articulo = frase.substring(pos+2, pos+3);

      // si encuentra articulo en modo #1u o #1e saltamos una posicion más al construir la frase
      if (articulo == "u" || articulo == "e") { extra = 1; }
      else { extra = 0; }

      input = "<span class='input_" + tipo + "' data-tipo=" + tipo + " data-articulo=" + articulo + ">" + getInput(tipo, articulo) + "</span>";

      // if (pos != 0) { input = input.toLowerCase(); }

      // Generamos la frase de nuevo con el campo sustituido
      frase = frase.substring(0, pos) + input + frase.substring(pos+2+extra);
      pos = frase.search("#");
    }

    $('#test').text(frase);
    $('#frase').html(frase);
  }

  // Para cambiar los inputs al clickar en ellos
  $("#frase").on("click", "span[class^='input_']", function() {

    // tipo = parseInt(this.attributes["data-tipo"].value);
    tipo = parseInt($(this).data("tipo"));

    // articulo = this.attributes["data-articulo"].value;
    articulo = $(this).data("articulo");

    $(this).text(getInput(tipo, articulo));
  });


  $(document).ready(function(){

    // Cargamos la primera frase
    muestraFrase();

    // Activamos los tooltips
    $('[data-toggle="tooltip"]').tooltip();

  });

</script>


<script src="{{ asset('bower_components/swiper/dist/js/swiper.jquery.min.js') }}"></script>
<script type="text/javascript">

  $(document).ready(function () {

   // Initialize swiper
   var mySwiper = new Swiper ('.swiper-container', {
    //  loop: true
   });

   mySwiper.on('slideChangeStart', function () {
     if (mySwiper.isEnd) {
       $('#recarga_pag').addClass('animated flipInX').show();
     }
   });

   $('.swiper-button-prev').on('click', function() { mySwiper.slidePrev(); });
   $('.swiper-button-next').on('click', function() { mySwiper.slideNext(); });
  });

</script>

@endsection
