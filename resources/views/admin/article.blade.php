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
		    				<form  action="{{route('articles.index')}}" method='get' class='form-inline row mb-2'>
						<div class='form-group'>

							
							<select class='form-control' name='catename'>
								
								@foreach($cates as $cate)
								<option value="{{$cate->id}}" {{$catename==$cate->id?'selected':''}}>{{$cate->cate_name}}</option>

								@endforeach
							</select>

							<label for='date'>日期范围：</label>
							
							<input type="text" class='col-md-2 form-control date_input' calendar="YYYY-MM-DD" / name="startdate" placeholder="开始日期" value="{{$startdate}}">  
							  - <input type="text" class='col-md-2 form-control date_input' calendar="YYYY-MM-DD" / name="enddate" placeholder="结束日期" value="{{$enddate}}">&nbsp;
							  <input type="text" class='col-md-3 form-control' name="search" placeholder="搜索文章" value="{{$title}}">&nbsp;
							<input type="submit" class='btn btn-success form-control' value='搜索' name="">
						</div>
					</form>
		    			</div>
		    		<a href="javascript:;" id='alldel' data-toggle="modal"  data-target="#del-modal" title='删除' class='btn btn-danger'>批量删除</a>
		    			<a href="{{route('articles.create')}}" class='btn btn-info text-light'>添加文章</a>


		    		</div>
		    	</div>

		    	<table class="table table-hover table-bordered text-center icon mt-4 f-13">
				  <thead class='bg-theme'>
				    <tr>
				      <th><input type="checkbox" id='allcheck' name=""></th>
				      <th scope="col">序号</th>
				      <th scope="col">文章标题</th>
				      <th scope='col'>所属栏目</th>
				      <th scope='col'>作者</th>
				      <th scope="col">封面图</th>
				      <th scope='col'>发布状态</th>
				      <th scope="col">更新时间</th>
				      <th>操作</th>
				    </tr>
				  </thead>
				  <tbody>
				  	@foreach($data as $v)
				    <tr>
				      <td><input type="checkbox" data-id="{{$v->id}}" name="checkbox"></td>
				      <td scope="row">{{$v->id}}</td>
				  
				      <td data-toggle="tooltip" data-placement="top" title='{{$v->content}}' class=' text-wrap w-25'>
				      	<a href="{{route('articles.show',[$v->id])}}">{{$v->title}}</a>
				      </td>
				      <td>{{$v->cate->cate_name}}</td>
				      <td>{{$v->user->name}}</td>
				      <td><img src="{{$v->img}}" width="90" height="50"></td>
		
				      <td>
				      	@if($v->status==1)
				      	<span class='bg-success status'>正常</span>
				      	@else
				      	<span class='bg-secondary status'>下架</span>
				      	@endif
				      </td>
				      <td>{{date('Y-m-d',strtotime($v->created_at))}}</td>
				     
				      	 <td class='f-13'>
				     	<a href="javascript:;" class='text-secondary huifu'  data-id='{{$v->id}}' title='恢复'></a>&nbsp;
				      	<a href="javascript:;"  class='text-secondary singledel'data-toggle="modal"  data-target="#del-modal" title='删除'  data-id='{{$v->id}}'></a>
				      	&nbsp;<a href="javascript:;" class='text-secondary reply' data-toggle="modal"  data-target="#reply-modal" data-id='{{$v->id}}' title='编辑'></a></td>
				    
				    </tr>
				    @endforeach
				     

				  </tbody>
				  <caption>共有数据：45条</caption>
				</table>
				{{$data->links()}}
		    		
		    
		    	
		   </div>
		</div>
	</div>
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

	<!-- 左边菜单end -->
@section('scripts')
<script type="text/javascript" src="/admin/js/calendar.min.js"></script>
<script type="text/javascript">
	var allcheck = $('#allcheck');
	var alldel = $('#alldel');
	var sure = $('.sure');
	var singledel = $('.singledel');
	var status = $('.status');
	var huifu= $('.huifu');
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
    		// console.log(ids);
    		// return false;
    	
    		$.ajax({
    			headers: {
			    		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					},
        		url:"{{route('articles.desmany')}}",
        		type:'post',
        		dataType:'json',
        		data:{
        				"ids":ids,
        				'alldel':1
        		},
        		success:function(msg){

        				console.log(msg)
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
        		url:"/articles/"+id,
        		type:'DELETE',
        		dataType:'json',
        		data:{
        			
        		},
        		success:function(msg){
        			console.log(msg)
        		}
        			
        	    })
    	   that.parent().parent().remove();
    	})
     })
    })
        //上架与下架
     huifu.each(function(i,e){
     	var that = $(this);
    	var id = $(this).data('id')
    	$(e).click(function(){
    		// console.log(i)
    		// $(this).attr('flag')==0?console.log('123'):console.log('32')
            
    		if($(this).attr('flag')==0){
    			$(this).attr('flag',1);
    			$($('.status')[i]).addClass('bg-success').removeClass('bg-danger').text('正常')
    		}else{
    			$(this).attr('flag',0);
    			$($('.status')[i]).addClass('bg-secondary').removeClass('bg-success').text('下架')
    		}
    		var status =  $(this).attr('flag');
    		$.ajax({
        		headers: {
			    		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					},
        			url:"/articles/"+id,
        			type:'PATCH',
        			dataType:'json',
        			data:{
        				"change":1,
        				"status":status
        			},success:function(msg){console.log(msg)}
        	})

    	})
    })
 

     $('[data-toggle="tooltip"]').tooltip()
</script>
@endsection
@endsection
