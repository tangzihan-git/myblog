<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
     <meta name="csrf-token" content="{{csrf_token()}}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">
     @if($article->id)
    <title>文章编辑</title>
     @else
     <title>文章添加</title>
     @endif
  </head>
<body>
	<div class='container'>
		@if($article->id)
		<form action="{{route('articles.updated',$article->id)}}" id="form" method="post" enctype="multipart/form-data">

		@else
		<form action="{{route('articles.store')}}" id="form" method="post" enctype="multipart/form-data">
		@endif
		@csrf
		<div class='form-group row '>
			<label for='article_title' class='col-md-1 mt-2 col-form-label'>标题</label>
			<input type="text" class='col-md-9 form-control mt-2' value="{{$article->title}}" required placeholder="取个响亮的标题吧~" name="article_title">
			<input type="button" id='fabu' value='发布文章' data-toggle="modal"  data-target="#del-modal" class='btn btn-info ml-3 mt-2'>
		</div>
		<p class='text-danger'>【提示】由于技术问题，目前插入图片功能只能按照文章顺序插入，也就是您不能将光标定位到文字中间进行图片插入操作那样图片会直接插入到文章末尾</p>
	
			<div class='form-group'>
                <textarea id='text' name='article_con' value="" >{{$article->body}}</textarea>
            </div>
	
		<!-- 隐藏自定义图片上传 -->
		<input style="display:none" accept="image/gif,image/jpeg,image/jpg,image/png" type="file" name='articleimg' id="upInput" ref="upInput">
		<!-- 隐藏转换后的html代码 -->
		<input type="hidden" id='html' name="">
		<!-- 隐藏弹出模态框按钮 -->
	</div>
	<!-- 模态框 -->
	<div class="modal fade mt-0" id="del-modal" data-backdrop="del-modal" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="staticBackdropLabel">信息</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	      	<div class='form-group row'>
				<label for='article_title' class='col-md-2 col-form-label'>分类</label>
				<select class='form-control col-md-10' name="article_cate">
					@foreach($cates as $cate)
					<option value='{{$cate->id}}' {{$article->cate_id==$cate->id?'selected':''}}>{{$cate->cate_name}}</option>
					@endforeach
				</select>
			</div>
			<div class='form-group row'>
				<label for='article_tag' class='col-md-2 col-form-label'>标签</label>
				<select class='form-control col-md-10' name='article_tag[]'  multiple="multiple" >
					@foreach($tags as $tag)
					<option value='{{$tag->id}}' >{{$tag->tag_name}}</option>
					@endforeach
				</select>
				<label class='col-md-1'></label>
				<small class='text-info col-md-10'>【提示】您可以选择标签列表或者自定义文章标签如 ”美文，随笔等“</small>
			</div>
			<div class='form-group row'>
				<label for='article_tag' class='col-md-3 col-form-label'>定义标签</label>
				<input type="text" class='col-md-9 form-control'placeholder="以英文状态下的逗号分隔" name="article_self_tag">
	 		</div>
	 		<div class='form-group row'>
				<label for='article_part' class='col-md-2 col-form-label'>摘要</label>
				<!-- <input type="text" class='col-md-10 form-control' name="article_part"> -->
				<textarea class='form-control col-md-10' name='article_part' placeholder="从你的文章中选出一段，或者不写程序自动生成"></textarea>
	 		</div>
	 		<div class='form-group row'>
				<label for='article_part' class='col-md-2 col-form-label'>评论</label>

				<div class="col-sm-10">
			        <div class="form-check">
				        <input class="form-check-input" type="checkbox" name='comment' value='1' checked>
				      <small class='text-info'>设置文章是否允许评论</small>
	 
			    	</div>
	 			</div>
			</div> 
			<div class='form-group row'>
				<label for='article_part' class='col-md-2 col-form-label'>推荐</label>
				<div class="col-sm-10">
			        <div class="form-check">
				        <input class="form-check-input" type="checkbox" name='tuijian' value='1' checked>
				       <small class='text-info'>是否让文章展示在首页推荐</small>
			    	</div>
	 			</div>
			</div> 
			<div class='form-group row'>
				<label for='article_part' class='col-md-2 col-form-label'>封面图</label>

				<input type="file"  name="article_pic">
			</div>
				<small class='text-info'>为了增加用户体验，我们鼓励您上传封面图，如果不上传程序将自动生成</small>
			<div class='mt-3 float-right'>
				<button type="button" class="btn btn-secondary" data-dismiss="modal">重新编辑</button>
	            <button type="submit" class="btn btn-primary sure">确定</button>
			</div>
	        
	    </div>
	    </div>
	  </div>
	</div>
</form>
	<!-- 警告 -->

<script src="https://cdn.jsdelivr.net/npm/jquery@1.12.4/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"></script>
<script src="/admin/js/simplemde.min.js"></script>
<script src="https://cdn.bootcss.com/showdown/1.3.0/showdown.min.js"></script>
  <script type="text/javascript">
  	$(function(){
  			var simplemde = new SimpleMDE({ element: $("#text")[0] });
	
$('.fa-picture-o').click(function(){
	// break;
	SimpleMDE.prototype.drawImage = function() {
	
};
	// console.log('124')
	$('#upInput').click();
	var con = simplemde.value();
	
	//当用户选择完图片后发送ajax实现文件上传
	$('#upInput').change(function(e){
		// console.log(getPosition(e));
		// return false;

		var formData = new FormData($('#form')[0])
		$.ajax({
			type:'post',
			url:'{{route("articles.upimg")}}',
			data:formData,
			cache:false,
			processData:false,
			contentType:false,
			success:function(msg){
				console.log(msg)
				simplemde.value(con+"![]("+msg+")")

			}
		})
	})	
})


 	})

   </script>
