@extends('admin.layouts.app')

@section('main-content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Post page
      </h1>
    </section>

    <section class="content">

        <div class="box">
            @can('posts.create', Auth::user())
                <div class="box-header with-border">
                    <a href="{{ route('post.create') }}" class="col-lg-offset-0 btn btn-success">Add New</a>
                </div>
            @endcan

            <div class="box-body">
                <div class="box">
                    <div class="box-header">
                        @include('sweetalert::alert')
                    </div>
                      <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                          <thead>
                          <tr>
                            <th>S.No</th>
                            <th>Title</th>
                            <th>Subtitle</th>
                            <th>Slug</th>
                            <th>Created_at</th>
                            @can('posts.update', Auth::user())
                                <th>Edit</th>
                            @endcan
                            @can('posts.delete', Auth::user())
                                <th>Delete</th>
                            @endcan
                          </tr>
                          </thead>
                          <tbody>
                          @foreach ($posts as $post)
                            <tr>
                              <td>{{ $loop->index + 1 }}</td>
                              <td>{{ $post-> title }} </td>
                              <td>{{ $post-> subtitle }}</td>
                              <td>{{ $post-> slug }}</td>
                              <td>{{ $post-> created_at }}</td>
                              @can('posts.update', Auth::user())
                                <td><a href="{{ route('post.edit',$post->id)}} " class="fa fa-fw fa-edit"></a></td>
                              @endcan
                              @can('posts.delete', Auth::user())
                                <td>
                                    <form action=" {{ route('post.destroy',$post->id)}} " id="delete-form-{{$post->id}}" method="POST" style="display: none">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE')}}
                                    </form>

                                    <a href="" onclick="
                                    if(confirm('Are you sure , You want delete this?'))
                                        {
                                        event.preventDefault();
                                        document.getElementById('delete-form-{{ $post->id }}').submit();
                                        }
                                    else{
                                        event.preventDefault();

                                    }" class="fa fa-fw fa-trash"></a>
                                </td>
                              @endcan
                            </tr>
                          @endforeach
                          </tbody>
                          <tfoot>
                            <tr>
                                <th>S.No</th>
                                <th>Title</th>
                                <th>Subtitle</th>
                                <th>Slug</th>
                                <th>Created_at</th>
                                @can('posts.update', Auth::user())
                                  <th>Edit</th>
                                @endcan
                                @can('posts.delete', Auth::user())
                                  <th>Delete</th>
                                @endcan
                            </tr>
                          </tfoot>
                        </table>
                      </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection
