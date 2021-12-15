<!DOCTYPE html>
<html lang="en">
    <head>
        @include('blog.partials.head')
        @include('blog.partials.head_single')
    </head>
<body class="main-layout">
@include('blog.partials.header')
@yield('content')
@include('blog.partials.footer')
@include('blog.partials.importvendor')
</body>
</html>