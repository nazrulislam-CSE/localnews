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
              <span class="mr-2"><a href="{{ route('all.post') }}">Posts</a> <i class="fas fa-angle-right"></i></span>
              <span class="mr-2"><a href="#">Update Post</a></span>
            </div>
          </div><!-- /.col -->

          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Update Post</li>
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
                                <h3 class="card-title">Edit Post <a href="{{ route('post.single',['slug'=>$post->slug]) }}" class="btn btn-success">View Post</a></h3>
                                <a href="{{ route('all.post') }}" class="btn btn-primary">Go Back to Post List</a>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="row">
                                <div class="col-12 col-lg-8 offset-lg-2 col-md-8 offset-md-2">
                                    <form action="{{ route('update.post',['id'=>$post->id]) }}" method="post" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="title">Post title:</label>
                                                @error('title')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                                <input type="text" name="title" class="form-control" value="{{ $post->title }}" placeholder="Enter the title" >
                                            </div>
                                            <div class="form-group">
                                                <label for="category">Category_Id:</label>
                                                @error('category_id')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                                <select name="category_id"  id="category" class="form-control">
                                                    @foreach($categories as $category)
                                                   <option value="{{ $category->id }}" 
                                                    @if($post->category_id == $category->id)
                                                        selected
                                                    @endif>{{ $category->name }}</option>
                                                   @endforeach
                                                </select>
                                            </div>

                                             <div class="form-group">
                                                <div class="container">
                                                    <div class="row mb-2">
                                                        <label for="image">Featured Image:</label>
                                                        <div class="col-md-12">
                                                            <img id="showImage" src="{{ asset($post->featured) }}" class="user_img" alt="" style="width: 120px; height: 120px;">
                                                            @error('featured')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                            <div class="custom-file">
                                                                <input type="file" name="featured" class="form-control-file border mt-3 mb-3" id="image">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group" style="margin-top: 30px;">
                                                <label>Choose Post Tags:</label>
                                                @error('tags')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                                <div class="tag_scroll">
                                                    @foreach($tags as $tag)
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="tags[]" value="{{ $tag->id }}"
                                                            @foreach($post->tags as $t)
                                                                @if($tag->id == $t->id)
                                                                    checked
                                                                @endif
                                                            @endforeach > {{ $tag->name }}
                                                        </label>
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="content">Content:</label>
                                                @error('content')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                                <textarea name="content" id="content" rows="4" class="form-control"
                                                    placeholder="Enter description" value="{{ old($post->content )}}">{{ $post->content }}</textarea>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <input type="submit" value="Update Post" class="btn btn-outline-primary btn-lg">
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