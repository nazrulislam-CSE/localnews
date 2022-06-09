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
              <span class="mr-2"><a href="#">User</a> <i class="fas fa-angle-right"></i></span>
              <span class="mr-2"><a href="#">Users</a></span>
            </div>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">All User</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
  <div class="content">
    <div class="container-fluied">
      <div class="row mt-3">
        <div class="card col-lg-12">
          <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <h3 class="card-title">User List</h3>
                <a href="{{ route('create.user') }}" class="btn btn-primary">Create User</a>
            </div>
          </div>
        </div>
          <div class="col-12 offset-lg-2 col-md-8 offset-md-2">
              <div class="card">
                  <div class="card-body p-0">
                      <table class="table table-bordered table-hover table-striped table-responsive">
                          <tr class="bg-success">
                            
                            <th class="text-white text-center font-weight-bold">Image</th>
                            <th class="text-white text-center font-weight-bold">Name</th>
                            <th class="text-white text-center font-weight-bold">Premission</th>
                            <th class="text-white text-center font-weight-bold">Created_At</th>
                            <th class="text-white text-center font-weight-bold" colspan="2">Action</th>
                          </tr>
                          @foreach($users as $user)
                            <tr>
                              <td>{{ $user->id }}</td>
                              <td><img class="avater" src="{{ asset($user->profile->avater) }}" alt="Profile"></td>
                              <td>{{ $user->name }}</td>
                              <td>
                                @if($user->admin)
                                <a class="btn btn-outline-danger btn-sm" href="{{ route('user.not.admin',['id'=>$user->id]) }}">Remove Premission</a>
                                @else
                                <a class="btn btn-outline-success btn-sm" href="{{ route('user.admin',['id'=>$user->id]) }}">Make Admin</a>
                                @endif
                              </td>
                              <td>{{ $user->created_at->diffForHumans() }}</td>
                              <td>
                                <a href="#" class="btn btn-danger">Edit</a>
                                <a href="{{ route('delete.user',['id'=>$user->id ])}}" class="btn btn-info mt-2">Delete</a>
                              </td>
                            </tr>
                          @endforeach()
                      </table>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer d-flex justify-content-center">
                      
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