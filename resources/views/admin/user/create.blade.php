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
            <form role="form" action="{{ route('user.store') }}" method="post">
              @csrf
              <div class="card-body">
                <div class="form-group">
                    <label for="name">User Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter user name" value="{{ old('name') }}">
                </div>
                <div class="form-group">
                    <label for="email">User Email</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Enter email"  value="{{ old('email') }}">
                </div>
                <div class="form-group">
                  <label for="password">User Password</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Enter password"  value="{{ old('password') }}">
                </div>
                <div class="form-group">
                  <label for="comfirm_pass">Confirm Password</label>
                  <input type="password" class="form-control" id="comfirm_pass" name="comfirm_pass" placeholder="Confirm your password"  value="{{ old('comfirm_pass') }}">
                </div>
                <div class="form-group">
                  <label for="role">Assign Role</label>
                  <div class="row">
                    @foreach ($roles as $role)
                      <div class="col-lg-3">
                        <div class="checkbox">
                          <label><input type="checkbox" name="role[]" value="{{ $role->id }}"> {{ $role->name }}</label>
                        </div>
                      </div>
                    @endforeach
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
              <!-- /.card -->
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('user.index') }}" class="btn btn-warning">Back</a>
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