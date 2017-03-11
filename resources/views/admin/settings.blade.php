@extends('admin.admin')

@section('css')
  <style>
  #random {
    background: #BABABA;
  }
  </style>
@endsection

@section('inputs')
  <div class="row">
    <div class="col-sm-12">
      <h2>Settings</h2>

      <h5 class="text-center">Porcentaje de personalización</h5>
      <div class="row">
        <div class="col-sm-3">
          <div class="text-right">
            Usar genéricos
          </div>
        </div>
        <div class="col-sm-6">
          <input id="random" type="range" class="form-control" name="random" min="0" step="1" max="100" value="{{ $user->random }}">
          <div class="text-center">
            <div id="bloque-rand">
              <span id="rand-status">{{ $user->random }}</span>%
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="text-left">
            Usar personalizados
          </div>
        </div>
      </div>

    </div>
  </div>
@endsection

@section('scripts')
  <script>
    $('#random').on('change', function() {

      $('#bloque-rand').removeClass('animated rotateOut rotateIn');
      $('#bloque-rand').addClass('animated rotateOut');

      rand = $(this).val();

      $.post("{{ url('user/edit') }}",
      {
          _token: "{{ csrf_token() }}",
          random: rand
      },
      function(data, status){
        if (data == "200 OK") {
          $('#bloque-rand').removeClass('rotateOut');
          $('#bloque-rand').addClass('rotateIn');
        }
      });
    });

    $('#random').on('input', function() {
      $('#rand-status').html($(this).val());
    });
  </script>
@endsection
