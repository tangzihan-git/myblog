@extends('layouts.app')
@section('title','唐子涵的个人博客')
@section('description','唐子涵的个人博客')
@section('keywords','博客','个人博客','博客模板','个人站')
@section('styles')
<link  rel="stylesheet" href="/front/css/main.css" />
<link rel="stylesheet" type="text/css" href="/front/css/sinaFaceAndEffec.css" />
	<style type="text/css">
		.sb{
			margin-top:30px;
			background: #fff;
		}
		.sb-con{
            height:800px;
			padding:20px;
		}
		time{
			display: block;
			margin-bottom: 5px;
		}

</style>
@endsection
@section('content')
	<div class='row'>
		<div class='col-md-9 col-sm-12'>
			<div class='sb'>
				<div class='article-header'>
					<span class='float-right'>随笔en</span>
					<h5 class='h5'>留言版</h5>
			    </div>
			
			    <div  class='sb-con'>
					<div id="content" style="width: 700px; height: auto;">
					<div class="wrap">
						<div class="comment">
							<div class="head-face">
								<img src="images/1.jpg" / >
								<p>我是鸟</p>
							</div>
							<div class="content">
								<div class="cont-box">
									<textarea class="text" placeholder="请输入..."></textarea>
								</div>
								<div class="tools-box">
									<div class="operator-box-btn"><span class="face-icon"  >☺</span></div>
									<div class="submit-btn"><input type="button" onClick="out()"value="提交评论" /></div>
								</div>
							</div>
						</div>
						<div id="info-show">
							<ul></ul>
						</div>
					</div>
				</div>
				</div>
			</div>

	    </div>
	    @include('layouts._aside')
	</div>
@endsection
@section('scripts')
<script type="text/javascript" src="/front/js/main.js"></script>
<script type="text/javascript" src="/front/js/sinaFaceAndEffec.js"></script>
<script type="text/javascript">
     //留言版
		// 绑定表情
		$('.face-icon').SinaEmotion($('.text'));
		// 测试本地解析
		function out() {
			var inputText = $('.text').val();
			$('#info-show ul').append(reply(AnalyticEmotion(inputText)));
		}
		
		var html;
		function reply(content){
			html  = '<li>';
			html += '<div class="head-face">';
			html += '<img src="images/1.jpg" / >';
			html += '</div>';
			html += '<div class="reply-cont">';
			html += '<p class="username">小小红色飞机</p>';
			html += '<p class="comment-body">'+content+'</p>';
			html += '<p class="comment-footer">2016年10月5日</p>';
			html += '</div>';
			html += '</li>';
			return html;
		}

</script>
@endsection
</body>
</html>
