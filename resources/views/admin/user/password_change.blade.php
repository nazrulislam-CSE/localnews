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
              <span class="mr-2"><a href="{{ route('all.user') }}">Users</a> <i class="fas fa-angle-right"></i></span>
              <span class="mr-2"><a href="#">User</a></span>
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
                            <h3 class="card-title">User Password change</h3>
                            <a href="{{ route('all.user') }}" class="btn btn-primary">Go Back to User List</a>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-12 col-lg-6 offset-lg-3 col-md-8 offset-md-2">
                                <form action="{{ route('password.update',['id'=>Auth::user()->id]) }}" method="post">
                                {{ csrf_field() }} 
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="new_password">New Password:</label>
                                            @error('new_password')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            <input type="password" name="new_password" class="form-control" id="new_password" placeholder="N*************#">
                                        </div>
                                        <div class="form-group">
                                            <label for="new_password">Retype New Password:</label>
                                            @error('retype_password')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            <input type="password" name="retype_password" class="form-control" id="retype_password" placeholder="N*************#">
                                        </div>
                                        <div class="form-group">
                                          <input type="submit" class="btn btn-outline-success btn-lg" value="Change Password">
                                        </div>
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