<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="/source/image/product/logo.jpg" type="image/x-icon">
	@yield('css')
</head>
<body>

	@include('layouts.head')
	@yield('content')
	@include('layouts.footer')
	<!--customjs-->
	@yield('js')
</body>
</html>
