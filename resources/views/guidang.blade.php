@extends('layouts.app')
@section('title')
@section('description')
@section('keywords')
@section('content')
<div class='row'>
	<div class='col-md-9 col-sm-12'>
		<div class='sb'>
			<div class='article-header'>
				<span class='float-right'></span>
				<h5 class='h5'>文章归档</h5>
	    	</div>
		</div>
        
		
	    <dl class='mt-3 zxfb'>
     
			@foreach($dates as $date)
			
		    <dt class='h2 ml-1'>{{$date}}</dt>
            
			@foreach($articles as $article)
			@if(date('Y-m',strtotime($article->created_at))===$date)
		    <dd class='ml-5'>
		    <ul class='list-style'>

		    <li><span>{{$article->created_at}}</span>
		    	<a class='ml-2' href="{{route('articles.show',[$article->id])}}">{{$article->title}}</a></li>
		    </ul>

		    @endif

		    @endforeach
		    </dd>
		   
		    @endforeach
	    </dl>
	
	    
	   
	</div>
    @include('layouts._aside')
	</div>
<!-- 主体内容end -->
@endsection
