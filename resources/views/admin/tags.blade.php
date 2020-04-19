@extends('admin.layouts.app')
@section('styles')
<link rel="stylesheet" href="/admin/css/jquery.minicolors.css"/>
@endsection
@section('content')
	<!-- 导航 -->
		<div class='row'>
		<!-- 左边菜单 -->
		@include('admin.layouts._aside')
		<div class='col-md-10 '>
		<div class='card mt-3'>
			<div class='card-body'>
				<a href="javascript:;" id='alldel' data-toggle="modal"  data-target="#del-modal" title='删除' class='btn btn-danger'>批量删除</a>

				<a href="javascript:;" class='btn btn-info' data-toggle="modal" data-target="#exampleModal">添加</a>
			</div>
		</div>
		<table  class="table table-hover table-bordered text-center icon mt-4 f-13">
				  <thead class='bg-theme'>
				    <tr>
				      <th><input type="checkbox" id='allcheck' name=""></th>
				      <th scope="col">序号</th>
				      <th scope="col">名称</th>
				      <th scope='col'>标签颜色</th>
				      <th scope='col'>状态</th>
				      <th scope="col">添加时间</th>
				      <th scope="col">操作</th>
				    </tr>
				  </thead>
				  <tbody>
				  	@foreach($data as $v)
				    <tr>
				     <td><input type="checkbox" name="checkbox" data-id="{{$v->id}}"></td>
				     <td scope="row">{{$v->id}}</td>
				     <td class='usercon'>{{$v->tag_name}}</td>
					<td>

						<input type="text" id="hue-demo" class="demo chosecolor" data-id="{{$v->id}}" data-control="hue" value="{{$v->tag_color}}">
					</td>
					 <td>
				     	@if($v->tag_status)
				     	<span class='bg-success status'>正常</span>
				     	@else
				     	<span class='bg-secondary status'>下架</span></td>
				     	@endif
				     <td>{{$v->created_at}}</td>
				    
				     <td class='f-13'>
				     	<a href="javascript:;" class='text-secondary huifu'  data-id='{{$v->id}}' title='恢复'></a>&nbsp;
				      	<a href="javascript:;"  class='text-secondary singledel'data-toggle="modal"  data-target="#del-modal" title='删除'  data-id='{{$v->id}}'></a>
				      	&nbsp;<a href="javascript:;" class='text-secondary reply' data-toggle="modal"  data-target="#reply-modal" data-id='{{$v->id}}' title='编辑'></a></td>
				    </tr>
				    @endforeach
				   
				  </tbody>
				  <caption>共有数据：{{$data->total()}}条</caption>
				</table>
				{{$data->links()}}
		<!-- </div> -->
		
		   </div>
		</div>
	</div>
	<!-- 左边菜单end -->
	<!-- 模态框 -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
<div class="modal-content">
  <div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">添加标签</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="modal-body">
    <form action="{{route('tags.add')}}" method="post">
    	@csrf
    	<label for='tag_name'>标签名</label>
    	<input type="text" class='form-control' name="tag_name">
    	<label>颜色</label>
    	<input type="text" id="hue-demo" class="demo" name="tag_color" data-control="hue" value="#ff6161">
    	<input type="hidden" name="statuadd" value='1'>
  
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
    <button type="submit" class="btn btn-primary">保存</button>
      </form>
  </div>
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
      		<label class='col-form-control'>标签名</label>
      		<input type="text" class='form-control showmessage' value='sdfsbrgrgerb' readonly name="">
      		<label class='col-form-label'>更改内容</label>
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
@section('scripts')
<script src="/admin/js/jquery.minicolors.min.js"></script>
<script type="text/javascript">
$(function(){

	
	var allcheck = $('#allcheck');
	var alldel = $('#alldel');
	var sure = $('.sure');
	var singledel = $('.singledel');
	var status = $('.status');
	var reply = $('.reply');//回复按钮
	var huifu = $('.huifu');
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
        		url:"{{route('tags.store')}}",
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
        			url:"{{route('tags.store')}}",
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
    //修改
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
        			url:"{{route('tags.store')}}",
        			type:'post',
        			dataType:'json',
        			data:{
        				"content":replymessage.val(),
        				"id":id
        			}
        	    })
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
        			url:"{{route('tags.store')}}",
        			type:'post',
        			dataType:'json',
        			data:{
        				"change":1,
        				"status":status,
        				"id":id
        			}
        	})

    	})
    })

     $('[data-toggle="tooltip"]').tooltip()
      $('.demo').each( function() {
                //
                // Dear reader, it's actually very easy to initialize MiniColors. For example:
                //
                //  $(selector).minicolors();
                //
                // The way I've done it below is just for the demo, so don't get confused 
                // by it. Also, data- attributes aren't supported at this time. Again, 
                // they're only used for the purposes of this demo.
                //
				$(this).minicolors({
					control: $(this).attr('data-control') || 'hue',
					defaultValue: $(this).attr('data-defaultValue') || '',
					inline: $(this).attr('data-inline') === 'true',
					letterCase: $(this).attr('data-letterCase') || 'lowercase',
					opacity: $(this).attr('data-opacity'),
					position: $(this).attr('data-position') || 'bottom left',
					change: function(hex, opacity) {
						var log;
						try {
							log = hex ? hex : 'transparent';
							if( opacity ) log += ', ' + opacity;
							// console.log(log);
						} catch(e) {}
					},
					theme: 'default'
				});
                
            });
      $('.chosecolor').change(function(){
      	// console.log($(this).data('id'))
      	var that = $(this);
      	$.ajax({
        	headers: {
			    		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			},
        	url:"{{route('tags.store')}}",
        	type:'post',
            dataType:'json',
        	data:{
        		"color":that.val(),
        		"id":that.data('id')
        	}
        })
      })
			
});	
</script>
@endsection
@endsection

