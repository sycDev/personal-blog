@extends('admin/layouts/app')

@section('headSection')
<!-- Datatables -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">
@endsection

@section('main-content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Users</h1>
                </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Users</li>
                </ol>
            </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title"></h3>
                <a class="offset-lg-5 btn btn-success" href="{{ route('user.create') }}">Add New</a>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            @include('includes.messages')
            <div class="card-body">
                <div class="card">
                    <div class="card-body">
                      <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th>S.No</th>
                          <th>User Name</th>
                          <th>Assigned Roles</th>
                          <th>Status</th>
                          <th>Edit</th>
                          <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                          @foreach ($users as $user)
                          <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $user->name }}</td>
                            <td>
                              @foreach ($user->roles as $role)
                                  {{ $role->name }},
                              @endforeach
                            </td>
                            <td>{{ $user->status ? 'Active' : 'Inactive' }}</td>
                            <td><a href="{{ route('user.edit', $user->id) }}"><i class="far fa-edit"></i></a></td>
                            <td>
                                <form id="delete-form-{{ $user->id }}" action="{{ route('user.destroy', $user->id) }}" method="post" style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            <a href="{{ route('user.index') }}" 
                            onclick="if(confirm('Are you sure you want to delete this?')){ 
                                event.preventDefault();
                                document.getElementById('delete-form-{{ $user->id }}').submit();
                            }else{
                                event.preventDefault();
                            }"><i class="far fa-trash-alt"></i></a>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                          <th>S.No</th>
                          <th>User Name</th>
                          <th>Assigned Roles</th>
                          <th>Status</th>
                          <th>Edit</th>
                          <th>Delete</th>
                        </tr>
                        </tfoot>
                      </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
            Footer
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection

@section('footerSection')
<!-- Datatables -->
<script src="{{ asset('admin/plugins/datatables/jquery.dataTables.js') }}"></script>
<script src="{{ asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
@endsection