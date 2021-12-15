@extends('admin.layouts.layout')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Post Edit</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
                        <li class="breadcrumb-item active">Post Edit</li>
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
                @include('includes.messages')
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" action="{{ route('post.update',$post->id) }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PATCH') }}
                    <div class="card-body row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="title">Post Title</label>
                                <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="{{ $post->title }}">
                            </div>
                            <div class="form-group">
                                <label for="subtitle">Post Sub Title</label>
                                <input type="text" class="form-control" id="subtitle" name="subtitle" placeholder="Sub Title" value="{{ $post->subtitle }}">
                            </div>
                            <div class="form-group">
                                <label for="slug">Post Slug</label>
                                <input type="text" class="form-control" id="slug" name="slug" placeholder="Slug" value="{{ $post->slug }}">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-9 pull-left">
                                        <label for="image">File input</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="image" name="image">
                                                <label class="custom-file-label" for="exampleInputFile">File Input</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text">Upload</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-check pull-right col-lg-1" style="margin-left: 5px">
                                        <div class="custom-file"></div>
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1" name="status" @if ($post->status == 1)
                                            checked
                                        @endif value="1">
                                        <label class="form-check-label" for="exampleCheck1">Publis</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Select Tags</label>
                                <select class="select2" multiple="multiple" data-placeholder="Select a State" style="width: 100%;" name="tags[]">
                                    @foreach ($tags as $tag)
                                        <option value="{{ $tag->id }}"
                                            @foreach ($post->tags as $postTag)
                                                @if ($postTag->id == $tag->id)
                                                    selected
                                                @endif
                                            @endforeach
                                        >{{ $tag->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Select Categories</label>
                                <select class="select2" multiple="multiple" data-placeholder="Select a State" style="width: 100%;" name="categories[]">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"
                                            @foreach ($post->categories as $postCategory)
                                                @if ($postCategory->id == $category->id)
                                                    selected
                                                @endif
                                            @endforeach
                                        >{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>

                    </div>
                    <!-- /.card-body -->
                    <div class="card card-outline card-info">
                        <div class="card-header">
                            <h3 class="card-title">
                                Write Your Blog Here
                            </h3>
                            <!--
                            <div class="pull-right box-tools">
                                <button type="botton" class=" btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                                    <i class="fa fa-minus"></i>
                                </button>
                            </div>
                            -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <textarea id="summernote" name="body">
                                {{ $post->body }}
                            </textarea>
                        </div>
                    </div>

                    <div class="card-footer" align="center">
                            <button type="submit" class="btn btn-primary" style="margin-right: 50px">Submit</button>
                            <a href="{{ route('post.index') }}" class="btn btn-warning">Back</a>
                    </div>
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
