<!DOCTYPE html>
<html lang="en">
	<head>
		@include('blog.partials.head')
	</head>

<body class="main-layout">
@include('blog.partials.header')
@yield('content')
@include('blog.partials.footer')
@include('blog.partials.importjs')
</body>
</html>
