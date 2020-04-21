@extends('layouts.app')
@section('title')
@section('description')
@section('keywords')
@section('content')
<!-- 主体内容 -->
	<div class='row'>
		<div class='col-md-9 col-sm-12'>
			<!-- 站长推荐-->
			<div id='zztj'>
				<!-- 头部 -->
				<div class='article-header'>
					<ol class='breadcrumb float-right'>
						<li class='breadcrumb-item'><a href="#">个人博客</a></li>
						<li class='breadcrumb-item'><a href="#">如何建站</a></li>
						<li class='breadcrumb-item'><a href="#">Html&css</a></li>
					</ol>
					<h5 class='h5'>站长推荐</h5>
				</div>
				<!-- 推荐内容 -->
				<div class='zz-con'>
					<div class='row'>
						@if(count($recos))
						@foreach($recos as $reco)
						<div class='col-md-4 col-sm-6'>
							<div class="card " style="width: 18rem;height: 18rem; ">
								<div class='card-img'>
									 <img src="{{$reco->img}}" class="card-img-top" alt="...">
								</div>
							  <div class="card-body">
							  	<strong class='card-title text-truncate'>{!! $reco->title !!} </strong>
							    <p class="card-text overflow-hidden" style='height:6rem'>
							    {!! $reco->desc !!}</p>
							      <a href="{{route('articles.show',[$reco->id])}}" class="text-success mt-2 d-block">+阅读原文</a>
							  </div>
							</div>
						</div>
						@endforeach
					    @endif
					</div>
				</div>
			</div>
			<!-- 站长推荐end -->
			<!-- 最新发布 -->
            <div class='zxfb overflow-hidden'>
            	<div class='article-header'>
					<h5 class='h5'>最新发布</h5>
				</div>
            	<ul class="list-unstyled">
            		@if(count($newArticles))
            		@foreach($newArticles as $newArticle)
				    <li class="media">
                        <div class='media-header'>
                        	 <img src="{{$newArticle->img}}"   height='150' width='250' class="mr-3 d-none d-sm-block" alt="...">
                        	<div class='tags' style='width:97%'>
                        		<span><span class='text-warning'>&nbsp;</span>{!! $newArticle->cate_name !!}</span>
                        		<time><span class='text-primary'> </span>{!! $newArticle->created_at !!}</time>
                        		<span><span class='text-secondary'> </span>浏览（{!! $newArticle->visit_num !!}）</span>
                        		<span><span class='text-info'>&nbsp;</span>{!! $newArticle->name !!}</span>
                        		<span class='float-right '><a href="{{route('articles.show',[$newArticle->id])}}" class='text-success'>++阅读原文</a></span>
                        	</div>
                        </div>
			    		<div class="media-body">
					      <h5 class="mt-0 mb-1 h5">{!! $newArticle->title !!}</h5>
					      	{!! $newArticle->desc !!}
					    </div>
					</li>
					@endforeach
					@endif
				</ul>
            </div>
            <!-- 友情链接 -->
            <div class='friend'>
            	<div class='article-header'>
					<h5 class='h5'>友情链接</h5>
				</div>
				<div class='friend-link'>
					@if(count($friendLinks))
					@foreach($friendLinks as $friend)
					<a href="{{$friend->web_link}}" class=' tag-text' style='background: {{$friend->web_color}}'>
						{{$friend->web_name}}
					</a>
					@endforeach
					@endif
					<a href="javascript:;" class='tag-text bg-info'>虚位以待~~~</a>
				</div>
            </div>	
		</div>
		<!-- 侧边内容 -->
		@include('layouts._aside')
	</div>
<!-- 主体内容end -->
@endsection
