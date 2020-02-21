@extends('admin.layouts.app')

@section('headSection')
<!-- Select2 -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/select2/css/select2.min.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
@endsection

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
            <form role="form" action="{{ route('post.store') }}" method="post">
              @csrf
              <div class="card-body">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label for="title">Post Title</label>
                      <input type="text" class="form-control" id="title" name="title" placeholder="Enter title" value="{{ old('title') }}">
                    </div>
                    <div class="form-group">
                      <label for="subtitle">Post Sub Title</label>
                      <input type="text" class="form-control" id="subtitle" name="subtitle" placeholder="Enter sub title" value="{{ old('subtitle') }}">
                    </div>
                    <div class="form-group">
                      <label for="slug">Post Slug</label>
                      <input type="text" class="form-control" id="slug" name="slug" placeholder="Enter slug" value="{{ old('slug') }}">
                    </div>
                  </div>
  
                  <div class="col-lg-6">
                    <div class="form-group">
                      <div class="float-right">
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
                    </div>
                    <br>
                    
                    <div class="form-check float-left">
                      <input type="checkbox" class="form-check-input" id="status" name="status" value="1">
                      <label class="form-check-label" for="status">Publish</label>
                    </div>

                    <div class="form-group" style="margin-top: 46px">
                      <label>Select Tags</label>
                      <select class="select2" multiple="multiple" data-placeholder="Select a State" style="width: 100%;" name="tags[]">
                        @foreach ($tags as $tag)
                            <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                        @endforeach
                      </select>
                    </div>

                    <div class="form-group" style="margin-top: 8px">
                      <label>Select Category</label>
                      <select class="select2" multiple="multiple" data-placeholder="Select a State" style="width: 100%;" name="categories[]">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                      </select>
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
                <a href="{{ route('post.index') }}" class="btn btn-warning">Back</a>
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

@section('footerSection')
<!-- Select2 -->
<script src="{{ asset('admin/plugins/select2/js/select2.full.min.js') }}"></script>
<script>
  $(document).ready(function(){
    //Initialize Select2 Elements
    $('.select2').select2();

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    });

    // Summernote
    $('.textarea').summernote()
  })
</script>
@endsection