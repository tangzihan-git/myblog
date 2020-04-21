<aside class='col-md-3' >
	<div class='love'>
		<div class='article-header'>	
			<h5 class='h5 '>我&她</h5>
		</div>
		<div class='love-con'>
			<div class='he'></div>
			<div class='love-msg'>
				——<span class='text-pink'></span>——<br /><p>&nbsp;</p>
			</div>
			<div class='she'></div>
			<div class='heart'>
				<blockquote class="blockquote text-left">
				<p class="mb-0"><span id='day'></span>天<span id='hour'></span>小时<span id='min'></span>分<span id='smt'></span>秒</p>
				<p class='text-right'>---For In Love</p>
				</blockquote>
			</div>
		</div>
	</div>
	<!-- 爱end -->
	<!-- 标签云 -->
		<div class='tag-cloud'>
			<div class='article-header'>

			    <h5 class='h5 '>热门标签</h5>
			</div>
			<div class='tag-con'>
	
				@foreach($tags as $tag)
				<a href="{{route('tags.show',[$tag->id])}}" class='tag-text' style='background: {{$tag->tag_color}}'>{{$tag->tag_name}}</a>
				@endforeach
		
			</div>		
		</div>
		<!-- 标签云end -->
		
			<!-- 最新评论 -->
			<div class='comments'>
				<div class='article-header'>
					
					<h5 class='h5 '>最新评论</h5>
				</div>
				<div class='comments-con'>
					<ul>
						@if(count($newcomments))
						@foreach($newcomments as $newcomment)
						<li><a href="{{route('articles.show',[$newcomment->id])}}">{{$newcomment->title}}</a>
							<p class='text-secondary'><span class='text-warning'>@热心网友：</span>{{$newcomment->content}}</p>
						</li>
						@endforeach
						@endif
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
						@if(count($hots))
						@foreach($hots as $hot)
						<li>
							<a href="{{route('articles.show',[$hot->id])}}">{{$hot->title}}</a>
							<p class='text-secondary'>阅读数&nbsp;{{$hot->visit_num}}</p>
						</li>
						@endforeach
						@endif
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

		<!-- 侧边内容end -->