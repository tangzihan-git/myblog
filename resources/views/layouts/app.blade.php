<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{csrf_token()}}">
	<title>@yield('title','唐子涵的博客')</title>
	<meta name="description" content="@yield('description', '唐子涵的个人博客')" />
   	<meta name="keywords" content="@yield('keywords','博客，个人博客，个人博客模板')">
    <meta name="author" content="Tang Zi Han,2197486242@qq.com">
    <meta name="robots" content="index,follow">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous\">
	<link rel="stylesheet" type="text/css" href="front/css/base.css">
	<link rel="stylesheet" type="text/css" href="front/css/index.css">
	@yield('styles')
</head>
<body>
	<div id='app'>
		@include('layouts._header')
		<section id='main' class='container'>
			@yield('content')
		</section>
		@include('layouts._footer')
	</div>
<script src="https://cdn.jsdelivr.net/npm/jquery@1.12.4/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script type="text/javascript" src='front/js/index.js'></script>
@yield('scripts')
</body>
</html>