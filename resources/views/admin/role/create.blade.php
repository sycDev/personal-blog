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
            <form role="form" action="{{ route('role.store') }}" method="post">
              @csrf
              <div class="card-body">
                <div class="form-group">
                    <label for="name">Role Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter role name" value="{{ old('name') }}">
                </div>
                <div class="row">
                  <div class="col-lg-4">
                    <label for="">Posts Permission</label>
                    @foreach ($permissions as $permission)
                        @if ($permission->for == 'post')
                          <div class="checkbox">
                            <label><input type="checkbox" name="permission[]" value="{{ $permission->id }}"> {{ $permission->name }}</label>
                          </div>
                        @endif
                    @endforeach
                  </div>
                  <div class="col-lg-4">
                    <label for="">User Permission</label>
                    @foreach ($permissions as $permission)
                        @if ($permission->for == 'user')
                          <div class="checkbox">
                            <label><input type="checkbox" name="permission[]" value="{{ $permission->id }}"> {{ $permission->name }}</label>
                          </div>
                        @endif
                    @endforeach
                  </div>
                  <div class="col-lg-4">
                    <label for="">Other Permission</label>
                    @foreach ($permissions as $permission)
                        @if ($permission->for == 'other')
                          <div class="checkbox">
                            <label><input type="checkbox" name="permission[]" value="{{ $permission->id }}"> {{ $permission->name }}</label>
                          </div>
                        @endif
                    @endforeach
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
              <!-- /.card -->
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('role.index') }}" class="btn btn-warning">Back</a>
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