@extends('user/app')

@section('bg-img',asset('user/img/post-bg.jpg'))

@section('title',$post->title)

@section('sub-heading',$post->subtitle)

@section('main-content') 

<article>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <small> Created at {{ $post->created_at->diffForHumans() }} </small>

            @foreach ($post->categories as $category)
              <small class="float-right" style="margin-right:20px">
                  {{ $category->name }}
               </small>
            @endforeach

          {!! htmlspecialchars_decode($post->body) !!}


          <h3>Tag</h3>
          @foreach ($post->tags as $tag)
          <small class="float-left" style="margin-right:20px; border-radius:5px;border: 1px solid gray;padding: 5px;">
            {{ $tag->name }}
          </small>
          @endforeach
        </div>
      </div>
    </div>
  </article>

  <hr>

@endsection