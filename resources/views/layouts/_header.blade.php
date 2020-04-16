<!-- 头部 -->
<header style='background: url(/front/images/focus.jpg);background-size:cover;background-position: center center;background-repeat: no-repeat;
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
		      	@if($data->cate_name!='关于我')
		        <a class="nav-link text-nowrap" href="{{route('cates.show',[$data->id])}}">{{$data->cate_name}}<span class="sr-only">(current)</span></a>
		        @elseif($data->cate_name=='关于我')
		         <a class="nav-link text-nowrap" href="{{route('articles.show',[$data->id])}}">{{$data->cate_name}}<span class="sr-only">(current)</span></a>
		         
		        @elseif($data->cate_name=='文章归档')
		        <a class="nav-link text-nowrap" href="{{url('/files')}}">{{$data->cate_name}}<span class="sr-only">(current)</span></a>
		        @endif
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