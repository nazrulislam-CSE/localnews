@extends('layouts.app2')
@section('category') active @endsection
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header bg-light shadow-sm">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
             <div class="d-flex">
              <span class="mr-2"><a href="{{ route('dashboard')}}">Dashboard</a> <i class="fas fa-angle-right"></i></span>
              <span class="mr-2"><a href="#">Category</a> <i class="fas fa-angle-right"></i></span>
              <span class="mr-2"><a href="#">Categories</a></span>
            </div>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">All Category</li>
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
                <h3 class="card-title">Category List</h3>
                <a href="{{ route('create.category') }}" class="btn btn-primary">Create Category</a>
            </div>
          </div>
        </div>
          <div class="col-12 offset-lg-2 col-md-8 offset-md-2">
              <div class="card">
                  <div class="card-body p-0">
                      <table class="table table-bordered table-hover table-striped">
                          <tr class="bg-success">
                            <th class="text-white text-center font-weight-bold">Id</th>
                            <th class="text-white text-center font-weight-bold">Category Name</th>
                            <th class="text-white text-center font-weight-bold">Location Category</th>
                            <th class="text-white text-center font-weight-bold">Status</th>
                            <th class="text-white text-center font-weight-bold">Created_At</th>
                            <th class="text-white text-center font-weight-bold" colspan="2">Action</th>
                          </tr>
                          @foreach($categories as $category)
                            <tr>
                              <td>{{ $category->id }}</td>
                              <td>{{ $category->name }}</td>
                              <td>{{ $category->location_category}}</td>
                              <td>
                                @if($category->status == 1)
                                  <a href="{{ route('category.in_active',['id'=>$category->id]) }}" class="btn btn-success btn-sm">Active</a>
                                @else
                                  <a href="{{ route('category.active',['id'=>$category->id]) }}" class="btn btn-danger btn-sm">Inactive</a>
                                @endif
                              </td>
                              <td>{{ $category->created_at->diffForHumans() }}</td>
                              <td>
                                <a href="{{ route('edit.category',['id'=>$category->id]) }}" class="btn btn-primary btn-sm" id="fa"><i class="fas fa-edit"></i></a>

                                <a href="#" class="btn btn-danger btn-sm" id="fa_a" data-toggle="modal" data-target="#modal-primary{{ $category->id }}"><i class="fas  fa-trash"></i></a>
                                <!-- start modal -->
                                <div class="modal fade" id="modal-primary{{ $category->id }}">
                                  <div class="modal-dialog">
                                    <div class="modal-content bg-primary">
                                      <div class="modal-header">
                                        <h4 class="modal-title">Category</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body bg-light">
                                        <p>Are you sure category parmanently deleted?</p>
                                      </div>
                                      <div class="modal-footer justify-content-between bg-light">
                                        <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                                        <a type="button" href="{{ route('delete.category',['id'=>$category->id]) }}" class="btn btn-primary"><i style="margin-right: 5px; color: white;" class="fas  fa-trash"></i><span class="text-light">OK</span></a>
                                      </div>
                                    </div>
                                    <!-- /.modal-content -->
                                  </div>
                                </div>
                                <!-- end modal -->
                              </td>
                            </tr>
                          @endforeach
                      </table>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer d-flex justify-content-center">
                    {{ $categories->links() }}
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