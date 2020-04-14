<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous\">
	<link rel="stylesheet" type="text/css" href="./css/base.css">
	<link rel="stylesheet" type="text/css" href="./css/index.css">
	<link rel="stylesheet" type="text/css" href="./css/content.css">
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
						<h3 class='h3' >文章标题</h3>
						<span class='text-success'>  </span><span>唐先生</span>
						<span class='text-secondary'> </span><span>2020-4-7</span>
						<span>【计算机技术】</span>
						<span>5456人已围观</span>
					</div>
					<br />
					<div class='con-con'>
						， 
					</div>
					<div class='con-footer mt-3'>
						<div class='zan text-center'>
							<a href="javascript:;" class='text-light article-zan'>赞（<span>90</span>）</a>
						</div>
						
						<p><a href="#" class='text-dark'>上一篇：成都v</a></p>
						<p><a href="#" class='text-dark'>下一篇：的法国人</a></p>
					</div>	
				</div>
			</div>
			<!-- 评论 -->
		<div class='comment'>
			<div class='article-header'>
				<h5 class='h5'>文章评论</h5>
			</div>
				<div class='showcomment'>
					<div class='small mt-2'>
					    <div>
						    <img src="images/1563795007904.jpeg">
						    <span>用户名</span>
						    <span>四川的网友</span>
					        <time>2013-8-9</time>
					        <span class='float-right'>
					    	    <b>1楼</b>
					        </span>
					        <div class='mentcon'>
					        <br><br>
					        <ul>
					        	<!-- 点赞 -->
					       <li>
  							   <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-thumbs-up"><path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path>
  							   </svg>&nbsp;
  							    (<span class='sup'>56</span>)
							</li>
                            <!-- 反对 -->
							<li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-thumbs-down"><path d="M10 15v4a3 3 0 0 0 3 3l4-9V2H5.72a2 2 0 0 0-2 1.7l-1.38 9a2 2 0 0 0 2 2.3zm7-13h2.67A2.31 2.31 0 0 1 22 4v7a2.31 2.31 0 0 1-2.33 2H17"></path></svg>
  							    (<span class='fan'>45</span>)
							</li>
							<!-- 回复 -->
							<li class="callback" data-flag='0'>&nbsp;
							    	 <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-repeat"><polyline points="17 1 21 5 17 9"></polyline><path d="M3 11V9a4 4 0 0 1 4-4h14"></path><polyline points="7 23 3 19 7 15"></polyline><path d="M21 13v2a4 4 0 0 1-4 4H3"></path></svg>
							</li>
						    </ul>
					       </div>
					    </div>

				    </div>
				    <div class='userment'>
				    	<!-- 用户评论展示 子评论-->
					    <div>
						    <img src="./images/-741352d2e87aa1a4.jpg">
						    <span>435</span>
						    <span>四川的网友</span>
					        <time>45-45432</time>
					        <span class='float-rght'>
					    	    <b>#324</b>
					        </span>
					        <div class='mentcon'>
						     123
					            <br><br>
					            <!-- 子评论点赞 -->
					           <div>
					            	<span>支持（<span class='sm_zan' flag=1 sm_id=""></span>）</span>
						           <span>反对（<span class='sm_zai' flag=1 sm_id=""></span>）</span>
						           <span class='callback' data-flag='0'> 回复</span>
					            </div>

					       </div>
					    </div>
					  	<!-- 用户评论展示 子评论-->
				    </div>
				    <div class='userment' style='width:80%;margin-left: 19%'>
				    	<!-- 用户评论展示 子评论-->
					    <div>
						    <img src="./images/-741352d2e87aa1a4.jpg">
						    <span>435</span>
						    <span>四川的网友</span>
					        <time>45-45432</time>
					        <span class='float-rght'>
					    	    <b>#324</b>
					        </span>
					        <div class='mentcon'>
						     @435你这不行啊
					            <br><br>
					            <!-- 子评论点赞 -->
					            <div>
					            	<span>支持（<span class='sm_zan' flag=1 sm_id=""></span>）</span>
						           <span>反对（<span class='sm_zai' flag=1 sm_id=""></span>）</span>
						           <span class='callback' data-flag='0'> 回复</span>
					            </div>
					           
					       </div>
					    </div>
					  	<!-- 用户评论展示 子评论-->
				    </div>
				    <div class='userment' style='width:75%;margin-left: 24%'>
				    	<!-- 用户评论展示 子评论-->
					    <div>
						    <img src="./images/-741352d2e87aa1a4.jpg">
						    <span>435</span>
						    <span>四川的网友</span>
					        <time>45-45432</time>
					        <span class='float-rght'>
					    	    <b>#324</b>
					        </span>
					        <div class='mentcon'>
						     @435你这不行啊
					            <br><br>
					            <!-- 子评论点赞 -->
					           <div>
					            	<span>支持（<span class='sm_zan' flag=1 sm_id=""></span>）</span>
						           <span>反对（<span class='sm_zai' flag=1 sm_id=""></span>）</span>
						           <span class='callback' data-flag='0'> 回复</span>
					            </div>
					          
					       </div>
					    </div>
					  	<!-- 用户评论展示 子评论-->
				    </div>
				    <div class='small mt-2'>
					    <div>
						    <img src="images/1563795007904.jpeg">
						    <span>用户名</span>
						    <span>四川的网友</span>
					        <time>2013-8-9</time>
					        <span class='float-right'>
					    	    <b>1楼</b>
					        </span>
					        <div class='mentcon'>
					        <br><br>
					        <ul>
					        	<!-- 点赞 -->
					       <li>
  							   <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-thumbs-up"><path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path>
  							   </svg>&nbsp;
  							    (<span class='sup'>56</span>)
							</li>
                            <!-- 反对 -->
							<li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-thumbs-down"><path d="M10 15v4a3 3 0 0 0 3 3l4-9V2H5.72a2 2 0 0 0-2 1.7l-1.38 9a2 2 0 0 0 2 2.3zm7-13h2.67A2.31 2.31 0 0 1 22 4v7a2.31 2.31 0 0 1-2.33 2H17"></path></svg>
  							    (<span class='fan'>45</span>)
							</li>
							<!-- 回复 -->
							<li class="callback" flag='0'>&nbsp;
							    	 <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-repeat"><polyline points="17 1 21 5 17 9"></polyline><path d="M3 11V9a4 4 0 0 1 4-4h14"></path><polyline points="7 23 3 19 7 15"></polyline><path d="M21 13v2a4 4 0 0 1-4 4H3"></path></svg>
							</li>
						    </ul>
					       </div>
					    </div>
				    </div> 
			
				</div>
		    
		<!-- 评论end -->
		<form class='mt-3'><div class='form-group'><textarea class='form-control' name='conment' placeholder='说两句吧~''></textarea></div> <div class='form-group row'><img src="https://blog.yzmcms.com/api/index/code.html???????css/" class='ml-3' style='height: 40px;'>
<input type='text' class='col-sm-1 form-control' required name='random'><input type='submit' value='提交' class='btn btn-info ml-1' name=''></div></form>
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
		//评论框显示
        $('.callback').each(function(i,e){
        	$(e).click(function(){
        		// console.log($(e).data('flag'))
        		
        		if($(e).data('flag')==0){
        			
        			$(e).data('flag',1)
        			$(this).parent().parent().append("<form class='pl'><div class='form-group'><textarea class='form-control' name='conment' placeholder='说两句吧~'' required></textarea></div> <div class='form-group row'><img src='https://blog.yzmcms.com/api/index/code.html???????css/'class='ml-3' style='height: 40px;'><input type='text' class='col-sm-2 form-control' required name='random'><input type='submit' value='提交' class='btn btn-info ml-1' name=''></div></form>")
        		}else{
        			$(e).data('flag',0)
        			console.log($(this).parent().next().remove());
        			
        		}
        		
        	})
        })
        //文章点赞
        $('.article-zan').one('click',function(){
        	// $(this).text($(this).next()+1)
        	var article_zan = parseInt($(this).children().text())
        	$(this).children().text(article_zan+1)
        })

		
	})
</script>
</body>
</html>
