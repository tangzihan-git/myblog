<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="/admin/css/admin.css">
    <title>后台登录</title>
  </head>
<body>
<div class='box'>
	<form action="{{url('/login')}}" method="post">
		@csrf
		<h1>博客后台管理系统</h1>
		<p><label><svg class="bi bi-person" width="50px" height="50px" viewBox="0 0 16 16" fill="#ccc" xmlns="http://www.w3.org/2000/svg">
	  <path fill-rule="evenodd" d="M13 14s1 0 1-1-1-4-6-4-6 3-6 4 1 1 1 1h10zm-9.995-.944v-.002.002zM3.022 13h9.956a.274.274 0 0 0 .014-.002l.008-.002c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664a1.05 1.05 0 0 0 .022.004zm9.974.056v-.002.002zM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" clip-rule="evenodd"/>
	</svg></label><input type="text" placeholder="*****" name="name">
		<p><label><svg class="bi bi-lock" width="50px" height="50px" viewBox="0 0 16 16" fill="#ccc" xmlns="http://www.w3.org/2000/svg">
	  <path fill-rule="evenodd" d="M11.5 8h-7a1 1 0 0 0-1 1v5a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V9a1 1 0 0 0-1-1zm-7-1a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h7a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2h-7zm0-3a3.5 3.5 0 1 1 7 0v3h-1V4a2.5 2.5 0 0 0-5 0v3h-1V4z" clip-rule="evenodd"/>
	</svg></label><input type="password" placeholder="***" name="password">
		<p><button type="submit" name="">Login</button>
    </form>
</div>
</body>
</html>