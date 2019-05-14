@extends('admin.layouts.app')

@section('headSection')

<link rel="stylesheet" href="{{ asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">

@endsection

@section('main-content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tag page
      </h1>
    </section>

    <section class="content">

        <div class="box">
            <div class="box-header with-border">
                  <a href="{{ route('tag.create') }}" class="col-lg-offset-0 btn btn-success">Add New</a>
            </div>

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
                      <th>Tag Name</th>
                      <th>Slug</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($tags as $tag)
                      <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        <td>{{ $tag-> name }} </td>
                        <td>{{ $tag-> slug }}</td>
                        <td><a href="{{ route('tag.edit',$tag->id)}} " class="fa fa-fw fa-edit"></a></td>
                        <td>
                          <form action=" {{ route('tag.destroy',$tag->id)}} " id="delete-form-{{$tag->id}}" method="POST" style="display: none">
                            {{ csrf_field() }}
                            {{ method_field('DELETE')}}
                          </form>

                          <a href="" onclick="
                            if(confirm('Are you sure , You want delete this?'))
                              {
                                event.preventDefault();
                                document.getElementById('delete-form-{{ $tag->id }}').submit();
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
                        <th>Tag Name</th>
                        <th>Slug</th>
                        <th>Edit</th>
                        <th>Delete</th>
                      </tr>
                    </tfoot>
                  </table>
                </div>
                <!-- /.box-body -->
              </div>
            </div>
        </div>
    </section>
</div>

@endsection

@section('footerSection')
    <script src="{{ asset('admin/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>

    <script>
      $(function () {
        $('#example1').DataTable()
        $('#example2').DataTable({
          'paging'      : true,
          'lengthChange': false,
          'searching'   : false,
          'ordering'    : true,
          'info'        : true,
          'autoWidth'   : false
        })
      })
    </script>
@endsection
