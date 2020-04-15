<!-- 头部 -->
<header style='background: url(/front/images/focus.jpg);background-size:cover;background-position: center center;background-repeat: no-repeat;
'>
	<div class='topbar'>
		<nav class="navbar navbar-expand-lg navbar-light mr-auto">
		  <a class="navbar-brand" href="#">网页标题</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
		    	@foreach($datas as $data)
		      <li class="nav-item active">
		        <a class="nav-link text-nowrap" href="#">{{$data->cate_name}}<span class="sr-only">(current)</span></a>
		      </li>
		      @endforeach
		     
		    </ul>
		    
		  </div>
		</nav>
	</div>
	<div class='bar-text'>
		<h3 class='h3'>在此添加文案</h3>
		<p>在此添加副标题</p>
		
	</div>
</header>
<!-- 头部end -->