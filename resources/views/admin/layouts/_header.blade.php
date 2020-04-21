<nav class='navbar navbar-expand-lg navbar-dark bg-dark'>
		<a href="./index.html" class='navbar-brand f-15'>博客后台</a>
		<button class='navbar-toggler' data-toggle='collapse' data-target="#mynav">
			<span class='navbar-toggler-icon'></span>
		</button>
		<div class='collapse navbar-collapse' id='#mynav'>

			<ul class='navbar-nav mr-auto'>
				<li class='nav-item'>
					<div class='dropdown'>
						<a href="#" data-toggle='dropdown'  class='dropdown-toggle nav-link f-15'>新增</a>
						<div class='dropdown-menu'>
							<a href="#" class='dropdown-item f-15'>文章</a>
							<a href="#" class='dropdown-item f-15'>标签</a>
							<a href="#" class='dropdown-item f-15'>栏目</a>
							<a href="#" class='dropdown-item f-15'>图片</a>
						</div>
					</div>
					
				</li>
			</ul>
			<ul class='navbar-nav '>
				@auth
				<li class='nav-item'>
					<div class='dropdown'>
					<a href="javascript:;" data-toggle='dropdown'  class='dropdown-toggle  nav-link f-15'>
						<span class='text-info'>{{Auth::user()->name}}</span></a>
						<div class='dropdown-menu'>
							<a href="javascript:;" class='dropdown-item f-15'>个人中心</a>
							<a href="javascript:;" class='dropdown-item f-15'>切换账户</a>
							<form method="post" action="{{route('logout')}}">
							@csrf	
								<input type="submit" class='btn btn-danger f-15' value="退出登录">
							</form>
							
						</div>
					</div>
				</li>
				@endauth
				<li class='nav-item'>
					<div class='dropdown'>
					<a href="#" data-toggle='dropdown'  class='dropdown-toggle nav-link f-15'>皮肤</a>
						<div class='dropdown-menu'>
							<a href="#" class='dropdown-item f-15'>红色</a>
							<a href="#" class='dropdown-item f-15'>天蓝色</a>
							<a href="#" class='dropdown-item f-15'>青色</a>
						</div>
					</div>
					
				</li>
				
			</ul>
		</div>
	</nav>
	