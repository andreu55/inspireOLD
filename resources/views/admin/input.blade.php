@extends('admin.admin')

@section('inputs')
  <div class="row">

    <div class="col-sm-12">
      <h2>{{ $tipo->name }}</h2>
      <form action="{{ url('tipo/new') }}" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="user_id" value="{{ $user->id }}">
        <input type="hidden" name="tipo_id" value="{{ $tipo->id }}">
        <input type="hidden" name="generico" value="{{ $user->esAdmin() }}">
        <div class="form-group">
          <div class="input-group">
            <input type="text" id="name" name="name" class="form-control" placeholder="Nuevo {{ strtolower($tipo->name) }} {{ $user->esAdmin() ? 'genérico' : '' }}">
            <span class="input-group-btn">
              <button class="btn btn-secondary" type="submit">save!</button>
            </span>
          </div>
        </div>
      </form>

    </div>

    <div class="col-sm-12">

      <table class="table table-sm">
        <tbody>
          @foreach ($inputs as $input)
          <tr id="input_{{ $input->id }}">
            @if ($user->esAdmin())
              <th scope="row">{{ $input->id }}</th>
            @endif
            <td class="edit" id="{{ $input->id }}">{{ $input->name }}</td>
            <td class="text-right">
              <button data-input="{{ $input->id }}" data-tipo="{{ $tipo->id }}" class="delete btn btn-outline-danger btn-sm">
                <i class="fa fa-fw fa-times"></i>
              </button>
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>

    </div>


  </div>
@endsection

@section('scripts')

  <script>
    $("button.delete").click(function(){

      var input_id = $(this).data("input");
      var tipo_id = $(this).data("tipo");

      $.post("{{ url('input/delete') }}",
      {
          _token: "{{ csrf_token() }}",
          input_id: input_id,
          tipo_id: tipo_id
      },
      function(data, status){
        if (data == "200 OK") {
          $("#input_" + input_id).addClass('animated zoomOutRight').fadeOut(700); // flipOutX
        } else {
          alert(data);
        }
      });
    });
  </script>

  <script src="{{ asset('js/jquery.jeditable.mini.js') }}"></script>
  <script>
    $(document).ready(function() {
      $('.edit').editable('{{ url('input/edita') }}', {
          indicator : 'Saving...',
          tooltip   : 'Click to edit...',
          submitdata : {_token: "{{ csrf_token() }}"}
      });
    });
  </script>
@endsection
