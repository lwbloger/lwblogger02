@extends('admin.layouts.layout')

@section('content')

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
                        <li class="breadcrumb-item active">Add Admin</li>
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
                    <h3 class="card-title">Add Admin</h3>
                </div>
                @include('includes.messages')
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('user.update',$user->id) }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div class="card-body">
                        <div class="">
                            <div class="form-group">
                                <label for="name">User Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="User Name" value="{{ $user->name }}">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="{{ $user->email }}">
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone" value="{{ $user->phone }}">
                            </div>
                            <!-- Lấy cái bên dưới bỏ vô phần forgot password
                                --
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label for="confirm_password">Confirm Password</label>
                                <input type="password" class="form-control" id="confirm_password" name="password_confirmation" placeholder="Confirm Password">
                            </div>
                            -->
                            <div class="checkbox">
                                <label for="">
                                    <label ><input type="checkbox" name="status"
                                        @if (old('status')==1 || $user->status == 1)
                                            checked
                                        @endif value="1">Status</label>
                                    Status
                                </label>
                            </div>

                            <div class="form-group">
                                <label>Select Roles</label>
                                <select class="select2" multiple="multiple" data-placeholder="Select a Roles" style="width: 100%;" name="role[]">
                                    @foreach ($roles as $role)
                                        <option value="{{ $role->id }}"
                                            @foreach ($user->roles as $user_role)
                                                @if ($user_role->id == $role->id)
                                                    selected
                                                @endif
                                            @endforeach
                                        >{{ $role->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>
                        <div class="form-group"  align="center">
                            <button type="submit" class="btn btn-primary" style="margin-right: 50px">Submit</button>
                            <a href="{{ route('user.index') }}" class="btn btn-warning">Back</a>
                        </div>
                    </div>
                    <!-- /.card-body -->


                </form>
                </div>
                <!-- /.card -->


            </div>
            <!-- /.col-->
        </div>
        <!-- ./row -->

        <!-- ./row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->


@endsection
