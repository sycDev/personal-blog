@extends('admin.layouts.app')

@section('main-content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Text Editors</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Text Editors</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Titles</h3>
            </div>
            <!-- /.card-header -->
            @include('includes.messages')
            <!-- form start -->
            <form role="form" action="{{ route('permission.store') }}" method="post">
              @csrf
              <div class="card-body">
                <div class="form-group">
                    <label for="name">Permission Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter permission name" value="{{ old('name') }}">
                </div>
                <div class="form-group">
                    <label for="for">Permission For</label>
                    <select class="form-control" name="for" id="for">
                      <option selected disabled>Select permission for</option>
                      <option value="user">User</option>
                      <option value="post">Post</option>
                      <option value="other">Other</option>
                    </select>
                </div>
              </div>
              <!-- /.card-body -->
              <!-- /.card -->
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('permission.index') }}" class="btn btn-warning">Back</a>
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