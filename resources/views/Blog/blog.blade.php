@extends('Blog/app')

@section('Judul','Donor.in')

@section('bg-judul',asset('blog/images/slider-1.jpg'))

@section('main-section')

<section class="blog-area section">
    <div class="container">
        <div class="row">
        @foreach ($posts as $post)
            <div class="col-lg-4 col-md-6">
                <div class="card h-100">
                    <div class="single-post post-style-1">
                        @include('sweetalert::alert')
                        <div class="blog-image"><img src="{{Storage::disk('local')->url($post->image)}}" alt="Blog Image"></div>

                        <div class="blog-info">

                            <h4 class="title"><a href="{{ route('post',$post->slug) }}">
                                <b>{{ $post-> title }}</b></a> <br>
                            </h4>
                            <p class="align-text-bottom ">{{ $post->subtitle }}</p>
                            <ul class="post-footer">
                                <li></li>
                                <li><a href="#" ><i class="ion-heart align-center"></i>57</a></li>
                                <li></li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>

    <div class="clearfix next d-flex justify-content-center">
            {{ $posts->links()}}
      </div>
    <br>

    @include('Blog/layout/footer')
@endsection


