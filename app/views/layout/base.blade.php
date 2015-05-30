<!DOCTYPE html>
<html>
<head>
	<title></title>

	<!-- Latest compiled and minified CSS -->
	{{HTML::style('css/bootstrap.css')}}
	{{HTML::style('css/main.css')}}
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<!-- Optional theme -->
	{{HTML::style('css/bootstrap-theme.min.css')}}
	<!-- Latest compiled and minified JavaScript -->
	{{HTML::script('js/jquery-1.11.0.js')}}
	{{HTML::script('js/bootstrap.min.js')}}
	
</head>
<body>
	@include('layout.header')
	@yield('content')
	@include('layout.footer')
</body>
</html>