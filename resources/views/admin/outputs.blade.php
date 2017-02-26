@extends('admin.admin')

@section('inputs')
  <div class="row">
    <div class="col-sm-8">
      <h5>Outputs</h5>
      <div class="list-group">
        @foreach ($outputs as $output)
          <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
            <div class="d-flex w-100 justify-content-between">
              <p class="mb-1">
                {{ $output->frase }}
              </p>
              <small class="text-muted">
                <form class="" action="{{ url('output/delete') }}" method="POST">
                  {{ csrf_field() }}
                  <input type="hidden" name="output_id" value="{{ $output->id }}">
                  <input type="submit" value="x">
                </form>
              </small>
            </div>
          </a>
        @endforeach
      </div>
    </div>
    <div class="col-sm-4">
      <h5>Nuevo output</h5>
        <form action="{{ url('output/new') }}" method="post">
          {{ csrf_field() }}
          <div class="form-group">
          <textarea name="frase" class="form-control" rows="4"></textarea>
        </div>
        <button type="submit" class="btn btn-default">Padentro</button>
      </form>
    </div>
  </div>
@endsection
