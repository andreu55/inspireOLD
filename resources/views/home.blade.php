@extends('layouts.app')

@section('content')
<header>
  <div class="header-content">
    <div class="inner">
        <h1>{{ $output }}</h1>
        <h5 class="wow fadeIn text-normal wow fadeIn">{{ $tipo->name }}</h5>
        <a href="#one" class="btn btn-primary-outline btn-xl page-scroll wow fadeInUp m-t-3">Otra frase</a>
    </div>
  </div>
</header>
@endsection
