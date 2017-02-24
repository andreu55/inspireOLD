@extends('layouts.app')

@section('content')
  <div class="container" style="margin:80px">
    <div class="inner">
      <div class="row">
        <div class="col-3">
          <h5>Outputs</h5>
          <div class="list-group">
            <a href="{{ url('admin') }}" class="list-group-item list-group-item-action{{ Request::is('admin') ? ' active' : '' }}">Outputs</a>
          </div>
          <br>
          <h5>Inputs</h5>
          <div class="list-group">
            @foreach ($tipos as $tipo)
              <a href="{{ url('admin/' . $tipo->id) }}" class="list-group-item list-group-item-action{{ Request::is('admin/' . $tipo->id) ? ' active' : '' }}">{{ "#" . $tipo->id . " " . $tipo->name }}</a>
            @endforeach
          </div>
        </div>
        <div class="col-9">
          @yield('inputs')
          {{-- <h3>Nuevo input genérico</h3>
          <form class="" action="{{ url('tipo/new') }}" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="user_id" value="{{ $user->id }}">
            <input type="hidden" name="generico" value="1">

            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
              <label for="tipo_id">Tipo</label>
              <select class="form-control" id="tipo_id" name="tipo_id">
                @foreach ($tipos as $tipo)
                  <option value="{{ $tipo->id }}">{{ $tipo->name }}</option>
                @endforeach
              </select>
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
          </form> --}}
        </div>
      </div>
    </div>
  </div>

@endsection
