@extends('layouts.app')

@section('content')
<header>
  <div class="header-content">
    <div class="inner">
      <h1 id="frase"></h1>
      <h5 class="wow fadeIn text-normal wow fadeIn">{{ $tipo->name }}</h5>
      <button class="btn btn-primary-outline btn-md page-scroll wow fadeInUp m-t-3" onclick="cambiaFrase()">Otra frase</button>
    </div>
  </div>
</header>
@endsection

@section('scripts')
<script type="text/javascript">

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

  function cambiaInput() {
      iin = iin + 1;
  }

  function muestraFrase() {

    // Cogemos la siguiente frase disponible
    var frase = outputs[iout];
    var pos = frase.search("#");
    var tipo;
    var input;

    while(pos != -1) {
      // Sacamos el tipo
      tipo = frase.substring(pos+1, pos+2);

      // Cargamos el input correspondiente
      input = "<span id='input_" + tipo + "'>" + inputs[tipo-1][iin] + "</span>";

      cambiaInput();

      if (pos != 0) { input = input.toLowerCase(); }

      // Generamos la frase de nuevo con el campo sustituido
      frase = frase.substring(0, pos) + input + frase.substring(pos+2);
      pos = frase.search("#");
    }

    $('#frase').html(frase);
  }

</script>
@endsection
