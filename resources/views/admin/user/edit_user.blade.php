@extends('layouts.app2')
@section('user') active @endsection
@section('content')
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header bg-light shadow-sm">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <div class="d-flex">
              <span class="mr-2"><a href="{{ route('dashboard')}}">Dashboard</a> <i class="fas fa-angle-right"></i></span>
              <span class="mr-2"><a href="{{ route('all.user') }}">User</a> <i class="fas fa-angle-right"></i></span>
              <span class="mr-2"><a href="#">Edit User</a></span>
            </div>
          </div><!-- /.col -->

          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content  mt-3">
      <div class="container-fluied">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h3 class="card-title">Edit User</h3>
                            <a href="{{ route('all.user') }}" class="btn btn-primary">Go Back to User List</a>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-12 col-lg-6 offset-lg-3 col-md-8 offset-md-2">
                              <form action="{{ route('update.user',['id'=>$users->id]) }}" method="post">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="user">User Name:</label>
                                    @error('user')
                                      <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <input type="text" name="user" value="{{ $users->name }}" class="form-control" id="user" placeholder="type user name here">
                                </div>
                                <div class="form-group">
                                    <label for="email">User Email:</label>
                                    @error('email')
                                      <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <input type="email" name="email" value="{{ $users->email }}" class="form-control" id="email" placeholder="type user email here">
                                </div>
                                <div class="form-group">
                                    <label for="image">Avater:</label>
                                    @error('avater')
                                      <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <div class="custom-file">
                                        <label class="custom-file-label" for="image">Choose file</label>
                                        <input type="file" name="avater" value="{{ $users->profile->avater}}" class="custom-file-input" id="image">
                                    </div>
                                </div>
                                <div class="form-group">
                                  <input type="submit" value="Update Now" class="btn btn-outline-success btn-lg">
                                </div>
                              </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2021-2022 <a href="https://adminlte.io">Nazrul Islam Suzon</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0
    </div>
  </footer>
@endsection