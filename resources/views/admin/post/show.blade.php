@extends('admin.layouts.app')

@section('main-content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Blank page
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>

    <section class="content">

        <div class="box">
            <div class="box-header with-border">
                <a href="{{ route('post.create') }}" class="col-lg-offset-0 btn btn-success">Add New</a>
                <h3 class="box-title">Title</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fa fa-minus"></i></button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                        <i class="fa fa-times"></i></button>
                    </div>
            </div>

            <div class="box-body">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Data Table With Full Features</h3>
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
                            <th>Edit</th>
                            <th>Delete</th>
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
                              <td><a href="{{ route('post.edit',$post->id)}} " class="fa fa-fw fa-edit"></a></td>
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
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                          </tfoot>
                        </table>
                      </div>
                      <!-- /.box-body -->
                </div>
            </div>

            <div class="box-footer">
                Footer
            </div>

        </div>
    </section>
</div>

@endsection