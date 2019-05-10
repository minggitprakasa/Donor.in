@extends('admin.layouts.app')


@section('headSection')

  <link rel="stylesheet" href="{{ asset('admin/bower_components/select2/dist/css/select2.min.css')}}">
    
@endsection

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
                      
                            
                      <div class="checkbox pull-left">
                          <label>
                            <input type="checkbox" name="status" value="1" @if ($post->status == 1)
                                {{'checked'}}
                            @endif> Publish
                          </label>
                        </div>
                  </div>

                  <div class="col-lg-6">

                      <div class="form-group">
                          <label>Select Tag</label>
                          <select class="form-control select2" multiple="multiple" data-placeholder="Select a State"
                                  style="width: 100%;" name="tags[]">
                            @foreach ($tags as $tag)
                              <option value="{{ $tag->id}} "
                                @foreach ($post->tags as $postTag)
                                    @if ($postTag->id == $tag->id)
                                        selected
                                    @endif
                                @endforeach
                                >{{ $tag->name }} 
                              </option>
                            @endforeach
                          </select>
                        </div>
                        <div class="form-group">
                            <label>Select Cartegory</label>
                            <select class="form-control select2" multiple="multiple" data-placeholder="Select a State"
                                    style="width: 100%;" name="categories[]">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id}} "
                                      @foreach ($post->categories as $postCategory)
                                        @if ($postCategory->id == $category->id)
                                            selected
                                        @endif
                                      @endforeach
                                    >{{ $category->name }} 
                                  </option>
                                @endforeach
                            </select>
                          </div>
                          <br>
                          <div class="form-group pull-left">
                              <label for="image">Image</label>
                              <input type="file" id="image" name="image">
                            </div>
                  </div>  

              </div>
              <div class="box">

                <div class="box-header">
                  <h3 class="box-title">Write Post Body</h3>
                </div>

                <div class="box-body pad">
                    <textarea name="body" 
                        style="width: 100%; height: 400px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" id="editor1">{{ $post->body }}</textarea>
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

@section('footerSection')
<script src="//cdn.ckeditor.com/4.11.4/full/ckeditor.js"></script>

<script>
    $(function () {
      // Replace the <textarea id="editor1"> with a CKEditor
      // instance, using default configuration.
      CKEDITOR.replace('editor1')
      //bootstrap WYSIHTML5 - text editor
      $('.textarea').wysihtml5()
    })
</script>
<script src="{{ asset('admin/bower_components/select2/dist/js/select2.full.min.js')}}"></script>
<script>
  $(document).ready(function() {
    $('.select2').select2()
  });
</script>
@endsection