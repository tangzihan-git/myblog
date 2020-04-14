@extends('layouts.app')
@section('title','唐子涵的个人博客')
@section('description','唐子涵的个人博客')
@section('keywords','博客','个人博客','博客模板','个人站')
@section('content')
<div class='row'>
		<div class='col-md-9 col-sm-12'>
			<div class='beau mr-30'>
				<div class='article-header'>
					<span class='float-right'>
						一个人，一座城
					</span>
					<h5 class='h5'>美文</h5>
			    </div>
			    <div  class='beau-con mr-con'>
					<div class='row'>
						<div class='col-md-4 col-sm-6'>
							<div class="card" style="width: 18rem;margin-bottom: 10px;border:1px solid #eee">
								<div class='card-img'>
									 <img src="E:\myfile\W  Z   Y\图片\-60991a87b114a407_看图王.jpg" class="card-img-top" alt="...">
								</div>
							 
							  <div class="card-body">
							  	<strong class='card-title'>【苹果新系统】苹果推送 </strong>
							    <p class="card-text">
							    苹果推送了macos mojave正式版（下文统一称为苹果新系统），作为苹果最新的系统安装版，如何进行安装更新....</p>

							      <a href="#" class="text-success mt-2 d-block">+阅读原文</a>
							  </div>

							</div>
					</div>
					<div class='col-md-4 col-sm-6'>
							<div class="card" style="width: 18rem;">
								<div class='card-img'>
									 <img src="E:\myfile\W  Z   Y\图片\-60991a87b114a407_看图王.jpg" class="card-img-top" alt="...">
								</div>
							 
							  <div class="card-body">
							  	<strong class='card-title'>【苹果新系统】苹果推送 </strong>
							    <p class="card-text">
							    苹果推送了macos mojave正式版（下文统一称为苹果新系统），作为苹果最新的系统安装版，如何进行安装更新....</p>

							      <a href="#" class="text-success mt-2 d-block">+阅读原文</a>
							  </div>

							</div>
					</div>
			
					</div>
			    	
			    </div>
		    </div>
		</div>
	    @include('layouts._aside')
	</div>
@endsection
</body>
</html>
