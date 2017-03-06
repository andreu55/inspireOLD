@extends('layouts.app')

@section('content')
<header>
  <div class="header-content">
    <div class="inner">
      {{-- <h5 id="test"></h5> --}}
      <h1 id="frase"></h1>
      <h5 class="wow fadeIn text-normal wow fadeIn">
        {{-- {{ $tipo->name }} <span id="iin"></span> --}}
      </h5>
      <button class="btn btn-default-outline wow fadeInUp" onclick="cambiaFrase()">Otra frase</button>
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

  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  });

  // i de input y de output
  var iin = 0;
  var iout = 0;

  var inputs = [
    @foreach ($inputs as $key => $tipos_input)
      [
        @foreach ($tipos_input as $input)
          "{{ $input->name }}",
        @endforeach
      ],
    @endforeach
  ];

  var outputs = [
    @foreach ($outputs as $output)
    "{{ $output->frase }}",
    @endforeach
  ];

  $(document).ready(function(){
    muestraFrase();
  });

  function cambiaFrase() {
    if (iout >= {{ $cuantas - 1 }} || !outputs[iout + 1]) { location.reload(); }
    else {
      iout = iout + 1;
      muestraFrase();
    }
  }

  function getInput(tipo) {

    iin = iin + 1;
    var input = inputs[tipo-1][iin];

    while (input == undefined) {
      iin = 0;
      input = inputs[tipo-1][iin];
    }

    // Para testing
    $("#iin").html(iin);

    return input.toLowerCase();
  }

  $("#frase").on("click", "span[class^='input_']", function(e) {
    tipo = parseInt(this.attributes["data-tipo"].value);
    $(this).text(getInput(tipo));
  });

  // on('click', function(){
  //   this.html(getInput());
  // });

  function muestraFrase() {

    // Cogemos la siguiente frase disponible
    var frase = outputs[iout];
    var pos = frase.search("#");
    var tipo;
    var input;

    while(pos != -1) {
      // Sacamos el tipo
      tipo = frase.substring(pos+1, pos+2);

      input = "<span class='input_" + tipo + "' data-tipo=" + tipo + ">" + getInput(tipo) + "</span>";

      if (pos != 0) { input = input.toLowerCase(); }

      // Generamos la frase de nuevo con el campo sustituido
      frase = frase.substring(0, pos) + input + frase.substring(pos+2);
      pos = frase.search("#");
    }

    $('#test').text(frase);
    $('#frase').html(frase);
  }

</script>
@endsection
