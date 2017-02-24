@extends('admin.admin')

@section('inputs')
  <div class="row">
    <div class="col-sm-6">
      <div class="panel panel-default">
        <h5>{{ $tipo->name }}</h5>
        <div class="panel-body">
          <div class="list-group">
            @foreach ($inputs as $input)
              <li class="list-group-item">
                <div class="row">
                  <div class="col flex-first">
                    {{ $input->name }}
                  </div>
                  <form class="col flex-last" action="{{ url('input/delete') }}" method="POST">
                    {{ csrf_field() }}
                    <input type="hidden" name="input_id" value="{{ $input->id }}">
                    <input type="hidden" name="tipo_id" value="{{ $tipo->id }}">
                    <input type="submit" value="x">
                  </form>
                </div>
              </li>
            @endforeach
          </div>
        </div>
      </div>
    </div>

    <div class="col-sm-6">
      <h5>Nuevo {{ strtolower($tipo->name) }} genérico</h5>
      <form class="" action="{{ url('tipo/new') }}" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="user_id" value="{{ $user->id }}">
        <input type="hidden" name="tipo_id" value="{{ $tipo->id }}">
        <input type="hidden" name="generico" value="1">

        <div class="form-group">
          <input type="text" class="form-control" id="name" name="name">
        </div>
        <button type="submit" class="btn btn-default">Padentro</button>
      </form>
    </div>
  </div>
@endsection
