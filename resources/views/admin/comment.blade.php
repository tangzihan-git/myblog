@extends('admin.layouts.app')
@section('styles')
<link type="text/css" rel="stylesheet" href="/admin/css/calendar.min.css" />
@endsection
@section('content')
	<!-- 导航 -->
		<div class='row'>
		<!-- 左边菜单 -->
		@include('admin.layouts._aside')
		<div class='col-md-10 '>
		<div class='card mt-3'>
			<div class='card-body'>

				<div class='search '>
					<form  action="{{route('comments.index')}}" method='get' class='form-inline row mb-2'>
						<div class='form-group'>

							
							<select class='form-control' name='catename'>
								
								@foreach($cates as $cate)
								<option value="{{$cate->id}}" {{$catename==$cate->id?'selected':''}}>{{$cate->cate_name}}</option>

								@endforeach
							</select>

							<label for='date'>日期范围：</label>
							
							<input type="text" class='col-md-2 form-control date_input' calendar="YYYY-MM-DD" / name="startdate" placeholder="开始日期" value="{{$startdate}}">  
							  - <input type="text" class='col-md-2 form-control date_input' calendar="YYYY-MM-DD" / name="enddate" placeholder="结束日期" value="{{$enddate}}">&nbsp;
							  <input type="text" class='col-md-3 form-control' name="search" placeholder="指定文章评论" value="{{$title}}">&nbsp;
							<input type="submit" class='btn btn-success form-control' value='搜索' name="">
						</div>
					</form>
				</div>
				<a href="javascript:;" id='alldel' data-toggle="modal"  data-target="#del-modal" title='删除' class='btn btn-danger'>批量删除</a>
			</div>
		</div>
			<table  class="table table-hover table-bordered text-center icon mt-4 f-13">
				  <thead class='bg-theme'>
				    <tr>
				      <th><input type="checkbox" id='allcheck' name=""></th>
				      <th scope="col">序号</th>
				      <th scope="col">用户IP</th>
				      <th scope="col">评论文章</th>
				      <th scope="col">评论内容</th>
				      <th scope='col'>评论类型</th>
				      <th scope="col">评论状态</th>
				      <th scope="col">操作</th>
				    </tr>
				  </thead>
				  <tbody>
			
				  	@foreach($data as $v)
				    <tr>
				     <td><input type="checkbox" name="checkbox" data-id="{{$v->id}}"></td>
				     <td scope="row">{{$v->id}}</td>
				     <td>{{$v->user_ip}}</td>
					 <td  class='text-wrap w-25' >
						<a href="{{route('articles.show',[$v->article_id])}}">{{$v->title}}</a>
				     </td>
				     <td data-toggle="tooltip" data-placement="top" title='{{$v->content}}' class='usercon text-wrap w-25'>{{$v->content}}</td>
				     <td data-toggle="tooltip" data-placement="top" class='' title='父级id{{$v->parent_id}}'>{{$v->level}}级评论</td>
				     <td>
				     	@if($v->flag==1)
				     	<span class='bg-success status'>已回复</span>
				     	@else
				     	<span class='bg-danger status'>未回复</span>
				     </td>
				     	@endif
				     <td class='f-13'>
				      	<a href="javascript:;"  class='text-secondary singledel'data-toggle="modal"  data-target="#del-modal" title='删除'  data-id='{{$v->id}}'></a>
				      	&nbsp;<a href="javascript:;" class='text-secondary reply' data-toggle="modal"  data-target="#reply-modal" data-id='{{$v->id}}' title='回复'></a></td>
				    </tr>
				    @endforeach
				   
				  </tbody>
				  <caption>共有数据：{{$data->total()}}条</caption>
				</table>
				{{$data->links()}}
		   </div>
		</div>
	</div>
<!-- 栏目下架/删除模态 -->
<div class="modal fade" id="del-modal" data-backdrop="del-modal" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">信息</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
       <p>该操作不可逆，确定要执行吗？</p>
     
		<div class='mt-3 float-right'>
			<button type="button" class="btn btn-secondary" data-dismiss="modal">关闭</button>
        <button type="button" class="btn btn-primary sure" data-dismiss="modal">确定</button>
		</div>
        
    </div>
    </div>
  </div>
</div>
<!-- 留言模态 -->
<div class="modal fade" id="reply-modal" data-backdrop="reply-modal" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">回复留言</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<div class='form-group'>
      		<label class='col-form-control'>网友留言</label>
      		<input type="text" class='form-control showmessage' value='sdfsbrgrgerb' readonly name="">
      		<label class='col-form-label'>回复内容</label>
      		<input type="text" class='form-control replymessage' name="" id='replyCon'>
      	</div>
		<div class='mt-3 float-right'>
			<button type="button" class="btn btn-secondary" data-dismiss="modal">关闭</button>
            <button type="button" class="btn btn-primary sure" data-dismiss="modal">确定</button>
		</div>
    </div>
    </div>
  </div>
</div>
	<!-- 左边菜单end -->
	
@section('scripts')
<script src="http://code.jquery.com/jquery-migrate-1.2.1.js"></script>
<script type="text/javascript" src="/admin/js/calendar.min.js"></script>
<script type="text/javascript">



	var allcheck = $('#allcheck');
	var alldel = $('#alldel');
	var sure = $('.sure');
	var singledel = $('.singledel');
	var status = $('.status');
	var reply = $('.reply');//回复按钮
	var showmessage = $('.showmessage');
	var replymessage = $('.replymessage');
	// 全选
    allcheck.change(function(){
    	allcheck.is(':checked')?$(':checkbox').prop("checked", true):$(':checkbox').prop("checked", false)
    })
    //批量删除
    alldel.click(function(){
    	sure.click(function(){
    		
    		var ids = [];
    		$('[name="checkbox"]').each(function(i,e){
    			if($(e).is(':checked')){
    				// console.log($('[name="checkbox"]').data('id'))
    				ids[i]=$(e).data('id');//得到所有留言id
    			}
    			
    		
    		})
    	
    		$.ajax({
    			headers: {
			    		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					},
        		url:"{{route('comments.handle')}}",
        		type:'post',
        		dataType:'json',
        		data:{
        				"ids":ids,
        				'alldel':1
        		},
        		success:function(msg){

        				// console.log(msg)
        		}

    		})
    		$(':checked:not(#allcheck)').parent().parent().remove()
    	})
    	
    })
    // 单个删除
    singledel.each(function(i,e){

    	$(e).click(function(){
    	var that = $(this)
    	var id = $(this).data('id')
    	sure.click(function(){
    	    $.ajax({
        		headers: {
			    		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					},
        			url:"{{route('comments.handle')}}",
        			type:'post',
        			dataType:'json',
        			data:{
        				"statudel":id
        			},
        			success:function(msg){
        				console.log(msg)
        			}
        			
        	    })
    	   that.parent().parent().remove();
    	})
     })
    })
    //留言回复
    reply.each(function(i,e){
    	$(e).click(function(){
    		var that = $(this);
    		var id = $(this).data('id')

    		showmessage.val($(this).parent().parent().find('.usercon ').text().replace(/\s*/g,''));
    		sure.click(function(){
    			$.ajax({
        		headers: {
			    		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					},
        			url:"{{route('comments.handle')}}",
        			type:'post',
        			dataType:'json',
        			data:{
        				"content":replymessage.val(),
        				"id":id
        			},success:function(msg){
        				that.parent().parent().find('.status').removeClass('bg-danger').addClass('bg-success').text('已回复')
        			}
        	    })
    		})

    	})
    })

     $('[data-toggle="tooltip"]').tooltip()
    
</script>
@endsection
@endsection