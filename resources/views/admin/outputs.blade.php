@extends('admin.admin')

@section('inputs')
  <h5>Outputs</h5>
  @foreach ($outputs as $output)
    - {{ $output->frase }} <br>
  @endforeach
@endsection

@section('nuevo')
  {{-- <h5>Nuevo {{ strtolower($tipo->name) }} genérico</h5>
  <form class="" action="{{ url('tipo/new') }}" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="user_id" value="{{ $user->id }}">
    <input type="hidden" name="tipo_id" value="{{ $tipo->id }}">
    <input type="hidden" name="generico" value="1">

    <div class="form-group">
      <input type="text" class="form-control" id="name" name="name">
    </div>
    <button type="submit" class="btn btn-default">Padentro</button>
  </form> --}}
@endsection
