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
              <h3 class="box-title">User Update</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{ route('pendonor.update',$user->id) }} " method="POST" >

              {{ csrf_field() }}
              {{ method_field('PUT') }}

              @include('includes.messages')

              <div class="box-body">
                  <div class="col-lg-offset-3 col-lg-6">
                      <div class="form-group">
                        <label for="name">User Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="@if(old('name')) {{ old('name')}} @else {{ $user->name }} @endif">
                      </div>

                      <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="@if(old('email')) {{ old('email')}} @else {{ $user->email }} @endif">
                      </div>

                      <div class="form-group">
                        <label for="address">address</label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="address" value="@if(old('address')) {{ old('address')}} @else {{ $user->address }} @endif">
                      </div>

                      <div class="form-group">
                        <label for="tgl_lahir">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" placeholder="Tanggal Lahir" value="@if(old('tgl_lahir')) {{ old('tgl_lahir')}} @else {{ $user->tgl_lahir }} @endif">
                      </div>

                      <div class="form-group">
                          <label for="jenis_kelamin">Jenis Kelamin</label> <br>
                            <div class="col-lg-12">
                                <div class="col-lg-3">
                                    <input type="radio" name="jenis_kelamin" class="flat-red" value="Laki-laki"> Laki-laki
                                </div>
                                <div class="col-lg-3">
                                    <input type="radio" name="jenis_kelamin" class="flat-red" value="Perempuan"> Perempuan
                                </div>
                            </div>
                      </div>

                      <div class="form-group">
                        <label for="no_hp">No HP</label>
                        <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="No Handphone" value="@if(old('no_hp')) {{ old('no_hp')}} @else {{ $user->no_hp }} @endif">
                      </div>

                      <div class="form-group">
                        <label for="pekerjaan">Pekerjaan</label>
                        <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" placeholder="Pekerjaan" value="@if(old('pekerjaan')) {{ old('pekerjaan')}} @else {{ $user->pekerjaan }} @endif">
                      </div>

                      <div class="form-group">
                        <label for="gol_darah">Golongan Darah</label>
                        <select class="form-control select2" style="width: 100%;" name="gol_darah">
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="O">O</option>
                            <option value="AB">AB</option>
                        </select>
                      </div>

                      <div class="form-group">
                          <label for="status">Status</label>
                          <div class="checkbox">
                            <label><input type="checkbox" name="status"
                                @if (old('status')==1 || $user->status == 1)
                                checked
                                @endif value="1">Status</label>
                            </label>
                          </div>
                      </div>

                      <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{ route('pendonor.index') }} " class="btn btn-warning">Back</a>
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
