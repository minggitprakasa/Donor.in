@extends('Blog/app')

@section('bg-judul',Storage::disk('local')->url($post->image))

@section('header-tambahan')

    <link href="{{asset('blog/single-post-2/css/styles.css')}}" rel="stylesheet">

    <link href="{{asset('blog/single-post-2/css/responsive.css')}}" rel="stylesheet">

@endsection

@section('main-section')

    <section class="post-area">
		<div class="container">

			<div class="row">

				<div class="col-lg-1 col-md-0"></div>
				<div class="col-lg-10 col-md-12">

					<div class="main-post">

						<div class="post-top-area">
                            <div class="row">
                                @foreach ($post->categories as $category)
                                <h5 class="float-right " style="text-transform : uppercase; margin-right:20px; margin-bottom:20px;">
                                  <a href="{{ route('category',$category->slug) }}">{{ $category->name }}</a>
                                </h5>
                                @endforeach
                            </div>

							<h3 class="title"><a href="#"><b>{{$post->title}}</b></a></h3>

								<div class="post-info">
                                    Created at {{ $post->created_at->diffForHumans() }}
								</div>

                            {!! htmlspecialchars_decode($post->body) !!}

							<ul class="tags">
                                    @foreach ($post->tags as $tag)
                                      <li><a href="{{ route('tag',$tag->slug) }}">{{ $tag->name }}</a></li>
                                    @endforeach
							</ul>

							<div class="post-icons-area">
								<ul class="post-icons">
									<li><a href="#"><i class="ion-heart"></i>57</a></li>
									<li><a href="#"><i class="ion-chatbubble"></i>6</a></li>
									<li><a href="#"><i class="ion-eye"></i>138</a></li>
								</ul>

								<ul class="icons">
									<li>SHARE : </li>
									<li><a href="#"><i class="ion-social-facebook"></i></a></li>
									<li><a href="#"><i class="ion-social-twitter"></i></a></li>
									<li><a href="#"><i class="ion-social-pinterest"></i></a></li>
								</ul>
							</div>

							<div class="post-footer post-info">

								<div class="left-area">
									<a class="avatar" href="#"><img src="images/avatar-1-120x120.jpg" alt="Profile Image"></a>
								</div>

								<div class="middle-area">
									<a class="name" href="#"><b>Katy Liu</b></a>
									<h6 class="date">on Sep 29, 2017 at 9:48 am</h6>
								</div>

							</div><!-- post-info -->

						</div><!-- post-bottom-area -->

					</div><!-- main-post -->
				</div><!-- col-lg-8 col-md-12 -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- post-area -->

@endsection
