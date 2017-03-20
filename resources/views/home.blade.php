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
      <div class="swiper-container">
        <div class="swiper-wrapper">
          <!-- Slides -->
          @foreach ($outputs as $key => $output)
            <div class="swiper-slide">
              <h5 id="test_{{ $key }}"></h5>
              <h1 id="frase_{{ $key }}">{{ $output->frase }}</h1>
              {{-- <h5 class="wow fadeIn text-normal"></h5> --}}
            </div>
          @endforeach
        </div>

        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>

        {{-- cambiaFrase() --}}
        <button id="recarga_pag" class="btn btn-info-outline" onclick="location.reload()" style="display:none">Recarga</button>

        <!-- Navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
      </div>
    </div>
  </div>

  {{-- Boton flotante --}}
  <div class="fixed-action-btn vertical">
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


  var iin = [
    @foreach ($outputs as $output)
      [
        @for ($i = 0; $i < 5; $i++)
          0,
        @endfor
      ],
    @endforeach
  ];

  var u = ["un", "una"];
  var e = ["el", "la"];

  var inputs = [
    @foreach ($inputs as $tipos_input)
      [
        @foreach ($tipos_input as $input)
          {name: "{{ $input->name }}", sexo: "{{ $input->sexo }}"},
        @endforeach
      ],
    @endforeach
  ];

  function getInput(tipo, articulo, iin_pos = 0) {

    tipo = tipo - 1; // Para que se adecue al array empezando en 0
    iin_aux = iin[tipo][iin_pos];

    // if (inputs[tipo][iin_aux].name == undefined) { iin_aux = 0; }

    // si encuentra articulo en modo #1u o #1e saltamos una posicion más al construir la frase
    if (articulo.trim() == "u" || articulo.trim() == "e") {
      if (articulo == "u") { artic = u[inputs[tipo][iin_aux].sexo] + " "; }
      if (articulo == "e") { artic = e[inputs[tipo][iin_aux].sexo] + " "; }
    }
    else { artic = ""; }

    aux = artic + inputs[tipo][iin_aux].name;
    iin[tipo][iin_pos] = iin[tipo][iin_pos] + 1;

    return aux;
  }

  function dameArticulo(cod) {

    // Sacamos el tipo
    tipo = cod.substring(0, 1);
    articulo = cod.substring(2, 3);
    iin_actual = iin[tipo][0];
    extra = 0;

    // si encuentra articulo en modo #1u o #1e saltamos una posicion más al construir la frase
    if (articulo == "u" || articulo == "e") { extra = 1; }

  }








  function formatFrase(frase) {

    var pos = frase.search("#");
    var tipo;
    var input;

    // Mientras encontremos simbolos # en la frase
    while(pos != -1) {

      cod = frase.substring(pos+1, pos+3);
      input = dameArticulo(cod);

      input = "<span class='input_" + tipo + "' data-tipo=" + tipo + " data-articulo=" + articulo + " data-iin=0>" + getInput(tipo, articulo) + "</span>";

      // if (pos != 0) { input = input.toLowerCase(); }

      // Generamos la frase de nuevo con el campo sustituido
      frase = frase.substring(0, pos) + input + frase.substring(pos+2+extra);
      pos = frase.search("#");
    }

    return frase;
  }

  // Para cambiar los inputs al clickar en ellos
  $("h5[id^='test_']").on("click", "span[class^='input_']", function() {

    // tipo = parseInt(this.attributes["data-tipo"].value);
    // articulo = this.attributes["data-articulo"].value;

    tipo = parseInt($(this).data("tipo"));
    articulo = $(this).data("articulo").trim();

    $(this).text(getInput(tipo, articulo, iin + 1));
  });

</script>

{{-- DOCS slider: http://idangero.us/swiper/api/#.WMwxlfnhA4k --}}
<script src="{{ asset('bower_components/swiper/dist/js/swiper.jquery.min.js') }}"></script>
<script type="text/javascript">

  $(document).ready(function () {

    // Formateamos la primera frase
    output = formatFrase( $('#frase_0').text() );
    $('#test_0').html(output);


   // Initialize swiper
   var mySwiper = new Swiper ('.swiper-container', {
    //  loop: true
   });

   mySwiper.on('slideChangeStart', function (swiper) {

     if (mySwiper.isEnd) { $('#recarga_pag').addClass('animated flipInX').show(); }

     id = swiper.activeIndex;
     output = formatFrase( $('#frase_' + id).text() );

    //  $('#test_' + id).text(output);
      $('#test_' + id).html(output);
   });

   $('.swiper-button-prev').on('click', function() { mySwiper.slidePrev(); });
   $('.swiper-button-next').on('click', function() { mySwiper.slideNext(); });
  });


  // Activamos los tooltips
  $('[data-toggle="tooltip"]').tooltip();

</script>

@endsection
