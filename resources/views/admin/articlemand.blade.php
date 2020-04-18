<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">
    <title>文章添加</title>
  
  </head>
<body>
	<div class='container'>
		<div class='form-group row'>
			<label for='article_title' class='col-md-2 col-form-label'>文章标题</label>
			<input type="text" class='col-md-10 form-control'  name="article_title">
		</div>
		<div class='form-group row'>
			<label for='article_title' class='col-md-2 col-form-label'>分类栏目</label>
			<select class='form-control col-md-10'>
				<option value='1'>前端</option>
				<option value='2'>程序</option>
			</select>
		</div>
		<div class='form-group row'>
			<label for='article_tag' class='col-md-2 col-form-label'>文章标签</label>
			<select class='form-control col-md-10' name='article-tag'  multiple>
				<option value='1'>laravel</option>
				<option value='2'>php</option>
			</select>
		</div>
		<div class='form-group row'>
			<label for='article_tag' class='col-md-2 col-form-label'>关键词</label>
			<input type="text" class='col-md-10 form-control' name="article_tag">
 		</div>
 		<div class='form-group row'>
			<label for='article_part' class='col-md-2 col-form-label'>文章摘要</label>
			<!-- <input type="text" class='col-md-10 form-control' name="article_part"> -->
			<textarea class='form-control col-md-10' name='article_part' ></textarea>
 		</div>
 		<div class='form-group row'>
			<label for='article_part' class='col-md-2 col-form-label'>允许评论</label>
			<div class="col-sm-10">
		        <div class="form-check">
			        <input class="form-check-input" type="checkbox" name='comment' value='1' checked>
			       
		    	</div>
 			</div>
		</div> 
		<div class='form-group row'>
			<label for='article_part' class='col-md-2 col-form-label'>首页推荐</label>
			<div class="col-sm-10">
		        <div class="form-check">
			        <input class="form-check-input" type="checkbox" name='tuijian' value='1' checked>
			       
		    	</div>
 			</div>
		</div> 
		<div class='form-group row'>
			<label for='article_part' class='col-md-2 col-form-label'>封面图</label>
			<input type="file"  name="article_pic">
		</div>
		<div class='form-group'>
			<label for='article_con' class='col-md-2 col-form-label'>文章内容</label>
			<textarea id='text' name='article_con' ></textarea>
		
			<input type='button' value='取消' class='btn btn-secondary' name="">
			<input type="submit" value='确定' class='btn btn-info' name="">
		</div>
		<!-- 隐藏自定义图片上传 -->
		<input style="display:none" accept="image/gif,image/jpeg,image/jpg,image/png" type="file" id="upInput" ref="upInput">
<script src="https://cdn.jsdelivr.net/npm/jquery@1.12.4/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src='/admin/js/simplemde.min.js'></script>
<script type="text/javascript">

var simplemde = new SimpleMDE({ element: $("#text")[0] });
	
$('.fa-picture-o').click(function(){
	// break;
	SimpleMDE.prototype.drawImage = function() {
	
};
	// console.log('124')
	$('#upInput').click();
	var con = simplemde.value();
	simplemde.value(con+'123')
	
})
</script>
</body>
</html>