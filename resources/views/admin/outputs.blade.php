@extends('admin.admin')

@section('inputs')
  <div class="row">
    <div class="col-sm-8">
      <h5>Outputs</h5>
      <ul>
        @foreach ($outputs as $output)
          <li>{{ $output->frase }}</li>
        @endforeach
      </ul>
    </div>
    <div class="col-sm-4">
      <h5>Nuevo output</h5>
        <form class="" action="{{ url('output/new') }}" method="post">
          {{ csrf_field() }}
          <div class="form-group">
          <textarea name="frase" class="form-control" rows="4"></textarea>
        </div>
        <button type="submit" class="btn btn-default">Padentro</button>
      </form>
    </div>
  </div>
@endsection
