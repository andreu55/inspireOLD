@extends('admin.admin')

@section('inputs')
  <div class="row">
    <div class="col-sm-12">
      <h2>Outputs</h2>
        <form action="{{ url('output/new') }}" method="post">
          {{ csrf_field() }}
          <div class="form-group">
            <div class="input-group">
              <input type="text" name="frase" class="form-control" placeholder="Nuevo output">
              <span class="input-group-btn">
                <button class="btn btn-secondary" type="submit">save!</button>
              </span>
            </div>
          </div>
        </form>
    </div>

    <div class="col-sm-12">

      <!-- Nav tabs -->
      <ul class="nav nav-tabs" role="tablist">
        @foreach ($tipos as $tipo)
          <li class="nav-item">
            <a class="nav-link {{ $tipo->id == 1 ? "active" : "" }}" data-toggle="tab" href="#{{ $tipo->name_trans }}" role="tab">{{ $tipo->name }}</a>
          </li>
        @endforeach
      </ul>

      <!-- Tab panes -->
      <div class="tab-content">

        @foreach ($tipos as $tipo)
          <div class="tab-pane {{ $tipo->id == 1 ? "active" : "" }}" id="{{ $tipo->name_trans }}" role="tabpanel">
            <table class="table table-striped table-sm">
              <tbody>
                @foreach ($outputs[$tipo->id] as $output)
                  <tr id="output_{{ $output->id }}">
                    <th scope="row">{{ $output->id }}</th>
                    <td class="edit" id="{{ $output->id }}">{{ $output->frase }}</td>
                    <td class="text-right">
                      <button data-output="{{ $output->id }}" class="delete btn btn-outline-danger btn-sm">
                        <i class="fa fa-fw fa-times"></i>
                      </button>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        @endforeach

      </div>

    </div>
  </div>
@endsection

@section('scripts')

  <script>
    $("button.delete").click(function(){

      var output_id = $(this).data("output");

      $.post("{{ url('output/delete') }}",
      {
          _token: "{{ csrf_token() }}",
          output_id: output_id
      },
      function(data, status){
        if (data == "200 OK") {
          $("#output_" + output_id).addClass('animated zoomOutRight').fadeOut(700); // flipOutX
        } else {
          alert(data);
        }
      });
    });
  </script>

  <script src="{{ asset('js/jquery.jeditable.mini.js') }}"></script>
  <script>
    $(document).ready(function() {
      $('.edit').editable('{{ url('output/edita') }}', {
          indicator : 'Saving...',
          tooltip   : 'Click to edit...',
          submitdata : {_token: "{{ csrf_token() }}"}
      });
    });
  </script>

@endsection
