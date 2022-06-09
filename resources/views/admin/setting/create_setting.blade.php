@extends('layouts.app2')
@section('setting') active @endsection
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header bg-light shadow-sm">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <div class="d-flex">
              <span class="mr-2"><a href="{{ route('dashboard')}}">Dashboard</a> <i class="fas fa-angle-right"></i></span>
              <span class="mr-2"><a href="#">Settings</a> <i class="fas fa-angle-right"></i></span>
              <span class="mr-2"><a href="#">Add New SiteInfo</a></span>
            </div>
          </div><!-- /.col -->

          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Setting</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content mt-3">
        <div class="container-fluied">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <h3 class="card-title">Create Site Info</h3>
                                <a href="{{ route('all.setting') }}" class="btn btn-primary">Go Back to Site Info List</a>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="row">
                                <div class="col-12 col-lg-8 offset-lg-2 col-md-8 offset-md-2">
                                    <form action="{{ route('store.setting') }}" method="post" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="image">Site Logo:</label>
                                                @error('logo')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                                <div class="custom-file">
                                                    <label class="custom-file-label" for="image">Choose file</label>
                                                    <input type="file" name="logo" class="custom-file-input" id="image">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="site">Site Name:</label>
                                                @error('site_name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                                <input type="text" name="site_name" id="site" class="form-control" placeholder="Enter the site name..." >
                                            </div>
                                            <div class="form-group">
                                                <label for="ownership">Ownership:</label>
                                                @error('ownership')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                                <input type="text" name="ownership" id="ownership" class="form-control" placeholder="Enter the ownership name..." >
                                            </div>
                                            <div class="form-group">
                                                <label for="address">Address:</label>
                                                @error('address')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                                <input type="text" name="address" id="address" class="form-control" placeholder="Enter the site address..." >
                                            </div>
                                            <div class="form-group">
                                                <label for="contact">Contact No:</label>
                                                @error('contact')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                                <input type="number" name="contact" id="contact" class="form-control" placeholder="Enter the site contact no..." >
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Website Email:</label>
                                                @error('site_email')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                                <input type="email" name="site_email" id="email" class="form-control" placeholder="Enter the site email..." >
                                            </div>
                                            <div class="form-group">
                                                <label for="copyright">Copyright Text:</label>
                                                @error('copyright')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                                <input type="text" name="copyright" id="copyright" class="form-control" placeholder="Enter the copy right text..." >
                                            </div>
                                            <div class="form-group">
                                                <label for="about">About:</label>
                                                @error('about')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                                <textarea name="about" id="about" rows="4" class="form-control"
                                                    placeholder="Some text here"></textarea>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <input type="submit" value="Create Now" class="btn btn-outline-primary btn-lg">
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