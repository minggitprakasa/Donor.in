@extends('Blog/app')

@section('Judul',Auth::user()->name)

@section('bg-judul',asset('blog/images/slider-1.jpg'))

@section('main-content')

<article>
    <div class="container">
      <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">

            </div>
    </div>
  </article>

  <hr>

@endsection
