@extends('layouts.app')

@section('content')
    <div class="inner" style="margin:80px">
      <div class="row">
        <div class="col-sm-3">
          <div class="list-group">
            <a href="{{ url('admin') }}" class="list-group-item list-group-item-action{{ Request::is('admin') ? ' active' : '' }}">Outputs</a>
          </div>
          <br>
          <div class="list-group">
            @foreach ($tipos as $tipo)
              <a href="{{ url('admin/' . $tipo->id) }}" class="list-group-item list-group-item-action{{ Request::is('admin/' . $tipo->id) ? ' active' : '' }}">{{ "#" . $tipo->id . " " . $tipo->name }}</a>
            @endforeach
          </div>
          <br>
          <ul class="list-group">
            <li class="list-group-item">u = un / una</li>
            <li class="list-group-item">e = el / la</li>
          </ul>
        </div>
        <div class="col-sm-9">

          @yield('inputs')

        </div>
      </div>
    </div>

@endsection
