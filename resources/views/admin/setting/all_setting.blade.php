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
              <span class="mr-2"><a href="#">Setting</a> <i class="fas fa-angle-right"></i></span>
              <span class="mr-2"><a href="{{ route('all.setting') }}">All Setting</a></span>
            </div>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">All Setting</li>
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
                <h3 class="card-title">Setting List</h3>
                <a href="{{ route('create.setting') }}" class="btn btn-primary">Create Setting</a>
            </div>
          </div>
        </div>
          <div class="col-lg-12">
              <div class="card">
                  <div class="card-body p-0">
                      <table class="table table-bordered table-striped table-responsive">
                          <tr class="bg-success">
                            <th class="text-white text-center font-weight-bold">Id</th>
                            <th class="text-white text-center font-weight-bold">Logo</th>
                            <th class="text-white text-center font-weight-bold">Site Name</th>
                            <th class="text-white text-center font-weight-bold">Ownership</th>
                            <th class="text-white text-center font-weight-bold">About</th>
                            <th class="text-white text-center font-weight-bold">Address</th>
                            <th class="text-white text-center font-weight-bold">Contact No</th>
                            <th class="text-white text-center font-weight-bold">Website Email</th>
                            <th class="text-white text-center font-weight-bold" colspan="2">Action</th>
                          </tr>
                          @foreach($settings as $setting)
                            <tr>
                              <td>{{ $setting->id }}</td>
                              <td><img src="{{ asset($setting->logo) }}" alt=""></td>
                              <td>{{ $setting->sitename }}</td>
                              <td>{{ $setting->ownership }}</td>
                              <td>
                                <?php $des =  strip_tags(html_entity_decode($setting->about_site))?>
                                {{ Str::limit($des, $limit = 20, $end = '. . .') }}
                                <button type="button" class="btn btn-circle btn-danger btn-sm" style="display: block;" data-toggle="modal" data-target="#viewModal{{ $setting->id }}">
                                <i class="fa fa-hand-pointer-o" aria-hidden="true"></i> Details
                                </button>
                                <!-- Modal Code -->
                                <!-- Scrollable modal -->
                                <div class="modal fade" id="viewModal{{ $setting->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable text-left">
                                      <div class="modal-content">
                                        <div class="modal-body">
                                          <p>
                                            <span id="myModal-title">About Site:</span>
                                          <p>
                                          <p>{!! $setting->about_site !!}</p>
                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Close</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <!--  Modal body end here  -->
                              </td>
                              <td>{{ $setting->site_address }}</td>
                              <td>{{ $setting->site_contact_no }}</td>
                              <td>{{ $setting->site_email }}</td>
                              <td>
                                <a href="{{ route('edit.setting',['id'=>$setting->id]) }}" class="btn btn-primary btn-sm mt-2" id="fa"><i class="fas fa-edit"></i></a>

                                <a href="#" class="btn btn-danger btn-sm rounded-circle offset-1 mt-2" id="fa_a" data-toggle="modal" data-target="#modal-primary{{ $setting->id }}"><i class="fas  fa-trash"></i></a>

                                <!-- start modal -->
                                <div class="modal fade" id="modal-primary{{ $setting->id }}">
                                  <div class="modal-dialog">
                                    <div class="modal-content bg-primary">
                                      <div class="modal-header">
                                        <h4 class="modal-title">Setting</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body bg-light">
                                        <p>Are you sure setting information deleted?</p>
                                      </div>
                                      <div class="modal-footer justify-content-between bg-light">
                                        <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                                        <a type="button" href="{{ route('delete.setting',['id'=>$setting->id]) }}" class="btn btn-primary"><i style="margin-right: 5px; color: white;" class="fas  fa-trash"></i><span class="text-light">OK</span></a>
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