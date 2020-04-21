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
           @foreach($newdata as $k=>$v)
         <dt class='h2 ml-1'>{{$k}}</dt>
               @foreach(json_decode($v) as $vv)
			    <dd class='ml-5'>
			    <ul class='list-style'>
			    <li><span>{{date('Y-m-d',strtotime($vv->created_at))}}</span>
			    	<a class='ml-2' href="{{route('articles.show',$vv->id)}}">
			    		{{$vv->title}}
			    	</a></li>
			    </ul>
		    </dd>
		    @endforeach
		    @endforeach 
	    </dl> 
	</div>
    @include('layouts._aside')
	</div>
<!-- 主体内容end -->
@endsection
