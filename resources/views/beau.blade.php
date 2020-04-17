@extends('layouts.app')
@section('title','唐子涵的个人博客')
@section('description','唐子涵的个人博客')
@section('keywords','博客','个人博客','博客模板','个人站')
@section('content')
<div class='row'>
		<div class='col-md-9 col-sm-12'>
			<div class='beau mr-30'>
				<div class='article-header'>
					<span class='float-right text-secondary'>
						”只愿世间风景千般万般熙攘过后，字里行间，人我两忘，相对无言“
					</span>
					<h5 class='h5'>美文</h5>
			    </div>
			    <div  class='beau-con mr-con'>
					<div class='row'>
						@if(count($cate))
						@foreach($cate as $article)
						<div class='col-md-4 col-sm-6'>
							<div class="card " style="width: 18rem;height: 18rem; ">
								<div class='card-img'>
									 <img src="{{$article->img}}" class="card-img-top" alt="...">
								</div>
							 
							  <div class="card-body">
							  	<strong class='card-title text-truncate'>{!! $article->title !!} </strong>
							    <p class="card-text overflow-hidden" style='height:6rem'>
							    {!! $article->desc !!}</p>
							      <a href="{{route('articles.show',[$article->id])}}" class="text-success mt-2 d-block">+阅读原文</a>
							  </div>

							</div>
						</div>
						@endforeach
					    @endif
					
			
					</div>
			    	{!! $cate->render() !!}
			    </div>
		    </div>
		</div>
	    @include('layouts._aside')
	</div>
@endsection
</body>
</html>
