	<div class='col-md-2 mp-0'>
				<ul class="list-group " id='mymenu'>
				  <li class="list-group-item">
				  	 <a  href="./index.html" type="button"><span class='icon'></span>&nbsp;我的桌面</a><span></span></li>

				  <li class="list-group-item">
				  	 <a  href="#one" type="button" data-toggle="collapse"><span class='icon'></span>&nbsp;栏目管理</a>
				  	<div class='collapse' id='one' data-parent="#mymenu">
				  		<ul class='mp-0 text-left'>
				  			<li class='list-group-item son-menu'><a href="cate_top.html">导航栏目</a></li>
				  			<li class='list-group-item son-menu'><a href="#">侧边栏目</a></li>
				  			<li class='list-group-item son-menu'><a href="#">其他栏目</a></li>
		
				  		</ul>
				  	</div>
				  </li>
				   <li class="list-group-item">
				  	 <a  href="#two" type="button" data-toggle="collapse"><span class='icon'></span>&nbsp;文章管理</a>
				  	 <!-- <span class='float-right icon'></span> -->
				  	<div class='collapse' id='two' data-parent="#mymenu">
				  		<ul class='mp-0 text-left'>
				  			<li class='list-group-item son-menu'><a href="./article.html">文章列表</a></li>
				  			<li class='list-group-item son-menu'><a href="./articlexiajia.html">下架列表</a></li>
				  		</ul>
				  	</div>
				  </li>
				    <li class="list-group-item">
				  	 <a  href="#three" type="button" data-toggle='collapse' ><span class='icon'></span>&nbsp;标签管理</a>
				  	 <div class='collapse' id='three' data-parent='#mymenu'>
				  	 	<ul class='mp-0 text-left'>
				  	 		<li class='list-group-item son-menu'><a href="{{route('tags.index')}}">标签管理</a></li>

				  	 	</ul>
				  	 </div>

				  	
				  </li>

				   <li class="list-group-item">
				  	 <a  href="#four" type="button" data-toggle="collapse"><span class='icon'></span>&nbsp;评论管理</a>
				  	<div class='collapse' id='four' data-parent="#mymenu">
				  		<ul class='mp-0 text-left'>
				  			<li class='list-group-item son-menu'><a href="{{route('comments.index')}}">评论列表</a></li>
				  			
				  		</ul>
				  	</div>
				  </li>
				  <li class="list-group-item">
				  	 <a  href="#five" type="button" data-toggle="collapse"><span class='icon'></span>&nbsp;留言管理</a>
				  	<div class='collapse' id='five' data-parent="#mymenu">
				  		<ul class='mp-0 text-left'>
				  			<li class='list-group-item son-menu'><a href="{{route('messages.index')}}">留言列表</a></li>
				  			
				  		</ul>
				  	</div>
				  </li>
				   <li class="list-group-item">
				  	 <a  href="#shuc" type="button" data-toggle="collapse"><span class='icon'></span>&nbsp;素材库</a>
				  	<div class='collapse' id='shuc' data-parent="#mymenu">
				  		<ul class='mp-0 text-left'>
				  			<li class='list-group-item son-menu'><a href="#">图片列表</a></li>
				  			<li class='list-group-item son-menu'><a href="#">音乐列表</a></li>
				  			<li class='list-group-item son-menu'><a href="#">其他列表</a></li>
				  		</ul>
				  	</div>
				  </li>
				   <li class="list-group-item">
				  	 <a  href="#six" type="button" data-toggle="collapse"><span class='icon'></span>&nbsp;广告管理</a>
				  	<div class='collapse' id='six' data-parent="#mymenu">
				  		<ul class='mp-0 text-left'>
				  			<li class='list-group-item son-menu'><a href="#">广告管理</a></li>
				  			<li class='list-group-item son-menu'><a href="#">到期广告</a></li>
				  		</ul>
				  	</div>
				  </li>

				   <li class="list-group-item">
				  	 <a  href="#end" type="button" data-toggle="collapse"><span class='icon'></span>&nbsp;系统设置</a>
				  	<div class='collapse' id='end' data-parent="#mymenu">
				  		<ul class='mp-0 text-left'>
				  			<li class='list-group-item son-menu'><a href="{{url('/zyadmin/webset')}}">网站设置</a></li>
				  			<li class='list-group-item son-menu'><a href="{{url('/zyadmin/friendlink')}}">友情链接</a></li>
				  			<li class='list-group-item son-menu'><a href="./pingbi.html">屏蔽词</a></li>
				  			<li class='list-group-item son-menu'><a href="./about.html">关于我</a></li>
				  		</ul>
				  	</div>
				  </li>
				</ul>
	    	</div>