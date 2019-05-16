@extends('Blog/app')

@section('main-section')

<div class="slider"></div>

<section class="blog-area section">
    <div class="container">

        <div class="row">
        @foreach ($posts as $post)
            <div class="col-lg-4 col-md-6">
                <div class="card h-100">
                    <div class="single-post post-style-1">

                        <div class="blog-image"><img src="{{asset('blog/images/marion-michele-330691.jpg')}}" alt="Blog Image"></div>

                        <a class="avatar" href="#"><img src="{{asset('blog/images/icons8-team-355979.jpg')}}" alt="Profile Image"></a>
                        <div class="blog-info">

                            <h4 class="title"><a href="{{ route('post',$post->slug) }}">
                                <b>{{ $post-> title }}</b></a> <br>
                                <strong>{{ $post->subtitle }}</strong>
                            </h4>
                            <p class="post-meta">Posted by
                                    {{ $post->created_at->diffForHumans() }} </p>
                            <ul class="post-footer">
                                <li><a href="#"><i class="ion-heart"></i>57</a></li>
                                <li><a href="#"><i class="ion-chatbubble"></i>6</a></li>
                                <li><a href="#"><i class="ion-eye"></i>138</a></li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        </div>

    <a class="load-more-btn" href="#"><b>LOAD MORE</b></a>

@endsection
