@extends('admin.layouts.layout')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Roles</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Roles</li>
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
                    <h3 class="card-title">Edit Role</h3>
                </div>
                @include('includes.messages')
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('role.update',$role->id) }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('PATCH') }}
                    <div class="card-body">
                        <div class="">
                            <div class="form-group">
                                <label for="name">Role Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Role Name" value="{{ $role->name }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Posts Permisssion</label>
                            <select class="select2" multiple="multiple" data-placeholder="Select a Roles" style="width: 100%;" name="permission[]">
                                @foreach ($permissions as $permission)
                                    @if ($permission->for == 'post')
                                        <option value="{{ $permission->id }}"
                                            @foreach ($role->permissions as $role_permit)
                                                @if ($role_permit->id == $permission->id)
                                                    selected
                                                @endif
                                            @endforeach
                                        >{{ $permission->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>User Permisssion</label>
                            <select class="select2" multiple="multiple" data-placeholder="Select a Roles" style="width: 100%;" name="permission[]">
                                @foreach ($permissions as $permission)
                                    @if ($permission->for == 'user')
                                        <option value="{{ $permission->id }}"
                                            @foreach ($role->permissions as $role_permit)
                                                @if ($role_permit->id == $permission->id)
                                                    selected
                                                @endif
                                            @endforeach
                                        >{{ $permission->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Other Permisssion</label>
                            <select class="select2" multiple="multiple" data-placeholder="Select a Roles" style="width: 100%;" name="permission[]">
                                @foreach ($permissions as $permission)
                                    @if ($permission->for == 'other')
                                        <option value="{{ $permission->id }}"
                                            @foreach ($role->permissions as $role_permit)
                                                @if ($role_permit->id == $permission->id)
                                                    selected
                                                @endif
                                            @endforeach
                                        >{{ $permission->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group"  align="center">
                            <button type="submit" class="btn btn-primary" style="margin-right: 50px">Submit</button>
                            <a href="{{ route('role.index') }}" class="btn btn-warning">Back</a>
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
