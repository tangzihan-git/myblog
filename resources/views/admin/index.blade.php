@extends('admin.layouts.app')
@section('content')
	<!-- 导航 -->
		<div class='row'>
		<!-- 左边菜单 -->
		@include('admin.layouts._aside')
		    <div class='col-md-10 '>
		    	<div class='icon py-20'>
		    		<div class='row'>
		    			<!-- 用户访问次数 -->
						<div class='col-md-3'>
			    			<div class="card" >
							  <div class="card-body">
							  	<span class='icon-size text-info'></span>
							    <tim class='card-text h1'>34</time>
							  </div>
					        </div>
						</div>
						<!-- 发表帖子 -->
						<div class='col-md-3'>
			    			<div class="card " style='background: #76C4EA'>

							  <div class="card-body">
							    <span class='icon-size'></span>
							    <time class='card-text h1'>45</time>

						

							    
							  </div>
					        </div>
						</div>
						<!-- 回复 -->
						<div class='col-md-3'>
			    			<div class="card" >
							  <div class="card-body">
							    <span class='icon-size text-warning'></span>
							    <time class='card-text h1'>999</time>
						
							    
							  </div>
					        </div>
						</div>
						<!-- 日期 -->
						<div class='col-md-3'>
			    			<div class="card bg-danger" >
							  <div class="card-body">
							    <!-- <h5 class="card-title"></h5> -->
							    <span class='icon-size'></span>
							    <time class='card-text h1'>4.11</time>
							  </div>
					        </div>
						</div>
				
		    		</div>
		    	
		    		</div>
		    		<div class='row'>
		    			<div class='col-md-6'>
			    			<div class="card bg-light mb-3" style="max-height: 30rem">
						  		<div class="card-header bg-light">用户访问量统计</div>
							    <div class="card-body">
							  	<!-- 地图 -->
							       <div class="box"><div id="china-map"></div></div>
							    </div>
				             </div>
		    			</div>
		    			<div class='col-md-6'>
			    			<div class="card bg-light mb-3" style="max-height: 30rem">
						  		<div class="card-header bg-light">文章发布统计</div>
							    <div class="card-body">
							  	<!-- 地图 -->
							        <div id='charts' style="width: 100%;height:360px;">
							    </div>
				             </div>
		    			</div>
		    		</div>
		    		<div class='col-md-7'>
			    			<div class="card bg-light mb-3" style="max-height: 30rem">
						  		<div class="card-header bg-light">最新回复</div>
							    <div class="card-body">
							  <div class="media">
							  	<!-- 用户评论 -->
								  <img src="../images/-741352d2e87aa1a4.jpg" width='80' class="mr-3 media-img" alt="...">
								  <div class="media-body">
									    <h6 class="mt-0 text-info username">匿名用户</h6>
									   你这不行啊@<a href="#">简谈laravel生命周期</a>
									   <span><a href="javascript:void(0)" class='rep_btn text-info'>【回复】</a></span>
									   <!-- 回复框 -->
									   <form class='rep_co mt-3 d-none' >
									   	    <div class='form-group'>
									   	    	<textarea class='rep_text form-control' ></textarea>
									   	    	<input type="button" class='fabu btn btn-info' value='发布' name="">
									   	    </div>
									   </form>
									   <!-- 站长回复 -->
									   <div class="media">
										  
										  <div class="media-body">
										    <p><span class='text-danger'>@匿名用户</span>：德行个屁</p>
										  </div>
									    </div>
								  </div>
								  


							</div>
							 <div class="media">
								  <img src="../images/-741352d2e87aa1a4.jpg" width='80' class="mr-3 media-img" alt="...">
								  <div class="media-body">
								    <h6 class="mt-0 text-info username">匿名用户</h6>
								   哇塞厉害！@<a href="#">简谈laravel生命周期</a>
								   <span><a href="javascript:void(0)" class='rep_btn text-info'>【回复】</a></span>

								     <form class='rep_co mt-3 d-none' >
								   	    <div class='form-group'>
								   	    	<textarea class='rep_text form-control' ></textarea>
								   	    	<input type="button" class='fabu btn btn-info' value='发布' name="">
								   	    </div>
								   </form>
								  </div>
							</div>
							    </div>
				             </div>
		    			</div>
		    		<div class='col-md-5'>
		    			<div class="card bg-light mb-3" style="max-height: 30rem">
						  		<div class="card-header bg-light">系统信息</div>
							    <div class="card-body">
							    	<span id='nc'>内存使用率10%</span>
								    <div class="progress">

								    	<div class="progress-bar progress-bar-striped" role="progressbar" style="width: 10%" ></div></div>
								    <span id='cpu'>cpu使用率10%</span>
									<div class="progress"><div class="progress-bar progress-bar-striped bg-success" style="width: 25%"></div></div>
									<span id='cp'>磁盘使用率45%</span>
									<div class="progress"><div class="progress-bar progress-bar-striped bg-info" style="width: 45%"></div></div>
									<span id='sj'>数据使用率29%</span>
									<div class="progress"><div class="progress-bar progress-bar-striped bg-warning" style="width: 29%"></div></div>

							    </div>
				        </div>
		    	    </div>
		    	</div>
		   </div>
		</div>
		
@section('scripts')
 <script type="text/javascript" src="https://cdn.bootcss.com/echarts/4.2.0-rc.2/echarts.min.js"></script>
 <script type="text/javascript" src="/admin/js/map/china.js"></script>
 <script type="text/javascript" src='/admin/js/map.js'></script>
 <script type="text/javascript" src='/admin/js/index.js'></script>
@endsection
@endsection

