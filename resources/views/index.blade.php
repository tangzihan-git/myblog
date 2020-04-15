@extends('layouts.app')
@section('title','唐子涵的个人博客')
@section('description','唐子涵的个人博客')
@section('keywords','博客','个人博客','博客模板','个人站')
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
						@if($recos)
						@foreach($recos as $reco)
						<div class='col-md-4 col-sm-6'>
							<div class="card " style="width: 18rem;height: 18rem; ">
								<div class='card-img'>
									 <img src="{{$reco->img}}" class="card-img-top" alt="...">
								</div>
							 
							  <div class="card-body">
							  	<strong class='card-title text-truncate'>{{$reco->title}} </strong>
							    <p class="card-text overflow-hidden" style='height:6rem'>
							    {{$reco->desc}}</p>
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
            <div class='zxfb'>
            	<div class='article-header'>
					
					<h5 class='h5'>最新发布</h5>
				</div>
            	<ul class="list-unstyled">
				    <li class="media">
                        <div class='media-header'>
                        	 <img src="https://resource.cdn.rainss.cn/2020/03/1617745454.png" width="250" class="mr-3" alt="...">
                        	<div class='tags' style='width:97%'>
                        		<span><span class='text-warning'>&nbsp;</span>计算机技术</span>
                        		<time><span class='text-primary'> </span>2019-8-9</time>
                        		<span><span class='text-secondary'> </span>浏览（90）</span>
                        		<span><span class='text-info'>&nbsp;</span>唐先生</span>
                        		<span class='float-right '><a href="#" class='text-success'>++阅读原文</a></span>

                        	</div>
                        </div>
			    		<div class="media-body">

					      <h5 class="mt-0 mb-1 h5">List-based media object</h5>
					      Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
					
					    </div>
					</li>
					<li class="media">
                        <div class='media-header'>
                        	 <img src="https://resource.cdn.rainss.cn/2020/03/1617745454.png" width="250" class="mr-3" alt="...">
                        	<div class='tags' style='width:97%'>
                        		<span><span class='text-warning'>&nbsp;</span>计算机技术</span>
                        		<time><span class='text-primary'> </span>2019-8-9</time>
                        		<span><span class='text-secondary'> </span>浏览（90）</span>
                        		<span><span class='text-pink'>&nbsp;</span>巫小姐</span>
                        		<span class='float-right '><a href="#" class='text-success'>++阅读原文</a></span>

                        	</div>
                        </div>
			    		<div class="media-body">

					      <h5 class="mt-0 mb-1 h5">List-based media object</h5>
					      Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
					
					    </div>
					</li>
				</ul>
            </div>
            <!-- 友情链接 -->
            <div class='friend'>
            	<div class='article-header'>
					
					<h5 class='h5'>友情链接</h5>
				</div>
				<div class='friend-link'>
					<a href="#" class=' tag-text'>
						csdn博客
					</a>
					<a href="#" class='tag-text'>
						csdn博客
					</a>
					<a href="#" class=' tag-text'>
						csdn博客cngcngsfhrrh
					</a>
				</div>
            </div>
			
		</div>
		<!-- 侧边内容 -->
		@include('layouts._aside')
	
		
	</div>

<!-- 主体内容end -->
@endsection


</body>
</html>

