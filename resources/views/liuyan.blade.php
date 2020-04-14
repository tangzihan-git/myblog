<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous\">
	<link rel="stylesheet" type="text/css" href="./css/base.css">
	<link rel="stylesheet" type="text/css" href="./css/index.css">
	<link  rel="stylesheet" href="css/main.css" />
	<link rel="stylesheet" type="text/css" href="css/sinaFaceAndEffec.css" />
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
</head>
<body>
	<!-- 头部 -->
<header>
	<div class='topbar'>
		<nav class="navbar navbar-expand-lg navbar-light mr-auto">
		  <a class="navbar-brand" href="#">唐先生&巫小姐</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item active">
		        <a class="nav-link text-nowrap" href="#">前端<span class="sr-only">(current)</span></a>
		      </li>
		       <li class="nav-item active">
		        <a class="nav-link text-nowrap" href="#">程序<span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link text-nowrap" href="#">技术分享</a>
		      </li>
		        <li class="nav-item active">
		        <a class="nav-link text-nowrap" href="#">心情随笔<span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link text-nowrap" href="#">美文</a>
		      </li>
		       <li class="nav-item">
		        <a class="nav-link text-nowrap" href="#">关于我</a>
		      </li>
		         <li class="nav-item active">
		        <a class="nav-link text-nowrap" href="#">留言版<span class="sr-only">(current)</span></a>
		      </li>
		     
		    </ul>
		    
		  </div>
		</nav>
	</div>
	<div class='bar-text'>
		<h3 class='h3'>在此添加文案</h3>
		<p>在此添加副标题</p>
		
	</div>
</header>

<!-- 头部end -->
<!-- 主体内容 -->
<section id='main' class='container'>
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
		<aside class='col-md-3' >
			<!-- 爱 -->
			<div class='love'>
				<div class='article-header'>
					
					<h5 class='h5 '>我&她</h5>
				</div>
				<div class='love-con'>
					<div class='he'>
						
					</div>
					<div class='love-msg'>
						——<span class='text-pink'></span>——<br />
						<p>&nbsp;</p>
					</div>

					<div class='she'>
						
					</div>
				<div class='heart'>
					<blockquote class="blockquote text-left">
					  <p class="mb-0"><span id='day'></span>天<span id='hour'></span>小时<span id='min'></span>分<span id='smt'></span>秒</p>
					  <p class='text-right'>---For In Love</p>
					</blockquote>
				</div>
				</div>
			</div>
			<!-- 爱end -->
			<!-- 标签云 -->
			<div class='tag-cloud'>
				<div class='article-header'>
					
					<h5 class='h5 '>标签云</h5>
				</div>
				<div class='tag-con'>
					<a href="#" class='tag-text'>Laravel</a>
					<a href="#" class='tag-text'>ThinkPHP</a>
					<a href="#" class='tag-text'>Linux</a>
					<a href="#" class='tag-text'>PHP</a>
					<a href="#" class='tag-text'>JavaScript</a>
					<a href="#" class='tag-text'>Node.js</a>
					<a href="#" class='tag-text'>Redis</a>
				</div>
				
			</div>
			<!-- 标签云end -->
			<!-- 归档 -->
			<div class='sort'>
				<div class='article-header'>
					
					<h5 class='h5 '>归档</h5>
				</div>
				<div class='sort-con'>
					<ul class='list-unstyled'>
						<li><a href="#">2020年4月</a><span class='float-right'>45篇</span></li>
						<li><a href="#">2020年4月</a><span class='float-right'>45篇</span></li>
						<li><a href="#">2020年4月</a><span class='float-right'>45篇</span></li>
						<li><a href="#">2020年4月</a><span class='float-right'>45篇</span></li>
					</ul>
				</div>
				
			</div>
			<!-- 归档end -->
			<!-- 最新评论 -->
			<div class='comments'>
				<div class='article-header'>
					
					<h5 class='h5 '>最新评论</h5>
				</div>
				<div class='comments-con'>
					<ul>
						<li><a href="#">
							（1）是v的功夫比v俄方hi那是多久哦i高富帅你舍得解开决定是否给宁波东方</a>
							<p>@admin感谢博主学到了</p>
						</li>
						<li><a href="#">
							（2）是v的功夫比v俄方hi那是多久哦i高富帅你舍得解开决定是否给宁波东方</a>
							<p>@admin感谢博主学到了</p>
						</li>
						<li><a href="#">
							（3）是v的功夫比v俄方hi那是多久哦i高富帅你舍得解开决定是否给宁波东方</a>
							<p>@admin感谢博主学到了</p>
						</li>
					</ul>
				</div>
			</div>
			<!-- 最新评论end -->
			<!-- 热门文章 -->
			<div class='hot'>
				<div class='article-header'>
					
					<h5 class='h5 '>热门文章</h5>
				</div>
				<div class='hot-con'>
					<ul>
						<li>
							<a href="#">lnmp环境系列----Linux安装Mysql详细教程</a>
							<p>阅读数（990）</p>
						</li>
						<li>
							<a href="#">lnmp环境系列----Linux安装Mysql详细教程</a>
							<p>阅读数（990）</p>
						</li>
						<li>
							<a href="#">lnmp环境系列----Linux安装Mysql详细教程</a>
							<p>阅读数（990）</p>
						</li>
					</ul>
				</div>
			</div>
			<!-- 热门文章end -->

			<!-- 小工具 -->
			<div class='tools'>
				<div class='article-header'>
					<h5 class='h5 '>小工具</h5>
				</div>
				<div class='tools-con'>
					<ul>
						<li><a href="#" class='tag-text'>快递查询</a></li>
						<li><a href="#" class='tag-text'>待添加</a></li>
						<li><a href="#" class='tag-text'>待添加</a></li>
					</ul>
				</div>
			</div>
			<!-- 小工具end -->
		</aside>
	</div>
</section>
	<!-- 底部内容 -->
<footer>
	<p class='text-center'>正在开发中</p>
	<p><a href="#">登录</a></p>
</footer>
<!-- 底部内容end -->
<script src="https://cdn.jsdelivr.net/npm/jquery@1.12.4/dist/jquery.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/sinaFaceAndEffec.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script type="text/javascript">
	$(function(){
		/**
        *随机颜色
        *
        *@param int min 颜色最小值
        *@param int max 颜色最大值
        *@return 随机返回 rgb颜色
		*/
		function randColor(min,max){
			var min = min | 0;
			var max = max | 255;
			min = min < 0 ? 0 : min;
			max = max <255 ? 255 : max;

			var r = Math.floor(Math.random() * (max - min+1))+min;
			var g = Math.floor(Math.random() * (max - min+1))+min;
			var b = Math.floor(Math.random() * (max - min+1))+min;
			return {
				r:r,
				g:g,
				b:b
			}



		}
		$('.tag-text').each(function(i,e){
			var color = randColor();
			e.style.backgroundColor='rgb('+color.r+','+color.g+','+color.b+')';
		})
		//日期计算
		
        var nday = $('#day');
        var nhour = $('#hour');
        var nmin = $('#min');
        var nsmt = $('#smt');
		var ago = new Date('2017-12-5');
		setInterval(function(){
			var now = new Date();
		    var time=Math.abs(Math.floor((ago.getTime()-now.getTime())/1000));//换算秒
		    var day=Math.floor(time/(24*60*60));//换算天
	        var hour=Math.floor(time/(60*60)%24);//换算小时
	        var min=Math.floor(time/60%60);//换算分
	        var smt=Math.floor(time%60)//换算秒
	       nday.text(day)
	       nhour.text(hour)
	       nmin.text(min)
	       nsmt.text(smt)

		},1000)

		
		
	})

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
			html += '<p class="comment-footer">2016年10月5日　回复　点赞54　转发12</p>';
			html += '</div>';
			html += '</li>';
			return html;
		}

</script>
</body>
</html>
