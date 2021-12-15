<!DOCTYPE html>
<html lang="en">
<head>
  @include('admin.partials.head')
  @include('includes.csstables')
  @include('includes.cssmultiple')
  
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <!--
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{ asset('admin/dist/img/AdminLTELogo.png') }}" alt="AdminLTELogo" height="60" width="60">
  </div>
-->

  <!-- Navbar -->
  <!-- Có thể hiểu tạm là thanh menu chính (có home contact)-->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
  @include('admin.partials.navbar_left')
  @include('admin.partials.navbar_right')
  </nav> 
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <!--Phần menu bên trái-->
  @include('admin.partials.sidebar')
  <!-- /.Main Sidebar Container-->

  <!-- Content Wrapper. Contains page content -->
  <!-- Phần nội dung chính của trang-->

    <!-- Content Header (Page header) (if need)-->
    
    <!-- /.content-header -->
    @section('content')
      @show

  <!-- /.content-wrapper -->
  @include('admin.partials.footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
@include('admin.partials.importjs')
@include('includes.jstables')
@include('includes.jsform')
@include('includes.jsmultiple')

</body>
</html>
