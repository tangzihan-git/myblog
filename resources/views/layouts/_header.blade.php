<!-- 头部 -->
<header style='background: url({{$banner[0]}});background-size:cover;background-position: center center;background-repeat: no-repeat;
'>  <div class='topbar'>
	
		<nav class="navbar navbar-expand-lg navbar-light mr-auto">
		  <a class="navbar-brand" href="{{url('/')}}">网页标题</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
		    	@foreach($datas as $data)
		        <li class="nav-item active">
		      	@if($data->menu_name!='关于我' && $data->menu_name!='文章归档' && $data->menu_name!='留言版')
		        <a class="nav-link text-nowrap" href="{{route('cates.show',[$data->id])}}">{{$data->menu_name}}<span class="sr-only">(current)</span></a>
		        @elseif($data->menu_name=='关于我')
		         <a class="nav-link text-nowrap" href="{{route('about')}}">{{$data->menu_name}}<span class="sr-only">(current)</span></a>
		        @elseif($data->menu_name=='文章归档')
		        <a class="nav-link text-nowrap" href="{{url('/files')}}">{{$data->menu_name}}<span class="sr-only">(current)</span></a>
		         @elseif($data->menu_name=='留言版')
		        <a class="nav-link text-nowrap" href="{{url('/message')}}">{{$data->menu_name}}<span class="sr-only">(current)</span></a>
		        @endif
		      </li>
		      @endforeach
		    </ul>
		  </div>
		</nav>
	</div>
	<div class='bar-text '>
		<h3 class='h3'>你尽管努力变优秀 你想要的以后都会有</h3>
		<p class='h6'>Even if you try to be good, you will always have what you want</p>
	</div>
</header>
<!-- 头部end -->