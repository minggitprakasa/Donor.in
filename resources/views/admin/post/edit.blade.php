@extends('admin.layouts.app')

@section('main-content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Text Editors
        <small>Advanced form element</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Editors</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Title</h3>
            </div>

            @include('includes.messages')

            <form role="form" action="{{ route('post.update',$post->id) }}" method="post">
            {{ csrf_field() }}
            {{ method_field('PATCH')}}
              <div class="box-body">
                  <div class="col-lg-6">
                      <div class="form-group">
                        <label for="title">Post Title</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="{{ $post->title }}"> 
                      </div>
      
                      <div class="form-group">
                        <label for="subtitle">Post Sub Title</label>
                        <input type="text" class="form-control" id="subtitle" name="subtitle" placeholder="Subtitle" value="{{ $post->subtitle }}">
                      </div>
      
                      <div class="form-group">
                        <label for="slug">Post Slug</label>
                        <input type="text" class="form-control" id="slug" name="slug" placeholder="Slug" value="{{ $post->slug }}">
                      </div>
      
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="status" @if ($post->status== 1) checked @endif> Publish
                        </label>
                      </div>

                  </div>

                  <div class="col-lg-6">

                      <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" id="image" name="image">
                        <p class="help-block">Input Image</p>
                      </div>

                  </div>

              </div>
              <div class="box">

                <div class="box-header">
                  <h3 class="box-title">Write Post Body</h3>
                </div>

                <div class="box-body pad">
                    <textarea class="textarea" name="body" placeholder="Place some text here"
                        style="width: 100%; height: 400px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px; ">{{ $post->body }}</textarea>
                </div>

              </div>

                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a href="{{ route('post.index') }} " class="btn btn-warning">Back</a>
                </div>

            </div>
          </form>
        </div>
      </div>
    </section>
  </div>
@endsection