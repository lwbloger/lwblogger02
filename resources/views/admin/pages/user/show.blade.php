@extends('admin.layouts.layout')

@section('content')
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>DataTables</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">DataTables</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h2 class="col-lg-2" style="float: left">Users</h2>
              <a href="{{ route('user.create') }}" class=" btn btn-success">Add New</a>
              @include('includes.messages')
            </div>
            <div class="card-header">
              <h3 class="card-title">DataTable with default features</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>S.No</th>
                  <th>User Name</th>
                  <th>Assign Roles</th>
                  <th>Status</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($users as $user)
                <tr>
                  <td>{{ $loop->index +1 }}</td>
                  <td>{{ $user->name }}</td>
                  <td>
                      @foreach ($user->roles as $role)
                          {{ $role->name}} |
                      @endforeach
                  </td>
                  <td>{{ $user->status? 'Active' : 'Not Active' }}</td>
                  <td><a href="{{ route('user.edit',$user->id) }}"><i class="far fa-edit"></i></a></td>
                      <td>
                        <form id="delete-form-{{ $user->id }}" method="post" action="{{ route('user.destroy',$user->id) }}" style="display: none">
                          {{ csrf_field() }}
                          {{ method_field('DELETE') }}
                        </form>
                        <a href="" onclick="
                        if(confirm('Are you sure, You Want to delete this?'))
                            {
                              event.preventDefault();
                              document.getElementById('delete-form-{{ $user->id }}').submit();
                            }
                            else{
                              event.preventDefault();
                            }" ><i class="fas fa-trash-alt"></i></a>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>S.No</th>
                    <th>User Name</th>
                    <th>Assign Roles</th>
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
        <!-- /.col -->
      </div>
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
