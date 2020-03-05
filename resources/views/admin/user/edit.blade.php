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
              <li class="breadcrumb-item"><a href="/admin/home">Home</a></li>
              <li class="breadcrumb-item">Users</li>
              <li class="breadcrumb-item active">Edit User</li>
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
              <h3 class="card-title">Edit User</h3>
            </div>
            <!-- /.card-header -->
            @include('includes.messages')
            <!-- form start -->
            <form role="form" action="{{ route('user.update', $user->id) }}" method="post">
              @csrf
              @method('PUT')
              <div class="card-body">
                <div class="form-group">
                  <label for="name">User Name</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Enter user name" value="@if (old('name')) {{ old('name') }} @else {{ $user->name }} @endif">
                </div>
                <div class="form-group">
                  <label for="email">User Email</label>
                  <input type="text" class="form-control" id="email" name="email" placeholder="Enter email" value="@if (old('email')) {{ old('email') }} @else {{ $user->email }} @endif">
                </div>
                <div class="form-group">
                  <label for="phone">User Phone</label>
                  <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter phone" value="@if (old('phone')) {{ old('phone') }} @else {{ $user->phone }} @endif">
                </div>
                <div class="form-group">
                  <label for="status">Status</label>
                  <div class="checkbox">
                    <label><input type="checkbox" name="status" value="1" @if (old('status') == 1 || $user->status == 1)
                        checked
                    @endif> Status</label>
                  </div>
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