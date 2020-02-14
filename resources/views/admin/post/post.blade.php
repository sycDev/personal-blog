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
            <div class="mt-3">
              @if (count($errors) > 0)
                @foreach ($errors->all() as $error)
                  <p class="alert alert-danger">{{ $error }}</p>
                @endforeach
              @endif
            </div>
            <!-- form start -->
            <form role="form" action="{{ route('post.store') }}" method="post">
              {{ csrf_field() }}
              <div class="card-body">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label for="title">Post Title</label>
                      <input type="text" class="form-control" id="title" name="title" placeholder="Enter title">
                    </div>
                    <div class="form-group">
                      <label for="subtitle">Post Sub Title</label>
                      <input type="text" class="form-control" id="subtitle" name="subtitle" placeholder="Enter sub title">
                    </div>
                    <div class="form-group">
                      <label for="slug">Post Slug</label>
                      <input type="text" class="form-control" id="slug" name="slug" placeholder="Enter slug">
                    </div>
                  </div>
  
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label for="exampleInputFile">File input</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="image" name="image">
                          <label class="custom-file-label" for="image">Choose file</label>
                        </div>
                        <div class="input-group-append">
                          <span class="input-group-text" id="">Upload</span>
                        </div>
                      </div>
                    </div>
                    <br>
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="status" name="status">
                      <label class="form-check-label" for="status">Publish</label>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
              <!-- /.card -->
              <div class="card card-outline card-info">
                <div class="card-header">
                  <h3 class="card-title">
                    Write Post Body Here
                  </h3>
                  <!-- tools box -->
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                      <i class="fas fa-minus" style="color: #D3D3D3;"></i></button>
                  </div>
                  <!-- /. tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body pad">
                  <div class="mb-3">
                    <textarea class="textarea" placeholder="Place some text here" name="body" style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                  </div>
                </div>
              </div>
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
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