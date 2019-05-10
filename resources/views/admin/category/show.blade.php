@extends('admin.layouts.app')

@section('headSection')

<link rel="stylesheet" href="{{ asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
    
@endsection

@section('main-content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Category page
      </h1>
    </section>

    <section class="content">

        <div class="box">
            <div class="box-header with-border">
                <a href="{{ route('category.create') }}" class="col-lg-offset-0 btn btn-success">Add New</a>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fa fa-minus"></i></button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                        <i class="fa fa-times"></i></button>
                    </div>
            </div>

            <div class="box-body">
                <div class="box-body">
                    <div class="box">
                      <div class="box-header">
                        <h3 class="box-title">Category Table</h3>
                      </div>
                      <!-- /.box-header -->
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
                          @foreach ($categories as $category)
                            <tr>
                              <td>{{ $loop->index + 1 }}</td>
                              <td>{{ $category-> name }} </td>
                              <td>{{ $category-> slug }}</td>
                              <td><a href="{{ route('category.edit',$category->id)}} " class="fa fa-fw fa-edit"></a></td>
                              <td>
                                <form action=" {{ route('category.destroy',$category->id)}} " id="delete-form-{{$category->id}}" method="POST" style="display: none">
                                  {{ csrf_field() }}
                                  {{ method_field('DELETE')}}
                                </form>

                                <a href="" onclick="
                                  if(confirm('Are you sure , You want delete this?'))
                                    {
                                      event.preventDefault();
                                      document.getElementById('delete-form-{{ $category->id }}').submit();
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