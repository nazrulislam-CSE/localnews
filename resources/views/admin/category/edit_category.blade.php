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
              <span class="mr-2"><a href="{{ route('all.category') }}">Categories</a> <i class="fas fa-angle-right"></i></span>
              <span class="mr-2"><a href="#">Edit Category</a></span>
            </div>
          </div><!-- /.col -->

          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Category</li>
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
                            <h3 class="card-title">Edit Category</h3>
                            <a href="{{ route('all.category') }}" class="btn btn-primary">Go Back to Category List</a>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-12 col-lg-6 offset-lg-3 col-md-8 offset-md-2">
                              <form action="{{ route('update.category',['id'=>$category->id]) }}" method="post">
                                {{ csrf_field() }}
                                <div class="form-group">
                                  <label for="name">Category Name:</label>
                                  @error('category')
                                    <span class="text-danger">{{ $message }}</span>
                                  @enderror
                                  <input type="text" class="form-control p-3" name="category" id="name" value="{{ $category->name }}" placeholder="type category name here">
                                </div>
                                <div class="form-group">
                                  <label for="">Please Select one:</label>
                                  @error('radio')
                                    <span class="text-danger">{{ $message }}</span>
                                  @enderror
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="radio" id="flexRadioDefault1" value="1" 
                                    @if($category->location_category == 1)
                                      checked
                                    @endif>
                                    <label class="form-check-label" for="flexRadioDefault1">
                                      <i>goes top header menu</i>
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="radio" id="flexRadioDefault2" value="2"
                                    @if( $category->location_category == 2 )
                                      checked
                                    @endif>
                                    <label class="form-check-label" for="flexRadioDefault2">
                                      <i>goes main menu</i>
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="radio" id="flexRadioDefault3" value="3"
                                    @if( $category->location_category == 3 )
                                      checked
                                    @endif>
                                    <label class="form-check-label" for="flexRadioDefault3">
                                      <i>goes footer menu</i>
                                    </label>
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