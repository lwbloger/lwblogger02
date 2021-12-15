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
              <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
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
                <h2 class="col-lg-2" style="float: left">Title</h2>
                @can('posts.create', Auth::user())
                    <a href="{{ route('post.create') }}" class="btn btn-success">Add New</a>
                @endcan
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
                    <th>Title</th>
                    <th>Sub Title</th>
                    <th>Slug</th>
                    <th>Create At</th>
                    @can('posts.update', Auth::user())
                    <th>Edit</th>
                    @endcan
                    @can('posts.delete', Auth::user())
                    <th>Delete</th>
                    @endcan
                  </tr>
                  </thead>
                  <tbody>
                  @foreach ($posts as $post)
                    <tr>
                      <td>{{ $loop->index +1 }}</td>
                      <td>{{ $post->title }}</td>
                      <td>{{ $post->subtitle }}</td>
                      <td>{{ $post->slug }}</td>
                      <td>{{ $post->created_at }}</td>
                      @can('posts.update', Auth::user())
                        <td><a href="{{ route('post.edit',$post->id) }}"><i class="far fa-edit"></i></a></td>
                      @endcan
                      @can('posts.delete', Auth::user())
                        <td>
                            <form id="delete-form-{{ $post->id }}" method="post" action="{{ route('post.destroy',$post->id) }}" style="display: none">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            </form>
                            <a href="" onclick="
                            if(confirm('Are you sure, You Want to delete this?'))
                                {
                                event.preventDefault();
                                document.getElementById('delete-form-{{ $post->id }}').submit();
                                }
                                else{
                                event.preventDefault();
                                }" ><i class="fas fa-trash-alt"></i></a>
                        </td>
                      @endcan
                    </tr>
                  @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>S.No</th>
                    <th>Title</th>
                    <th>Sub Title</th>
                    <th>Slug</th>
                    <th>Create At</th>
                    @can('posts.update', Auth::user())
                    <td>Edit</td>
                    @endcan
                    @can('posts.delete', Auth::user())
                    <td>Delete</td>
                    @endcan
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
@endsection
