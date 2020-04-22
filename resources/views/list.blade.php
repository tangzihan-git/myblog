@extends('layouts.app')
@section('title')
@section('description')
@section('keywords')
@section('content')
<div class='row'>
<div class='col-md-9 col-sm-12'>
<div class='list mr-30'>
<div class='article-header'>
<h5 class='h5'>个人博客</h5>
    </div>
    <div  class='list-con mr-con'>
    <ul class="list-unstyled">
       @php
       $mydata=routeName('cates.show')?$cate:$tag
       @endphp
        @if(count($mydata))
        @foreach($mydata as $data)
    <li class="media">
        <div class='media-header'>
         <img src="{{$data->img}}" height='150' width='250' class="mr-3" alt="...">
        <div class='tags' style='width:97%'>
        <span><span class='text-warning'>&nbsp;</span>{{$data->cate->cate_name}}</span>
        <time><span class='text-primary'> </span>{{$data->created_at}}</time>
        <span><span class='text-secondary'> </span>浏览（{{$data->visit_num}}）</span>
        <span><span class='text-info'>&nbsp;</span>{{$data->user->name}}</span>
        <span class='float-right '><a href="{{route('articles.show',[$data->id])}}" class='text-success'>++阅读原文</a></span>
        </div>
        </div>
        <div class="media-body">
             <h5 class="mt-0 mb-1 h5">{{$data->title}}</h5>
              {!! $data->desc !!}
        </div>
    </li>
        @endforeach
        @endif
</ul>
{!! $mydata->render() !!}
    </div>
    </div>
</div>
@include('layouts._aside')
</div>

@endsection

