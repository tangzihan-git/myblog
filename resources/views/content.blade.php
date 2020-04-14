@extends('layouts.app')
@section('title','唐子涵的个人博客')
@section('description','唐子涵的个人博客')
@section('keywords','博客','个人博客','博客模板','个人站')
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
		<form class='mt-3'><div class='form-group'><textarea class='form-control' name='conment' placeholder='说两句吧~'></textarea></div> <div class='form-group row'><img src="https://blog.yzmcms.com/api/index/code.html???????css/" class='ml-3' style='height: 40px;'>
<input type='text' class='col-sm-1 form-control' required name='random'><input type='submit' value='提交' class='btn btn-info ml-1' name=''></div></form>
		</div>
		</div>
	    @include('layouts._aside')
	</div>
@endsection
</body>
</html>
