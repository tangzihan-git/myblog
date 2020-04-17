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
			    <div class='my' data-flag='0'>		   
			    	 @foreach($comment as $key=>$comments)
				
				<div class='showcomment overflow-hidden'>
					<!-- 主评论 -->
				
					<div class='small mt-2' style="width:{{(100-($comments['level']*10))+10}}%;margin-left: {{100-((100-($comments['level']*10))+10)}}%">
					    <div>
						    <img src="https://dss0.baidu.com/73x1bjeh1BF3odCf/it/u=970046986,3090048325&fm=85&s=4C12C519C8913CCA569E5FC2030080A8">
						    <span>#@热心网友</span>
					        <time>{{$comments['created_at']}}</time>
					        <span class='float-right'>
					    	  
					        </span>
					        <div class='mentcon'>
					        <p>{{$comments['content']}}</p>
					        <br><br>
					        <ul class='huifu'>
					        	<li class="callback" data-flag='0' data-level='{{$comments['level']}}' data-parent='{{$comments['id']}}' >回复</li>
						    </ul>

					       </div>
					    </div>
				    </div>

				</div>

				@endforeach
			    </div>
			   
		    
		<!-- 评论end -->
		<form class='mt-3'><div class='form-group'><textarea class='form-control usercon'name='conment' placeholder='说两句吧~'></textarea></div> <div class='form-group row'><img src="{{ captcha_src('mini') }}" onclick="this.src='/captcha/mini?'+Math.random()" title="点击图片重新获取验证码" class='ml-3' style='height: 40px;'>
<input type='text' class='col-sm-1 form-control random' required name='captcha '><input type='button' value='提交' class='btn btn-info ml-1' id='submit' name=''></div>
    </form>
		</div>

		</div>
	    @include('layouts._aside')
	</div>
	<!-- 隐藏域 -->
<input type="hidden" id='articleid' name="" value='{{$article->id}}'>
@endsection
@section('scripts')
<script type="text/javascript">
	$(function(){
		var articleid = $('#articleid').val()
		//评论框显示
        $('.my').on('click','li',function(){
        	var that = $(this)
        	$('.pl').remove()
        	$('.my').each(function(i,e){
			if(that.data('flag')==0){
        			that.data('flag',1)
        			that.parent().parent().append("<form class='pl'><div class='form-group'><textarea class='form-control usercon'  name='conment' placeholder='说两句吧~'' required></textarea></div> <div class='form-group row'><img src='{{ captcha_src('mini') }}'  class='ml-3 img-random' style='height: 40px;'><input type='text' class='col-sm-2 form-control random' required name='captcha'><input type='button' value='提交' class='btn btn-info ml-1 submit' name=''></div></form>")
        		}else{
        			that.data('flag',0)
        			that.parent().next().remove();	
        		}
        	})
        	$('.img-random').click(function(){
        		this.src="/captcha/mini?'"+Math.random()
        	})
        	$('.submit').click(function(){
        		var parentid = $(this).parent().parent().prev().children().data('parent');
        		// console.log(parentid)
        		if(!parentid && parentid)parentid=beifenid;//如果获取不到使用备份id

        		var level = $(this).parent().parent().prev().children().data('level')+1;
        		var con = htmlEscape($('.usercon').val());
        		var random = $('.random').val();
				if(!con){
					alert('请输入内容');
					return false;
				}else if(!random){
					alert('请输入验证码');
					return false;
				}else{
					var subthat = $(this);
					sendCon(parentid,level,con,random,subthat)
				}
        	})
        })
         //主评论提交
		$('#submit').click(function(){
			var con = htmlEscape($('.usercon').val());
			var random = $('.random').val();
			if(!con){
					alert('请输入内容');
					return false;
				}else if(!random){
					alert('请输入验证码');
					return false;
				}else{
					$.ajax({
					headers: {
			    		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					},
        			url:"{{url('/comments')}}",
        			type:'get',
        			dataType:'json',
        			data:{
        				"parentid":0,
        				"level":1,
        				"con":con,
        				"captcha":random,
        				'articleid':articleid
        			},
        			success:function(msg){
        				if(msg.error){
        					alert(msg.error);
        					return false;
        				}
			        	//渲染页面
						var text = $("<div class='showcomment'><div class='small mt-2' style='width:100%;margin-left:0%'><div><img src='https://dss0.baidu.com/73x1bjeh1BF3odCf/it/u=970046986,3090048325&fm=85&s=4C12C519C8913CCA569E5FC2030080A8'><span>#@热心网友</span><time>"+123+"</time><span class='float-right'></span><div class='mentcon'><p>"+con+"</p><br><br><ul class='huifu'><li class='callback' data-flag='0' data-level='1' date-parent='0'  >回复</li></ul></div></div></div></div>");
						$('.my').append(text);
        			}
					})
			    }
		})
		//前台格式化评论
        	function htmlEscape(text){ 
			  	return text.replace(/[<>"&]/g, function(match, pos, originalText){
			    switch(match){
			    case "<": return "&lt;"; 
			    case ">":return "&gt;";
			    case "&":return "&amp;"; 
			    case "\"":return "&quot;"; 
			  } 
			  });
			}
        //发送数据到后台
        function sendCon(parentid,level,con,random,subthat){
        		$.ajax({
        			headers: {
			    		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					},
        			url:"{{url('/comments')}}",
        			type:'get',
        			dataType:'json',
        			data:{
        				"parentid":parentid,
        				"level":level,
        				"con":con,
        				"captcha":random,
        				"articleid":articleid
        			},
        			success:function(msg){
        				if(msg.error){
        					alert(msg.error);
        					return false;
        				}
        				var text = $("<div class='showcomment'><div class='small mt-2' style='width:"+(100-(level*10)+10)+"%;margin-left:"+(100-(100-(level*10)+10))+"%'><div><img src='https://dss0.baidu.com/73x1bjeh1BF3odCf/it/u=970046986,3090048325&fm=85&s=4C12C519C8913CCA569E5FC2030080A8'><span>#@热心网友</span><time>"+msg.time+"</time><span class='float-right'></span><div class='mentcon'><p>"+con+"</p><br><br><ul class='huifu'><li class='callback' data-flag='0' data-level='"+level+"' date-parent='"+msg.id+"'  >回复</li></ul></div></div></div></div>");
        				beifenid = msg.id;
        				subthat.parent().parent().parent().parent().parent().parent().after().append(text);
        			}
        		})
        	}
        //文章点赞
        $('.article-zan').on('click',function(){
        	that = $(this)
        	var article_zan = parseInt($(this).children().text())
        	$.ajax({
        		headers: {
			    		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					},
        			url:"{{url('/article/zan')}}",
        			type:'get',
        			dataType:'json',
        			data:{
        				"code":200,
        				"articleid":articleid
        			},
        			success:function(msg){
        				if(msg.status==0) {
        					alert('你已经点过赞了哦')
        					return false;
        				};
						 that.children().text(article_zan+1)
        			}
        	})
        	
        	
        })
	})
</script>
@endsection

</body>
</html>
