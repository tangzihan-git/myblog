@extends('admin.layouts.app')
@section('content')
	<!-- 导航 -->
		<div class='row'>
		<!-- 左边菜单 -->
		@include('admin.layouts._aside')
			<div class='col-md-10 '>
		    	<div class='card mt-3'>
		    		<div class='card-body'>
		    			<div class='search '>
		    				<form class='form-inline row mb-2'>
		    					
		    				</form>
		    			</div>
		    			<a href="#" id='alldel' class='btn btn-danger text-light' data-toggle="modal" data-target="#del-modal">批量删除</a>&nbsp;
		    			<a href="#" class='btn btn-info text-light' data-toggle="modal" data-target="#staticBackdrop">添加栏目</a>
		  

		    		</div>
		    	</div>

		    	<table class="table table-hover table-bordered text-center mt-4 f-13  icon">
				  <thead class='bg-theme'>
				    <tr>
				      <th><input type="checkbox" id='allcheck' name=""></th>
				      <th scope="col">序号</th>
				      <th scope="col">栏目名称</th>
				      <th scope='col'>总浏览次数</th>
				      <th scope='col'>排序</th>
				      <th scope='col'>发布状态</th>
				      <th scope="col">更新时间</th>
				      <th>操作</th>
				    </tr>
				  </thead>
				  <tbody>
				    <tr>
				      <td><input type="checkbox" name=""></td>
				      <td scope="row">1</td>
				      <td><a href="#">前端</a></td>
				      <td>10000</td>
				      <td>1</td>
				      <td><span class='bg-danger status'>下架</span></td>
				      <td>2020-9-8</td>
				      <td class='f-13'><a href="javascript:void(0)" class='text-secondary huifu' flag='0' title='恢复'></a>&nbsp;<a href="javascript:void(0)" class='text-secondary singledel' title='删除' data-toggle="modal"  data-target="#del-modal"></a>&nbsp;<a href="javascript:void(0)" class='text-secondary' title='重命名'></a></td>
				    </tr>
				     <tr>
				      <td><input type="checkbox" name=""></td>
				      <td scope="row">1</td>
				      <td><a href="#">前端</a></td>
				      <td>10000</td>
				      <td>1</td>
				      <td><span class='bg-success status'>正常</span></td>
				      <td>2020-9-8</td>
				      <td class='f-13'><a href="javascript:void(0)" class='text-secondary huifu' flag='1' title='恢复'></a>&nbsp;<a href="javascript:void(0)" class='text-secondary singledel' title='删除' data-toggle="modal"  data-target="#del-modal"></a>&nbsp;<a href="javascript:void(0)" class='text-secondary' title='重命名'></a></td>
				    </tr>
				     <tr>
				      <td><input type="checkbox" name=""></td>
				      <td scope="row">1</td>
				      <td><a href="#">前端</a></td>
				      <td>10000</td>
				      <td>1</td>
				      <td><span class='bg-danger status'>下架</span></td>
				      <td>2020-9-8</td>
				      <td class='f-13'><a href="javascript:void(0)" class='text-secondary huifu' title='恢复'></a>&nbsp;<a href="javascript:void(0)" class='text-secondary singledel' title='删除' data-toggle="modal"  data-target="#del-modal"></a>&nbsp;<a href="javascript:void(0)" class='text-secondary' title='重命名'></a></td>
				    </tr>
				      

				  </tbody>
				  <caption>共有数据：45条</caption>
				</table>
		    		
		    	<!-- </div> -->
		    	
		   </div>
		</div>
	</div>
	<!-- 模态框 -->
	 <!-- 栏目添加/编辑模态 -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">栏目添加</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <form>
        	<div class='form-group row'>
        		<label for='catename' class='col-md-2 col-form-label'>名称</label>
        		<input type="text" class='form-control col' name="">
        	</div>
        	<div class='form-group row'>
        		<label class='col-md-2 col-form-label'>排序</label>
        		<select class='form-control col'>
        			<option vlaue='1'>1</option>
        			<option value='2'>2</option>
        		</select>
        	</div>
        	<div class='form-group row'>
        		<label class='col-md-2 col-form-label'>上架
        		<input type="checkbox" class='' name=""></label>
        	</div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">关闭</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">确定</button>
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
        <button type="button" class="btn btn-primary" id='sure' data-dismiss="modal">确定</button>
		</div>
        
    </div>
    </div>
  </div>
</div>
	<!-- 左边菜单end -->
@section('scripts')
<script type="text/javascript" src='/admin/js/main.js'></script>
<script>
    var allcheck = $('#allcheck');
	var alldel = $('#alldel');
	var sure = $('#sure');
	var singledel = $('.singledel');
	var huifu = $('.huifu');
	var status = $('.status');
	// 全选
    allcheck.change(function(){
    	allcheck.is(':checked')?$(':checkbox').prop("checked", true):$(':checkbox').prop("checked", false)
    })
    //批量删除
    alldel.click(function(){
    	sure.click(function(){
    		$(':checked:not(#allcheck)').parent().parent().remove()
    	})
    	
    })
    // 单个删除
    singledel.each(function(i,e){
    	$(e).click(function(){
    	var that = $(this)
    	sure.click(function(){
    	that.parent().parent().remove();
    	})
     })
    })
    // 下架与上架
    huifu.each(function(i,e){
    	$(e).click(function(){
    		// console.log(i)
    		// $(this).attr('flag')==0?console.log('123'):console.log('32')
    		if($(this).attr('flag')==0){
    			$(this).attr('flag',1);
    			$($('.status')[i]).addClass('bg-success').removeClass('bg-danger').text('正常')
    		}else{
    			$(this).attr('flag',0);
    			$($('.status')[i]).addClass('bg-danger').removeClass('bg-success').text('下架')
    		}

    	})
    })
</script>
@endsection
@endsection
