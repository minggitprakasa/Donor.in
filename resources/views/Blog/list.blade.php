@extends('Blog.app')

@section('bg-judul',asset('blog/images/slider-1.jpg'))

@section('Judul','Pendonor')

@section('main-section')

<section class="blog-area section">
    <div class="container">
        <div class="row">
        @foreach ($profiles as $user)
            <div class="col-lg-4 col-md-6">
                <div class="card h-100">
                    <div class="single-post post-style-1">

                        {{-- <div class="blog-image"><img src="{{Storage::disk('local')->url($post->image)}}" alt="Blog Image"></div> --}}

                        <div class="blog-info">

                            {{-- <h4 class="title"><a href="{{ route('post',$post->slug) }}">
                                <b>{{ $post-> title }}</b></a> <br>
                            </h4> --}}
                            <h4 class="title">{{ $user->name}} </h4>
                            {{-- <p class="align-text-bottom ">{{ $post->subtitle }}</p> --}}
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


    @include('Blog/layout/footer')

@endsection

