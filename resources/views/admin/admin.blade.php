@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-sm-8">
      <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active"><a href="#personajes" aria-controls="personajes" role="tab" data-toggle="tab">Personajes</a></li>
        <li role="presentation"><a href="#escenarios" aria-controls="escenarios" role="tab" data-toggle="tab">Escenarios</a></li>
        <li role="presentation"><a href="#situaciones" aria-controls="situaciones" role="tab" data-toggle="tab">Situaciones</a></li>
        <li role="presentation"><a href="#objetos" aria-controls="objetos" role="tab" data-toggle="tab">Objetos</a></li>
        <li role="presentation"><a href="#temas" aria-controls="temas" role="tab" data-toggle="tab">Temas</a></li>
      </ul><br>

      <div class="tab-content">
        <div role="tabpanel" class="tab-pane fade in active" id="personajes">
          <div class="panel panel-default">
            <div class="panel-heading">Personajes</div>
            <div class="panel-body">
              <div class="list-group">
                @foreach ($personajes as $personaje)
                  <button type="button" class="list-group-item">{{ $personaje->name }}</button>
                @endforeach
              </div>
            </div>
          </div>
        </div>
        <div role="tabpanel" class="tab-pane fade" id="escenarios">
          <div class="panel panel-default">
              <div class="panel-heading">Escenarios</div>
              <div class="panel-body">
                <div class="list-group">
                  @foreach ($escenarios as $escenario)
                    <button type="button" class="list-group-item">{{ $escenario->name }}</button>
                  @endforeach
                </div>
              </div>
          </div>
        </div>
        <div role="tabpanel" class="tab-pane fade" id="situaciones">
            <div class="panel panel-default">
                <div class="panel-heading">Situaciones</div>
                <div class="panel-body">
                  <div class="list-group">
                    @foreach ($situaciones as $situacion)
                      <button type="button" class="list-group-item">{{ $situacion->name }}</button>
                    @endforeach
                  </div>
                </div>
            </div>
        </div>
        <div role="tabpanel" class="tab-pane fade" id="objetos">
            <div class="panel panel-default">
                <div class="panel-heading">Objetos</div>
                <div class="panel-body">
                  <div class="list-group">
                    @foreach ($objetos as $objeto)
                      <button type="button" class="list-group-item">{{ $objeto->name }}</button>
                    @endforeach
                  </div>
                </div>
            </div>
        </div>
        <div role="tabpanel" class="tab-pane fade" id="temas">
          <div class="panel panel-default">
            <div class="panel-heading">Temas</div>
            <div class="panel-body">
              <div class="list-group">
                @foreach ($temas as $tema)
                  <button type="button" class="list-group-item">{{ $tema->name }}</button>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <h3>Nuevo input genérico</h3>
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
      </form>
    </div>
  </div>


</div>
@endsection
