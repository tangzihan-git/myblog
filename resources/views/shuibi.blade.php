@extends('layouts.app')
@section('title','唐子涵的个人博客')
@section('description','唐子涵的个人博客')
@section('keywords','博客','个人博客','博客模板','个人站')
@section('content')
	<div class='row'>
		<div class='col-md-9 col-sm-12'>
			<div class='sb'>
				<div class='article-header'>
					<span class='float-right'>随笔en</span>
					<h5 class='h5'>心情随笔</h5>
			    </div>
			</div>
			@foreach($cate as $article)
			    <div  class='sb-con'>
					<time class='love'> 【{!! $article->created_at !!}】</time>
					<span class='text-info'>{!! '@'.$article->user->name !!}</span>
					{!! $article->body !!}
				
				</div>
			@endforeach
				
			{!! $cate->render() !!}
	    </div>
		@include('layouts._aside')
	</div>
@endsection

