@extends('admin.layouts.app')

@section('main-content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Roles
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
              <h3 class="box-title">Roles</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{ route('role.store') }} " method="POST" >

              {{ csrf_field() }}

              @include('includes.messages')

              <div class="box-body">
                  <div class="col-lg-offset-3 col-lg-6">
                      <div class="form-group">
                        <label for="name">Roles</label>
                        <input type="text" class="form-control" id="title" name="name" placeholder="Role">
                      </div>

                      <div class="row">
                        <div class="col-lg-4">
                          <label for="name">Posts Permission</label>
                          @foreach ($permissions as $permission )
                            @if ($permission->for== 'post')
                              <div class="checkbox">
                              <label><input type="checkbox" value="{{ $permission->id }}">{{ $permission->name }}</label>
                              </div>
                            @endif
                          @endforeach
                        </div>
                        
                        <div class="col-lg-4">
                          <label for="name">User Permission</label>
                          @foreach ($permissions as $permission )
                            @if ($permission->for== 'user')
                              <div class="checkbox">
                              <label><input type="checkbox" value="{{ $permission->id }}">{{ $permission->name }}</label>
                              </div>
                            @endif
                          @endforeach
                        </div>

                        <div class="col-lg-4">
                            <label for="name">Other Permission</label>
                            @foreach ($permissions as $permission )
                              @if ($permission->for== 'other')
                                <div class="checkbox">
                                <label><input type="checkbox" value="{{ $permission->id }}">{{ $permission->name }}</label>
                                </div>
                              @endif
                            @endforeach
                          </div>
                      </div>

                      <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{ route('role.index') }} " class="btn btn-warning">Back</a>
                      </div>

                  </div>
              </div>

            </form>
          </div>
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection