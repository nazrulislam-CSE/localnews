@extends('layouts.app2')
@section('post') active @endsection
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header bg-light shadow-sm">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
             <div class="d-flex">
              <span class="mr-2"><a href="{{ route('dashboard')}}">Dashboard</a> <i class="fas fa-angle-right"></i></span>
              <span class="mr-2"><a href="#">Post</a> <i class="fas fa-angle-right"></i></span>
              <span class="mr-2"><a href="#">All Post</a></span>
            </div>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">All Post</li>
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
                <h3 class="card-title">Post List</h3>
                <a href="{{ route('create.post') }}" class="btn btn-primary">Create Post</a>
            </div>
          </div>
        </div>
          <div class="col-lg-12">
              <div class="card">
                  <div class="card-body p-0">
                    @if($posts->count() > 0)
                      <table class="table table-bordered table-hover table-striped table-responsive">
                          <tr class="bg-success">
                            <th class="text-white text-center font-weight-bold">Id</th>
                            <th class="text-white text-center font-weight-bold">Featured Image</th>
                            <th class="text-white text-center font-weight-bold">Title</th>
                            <th class="text-white text-center font-weight-bold">Slug</th>
                            <th class="text-white text-center font-weight-bold">Content</th>
                            <th class="text-white text-center font-weight-bold">Category_Id</th>
                            <th class="text-white text-center font-weight-bold">Category_Name</th>
                            <th class="text-white text-center font-weight-bold" colspan="2">Action</th>
                          </tr>
                          @foreach($posts as $post)
                            <tr>
                              <td>{{ $post->id }}</td>
                              <td><img src="{{ asset($post->featured) }}" alt="image" class="post_img"></td>
                              <td>{{ $post->title }}</td>
                              <td>{{ $post->slug }}</td>
                              <td> 
                                <?php $des =  strip_tags(html_entity_decode($post->content))?>
                                {{ Str::limit($des, $limit = 30, $end = '. . .') }}
                                <button type="button" class="btn btn-circle btn-danger btn-sm" style="display: block;" data-toggle="modal" data-target="#viewModal{{ $post->id }}">
                                <i class="fa fa-hand-pointer-o" aria-hidden="true"></i> Details
                                </button>
                                <!-- Modal Code -->
                                <!-- Scrollable modal -->
                                <div class="modal fade" id="viewModal{{ $post->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable text-left">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h4 class="modal-title text-center" id="myModalLabel">{{ $post->title }}</h4>
                                          <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Close</button>
                                        </div>
                                        <div class="modal-body">
                                          <p>
                                            <span id="myModal-title"></span>
                                          <p>
                                          <p>{!! $post->content !!}</p>
                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Close</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <!--  Modal body end here  -->
                                </div>
                                </div>
                              </td>
                              <td>{{ $post->category_id }}</td>
                              <td>{{ $post->category->name }}</td>
                              <td>
                                <a href="{{ route('edit.post',['id'=>$post->id]) }}" class="btn btn-primary btn-sm mt-2" id="fa"><i class="fas fa-edit"></i></a>

                                <a href="#" class="btn btn-danger btn-sm rounded-circle offset-1 mt-2" id="fa_a" data-toggle="modal" data-target="#modal-primary{{ $post->id }}"><i class="fas  fa-trash"></i></a>
                                <!-- start modal -->
                                <div class="modal fade" id="modal-primary{{ $post->id }}">
                                  <div class="modal-dialog">
                                    <div class="modal-content bg-primary">
                                      <div class="modal-header">
                                        <h4 class="modal-title">Post</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body bg-light">
                                        <p>Are you sure post moved to trashed?</p>
                                      </div>
                                      <div class="modal-footer justify-content-between bg-light">
                                        <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                                        <a type="button" href="{{ route('trash.post',['id'=>$post->id]) }}" class="btn btn-primary"><i style="margin-right: 5px; color: white;" class="fas  fa-trash"></i><span class="text-light">OK</span></a>
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
                    @else
                      <span class="post_show">There Are No Post Yet.</span>
                    @endif
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer d-flex justify-content-center">
                    {{ $posts->links() }}
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