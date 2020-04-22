@extends('layouts.app')
@section('title','唐子涵的个人博客')
@section('description','唐子涵的个人博客')
@section('keywords','博客','个人博客','博客模板','个人站')
@section('styles')
<link  rel="stylesheet" href="/front/css/main.css" />
<link rel="stylesheet" type="text/css" href="/front/css/sinaFaceAndEffec.css" />
@endsection
@section('content')
	<div class='row'>
		<div class='col-md-9 col-sm-12'>
			<div class='sb'>
				<div class='article-header'>
					<span class='float-right'></span>
					<h5 class='h5'>留言版</h5>
			    </div>
			  <div class="alert alert-info mt-3 p-3 col-md-12" role="alert">
			  	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
			  <h4 class="alert-heading h4 mb-3">欢迎来到唐子涵的个人博客</h4>
			  <p>留下你对博主想说的...</p>
			  <p>或者对网站的吐槽...</p>
			  <p>或者有关技术问题...</p>
			  <p>或者交换友链...</p>
			  <p>......</p>
			  <hr>
			</div>
			    <div  class='sb-con'>
					<div id="content" style="width: 700px; height: auto;">
					<div class="wrap">
						<div class="comment">
							<div class="head-face">
								<p><a href="javascript:;" class='btn btn-info'>登录</a></p>
							</div>
							<div class="content">

								<div class="cont-box" >
									<textarea class="text" id='messages' placeholder="<----[笑cry]由于腾讯审核较慢目前留言功能正常使用不需登录"></textarea>
								</div>
								<div class="tools-box" >
									<div class="submit-btn float-left operator-box-btn"><input type="button" id='submit' value="提交留言" /></div>
									<div class="operator-box-btn"><span class="face-icon"  >☺</span></div>
								</div>
								
							</div>
						</div>
						<div id="info-show">
							<ul>
								@foreach($data as $v)
								<li>
									<div class="head-face">
										<img src="images/1.jpg" / >
									</div>
									<div class="reply-cont">
										<p class="username">{{$v->user_name?:'热心网友'}}</p>
										<p class="comment-body">{{$v->user_con}}</p>
										@if($v->status==1)
										<p class='text-danger mt-2 ml-2'><span class='text-info'>站长回复：</span>{{$v->replay}}</p>
										@endif
										<p class="comment-footer">{{$v->created_at}}</p>
									</div>
								</li>
								@endforeach
							</ul>
						</div>
					</div>
				</div>
				</div>
				{{ $data->links() }}
			</div>

	    </div>
	    @include('layouts._aside')
	</div>
@endsection
@section('scripts')
<script type="text/javascript" src="/front/js/main.js"></script>
<script type="text/javascript" src="/front/js/sinaFaceAndEffec.js"></script>
<script type="text/javascript">
 var submit=$("#submit");submit.click(function(){var inputText=htmlEscape($(".text").val());if(inputText==""){alert("请输入内容");return false}$.ajax({headers:{"X-CSRF-TOKEN":$('meta[name="csrf-token"]').attr("content")},url:"{{url('/message')}}",type:"post",dataType:"json",data:{"content":inputText},success:function(msg){$("#info-show ul").append(reply(AnalyticEmotion(inputText)))}})});$(".face-icon").SinaEmotion($(".text"));var html;function reply(content){html="<li>";html+='<div class="head-face">';html+='<img src="" / >';html+="</div>";html+='<div class="reply-cont">';html+='<p class="username">热心网友</p>';html+='<p class="comment-body">'+content+"</p>";html+='<p class="comment-footer">2016年10月5日</p>';html+="</div>";html+="</li>";return html}function htmlEscape(text){return text.replace(/[<>"&]/g,function(match,pos,originalText){switch(match){case"<":return"&lt;";case">":return"&gt;";case"&":return"&amp;";case'"':return"&quot;"}})};
</script>
@endsection
