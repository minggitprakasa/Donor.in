@extends('admin.layouts.app')

@section('main-content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        User
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
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{ route('user.store') }} " method="POST" >

              {{ csrf_field() }}

              @include('includes.messages')

              <div class="box-body">
                  <div class="col-lg-offset-3 col-lg-6">
                      <div class="form-group">
                        <label for="name">User Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="{{ old('name') }} ">
                      </div>

                      <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{ old('email') }}">
                      </div>

                      <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone') }}" >
                      </div>

                      <div class="form-group">
                          <label for="password">Password</label>
                          <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                      </div>

                      <div class="form-group">
                          <label for="password_confirmation">Confirm Password</label>
                          <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password">
                      </div>

                      <div class="form-group">
                          <label for="status">Status</label>
                          <div class="checkbox">
                            <label ><input type="checkbox" name="status" @if (old('status') == 1)
                                checked
                              @endif value="1">Status</label>
                          </div>
                      </div>

                      <label>Assign Role</label>
                      <div class="row">
                        <div class="form-group col-lg-12">
                          @foreach ($roles as $role)
                              <div class="col-lg-3">
                                <div class="checkbox">
                                  <label > <input type="checkbox" name="role[]" value="{{ $role->id }} ">{{ $role->name}} </label>
                                </div>
                              </div>
                          @endforeach
                        </div>
                      </div>

                      <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{ route('tag.index') }} " class="btn btn-warning">Back</a>
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
