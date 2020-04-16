@extends('layouts.app')
@section('title',$article->title)
@section('description',$article->desc)
@section('keywords',$article->key)
@section('styles')
<link rel="stylesheet" type="text/css" href="/front/css/content.css">
@endsection
@section('content')
	<div class='row'>
		<div class='col-md-9 col-sm-12'>
			<div class='con'>
				<div class='article-header'>
					<ol class='breadcrumb float-right'>
						您现在的位置是：
						<li class='breadcrumb-item'><a href="#">首页</a></li>
						<li class='breadcrumb-item'><a href="#">个人博客</a></li>
					</ol>
					<h5 class='h5'>个人博客</h5>
				</div>
				<div class='con-realy'>
					<div class='con-title'>
						<h3 class='h3' >{{$article->title}}</h3>
						<span class='text-success'>  </span><span>{!! $article->user->name !!}</span>
						<span class='text-secondary'> </span><span>{!! $article->created_at !!}</span>
						
						<span>{{$article->visit_num}}人已围观</span>
						
							@foreach($article->tag as $tagname)
						<span>【{{$tagname->tag_name}}】</span>
						@endforeach
						
					</div>
					<br />
					<div class='con-con'>
						{!! $article->body !!}
					</div>
					<div class='con-footer mt-3'>
						<div class='zan text-center'>
							<a href="javascript:;" class='text-light article-zan'>赞（<span>{{$article->zan}}</span>）</a>
						</div>
					    @isset($uparticle[0])
						<p><a href="{{route('articles.show',[$article->id-1])}}" class='text-dark'>上一篇：{{$uparticle[0]->title}}</a></p>

						@endisset
						@isset($downarticle[0])
						<p><a href="{{route('articles.show',[$article->id+1])}}" class='text-dark'>下一篇：{{$downarticle[0]->title}}</a></p>
						@endisset
					</div>	
				</div>
			</div>
			<!-- 评论 -->
		<div class='comment'>
			<div class='article-header'>
				<h5 class='h5'>文章评论</h5>
			</div>
			    @foreach($article->comment as $comments)
				<div class='showcomment'>
					<!-- 主评论 -->
				
					<div class='small mt-2' style='width:{{(100-($comments->level*10))+10}}%;margin-left: {{100-((100-($comments->level*10))+10)}}%'>
					    <div>
						    <img src="https://dss0.baidu.com/73x1bjeh1BF3odCf/it/u=970046986,3090048325&fm=85&s=4C12C519C8913CCA569E5FC2030080A8">
						    <span>四川的网友</span>
					        <time>{{$comments->created_at}}</time>
					        <span class='float-right'>
					    	  
					        </span>
					        <div class='mentcon'>
					        <p>{{$comments->content}}</p>
					        <br><br>
					        <ul>
					        	<!-- 点赞 -->
					      
							<!-- 回复 -->
							<li class="callback" data-flag='0' data-level='{{$comments->level}}' date-parent='{{$comments->parent_id}}' >&nbsp;
							    	 回复
							</li>
						    </ul>
					       </div>
					    </div>
				    </div>
				</div>
				@endforeach
		    
		<!-- 评论end -->
		<form class='mt-3'><div class='form-group'><textarea class='form-control' name='conment' placeholder='说两句吧~'></textarea></div> <div class='form-group row'><img src="https://blog.yzmcms.com/api/index/code.html???????css/" class='ml-3' style='height: 40px;'>
<input type='text' class='col-sm-1 form-control' required name='random'><input type='submit' value='提交' class='btn btn-info ml-1' name=''></div></form>
		</div>
		</div>
	    @include('layouts._aside')
	</div>
	<!-- 隐藏域 -->

@endsection
<script type="text/javascript">
	$(function(){
		//获取
	})
</script>
</body>
</html>
