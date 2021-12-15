@extends('admin.layouts.layout')

@section('content')

<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>

            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <header class="container-fluid">
        <h3>Hi there!</h3>
        <p>This is Admin page</p>
        <p>Copyright &copy; 2021-{{ Carbon\carbon::now()->year }} by <a href="https://fb.com/LoneWolf1604">LoneWolf1604</a>!</p>
    </header>

</div>
@endsection
